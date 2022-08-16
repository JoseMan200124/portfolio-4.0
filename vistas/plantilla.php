<!DOCTYPE html>
<html lang="es">
<head>
     
     <!--Etiquetas maqueta html-->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Portafolio</title>
      <?php
      $url = ruta::ctrRuta();
      ?>
      <link rel="shortcut icon" href="<?php echo $url;?>vistas/img/hacker.svg">
      <meta name="description" content="Hola! mi nombre es Daniel Man, diseñador y programador fullstack, disfruta de mi portafolio"/>  
    <meta name="author" content="https://imdanielman.com"/>  
    <meta property="og:type" content="Sitio web" />
    <meta property="og:title" content="Portafolio web" />
    <meta property="og:description" content="Portafolio web diseñado para demostrar mis habilidades como fullstack" />
    <meta property="og:image" content="vistas/img/hacker.svg" />
    <meta property="og:url" content="permalink" />
    <meta name="robots" content="index, follow"/>
      <!--Diseño de todo el sitio-->
      <link rel="stylesheet" href="<?php echo $url;?>vistas/css/normalize.css">
      <link rel="stylesheet" href="<?php echo $url;?>vistas/css/style.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--Fuente-->
<link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&display=swap" rel="stylesheet"/>
      <!-- jquery -->
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
     
      <!-- tweenmaxgsap -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>

<?php
$ruta = null; 
$inicio = true; 
if(isset($_GET["ruta"])){
      $ruta = $_GET["ruta"];
      if($ruta == "eng"){
            include "modulos/eng/header.php"; 
            include "modulos/eng/landing.php"; 
            include "modulos/eng/footer.php"; 
            $inicio = false; 
      }
      else if($ruta == "esp"){
            include "modulos/header.php"; 
include "modulos/landing.php"; 
include "modulos/footer.php"; 
$inicio = false; 
      }else{
            include "modulos/header.php"; 
            include "modulos/footer.php"; 

      }
}
if($inicio){
      include "modulos/header.php"; 
      include "modulos/landing.php"; 
      include "modulos/footer.php"; 
}

?>
</body

<script type="text/javascript" src="vistas/js/circletype.js"></script>
<script>
      
      const circleType = new CircleType(document.getElementById('circulo'));   

      TweenMax.from(".artist", 2, {
      delay: 5.4,
      opacity: 0,
      y: 20,
      ease: Expo.easeInOut
      });

      TweenMax.from(".watch", 2, {
      delay: 5.5,
      opacity: 0,
      y: 20,
      ease: Expo.easeInOut
      });

      TweenMax.from(".menu", 2, {
      delay: 5.6,
      opacity: 0,
      y: 20,
      ease: Expo.easeInOut
      });

      TweenMax.from(".rotatethis", 2, {
      delay: 6,
      opacity: 0,
      ease: Expo.easeInOut
      });

      TweenMax.staggerFrom(".social-media ul li", 2, {
      delay: 5.7,
      opacity: 0,
      y: 20,
      ease: Expo.easeInOut
      }, 0.1);

      TweenMax.staggerFrom(".listensong ul li", 2, {
      delay: 5.9,
      opacity: 0,
      y: 20,
      ease: Expo.easeInOut
      }, 0.1);  

      TweenLite.fromTo(".hero-title h1", 0.3, {
            x:-6,
            y:2,
            opacity: 0,
      }, 
      {
            delay: 5,
            x: 6,
            y: -2,
            opacity: 1,
            ease:RoughEase.ease.config({
                  strength:8,
                  points:40, 
                  template:Linear.easeNone, 
                  randomize:false}),
            clearProps:"all"
      });

      TweenLite.fromTo(".hero-title p", 0.3, {
            x:-6,
            y:2,
            opacity: 0,
      }, 
      {
            delay: 9,
            x: 6,
            y: -2,
            opacity: 1,
            ease:RoughEase.ease.config({
                  strength:8,
                  points:40, 
                  template:Linear.easeNone, 
                  randomize:false}),
            clearProps:"all"
      });

</script>
<!--==================================ETIQUETAS JS==========================================-->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="vistas/js/magicMouse.js"></script>
<script src="vistas/js/pretify.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!--Magic Mouse diseño del cursor-->

<script>
options = {
  "cursorOuter": "circle-basic",
  "hoverEffect": "circle-move",
  "hoverItemMove": false,
  "defaultCursor": false,
  "outerWidth": 30,
  "outerHeight": 30
}
magicMouse(options);
</script>
    
    <!--Inicialización transiciones por scroll-->
<script>
  AOS.init();
</script>


    
     <!--pdf API-->
    <script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
    <script src="vistas/js/pdf.js"></script>
    </html>
