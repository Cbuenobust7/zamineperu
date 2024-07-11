<?php get_header(); ?>
<div class="page-contact">

  <div class="banner banner-2">
    <div class="container">
     
    </div>
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>">
    <div class="overlay">
      <?php the_title( '<h1>', '</h1>' ); ?>
    </div>
  </div>

  <div class="wrapper py-5">
    <div class="container-fluid">
      <div class="row col-md-10 mx-auto">
        <div class="col-lg-5">
          <div class="bar bar--orange my-4"></div>
          <h2 class="subtitle-orange">Escríbenos</h2>
          <p>Envíenos sus consultas y nos pondremos en<br>contacto contigo</p>
          <form class="pr-md-5 contact-form" autocomplete="off">
            <div class="form-group">
              <div class="form-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/user.png">
              </div>
              <input type="text" name="name" placeholder="Nombres y Apellidos" class="form-control">
            </div>
            <div class="form-group">
              <div class="form-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/email.png">
              </div>
              <input type="email" name="email" placeholder="E-mail" class="form-control">
            </div>
            <div class="form-group">
              <div class="form-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/phone-2.png">
              </div>
              <input type="text" name="phone" placeholder="Teléfono" class="form-control">
            </div>
            <div class="form-group">
              <div class="form-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/quill.png">
              </div>
              <input type="text" name="title" placeholder="Asunto" class="form-control">
            </div> 
            <div class="form-group">
              <div class="form-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/paper-plane.png">
              </div>
              <textarea class="form-control" name="mensaje" placeholder="Mensaje"></textarea>
            </div> 
            <div class="form-checkbox">
              
              <input type="checkbox" name="terms" id="terms">
              <label for="terms">
                Acepto los <a href="terminos">términos y condiciones</a>
              </label>
            </div>
            <button class="btn btn-orange px-5 py-2 mt-4">Enviar</button>
          </form>
        </div>
        <div class="col-lg-7 pt-5 pr-lg-0">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img2.png" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <div class="locals d-none">
    <div class="wrapper py-5">
      <div class="container-fluid">
        <div class="bar bar--orange my-4"></div>
        <h2 class="subtitle-orange">Locales</h2>

        <div class="row">
          <div class="col-lg-4">
            <p class="color-orange ml-md-3">+ OFICINA ADMINISTRATIVA<br>Y COMERCIAL</p>
          </div>
          <div class="col-lg-4">
            <h6 class="color-orange">Dirección:</h6>
            <div class="contact-details">Av. La Encalada Nro. 1420 Edifico Polo Hunt II<br>Oficina 801 - Surco, Lima – Perú</div>
            <h6 class="color-orange">Teléfono:</h6>
            <div class="contact-details">+51 (01) 4365442 – Anexo 105</div>
            <h6 class="color-orange">E-mail:</h6>
            <div class="contact-details">ventas@ciem-demo6.com<br>cotizaciones@ciem-demo6.com</div>
            <h6 class="color-orange">Horario:</h6>
            <div class="contact-details">Lun – Vie: 8:00 – 18:00</div>
          </div>
          <div class="col-lg-4">
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>