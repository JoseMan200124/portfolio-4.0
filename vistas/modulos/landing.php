   
<div id="content">
     
     <!--==========Sección pantalla de aterrizaje=============-->
      <div class="wrapper">

            <div class="hero-section">   
                  
                  
                  
                  <div class="gif-inicio"></div>
                  <div class="titulo-principal">
                        <h1>Programador fullstack</h1>
                  </div> 
            </div>

            <div class="gif-fondo"></div>
               
 <div class="display-none">
        <div class="menu">
            <div class="label">Pst! presioname</div>

                    <div class="espacio"></div>
                     
                      <div class="item"> <a href="#" target="_blank"> <i class="magic-hover magic-hover__square fa fa-facebook"></i></a></div>
                      <div class="item"> <a href="#" target="_blank"> <i class="magic-hover magic-hover__square fa fa-instagram"></i></a></div>
                      <div class="item"><a href="https://github.com/JoseMan200124/portfolio-4.0" target="_blank"><i class="magic-hover magic-hover__square fa fa-github"></i></a></div>
                      <div class="item"><a href="https://wa.me/+50242110769?" target="_blank"><i class="magic-hover magic-hover__square fa fa-whatsapp"></i></a></div>
                      <div class="item magic-hover magic-hover__square"><p class="font-grande">Gracias por visitar mi portafolio</p></div>

        </div>

 </div>
  
            
      </div>
           <!--==========TERMINA - Sección pantalla de aterrizaje=============-->
           <!--==========Sección presentación con mi nombre=============-->
    <section id="intro" class="s-intro target-section">

        <div class="row intro-contenido">

            <div class="column large-9 mob-full intro-text tama">
            <h3 data-aos="fade-up"
     data-aos-duration="4000">¡Hola! soy Daniel Man</h3>
            <h1 data-aos="fade-up"
     data-aos-duration="3000">
                    Diseñador<br>
                    y Desarrollador Web <br>
                    FullStack
            </h1>
            </div>
 <div class="intro-margen"></div>
            <div class="foto-personal" data-aos="fade-down-right"></div>
    
        </div> 

    </section> 
          <!--==========TERMINA - Sección presentación con mi nombre=============-->

          <!--==========Sección trabajos realizados=============-->
    <section id="trabajo" class="s-trabajo target-section">

        <div class="row heading-block heading-block--center" data-aos="fade-up">
            <div class="column large-full">
                <h2 class="section-heading section-heading--centerbottom titulo">Mis trabajos realizados</h2>
                <p class="sec-desc ">
                    A continuación encontrarás muchos de mis trabajos. haz clic en ellos para verlos
                </p>
            </div>
        </div> 
        <!--CARTAS DE TRABAJOS===============-->

        <div class="masonry-wrap fondo">

            <div class="masonry">
                <div class="grid-sizer"></div>
                <?php
                $item = null; 
                $valor = null; 
                $categorias = controladorPortafolio::mostrarProyectos($item, $valor); 
                foreach($categorias as $key => $value){
                    echo'      <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">
                        <div class="item-folio__thumb ">
                            <a href="'.$value["enlace"].'" class="thumb-link" title="'.$value["title"].'" target="_blank">
                                <img class="magic-hover magic-hover__square " src="'.$value["img"].'" alt="'.$value["alt"].'">
                            </a>    
                        </div>
    
                        <div class="item-folio__text">
                            <h4 class="item-folio__title">
                                '.$value["titulo-grande"].'
                            </h4>
                            <p class="item-folio__cat">
                            '.$value["area"].'
                            </p>
                        </div>
                    </div>
                </div> '; 
                }
                ?>
    

    </section> 
      <!--==========TERMINA - Sección trabajos realizados=============-->

</div>
      
         <!--==========Sección mi experiencia=============-->
            
                     <div class="row heading-block heading-block--center" data-aos="fade-up">
            <div class="column large-full">
                <h2 class="section-heading section-heading--centerbottom titulo">Trabajo & Educación</h2>
               
            </div>
        </div>
              
        <div class="acercade">

            <div class="row acercade__lineatiempo">

            <div class="column large-half tab-full" data-aos="fade-up">
                                <div class="lineatiempo">
                   <?php
                    $item = null; 
                    $valor = null; 
                    $categorias = controladorPortafolio::mostrarTrabajos($item, $valor); 
                    foreach($categorias as $key => $value){
                        if($value["id"]<= 3){
                            echo'<div class="lineatiempo__block">
                            <div class="lineatiempo__bullet"></div>
                            <div class="lineatiempo__header">
                                <p class="lineatiempo__timeframe">'.$value["fecha-trabajo"].'</p>
                                <h3 class="item-title">'.$value["subtitulo"].'</h3>
                                <h5> '.$value["titulo"].'
                                </h5>
                            </div>
                            <div class="lineatiempo__desc">
                                 <p class="padding">'.$value["descripcion"].'
                                    
                                 </p>
                                 <ul class="lista">
                                 '.$value["lista"].'
                            
                                </ul>
                                <img src=" '.$value["img"].'
                                " alt="udemy" data-aos="fade-up"
                            data-aos-anchor-placement="bottom-bottom">
                            
                            </div>
                            </div>'; 
                        }




                    }
                   ?>

</div>
    </div>

    <div class="column large-half tab-full" data-aos="fade-up">
                                <div class="lineatiempo">
                   <?php
                    $item = null; 
                    $valor = null; 
                    $categorias = controladorPortafolio::mostrarTrabajos($item, $valor); 
                    foreach($categorias as $key => $value){
                        if($value["id"]> 3){
                            echo'<div class="lineatiempo__block">
                            <div class="lineatiempo__bullet"></div>
                            <div class="lineatiempo__header">
                                <p class="lineatiempo__timeframe">'.$value["fecha-trabajo"].'</p>
                                <h3 class="item-title">'.$value["subtitulo"].'</h3>
                                <h5> '.$value["titulo"].'
                                </h5>
                            </div>
                            <div class="lineatiempo__desc">
                                 <p class="padding">'.$value["descripcion"].'
                                    
                                 </p>
                                 <ul class="lista">
                                 '.$value["lista"].'
                            
                                </ul>
                                <img src=" '.$value["img"].'
                                " alt="udemy" data-aos="fade-up"
                            data-aos-anchor-placement="bottom-bottom">
                            
                            </div>
                            </div>'; 
                        }




                    }
                   ?>

</div>
    </div>   

            
            </div>

        </div> 
           <!--==========FINAL - Sección mi experiencia=============-->
   
        
              <!--==========Sección testimonial upwork=============-->     
   <section class="s-testimoniales">
    
        <div class="row testimoniales" data-aos="fade-up">

            <div class="column large-full testimoniales__slider">

                <div class="testimoniales__slide">
                    <p>"Jose was a hard worker and spent many hours trying to produce a quality project.
He was always courteous and on time with his promises. I would hire him again for future work especially when wehave dynamic javascript and svg generation to do.
Thank you Jose"</p>
                    <div class="testimoniales__info">
                        <img src="vistas/img/profile_upwork.webp" alt="Author image" class="testimoniales__avatar">
                        <cite class="testimoniales__cite">
                            <strong>Steve Pappas</strong>
                            <span>Cliente, Upwork</span>
                        </cite>
                    </div>
                </div> 

            </div> 

        </div> 

    </section>
             <!--==========FINAL - Sección testimonial upwork=============-->     
   
  
           <!--==========Sección cv en pdf=============-->   
   
        <h2 class="section-heading section-heading--centerbottom title">Visualiza mi CV</h2>
        <p class="descargar-cv">
        <a href="https://www.dropbox.com/s/2z7xqycej0z12zp/cv.pdf?dl=0" target="_blank">Descarga mi cv aquí</a>
        </p>
    <div class="container">
  <div id="embeddedView"></div>
</div>
  <!--==========FINAL - Sección cv en pdf=============-->   
