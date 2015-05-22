<?php require 'head.php'; ?>


			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<ul class="breadcrumb">
									<li><a href="index.php">Inicio</a></li>
									<li class="active">(E) Juegos</li>
								</ul>
							</div>
                            
						</div>
						<div class="row">
							<div class="col-md-8">
                                <h1>E2 - <strong>Pong</strong></h1>
							</div>
                            
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
<!-- ************************** BARRA LATERAL IZQUIERDA **************************** -->
						<div class="col-md-3">
        
							<aside class="sidebar">
                               
                                <div class="progress-bars">
								    <div class="progress progress-act">
									   <div class="progress-bar progress-bar-primary" data-appear-progress-animation="30%">
										<span class="progress-bar-tooltip">2/7</span>
									   </div>
								    </div>
                                    <div class="progress-label-act">
									   <span>Actividad 2 de 7</span>
								    </div>
                                        
                                </div>
                                
                                <hr />
                    <!-- MARCAR ACTIVIDAD CORRESPONDIENTE -->
								<h4>Actividades</h4>
								<ul class="nav nav-list primary push-bottom">
				                    <li><a href="e1.php">E1 - Laberinto</a></li>
                                    <li><a href="e2.php"><strong>E2 - Pong</strong></a></li>
                                    <li><a href="e3.php">E3 - Desplazamiento</a></li>
                                    <li><a href="e4.php">E4 - Marcador</a></li>
                                    <li><a href="e5.php">E5 - Extensiones</a></li>	
                                    <li><a href="e6.php">E6 - Interacciones</a></li>
                                    <li><a href="e7.php">E7 - ¡Depúralo!</a></li>
								</ul>
                                
                                <div class="featured-box featured-box-secundary">
								    <div class="box-content">
									   <i class="icon-featured fa fa-medkit"></i>
                                        <h2>¿Necesitas <strong>ayuda</strong>?</h2>
									   <p class="">Si no has podido realizar la actividad o bien quieres comprobar si está correcta, mira el siguiente vídeo con la solución que te proponemos.</p>
                                        <button class="btn btn-primary btn-lg push-top push-bottom" data-toggle="modal" data-target="#myModal">
								Ver
							</button>

							
								    </div>
							     </div>
                                                 
                                
						

							</aside>
<!-- **************   VENTANA MODAL CON LA SOLUCIÓN DE LA ACTIVIDAD   ******************* -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title" id="myModalLabel">Solución a la actividad</h4>
										</div>
										<div class="modal-body">
											<div class="embed-responsive embed-responsive-16by9">
								            <iframe frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/sgP2xKcYklY"></iframe>
							             </div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
										</div>
									</div>
								</div>
							</div>
						</div>
<!-- ************************** FIN BARRA LATERAL IZQUIERDA **************************** -->
                        
						<div class="col-md-9">
                      
                            
                            <div class="row">  
                                <div class="col-md-9">
                                    <hr class="visible-sm visible-xs tall" />

                                    <h2>¿Qué <strong>haremos</strong>?</h2>
                                    <p class="lead">En este proyecto crearás un juego. Este juego incluye interacciones entre objetos, un marcador y niveles. Se trata de un juego similar al clásico Pong o Arkanoid, donde el objetivo es mantener la pelota sin que te sobrepase.</p>
                                    
                                </div>
                                <div class="col-md-3">
                                 <!--  IMAGEN ACTIVIDAD -->
                                    <a class="img-thumbnail lightbox"	href="assets/img/unidades/e2.png" data-plugin-options='{"type":"image"}'>
                                        <img class="img-responsive" width="400" src="assets/img/unidades/e2.png">
                                        <span class="zoom"><i class="fa fa-search"></i></span>
                                    </a>
                                 <!-- FIN IMAGEN ACTIVIDAD -->
                                        
                                </div>     
                              </div>
                            
                            
                            <hr class="tall">  
                            

                                    
<!-- *******************     PASO A PASO    ****************************************-->	
                            <div class="row">
                                <div class="col-md-12">
                                    <hr class="visible-sm visible-xs tall" />

                                    <h2>Paso a <strong>paso</strong></h2>
                                    <div class="toggle" data-plugin-toggle data-plugin-options='{ "isAccordion": true }'>
								        <section class="toggle active">
									       <label>Primer paso</label>
									       <div class="toggle-content">
                                               <div class="col-md-6 col-sm-6">
                                                   <p class="lead">Crea dos objetos: una base que controlará el usuario y una pelota con la que se jugará</p>
                                               </div>
                                                <div class="col-md-6 col-sm-6">
                                                   
                                                    <a class="img-thumbnail lightbox pull-right"	href="assets/img/unidades/e2p1.png" data-plugin-options='{"type":"image"}'>
								                    <img class="img-responsive" width="200" src="assets/img/unidades/e2p1.png">
								                    <span class="zoom"><i class="fa fa-search"></i></span>
                                                    </a>  
                                               </div>
									       </div>
								        </section>
                                        
								        <section class="toggle">
									       <label>Segundo paso</label>
									       <div class="toggle-content">
                                               <div class="col-md-6 col-sm-6">
                                                   <p class="lead">Haz que la base sea interactiva.</p>
                                               </div>
                                                <div class="col-md-6 col-sm-6">
                                                   
                                                    <a class="img-thumbnail lightbox pull-right"	href="assets/img/unidades/e2p2.png" data-plugin-options='{"type":"image"}'>
								                    <img class="img-responsive" width="150" src="assets/img/unidades/e2p2.png">
								                    <span class="zoom"><i class="fa fa-search"></i></span>
                                                    </a>  
                                               </div>
									       </div>
								        </section>
                                        
								        <section class="toggle">
									       <label>Tercer paso</label>
									       <div class="toggle-content">
                                               <div class="col-md-6 col-sm-6">
										          <p class="lead">¡Dale vida a tu juego!</p>
                                               </div>
                                                <div class="col-md-6 col-sm-6">
                                                   
                                                    <a class="img-thumbnail lightbox pull-right"	href="assets/img/unidades/e2p3.png" data-plugin-options='{"type":"image"}'>
								                    <img class="img-responsive" width="200" src="assets/img/unidades/e2p3.png">
								                    <span class="zoom"><i class="fa fa-search"></i></span>
                                                    </a>  
                                               </div>
									       </div>
								        </section>

                                    </div>
                                    
                                    
								</div>
							</div> 
                            
                            <hr class="tall">
                            
                            
<!-- *******************     PARA EXPLORAR    **************************************** -->        
                            
                            <div class="row">
                                <div class="col-md-12">

                                    <hr class="visible-sm visible-xs tall" />
                                    <h2>Para<strong> explorar</strong></h2>
                                     
                                    <div class="row">
                                            <h4>Bloques con los que jugar</h4>
                                            <a class="img-thumbnail lightbox pull-left"	href="assets/img/unidades/e2exp.png" data-plugin-options='{"type":"image"}'>
								                <img class="img-responsive" width="100%" src="assets/img/unidades/e2exp.png">
								                <span class="zoom"><i class="fa fa-search"></i></span>
                                            </a>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <h4>Cosas que probar</h4>
                                    
                                        <ul class="list icons list-unstyled">
                                           <li><i class="fa fa-flask"></i>¿Cómo añades dificultad a tu juego? Creando niveles, usando un cronómetro o manteniendo el marcador son solo unos ejemplos de lo que podrías hacer.</li>
                                           <li><i class="fa fa-flask"></i>Experimenta cambiando la apariencia de tu juego editando los fondos.</li>
                                           <li><i class="fa fa-flask"></i>Explora la posibilidad de utilizar diferentes teclas para controlar los objetos.</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            
                            </div>
                            
                            <hr class="tall">                     
                            
<!-- *******************     ¿HAS ACABADO?    ****************************************-->	          
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <hr class="visible-sm visible-xs tall" />
                                    <h2>¿Has <strong>acabado</strong>?</h2>
                                    <p class="lead">Te proponemos algunas mejoras:</p>
                                    <ul class="list icons list-unstyled">
                                        <li><i class="fa fa-check"></i> Añade tu proyecto al estudio <a href="http://scratch.mit.edu/studios/487504" target="_blank">Games</a></li>
                                        <li><i class="fa fa-check"></i>Intercambia tu proyecto con un compañero y explicaos mutuamente vuestras creaciones.</li>
                                    </ul>
                            
                                </div>
                            
                            </div>                
                             <hr class="tall">
                            
 <!-- *******************     PAGINACION    ****************************************-->	       
                            <div class="row row-centered">

                                    <a href="e1.php" class="btn btn-primary btn-lg"><i class="fa fa-chevron-left"></i> Anterior</a>
                                    <a href="e3.php" class="btn btn-primary btn-lg">Siguiente<i class="fa fa-chevron-right"></i></a>
           
                            </div>
						</div>

					</div>

				</div>
               
			</div>
		</div>

<?php require 'footer_unidad.php'; ?>