<style>
     #irarriba{
       
        width: 100%;
    }
 
    .video-button {
      text-align: left;
      margin-left: 0;
      margin-right: 0;
      width: 100%;
      font-size: 14px;
    }
  </style>


            </div>
          
          <div class="col-md-8 pt-4" style="background: #fff; border-bottom: 1px solid #fff;">
              <div id="listaItems" class="row-products d-flex justify-content-center"></div>
          </div>
        </div>
      </div>
      </div>
    </div>
  
  
  </div>
 
  <script>
    jQuery(document).ready(function() {
      jQuery('.my-nav2').mgaccordion({
        theme: 'tree',
        leaveOpen: false
      });
  
  
    });
  
    function buildVideoList() {
      const $modals = document.querySelectorAll(".modal-video");
      const $video_list = document.querySelector(".video-list");
      const $video_container = document.getElementById("videos-list-container");
  
      $video_list.innerHTML = "";
      $video_container.classList.add("d-none");
  
      if ($modals.length <= 0) {
        return;
      }
  
      const $li_items = document.createDocumentFragment();
  
      $modals.forEach((element) => {
        const $button = document.createElement("button");
        const $li = document.createElement("li");
  
        let name = element.getAttribute("data-name");
  
        $button.setAttribute("data-target", "#" + element.id);
        $button.setAttribute("data-toggle", "modal");
        $button.classList.add("btn", "btn-video", "video-button");
        $button.textContent = name;
  
        $li.classList.add("video-item");
        $li.appendChild($button);
  
        $li_items.appendChild($li);
      });
  
      $video_list.appendChild($li_items);
      $video_container.classList.remove('d-none');
    }
  
    function setActive(e, ev) {
      var elms = document.querySelectorAll('.my-nav2 li a');
      // reset all you menu items
      for (var i = 0, len = elms.length; i < len; i++) {
        elms[i].classList.remove('active');
      }
      //console.log(ev.target);
      if (ev.target.localName == "a")
        ev.target.classList.add("active");
  
      var categoy_slug = ev.target.getAttribute('data-slug');
      var category_id = ev.target.getAttribute('data-catid');
  
      $.ajax({
        type: 'POST',
        url: '/wp-admin/admin-ajax.php',
        dataType: 'html',
        data: {
          action: 'filter_projects',
          category: categoy_slug,
          category_id: category_id,
          post_type: 'soluciones-perfo',
          taxonomy: 'soluci_perf_categ',
        },
        success: function(res) {
          $('#listaItems').html(res);
          buildVideoList();
        }
      })
    }
  
    function loadData(e, ev) {
      console.log(ev.target);
      var categoy_slug = ev.target.getAttribute('data-slug');
      var category_id = ev.target.getAttribute('data-catid');
  
      $.ajax({
        type: 'POST',
        url: '/wp-admin/admin-ajax.php',
        dataType: 'html',
        data: {
          action: 'filter_projects',
          category: categoy_slug,
          category_id: category_id,
          post_type: 'soluciones-perfo',
          taxonomy: 'soluci_perf_categ',
        },
        success: function(res) {
          $('#listaItems').html(res);
          buildVideoList();
          jQuery('.flexslider').flexslider({
            animation: "slide"
          });
        }
      })
    }
  
    $('.products--list li a').on('click', function() {
      var $this = $(this),
        $bc = $('<li class="breadcrumb-item active"></li>');
      if ($('.breadcrumb li').length < 3) {
        var title_page = $('.breadcrumb .active').text();
        $('.breadcrumb .active').html(`<a href='#'>${title_page}</a>`);
        $('.breadcrumb .active').removeClass("active");
      }
      $('.breadcrumb .active').remove();
  
      $this.parents('li').each(function(n, li) {
          var $a = $(li).children('a').clone();
          $bc.prepend($a.text());
      });
      $('.breadcrumb').append( $bc );
    })
  
    $(".products--list li a").first().click()
  

    $(function(){
        
        $("#irarriba").on("click", function(e){
            e.preventDefault();
            $("html, body").animate({
                scrollTop: 320
            }, 500); 
        });
    });
  </script>