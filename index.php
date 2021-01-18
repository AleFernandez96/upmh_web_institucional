<!DOCTYPE html>
<?php include_once('head.php') ?>

<style type="text/css" media="screen">
  /* .avisos-title { background-color: red; } */
  .avisos-title hr { border: 2px solid #e6e6e6; height: 0; width: 90%; margin-left: 20px;}


.flex-direction-nav .flex-next, .flex-prev {
    color: #fff !important;
    border-radius: 50% !important;
    background-color: #593078 !important;
    padding: 4px !important;
    line-height: 35px !important;
}

.flex-control-paging li a {
  width: 17px !important;
  height: 5px !important;
}
</style>

<body id="body">

	<?php include_once('accesibilidad-header.php') ?>

	<!-- Sección home -->
	<section id="inicio" class="d-flex align-items-center text-center">
	    <div class="container">
	      	<div class="row">
	        	<div class="col-lg-12 col-md-12 inicio-info d-flex justify-content-center">
             <!--  <h4 class="f-w-3">Bilingüe  Internacional  Sustentable</h4>
		        	<h2 class="f-w-4">UNIVERSIDAD POLITÉCNICA METROPOLITANA DE HIDALGO</h2> -->
	            <div class="div-bg-purple">
                <a href="<?php getItemUrl('admision') ?>" class="btn btn-bg-border-purple f-w-1">Iniciar admisión</a> 
              </div>
              <div class="div-bg-purple d-none d-sm-block">
                <a href="<?php getItemUrl('mi_universidad_en_casa_upmh') ?>" class="btn btn-bg-border-purple f-w-1">Mi Universidad en Casa</a>
              </div>
	        	</div>
            <div class="col-lg-12">
              <h5 class="f-w-2 mt-3" style="color: #fff; font-size: 120%;">
                12 años formando líderes competentes con conocimientos y habilidades que les permitan enfrentarse al mundo laboral.
              </h5>
            </div>
	      	</div>
	    </div>
	</section>
	<!-- Termina home -->


	<section class="pt bg-color-2">
    <div class="container">
      <header class="section-header">
        <h3>Comunicación Social</h3>
      </header>
			<div class="row">
        <div class="col-lg-12">
          <?php
          if (!isset($_IFRAME_)) {
            $_IFRAME_ = FALSE;
          }
          if (!$_IFRAME_):
        ?>
     
        <?php 
          if (isset($_CONTENIDO_)):
            echo $_CONTENIDO_;
            else:
              require_once($_PAGINA_);
          endif;
        ?>  

        <?php
          foreach (AppResources::getCss() as $css):?>
            <link href="<?php getItemUrl($css)?>" rel="stylesheet" type="text/css" />
        <?php endforeach;?>

        <?php else: ?>
          <iframe width="605" height="680" name="upmh" allowtransparency="true"  src="<?php echo $_PAGINA_;?>"  frameborder=0 ></iframe>
        <?php endif;?>
        </div>
      </div>
    </div>
	</section>

  <section id="cya">
    <div class="container">
      <!-- <header class="section-header">
        <h3>Certificaciones y Acreditaciones</h3>
      </header> -->
      <div class="row">
        <div class="col-lg-4 d-flex align-items-center text-center">
          <h4 class="f-w-3"> CERTIFICACIONES Y ACREDITACIONES</h4>
        </div>
        <div class="col-lg-8">
          <center>
             <img class="img-fluid img-transition" src="<?php getItemUrl('template/assets/img/acreditaciones/he.png') ?>" alt="certificaciones de la UPMH">
          </center>
        </div>
        <div class="col-lg-1"></div>
      </div>
    </div>
  </section>

	<!-- Oferta educativa -->
	<section id="oferta" class="section-bg">
      	<div class="container">
	        <header class="section-header">
	          <h3>Oferta Educativa</h3>
	          <h5 class="text-center f-w-1">5 Ingenierías | 3 Licenciaturas | 2 Posgrados</h5>
	        </header>
        	<div class="row">
        		<div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            		<div class="box box-ing shadow">
              			<div class="row img-box">
              				<img src="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-10.jpg') ?>"  class="img-fluid" alt="Estudiantes de Ingeniería">
              			</div>
  				        <h4 class="title"><a href="">Ingenierías</a></h4>

  				        <a href="<?php getItemUrl('oferta-educativa/IA') ?>"><p class="description f-w-1">Aeronáutica</p></a>
  				        <a href="<?php getItemUrl('oferta-educativa/IAEV') ?>"><p class="description f-w-1">Animación y Efectos Visuales</p></a>
  				        <a href="<?php getItemUrl('oferta-educativa/IE') ?>"><p class="description f-w-1">Energía</p></a>
  				        <a href="<?php getItemUrl('oferta-educativa/ILT') ?>"><p class="description f-w-1">Logística y Transporte</p></a>
  				        <a href="<?php getItemUrl('oferta-educativa/ITI') ?>">
  				        	<p class="description f-w-1">Tecnologías de la Información</p>
  				        </a>
            	</div>
          	</div>
	        	<div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            		<div class="box shadow">
	            		<div class="row img-box">
	            			<img src="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-5.jpg') ?>"  class="img-fluid" alt="Estudinates de licenciatura">
	            		</div>
			            <h4 class="title"><a href="">Licenciaturas</a></h4>

			            <a href="<?php getItemUrl('oferta-educativa/LAGE') ?>">
			            	<p class="description f-w-1">Administración y Gestión Empresarial</p>
			            </a>
			            <a href="<?php getItemUrl('oferta-educativa/LAB') ?>">
			            	<p class="description f-w-1">Arquitectura Bioclimática</p>
			            </a>
			            <a href="<?php getItemUrl('oferta-educativa/LCIA') ?>">
			            	<p class="description f-w-1">Comercio Internacional y Aduanas</p>
			            </a>
            		</div>
	        	</div>
	        	<div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            		<div class="box shadow">
		          		<div class="row img-box">
		          			<img src="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-7.jpg') ?>"  class="img-fluid" alt=" Estudiantes de posgrado">
		          		</div>
				        <h4 class="title"><a href="">Maestrías</a></h4>

				        <a href="pages/oferta-educativa/maestriaCyLI/logistica.html" target="_blank">
				        	<p class="description f-w-1">Comercio y Logística Internacional</p>
				        </a>
				        <a href="pages/oferta-educativa/maestria_aero/index.html" target="_blank">
				        	<p class="description f-w-1">Ingeniería Aeroespacial</p>
				        </a>
            		</div>
	        	</div>
        	</div>
      	</div>
    </section>
    <!-- termina Oferta Educativa -->

    <section id="estudiantes-prueba">
     	<div class="container">

        <header class="section-header">
          <h3 class="section-title">Estudiantes</h3>
        </header>

        <div class="row">
          	<div class="col-lg-3 col-md-4 col-sm-6 col-12">
              <div class="shadow box-main-tramites p-3 mb-5 bg-white rounded wow bounceInUp" data-wow-duration="1.4s"">
                <div class="col-lg-12">
                  <ion-icon name="receipt-outline"></ion-icon>
                </div>
                <div class="col-lg-12">
                  <a href="<?php getItemUrl('estudiantes/reglamento') ?>">
                    <h4 class="f-w-1 text-center">Reglamento de Estudiantes</h4>
                  </a>
                </div>
              </div>
            </div>

          	<div class="col-lg-3">
            	<div class="shadow box-main-tramites p-3 mb-5 bg-white rounded wow bounceInUp" data-wow-duration="1.4s">
              	<div class="col-lg-12 mb-2">
                	<ion-icon name="ribbon-outline"></ion-icon>
              	</div>
	              <div class="col-lg-12">
	                <a href="<?php getItemUrl('estudiantes/becas') ?>">
	                	<h4 class="f-w-1 text-center">Información de Becas</h4>
	                </a>
	              </div>
            	</div>
          	</div>

          	<div class="col-lg-3 col-md-4 col-sm-6 col-12">
              <div class="shadow box-main-tramites p-3 mb-5 bg-white rounded wow bounceInUp" data-wow-duration="1.4s">
                <div class="col-lg-12">
                  <ion-icon name="library-outline"></ion-icon>
                </div>
                <div class="col-lg-12">
                  <a href="<?php getItemUrl('centro-informacion') ?>">
                    <h4 class="f-w-1 text-center">Centro de Información</h4>
                  </a>
                </div>
              </div>
            </div>

               <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="shadow box-main-tramites p-3 mb-5 bg-white rounded wow bounceInUp" data-wow-duration="1.4s">
                  <div class="col-lg-12">
                    <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                  </div>
                  <div class="col-lg-12">
                    <a href="http://sistemas.upmh.edu.mx/buzon/signin" target="blank">
                      <h4 class="f-w-1 text-center">Buzón SQR</h4>
                    </a>
                  </div>
                </div>
              </div>

          		<div class="col-lg-3">
            		<div class="shadow box-main-tramites p-3 mb-5 bg-white rounded wow bounceInUp" data-wow-duration="1.4s">
              			<div class="col-lg-12 mb-2">
                			<ion-icon name="briefcase-outline"></ion-icon>
              			</div>
	              		<div class="col-lg-12">
	                		<a href="<?php getItemUrl('vinculacion/bolsa-trabajo') ?>">
	                			<h4 class="f-w-1 text-center">Bolsa de Trabajo</h4>
	                		</a>
	              		</div>
            		</div>
          		</div>

              <div class="col-lg-3">
                <div class="shadow box-main-tramites p-3 mb-5 bg-white rounded wow bounceInUp" data-wow-duration="1.4s">
                    <div class="col-lg-12 mb-2">
                      <ion-icon name="briefcase-outline"></ion-icon>
                    </div>
                    <div class="col-lg-12">
                      <a target="_blank" href="https://upmetropolitana.lapieza.io/">
                        <h4 class="f-w-1 text-center">Bolsa de Trabajo Lapieza</h4>
                      </a>
                    </div>
                </div>
              </div>

          		<div class="col-lg-3">
            		<div class="shadow box-main-tramites p-3 mb-5 bg-white rounded wow bounceInUp" data-wow-duration="1.4s">
              			<div class="col-lg-12 mb-3">
                			<ion-icon name="calendar-outline"></ion-icon>
              			</div>
              			<div class="col-lg-12">
              				<a href="<?php getItemUrl('calendario-escolar') ?>">
              					<h4 class="f-w-1 text-center">Calendario Escolar</h4>
              				</a>                			
              			</div>
            		</div>
          		</div>

          		<div class="col-lg-3">
            		<div class="shadow box-main-tramites p-3 mb-5 bg-white rounded wow bounceInUp" data-wow-duration="1.4s">
              			<div class="col-lg-12 mb-3">
               	 			<ion-icon name="calendar"></ion-icon>
              			</div>
			            <div class="col-lg-12">
			            	<a href="https://goo.gl/eHoYhM" target="_blank">
			            		<h4 class="f-w-1 text-center">Horarios 2021</h4>
			            	</a>			            	
			            </div>
            		</div>
          		</div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="shadow box-main-tramites p-3 mb-5 bg-white rounded wow bounceInUp" data-wow-duration="1.4s">
                  <div class="col-lg-12">
                    <ion-icon name="person-add-outline"></ion-icon>
                  </div>
                  <div class="col-lg-12">
                    <a href="https://ruts.hidalgo.gob.mx/ver/4904" target="_blank">
                      <h4 class="f-w-1 text-center">Proceso de Reinscripción</h4>
                    </a>                    
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="shadow box-main-tramites p-3 mb-5 bg-white rounded wow bounceInUp" data-wow-duration="1.4s">
                  <div class="col-lg-12">
                   <ion-icon name="phone-portrait-outline"></ion-icon>
                  </div>
                  <div class="col-lg-12">
                    <a href="https://sites.google.com/upmh.edu.mx/manual-metronet/" target="_blank">
                      <h4 class="f-w-1 text-center">Manual de METRONET</h4>
                    </a>
                  </div>
                </div>
              </div>

          		<div class="col-lg-3 col-md-4 col-sm-6 col-12">
            		<div class="shadow box-main-tramites p-3 mb-5 bg-white rounded wow bounceInUp" data-wow-duration="1.4s">
              			<div class="col-lg-12 mb-3">
                			<ion-icon name="phone-portrait-outline"></ion-icon>
              			</div>
              			<div class="col-lg-12">
              				<a href="http://sistemas.upmh.edu.mx/metronet/" target="_blank">
              					<h4 class="f-w-1 text-center">METRONET</h4>
              				</a>
              			</div>
            		</div>
          		</div>

          		<div class="col-lg-3">
            		<div class="shadow box-main-tramites p-3 mb-5 bg-white rounded wow bounceInUp" data-wow-duration="1.4s">
              			<div class="col-lg-12 mb-3">
                			<ion-icon name="school-outline"></ion-icon>
              			</div>
	              		<div class="col-lg-12">
	                		<a href="<?php getItemUrl('estudiantes/titulacion') ?>">
	                			<h4 class="f-w-1 text-center">Titulación</h4>
	                		</a>
	              		</div>
            		</div>
          		</div>

  		        <div class="col-lg-12 d-flex justify-content-center wow bounceInLeft" data-wow-duration="1.4s"">
  		        	<div class="div-bg-purple">
                  <a class="btn btn-bg-border-purple" href="<?php getItemUrl('estudiantes') ?>" title="">
                  VER MÁS 
                  </a>   
                </div>
    		      </div>
        	</div>
      	</div>
    </section>
    <!-- termina estudiantes prueba -->

    <!-- Sección vida universitaria -->
    <section id="v-universitaria">
      <div class="container">
         <header class="section-header">
	          <h3 class="section-title">Vida Universitaria</h3>
	        </header>
        <div class="row">
          <div class="col-6 col-lg-3 col-md-6 v-universitaria-item">
            <div class="v-universitaria-wrap">
              <img src="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-11.jpg') ?>" class="img-fluid" alt="Estudinates en salón de clases">
              <div class="v-universitaria-info">
                <div>
                  <a href="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-11.jpg') ?>" data-lightbox="v-universitaria" data-title="Departamento de comunicación social UPMH #WeAreLions" class="link-preview" title="Preview">
                    <i class="ion ion-play"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 col-md-6 v-universitaria-item">
            <div class="v-universitaria-wrap">
              <img src="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-6.jpg') ?>" class="img-fluid" alt="Estudinates de Comercio Internacional y Aduanas en Aduana UPMH">
              <div class="v-universitaria-info">
                <div>
                  <a href="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-6.jpg') ?>" class="link-preview" data-lightbox="v-universitaria" data-title="Departamento de comunicación social UPMH" title="Preview"><i class="ion ion-play"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3 col-md-6 v-universitaria-item">
            <div class="v-universitaria-wrap">
              <img src="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-12.jpg') ?>" class="img-fluid" alt="Estudiantes de Arquitectura Bioclimática en salón de clases">
              <div class="v-universitaria-info">
                <div>
                  <a href="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-12.jpg') ?>" class="link-preview" data-lightbox="v-universitaria" data-title="Departamento de comunicación social UPMH" title="Preview"><i class="ion ion-play"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3 col-md-6 v-universitaria-item">
            <div class="v-universitaria-wrap">
              <img src="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-13.jpg') ?>" class="img-fluid" alt="Encuentro deportivo y cultural de universidades politécnicas">
              <div class="v-universitaria-info">
                <div>
                  <a href="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-13.jpg') ?>" class="link-preview" data-lightbox="v-universitaria" data-title="Departamento de comunicación social UPMH" title="Preview"><i class="ion ion-play"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3 col-md-6 v-universitaria-item">
            <div class="v-universitaria-wrap">
              <img src="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-14.jpg') ?>" class="img-fluid" alt="Estudiantes en laboratorio de Aeronáutica">
              <div class="v-universitaria-info">
                <div>
                  <a href="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-14.jpg') ?>" class="link-preview" data-lightbox="v-universitaria" data-title="Departamento de comunicación social UPMH" title="Preview"><i class="ion ion-play"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3 col-md-6 v-universitaria-item">
            <div class="v-universitaria-wrap">
              <img src="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-15.jpg') ?>" class="img-fluid" alt="Estudiante universitaria">
              <div class="v-universitaria-info">
                <div>
                  <a href="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-15.jpg') ?>" class="link-preview" data-lightbox="v-universitaria" data-title="Departamento de comunicación social UPMH" title="Preview"><i class="ion ion-play"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3 col-md-6 v-universitaria-item">
            <div class="v-universitaria-wrap">
              <img src="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-1.png') ?>" class="img-fluid" alt="Encuentro deportivo y cultural de universidades politécnicas">
              <div class="v-universitaria-info">
                <div>
                  <a href="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-1.png') ?>" class="link-preview" data-lightbox="v-universitaria" data-title="Departamento de comunicación social UPMH" title="Preview"><i class="ion ion-play"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3 col-md-6 v-universitaria-item">
            <div class="v-universitaria-wrap">
              <img src="<?php getItemUrl('template/assets/img/universitarios/625A9032.JPG') ?>" class="img-fluid" alt="Estudiantes de la ingeniería de Tecnologías de la Información">
              <div class="v-universitaria-info">
                <div>
                  <a href="<?php getItemUrl('template/assets/img/universitarios/625A9032.JPG') ?>" class="link-preview" data-lightbox="v-universitaria" data-title="Departamento de comunicación social UPMH" title="Preview"><i class="ion ion-play"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3 col-md-6 v-universitaria-item">
            <div class="v-universitaria-wrap">
              <img src="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-8.jpg') ?>" class="img-fluid" alt="Estudiante de Comercio Internacional y Aduanas">
              <div class="v-universitaria-info">
                <div>
                  <a href="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-8.jpg') ?>" class="link-preview" data-lightbox="v-universitaria" data-title="Departamento de comunicación social UPMH" title="Preview"><i class="ion ion-play"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3 col-md-6 v-universitaria-item">
            <div class="v-universitaria-wrap">
              <img src="<?php getItemUrl('template/assets/img/universitarios/interp.jpg') ?>" class="img-fluid" alt="Encuentro deportivo y cultural de universidades politécnicas">
              <div class="v-universitaria-info">
                <div>
                  <a href="<?php getItemUrl('template/assets/img/universitarios/interp.jpg') ?>" class="link-preview" data-lightbox="v-universitaria" data-title="Departamento de comunicación social UPMH" title="Preview"><i class="ion ion-play"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3 col-md-6 v-universitaria-item">
            <div class="v-universitaria-wrap">
              <img src="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-16.jpg') ?>" class="img-fluid" alt="Estudiante de la ingeniería de Logística y Transporte">
              <div class="v-universitaria-info">
                <div>
                  <a href="<?php getItemUrl('template/assets/img/universitarios/v-universitaria-16.jpg') ?>" class="link-preview" data-lightbox="v-universitaria" data-title="Departamento de comunicación social UPMH" title="Preview"><i class="ion ion-play"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-3 col-md-6 v-universitaria-item">
            <div class="v-universitaria-wrap">
              <img src="<?php getItemUrl('template/assets/img/universitarios/interp-2.jpg') ?>" class="img-fluid" alt="Encuentro deportivo y cultural de universidades politécnicas">
              <div class="v-universitaria-info">
                <div>
                  <a href="<?php getItemUrl('template/assets/img/universitarios/interp-2.jpg') ?>" class="link-preview" data-lightbox="v-universitaria" data-title="Departamento de comunicación social UPMH" title="Preview"><i class="ion ion-play"></i></a>
                </div>
              </div>
            </div>
          </div>
      </div>
      </div>
    </section>
    <!-- Termina vida universitaria -->

    <!-- Ir arriba -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
          <img class="img-fluid" src="<?php getItemUrl('template/assets/img/logos-oficiales/loading-2.gif') ?>" alt="">
        </div>
    </div>

    <?php include_once('l-interes.php') ?>
    <?php include_once('accesibilidad-footer-scripts.php') ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MX04RXPT1L"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-MX04RXPT1L');
    </script>

	
  </body>

</html>
