<?php require 'head.php'; ?>


			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<ul class="breadcrumb">
									<li><a href="index.php">Inicio</a></li>
									<li class="active">(B) Explorando</li>
								</ul>
							</div>
                            
						</div>
						<div class="row">
							<div class="col-md-8">
                                <h1>B2 - 10 <strong>Bloques</strong></h1>
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
									   <div class="progress-bar progress-bar-primary" data-appear-progress-animation="40%">
										<span class="progress-bar-tooltip">2/5</span>
									   </div>
								    </div>
                                    <div class="progress-label-act">
									   <span>Actividad 2 de 5</span>
								    </div>
                                        
                                </div>
                                
                                <hr />
                    <!-- MARCAR ACTIVIDAD CORRESPONDIENTE -->
								<h4>Actividades</h4>
								<ul class="nav nav-list primary push-bottom">
                                    <li><a href="b1.php">B1 - Paso a paso</a></li>
									<li><a href="b2.php"><strong>B2 - 10 Bloques</strong></a></li>
									<li><a href="b3.php">B3 - Mi Estudio</a></li>
                                    <li><a href="b4.php">B4 - Depúralo</a></li>
									<li><a href="b5.php">B5 - Sobre mí</a></li>
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
    <!-- INSERTAR VIDEO SOLUCION -->
								            <iframe frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/vLF-LrJqlnk"></iframe>
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
                                    <p class="lead">Crea un proyecto utilizando solo estos 10 bloques. Úsalos una, dos o tantas veces como quieras, pero al menos úsalos una vez.</p>
                                    
                                </div>
                                <div class="col-md-3">
                                 <!--  IMAGEN ACTIVIDAD -->
                                    <a class="img-thumbnail lightbox"	href="assets/img/unidades/b2.png" data-plugin-options='{"type":"image"}'>
                                        <img class="img-responsive" width="400" src="assets/img/unidades/b2.png">
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
                                                   <p class="lead">Prueba ideas experimentando con cada bloque.</p>
                                               </div>
                                               
									       </div>
								        </section>
                                        
								        <section class="toggle">
									       <label>Segundo paso</label>
									       <div class="toggle-content">
                                               <div class="col-md-12 col-sm-12">
                                                   <p class="lead"> Mezcla y une los bloques de distintos modos.</p>
                                               </div>

									       </div>
								        </section>
                                        
								        <section class="toggle">
									       <label>Tercer paso</label>
									       <div class="toggle-content">
                                               <div class="col-md-12 col-sm-12">
										          <p class="lead">¡Repite!</p>
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
                                            <li><i class="fa fa-flask"></i>Prueba ideas intentando distintas combinaciones de bloques. Mezcla y une bloques hasta que encuentres algo que te interesa.</li>
                                            <li><i class="fa fa-flask"></i>¡Intercambia ideas con un compañero!</li>
                                            <li><i class="fa fa-flask"></i>Explora otros proyectos para ver lo que otros están haciendo con Scratch. ¡Esta puede ser una estupenda fuente de inspiración!</li>
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
                                        <li><i class="fa fa-check"></i> Añade tu proyecto al estudio <a href="http://scratch.mit.edu/studios/475480">10 Blocks</a></li>
                                        <li><i class="fa fa-check"></i>Juega con distintos personajes, disfraces o fondos.</li>
                                        <li><i class="fa fa-check"></i>¡Desafíate a ti mismo! A ver cuántos proyectos distintos puedes crear con 10 bloques.</li>
                                        <li><i class="fa fa-check"></i>Intercambia tu proyecto con otro compañero y reinventad vuestras creaciones</li>
                                    </ul>
                            
                                </div>
                            
                            </div>                
                             <hr class="tall">
                            
 <!-- *******************     PAGINACION    ****************************************-->	       
                            <div class="row row-centered">

                                    <a href="b1.php" class="btn btn-primary btn-lg"><i class="fa fa-chevron-left"></i> Anterior</a>
                                    <a href="b3.php" class="btn btn-primary btn-lg">Siguiente<i class="fa fa-chevron-right"></i></a>
           
                            </div>
						</div>

					</div>

				</div>
               
			</div>
		</div>

<?php require 'footer_unidad.php'; ?>