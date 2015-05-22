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
                                <h1>E4 - <strong>Marcador</strong></h1>
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
									   <div class="progress-bar progress-bar-primary" data-appear-progress-animation="60%">
										<span class="progress-bar-tooltip">4/7</span>
									   </div>
								    </div>
                                    <div class="progress-label-act">
									   <span>Actividad 4 de 7</span>
								    </div>
                                        
                                </div>
                                
                                <hr />
                    <!-- MARCAR ACTIVIDAD CORRESPONDIENTE -->
								<h4>Actividades</h4>
								<ul class="nav nav-list primary push-bottom">
				                    <li><a href="e1.php">E1 - Laberinto</a></li>
                                    <li><a href="e2.php">E2 - Pong</a></li>
                                    <li><a href="e3.php">E3 - Desplazamiento</a></li>
                                    <li><a href="e4.php"><strong>E4 - Marcador</strong></a></li>
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
								            <iframe frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/fTQyEE5mmvw"></iframe>
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
                                    <p class="lead">El come peces es un juego donde los jugadores tratan de coger tantos peces como puedan guiando a un personaje con el ratón. En esta actividad reinventarás el proyecto Fish Chomp para añadir un marcador usando variables.</p>
                                    
                                </div>
                                <div class="col-md-3">
                                 <!--  IMAGEN ACTIVIDAD -->
                                    <a class="img-thumbnail lightbox"	href="assets/img/unidades/e4.png" data-plugin-options='{"type":"image"}'>
                                        <img class="img-responsive" width="400" src="assets/img/unidades/e4.png">
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
                                               <div class="col-md-12 col-sm-12">
                                                   <p class="lead">Ve a la página del proyecto <a href="http://scratch.mit.edu/projects/10859244" target="_blank">Fish Chomp</a></p>
                                               </div>
                                               
									       </div>
								        </section>
                                        
								        <section class="toggle">
									       <label>Segundo paso</label>
									       <div class="toggle-content">
                                               <div class="col-md-6 col-sm-6">
                                                   <p class="lead">Haz click en el botón Crear una variable en la categoría Datos para crear y dar nombre a una variable.</p>
                                               </div>
                                                <div class="col-md-6 col-sm-6">
                                                   
                                                    <a class="img-thumbnail lightbox pull-right"	href="assets/img/unidades/e4p2.png" data-plugin-options='{"type":"image"}'>
								                    <img class="img-responsive" width="200" src="assets/img/unidades/e4p2.png">
								                    <span class="zoom"><i class="fa fa-search"></i></span>
                                                    </a>  
                                               </div>
									       </div>
								        </section>
                                        
								        <section class="toggle">
									       <label>Tercer paso</label>
									       <div class="toggle-content">
                                               <div class="col-md-6 col-sm-6">
										          <p class="lead">Experimenta con los nuevos bloques de variables que aparecen para incorporar un marcador a tu proyecto.</p>
                                               </div>
                                                <div class="col-md-6 col-sm-6">
                                                   
                                                    <a class="img-thumbnail lightbox pull-right"	href="assets/img/unidades/e4p3.png" data-plugin-options='{"type":"image"}'>
								                    <img class="img-responsive" width="200" src="assets/img/unidades/e4p3.png">
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
                                    <h2>¿Te has<strong> atascado</strong>?</h2>
                                    
                                        <p class="lead">¡No pasa nada! prueba esto...</p>
                                    
                                    
                                        <ul class="list icons list-unstyled">
                                           <li><i class="fa fa-flask"></i>¿No estás seguro de cómo manipular las variables? Echa un ojo a <a href="http://scratch.mit.edu/projects/2042755" target="_blank">este proyecto</a></li>
                                           <li><i class="fa fa-flask"></i>O echa un vistazo a <a href="http://youtu.be/uXq379XkhVw" target="_blank">este vídeo</a></li>
                                           <li><i class="fa fa-flask"></i>Explora y estudia el código de los juegos que usan un marcador para aprender más sobre cómo crear variables para incorporar un marcador a un proyecto.</li>
                                        </ul>

                                    
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
                                        <li><i class="fa fa-check"></i> Añade tu proyecto al estudio de reinvenciones de <a href="http://scratch.mit.edu/studios/475615" target="_blank">Fish Chomp Remix</a></li>
                                        <li><i class="fa fa-check"></i>¡Desafíate a ti mismo para hacer más! ¿Cómo puedes usar un marcador para añadir dificultad a tu juego?</li>
                                        <li><i class="fa fa-check"></i>¡Encuentra un juego que te guste y reinvéntalo!</li>
                                    </ul>
                            
                                </div>
                            
                            </div>                
                             <hr class="tall">
                            
 <!-- *******************     PAGINACION    ****************************************-->	       
                            <div class="row row-centered">

                                    <a href="e3.php" class="btn btn-primary btn-lg"><i class="fa fa-chevron-left"></i> Anterior</a>
                                    <a href="e5.php" class="btn btn-primary btn-lg">Siguiente<i class="fa fa-chevron-right"></i></a>
           
                            </div>
						</div>

					</div>

				</div>
               
			</div>
		</div>

<?php require 'footer_unidad.php'; ?>