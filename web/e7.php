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
                                <h1>E7 - <strong>¡Depúralo!</strong></h1>
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
									   <div class="progress-bar progress-bar-primary" data-appear-progress-animation="100%">
										<span class="progress-bar-tooltip">7/7</span>
									   </div>
								    </div>
                                    <div class="progress-label-act">
									   <span>Actividad 7 de 7</span>
								    </div>
                                        
                                </div>
                                
                                <hr />
                    <!-- MARCAR ACTIVIDAD CORRESPONDIENTE -->
								<h4>Actividades</h4>
								<ul class="nav nav-list primary push-bottom">
				                    <li><a href="e1.php">E1 - Laberinto</a></li>
                                    <li><a href="e2.php">E2 - Pong</a></li>
                                    <li><a href="e3.php">E3 - Desplazamiento</a></li>
                                    <li><a href="e4.php">E4 - Marcador</a></li>
                                    <li><a href="e5.php">E5 - Extensiones</a></li>	
                                    <li><a href="e6.php">E6 - Interacciones</a></li>
                                    <li><a href="e7.php"><strong>E7 - ¡Depúralo!</strong></a></li>	
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
								            <iframe frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/hzTP-CeI9Eo"></iframe>
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
                                    <p class="lead">En esta actividad investigarás qué está funcionando mal en cada proyecto y encontrarás la solución a un desafío de depuración.</p>
                                    
                                </div>
                                <div class="col-md-3">
                                 <!--  IMAGEN ACTIVIDAD -->
                                    <a class="img-thumbnail lightbox"	href="assets/img/unidades/depuralo.png" data-plugin-options='{"type":"image"}'>
                                        <img class="img-responsive" width="400" src="assets/img/unidades/depuralo.png">
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
                                                   <p class="lead">Ve al proyecto <a href="http://scratch.mit.edu/projects/24271192"  target="_blank">Debug It 4.1!</a></p>
                                               </div>
                                               
									       </div>
								        </section>
                                        
								        <section class="toggle">
									       <label>Segundo paso</label>
									       <div class="toggle-content">
                                               <div class="col-md-12 col-sm-12">
                                                   <p class="lead">En este proyecto la lista “Inventario” debería actualizarse cada vez que el gato coge un nuevo objeto. Sin embargo, el gato solo puede coger el portátil. ¿Cómo podríamos arreglar el programa?
</p>

                                               </div>
									       </div>
								        </section>
                                        
								        <section class="toggle">
									       <label>Tercer paso</label>
									       <div class="toggle-content">
                                               <div class="col-md-12 col-sm-12">
										          <p class="lead">Escribe tu solución o reinventa el programa erróneo con tu solución</p>
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
                                    
                                        <p class="lead"></p>
                                        <ul class="list icons list-unstyled">
                                            <li><i class="fa fa-flask"></i>Haz una lista de posibles errores del programa.</li>
                                            <li><i class="fa fa-flask"></i>¡Haz un seguimiento de tu trabajo! Esto puede ser un buen recordatorio de las cosas que ya has probado para indicarte qué puedes probar a continuación.</li>
                                            <li><i class="fa fa-flask"></i>Comparte y compara tu enfoque para encontrar y solucionar problemas con un compañero hasta que encuentres algo que te gusta y te funciona bien.</li>
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
                                        <li><i class="fa fa-check"></i> Añade comentarios al código pinchando con el botón derecho sobre los bloques de tus programas.</li>
                                        <li><i class="fa fa-check"></i>Debate sobre tu estilo de pruebas y depuración con un compañero - toma notas de las similitudes y diferencias de vuestras estrategias.</li>
                                        <li><i class="fa fa-check"></i>¡Ayuda a un compañero!</li>
                                    </ul>
                            
                                </div>
                            
                            </div>                
                             <hr class="tall">
                            
 <!-- *******************     PAGINACION    ****************************************-->	       
                            <div class="row row-centered">

                                    <a href="e6.php" class="btn btn-primary btn-lg"><i class="fa fa-chevron-left"></i> Anterior</a>
                                    <a href="f1.php" class="btn btn-primary btn-lg">Siguiente<i class="fa fa-chevron-right"></i></a>
           
                            </div>
						</div>						</div>


					</div>

				</div>
               
			</div>
		</div>

<?php require 'footer_unidad.php'; ?>