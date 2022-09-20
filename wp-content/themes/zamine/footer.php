  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/flexslider.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/jquery.flexslider.js"></script>
   <footer class="footer py-5">
      <!--div class="container"-->
	  <div class="d-flex w100 flex-wrap justify-content-center">
      <div class="wrapper pt-2 p-5 px-3">
        <div class="row">
          <div class="col-md-12 col-lg-3 mb-5 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-fluid">
          </div>
          <div class="col-md-12 col-lg-3 mb-5">
            <div class="footer-menu row">
              <div class="col-md-6 col-lg-12">
                <ul class="list">
                  <li>
                    <a href="<?php echo home_url('bolsa'); ?>">
                      <img src="<?php echo get_template_directory_uri(); ?>/icons/bolsa.webp">
                      <span style="font-size: 20px">Trabaja con nosotros</span>
                    </a>
                  </li>
                  <li class="d-none">
                    <a href="<?php echo home_url('comprobantes'); ?>">
                      <img src="<?php echo get_template_directory_uri(); ?>/icons/comprobantes.png">
                      <span style="font-size: 20px">Ver comprobantes<br>de pago</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo home_url('contactanos'); ?>">
                      <img src="<?php echo get_template_directory_uri(); ?>/icons/phone-3.png">
                      <span style="font-size: 20px">Contáctanos</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-12">
                <div class="follow-menu">
                  <a><span class="title">SIGUENOS EN:</span></a>
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/zamineperu/" target="_blank" role="button">
                  <i class="fab fa-facebook-f"></i></a>
                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://linkedin.com/company/zamine-service-peru-sac" target="_blank" role="button">
                  <i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="title mb-3">SEDES:</div>
            <div class="bold text-uppercase pl-md-2">COMERCIAL Y ADMINISTRATIVA</div>
            <div class="text pl-md-2">
              <strong>Dirección: </strong>Av. La Encalada N° 1420 – Edifico Polo Hunt II <br>
				Oficina 801, Surco, Lima 15023<br>
              <strong>E-mail: </strong>mineria@zamineperu.com<br>
             ventas@zamineperu.com<br>
              <strong>Horario: </strong>Lun – Vie: 8:00 am – 06:00 pm
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="bold text-uppercase mt-5">Centro de operaciones</div>
            <div class="text">
              <strong>Dirección: </strong>Ca. Martir Olaya Mz. G Lte. 11 Urb. Huertos de <br>
			  Santa Genoveva, Lurín, Lima <br>
                          <strong>E-mail: </strong>operaciones@zamineperu.com<br>
              <strong>Horario: </strong>Lun – Jue: 7:00 am – 05:00 pm <br>
				Vie: 7:00 am – 03:00 pm
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
      <div class="copyright text-center pt-3">
        <div>
          <a href="<?php echo home_url('politicas'); ?>">Política de Privacidad</a> | <a href="<?php echo home_url('terminos'); ?>">Términos y Condiciones</a>
        </div>
        <div class="text-orange">Copyright © ZAMINE PERÚ. Todos los derechos reservados.</div>
      </div>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="<?php echo get_template_directory_uri(); ?>/libs/js/jquery-3.5.1.min.js" ></script>-->
    <script  src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/libs/js/bootstrap.min.js" defer></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js" defer></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>
    <?php wp_footer(); ?>
  </body>
</html>