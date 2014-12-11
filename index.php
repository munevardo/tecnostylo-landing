<!DOCTYPE html>
<?Php
if($_COOKIE['usuario']<>"")
{
 $ce=$_COOKIE['usuario'];
 $cedula=$_COOKIE['peluqueria'];
 echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=http://tecnostylo.com/pw3/index.php?cedula=$cedula'>";
} 
else 
{ 
 echo "<meta name='viewport' content='width=device-width, initial-scale=1'/>";
 echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=vi.php'>";
}
include('conectar.php');
?>
<html>
<head>
    <title>tecnostylo tu centro estetico en tus manos</title>
    <meta charset="utf-8">
   <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="description" content="Tecno stylo la aplicación que te conecta ocn tu centro estetico, gimnacio o spa en la palma de tu mano"/>
    <meta name="author" content="joseluismunevar@gmail.com">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
   
   <link rel="stylesheet" type="text/css" href="css/estilos.css">
   <!--<script src="js/video.js" type="text/javascript"></script>-->

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jssor.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>

    <script type="text/javascript" src="js/responsivemobilemenu.js"></script>
    <link rel="stylesheet" href="css/responsivemobilemenu.css" type="text/css"/>


    <link rel="stylesheet" href="css/colorbox.css"/>
    <script src="js/jquery.colorbox.js"></script>
</head>
<body>
<img src="img/logo.png" alt="logo de tecno stylo"style="width: 180px; display:inherit; margin:0 auto;"/>
 <nav class='rmm' data-menu-style = "minimal">
            <ul>
                <li><a href='#land1'>Home</a></li>
                <li><a  class='inline' href="#inline_content">Privacidad</a></li>
                <li><a class='inline2' href="#inline_content2">Quienes Somos</a></li>
                 <li><a href='#land4'>Planes</a></li> 
                <li><a href='#land5'>Contactanos</a></li> 
            </ul>
</nav>


<!--Navegador de esferas Style -->
    <style>
        .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
            background: url(img/b21.png) no-repeat;
            overflow: hidden;
            cursor: pointer;
        }

        .jssorb21 div {
            background-position: -5px -5px;
        }

            .jssorb21 div:hover, .jssorb21 .av:hover {
                background-position: -35px -5px;
            }

        .jssorb21 .av {
            background-position: -65px -5px;
        }

        .jssorb21 .dn, .jssorb21 .dn:hover {
            background-position: -95px -5px;
        }
    </style>

    <!-- estilos de la flecha de navegacion -->
    <style>
        .jssora21l, .jssora21r, .jssora21ldn, .jssora21rdn {
            position: absolute;
            cursor: pointer;
            display: block;
            background: url(img/a21.png) center center no-repeat;
            overflow: hidden;
        }

        .jssora21l {
            background-position: -3px -33px;
        }

        .jssora21r {
            background-position: -63px -33px;
        }

        .jssora21l:hover {
            background-position: -123px -33px;
        }

        .jssora21r:hover {
            background-position: -183px -33px;
        }

        .jssora21ldn {
            background-position: -243px -33px;
        }

        .jssora21rdn {
            background-position: -303px -33px;
        }
    </style>
<section id="land1">
<!--query opciones del slide-->
    <script>
        jQuery(document).ready(function ($) {
            var _CaptionTransitions = [];
            _CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
            _CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
            _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };

            var options = {
                $FillMode: 2,                                      
                $AutoPlay: true,  //[Optional]  autoplay del slide
                $AutoPlayInterval: 49000,  //[Optional] Interval (in millisegundos) tiempo que tarda
                $PauseOnHover: 1, //Ya sea para hacer una pausa al pasar el mouse si un deslizador es de juego automático, 0 sin pausa, una pausa para escritorio, 2 pausa para el dispositivo táctil, de 3 de pausa para el escritorio y el dispositivo táctil, 4 congelación para el escritorio, 8 congelación para el dispositivo táctil, 12 de congelación para escritorio y dispositivo táctil, el valor predeterminado es 1
                $ArrowKeyNavigation: true, 
                $SlideEasing: $JssorEasing$.$EaseOutQuint,
               
               $SlideDuration: 1200,
                $MinDragOffsetToSlide: 20,   
                $SlideSpacing: 0, 					               
                $DisplayPieces: 1,                                  
                $ParkingPosition: 0,                                
                $UISearchMode: 1,                                   
                $PlayOrientation: 1,                                
                $DragOrientation: 1,                                
                
                $BulletNavigatorOptions: { 
                    $Class: $JssorBulletNavigator$,  
                    $ChanceToShow: 2,      
                    $AutoCenter: 1,                              
                    $Steps: 1,                                     
                    $Lanes: 1,                  
                    $SpacingX: 8,             
                    $SpacingY: 8,                 
                    $Orientation: 1                     
                },
                $ArrowNavigatorOptions: {            
                    $Class: $JssorArrowNavigator$,    
                    $ChanceToShow: 1,                    
                    $AutoCenter: 2,                           
                    $Steps: 1                                      
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //codigo responsive 
            
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
                $(window).bind("orientationchange", ScaleSlider);
            }
            //codigo responsivo :)

 });
    </script>

    <script>
            $(document).ready(function(){
                //codigo ligth box quienes somos y politicas. 
                $(".inline").colorbox({inline:true, width:"50%"});
                 $(".inline2").colorbox({inline:true, width:"50%"});
                
            });
    </script>
    
    <div id="slider1_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1200px; height: 780px; overflow: hidden;">
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
          
        </div>
		
		<!------------- Slides Container ------------>
        <div data-u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width:1300px;height: 1300px; overflow: hidden;">
           <div>
            <img data-u="image" src="img/lading.png" alt="mujer tecno stylo"/>
            <div style="position: static; width:auto; height: 190px; padding: 15px; line-height: 80px; font-size: 45px; font-weight: bold;color: #030104; margin-left:6%;">¿Que es Tecnostylo?
            </div>
            <div style="position: absolute; width: 480px; height: 120px;  top:10px; left: 30px; padding: 5px; text-align: left; font-size: 20px;color: #FFFFFF;">
           <div id="#reproductorMarco">
                <video class=".myHTMLvideo" width="500" height="420" preload controls>
                  <source src="img/movie.mp4" type="video/mp4">
                  <source src="img/movie.webm" type="video/webm">
                            tu navegador no soporta este video
                </video>
                                     
            </div>
            </div>            
            </div>
            <div>
                <img data-u="image" src="img/blue.jpg" alt="segundo landign tegno stylo masculino"/>
                <div style="font-family: 'Lato', sans-serif; position: absolute; width: 480px; height: 120px; top: 80px; left:30px; padding: 5px; text-align: left; line-height: 45px;font-size: 49px; color:#030104;font-weight: bold;">
                La Plataforma que te acerca a tu centro 
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 200px; left: 10px; padding: 5px; text-align: left; line-height: 28px; font-size: 25px; color: #030104;">
                <p>
                TecnoStylo tu centro de belleza al alcance de tu
                mano. Descarga la aplicación gratis para que disfrutes
                de las novedades, promociones y eventos que tu
                centro de belleza trae para ti.
                </p>
                </div>
            </div>
        </div>
        <!-- Bullet Navigator Skin Begin -->

        <!-- bullet navigator container -->
        <div data-u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
        </div>
        <!-- Bullet Navigator Skin End -->
        <!-- Arrow Left -->
        <span data-u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span data-u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        <img src="img/mobile-hand.png" alt="mano application" id="mano">
        <div id="call-to-action">
            <a href="https://play.google.com/store/apps/details?id=com.conduit.app_0c6edfd83da74a3094223bb84e017ba3.app" TARGET="_blank" ><img src="img/android.png"alt="visitanos android store"/></a tarjet="_blank">
        
            <a href ="https://itunes.apple.com/es/app/tecnostylo/id912333404?mt=8" TARGET="_blank"><img src="img/apple.png" alt="imagen tecno stylo appstore"/></a>

            
         </div>

    </div>
</section>	
	
	<section id="land2">
    <img src="img/logo-small.png" class="logo-small" alt="logo pequeño tecnostylo"/>
    <h1>¡Tecnostylo!... tu centro de belleza al alcance de tu mano”</h1>

    <section id="descript-left">
    <article class="descript">
        <img src="img/puntos.png" alt="imagen de puntos por usuario registrado" class="img-icon"/>
     <p><strong>Gana siempre:</strong><br>
    Cada vez que utilices los servicios acumulas puntos para que los cambies en tu centro.
    </p>
    </article>
    <article class="descript">
        <img src="img/redes.png" alt="administra tus redes sociales en tecnostylo" class="img-icon"/>
    <p><strong>Redes sociales:</strong><br>
    Acede a todas las redes sociales de tu centro desde la aplicación, visualiza fotos, eventos, promociones todo desde un mismo lugar.
    </p>
    </article>
    <article class="descript">
        <img src="img/247.png" alt="imagen las 24 horas de servicio" class="img-icon"/>
    <p><strong>Tu centro permanecerá las 24 horas abierto:</strong><br>
    Se te olvido pedir tu cita y tu centro no contesta o esta cerrado, no te preocupes puedes reservar tu cita desde cualquier lugar y hora que desees.
    </p>
    </article>   
    </section>        
		<figure class="phonemocap">    
		<img src="img/app.png" id="phone"  alt="mocap de la aplicacion tecnostylo"/>
       </figure>

<section id="descript-rigth">
    <article class="descript">
    <img src="img/calendario.png" alt="imagen de`puntos" class="img-icon"/>
      </p><p><strong>Agenda:</strong><br>
            Escoge tu cita para el día y la hora que quieras y con el profesional que más te guste.
            </p>
    </article>
    <article class="descript">
    <img src="img/eventos.png" alt="imagen de`puntos" class="img-icon"/>
        <p><strong>Promociones y Eventos:</strong><br>
            Eres el primero en recibir todas las promociones, novedades y eventos que tu centro tiene para ti y aprovecharlos al máximo.
            </p>
    </article>

    <article class="descript">
    <img src="img/share.png" alt="imagen de`puntos" class="img-icon"/>
    <p><strong>Invita y gana:</strong><br>
           Invita a todos tus amigos a disfrutar los servicios de tu centro,entre más amigos invites más ganas.
            </p></article>
</section>      
</section>

	
    <section id="land3">
    <div style="display:none">
    <div id='inline_content2' style='padding:10px; background:#fff; text-align:center;'>   
     <p><strong>Quiénes Somos</strong></p>
            <p>Somos una organización especializada en Soluciones y aplicaciones para dispositivos Móviles, con tecnología de última generación y de fácil uso, fundada en Medellín (Colombia) y que busca consolidarse en el mercado; nos caracterizamos por mantener un constante estilo innovador ofreciendo un sistemas de mejora continua en la gestión de calidad y adaptándonos a las necesidades de nuestros clientes, permitiendo a los centros de belleza y/o SPA  la gestión, control y fidelización de clientes; agilizando el servicio y mejora de procesos, aumentando la eficiencia y productividad de sus operaciones y empleados, viéndose esto  reflejado en el incremento notable sus ingresos.</p>
            
                <p>Gracias por acceder a la aplicación de Tecnostylo.com;  Nosotros respetamos su privacidad y su información personal. Nuestra Política de Privacidad también explica las medidas que hemos tomado para asegurar su información personal. Por último, esta política de privacidad explica los procedimientos que seguimos frente a la recopilación, uso y divulgación de su información personal.</p>
                <p>
                La protección de datos es  cuestión de confianza y privacidad, por ello para nosotros es muy importante mantener tus datos seguros. Por lo tanto, utilizaremos solamente su nombre y la información referente a Ud. bajo los términos previstos en nuestra Política de Privacidad. Sólo mantendremos su información durante el tiempo que ustedes consideren necesario y podrán pedir que sean borrados en el momento en que ustedes lo requieran, también podrán  visitar el sitio y navegar sin tener que proporcionar datos personales pero le sugerimos que se registren con el fin de poder empezar a gozar de todos los beneficios, descuentos, promociones, regalos, acumulación de puntos etc. que se realicen de acuerdo a los términos y condiciones que cada centro estipule conveniente.
                </p>
                <p>
                 Nuestro proyecto salió ganador de la de la convocatoria #32 de Fondo Emprender, también contamos  con el apoyo de Tecnoparque SENA, Nodo Medellín.   
                </p>
                <strong>Valores</strong>
                <p>Nuestros Empleados se caracterizan por tener un alto grado de compromiso innovador, solidaridad y trabajo en equipo, siendo socialmente responsables con el medio ambiente.
                </p><br><br>
                <strong>Misión</strong>
                <p>
                 Somos una organización enfocada a  la investigación, la innovación  y el desarrollo de tecnología centrada en la generación de conocimientos y habilidades para la mejora continua, ofreciendo servicios de calidad orientada a responder oportunamente las necesidades de nuestros clientes, estando atentos a los cambios constantes del mercado.   
                </p>
                <strong>Visión</strong>
                <p>Ser en el 2015 la organización más innovadora de servicios tecnológicos reconocida en el mercado Latino por su alto compromiso, valores éticos, calidad humana efectiva y claramente perceptible por sus clientes, siendo administrada por  un equipo de profesionales que siempre están en continuo aprendizaje.</p>
    </div>
    </div>   
    <!-- This contains the hidden content for inline calls -->
        <div style='display:none'>
            <div id='inline_content' style='padding:10px; background:#fff;text-align:center;'>
            <p><strong>POLITICAS DE PRIVACIDAD:</strong></p>
            <p>Tecnostylo.com  te ofrece una experiencia única y diferente con el propósito de tener una relación directa y personalizada,  además de conocerte mucho mejor y comunicarte sobre productos y servicios que pueden ser de su interés.</p>
            
            <p>Gracias por acceder a la aplicación de Tecnostylo.com;  Nosotros respetamos su privacidad y su información personal. Nuestra Política de Privacidad también explica las medidas que hemos tomado para asegurar su información personal. Por último, esta política de privacidad explica los procedimientos que seguimos frente a la recopilación, uso y divulgación de su información personal.</p>
            <p>
            La protección de datos es  cuestión de confianza y privacidad, por ello para nosotros es muy importante mantener tus datos seguros. Por lo tanto, utilizaremos solamente su nombre y la información referente a Ud. bajo los términos previstos en nuestra Política de Privacidad. Sólo mantendremos su información durante el tiempo que ustedes consideren necesario y podrán pedir que sean borrados en el momento en que ustedes lo requieran, también podrán  visitar el sitio y navegar sin tener que proporcionar datos personales pero le sugerimos que se registren con el fin de poder empezar a gozar de todos los beneficios, descuentos, promociones, regalos, acumulación de puntos etc. que se realicen de acuerdo a los términos y condiciones que cada centro estipule conveniente.
            </p>
            <strong>Los Datos Que Recogemos</strong>
            <p>
            Los datos que recogemos son: nombre, sexo,  fecha de nacimiento, dirección de correo electrónico, dirección de entrega, número de teléfono,  y número de teléfono móvil; con esto pretendemos acercarlos más a su centro preferido y que empiece a gozar de todos los beneficios que este ha diseñado para usted desde nuestro sitio. También con el fin de poderlos conocer mucho más y enviarle información sobre los productos y servicios bien sea por correo electrónico, mensajes de texto (SMS, MMS), por medio telefónico o por cualquier medio de comunicación existente o por existir, en caso de no requerir alguna comunicación por alguno de los medios anteriores informados puede informarlo en cualquier momento.
            </p>
            <strong>Promociones</strong>
            <p>
            La realización de promociones se hará directamente desde los centros de belleza que se encuentren afiliados a nuestra aplicación, y bajo las condiciones y restricciones que los centros estipulen necesarias, además serán  los encargados de realizar dichas promociones entre los clientes que se hayan registrado en la base de datos de cada centro en particular.             
            </p><br>
            <strong>Terceros Y Enlaces</strong>
            <p>Podemos transmitir sus datos a otras empresas de nuestro grupo. También podemos proporcionar su información a nuestros agentes y subcontratistas para que nos ayuden con cualquiera de las funciones mencionadas en nuestra Política de Privacidad. Por ejemplo, podemos utilizar a terceros para que nos ayuden con la entrega de promociones, de productos, regalos  servicios entre otros.</p><br>
            <strong>Cookies</strong>

            <p>
            Las cookies son pequeños archivos de texto que identifican a su computadora en nuestro servidor como un usuario único. Las cookies se pueden utilizar para reconocer su dirección de protocolo de Internet, lo que le ahorrará tiempo mientras se encuentra en el Sitio o si quiere entrar a él en el futuro. Sólo utilizamos cookies para su comodidad en el uso del sitio (por ejemplo, para recordar quién es Ud.)           
            </p><br>
            <strong>Seguridad</strong>
            <p>
            Poseemos medidas técnicas y de seguridad para evitar  la pérdida accidental  de datos,  destrucción u ocurrencia de daños a su información. Cuando se recogen datos a través del Sitio, recogemos sus datos personales en un servidor seguro. Nosotros usamos programas de protección en nuestros servidores. Mantenemos las salvaguardias físicas, electrónicas y de procedimiento en relación con la recogida, almacenamiento y divulgación de su información. Nuestros procedimientos de seguridad significan que en ocasiones podremos solicitarle una prueba de identidad antes de revelar información personal. Esto con el fin de protegerlo a usted y al centro para mantener las bases de datos seguras    
            </p>
            <strong>Sus Derechos</strong>
            <p>
            Usted tiene el derecho de solicitar acceso a los datos personales que podamos tener o procesar, Ud. tiene el derecho de exigirnos a corregir cualquier inexactitud en los datos de forma gratuita y en cualquier momento, usted también tiene derecho a pedirnos que eliminemos sus datos de nuestra base de datos. Su información personal se procesa manteniendo altos estándares de seguridad y protección tanto física como tecnológica.
            </p>
            
            </div>
        </div>
        <div class="esfera">
            <br><br><a  class='inline' href="#inline_content">Políticas</a>
        </div>
         <div class="esfera" style="margin-left:75px;">
            <br><a href="../capilar/hairecare.html">Linea de productos</a>
        </div>
        <div class="esfera" style="margin-left:75px;">
            <br><a class='inline2' href="#inline_content2">Quiénes somos</a>
        </div>
    </section>
    <section id="land4">
<article id="plan-container">
    <h2>Empieza a ser parte de nuestra comunidad.</h2>
    
    <div id="basic">
        <div class="blue"><p><em>Basico</em></p></div>
            <p>
                Agenda Centro<br>
                8  Fotos de Galería<br>
                Administrar Servicios<br>
                Cuadre de Caja<br>
                (sin descarga de Archivo)
            </p>
            <a href="basic.html"><div class="btn-susucribete">suscribete</div></a>
    </div>
    <div id="gold">
        <div class="gold-color"><p><em>Gold</em></p></div>
            <p>
                Agenda Centro<br>
                Administrar Turnos<br>
                15  Fotos de Galería<br>
                Eventos Especiales<br>
                Cumpleaños del Día
            </p>
             <a href="gold.html"><div class="btn-susucribete">suscribete</div></a>
    </div>

    <div id="premiun">
        <div class="platinum"><p><em>Premiun</em></p></div>
            <p>
                Agenda Centro<br>
                Administrar Turnos<br>
                Redes Sociales<br>
                Cuadre de Caja<br>
                Metatags
            </p>
            <a href="premium.html"><div class="btn-susucribete">suscribete</div></a>
    </div>

</article>
<article id="social-aprove">
        <figure>
            <img src="img/personaje1.png" alt="personaje1">
        </figure>
         <p>
            <i>"Excelente aplicación, puedo manejar mi todo negocio desde aquí ."<i>
        </p>
         <figure>
            <img src="img/personaje2.png" alt="personaje2">
        </figure>
        <p>
            <i>"Tengo todos mis negocios conectados y los manejo desde mi celular."<i>
        </p>
         
         <figure>
            <img src="img/personaje3.png" alt="personaje3">
        </figure>
         <p> 
            <i>"Ahora tengo control de mi flujo de caja y mis ventas de cada día. "<i>
        </p>
</article>

    </section>

    <section id="land5">
      <article id="descript-contacto">
      <h4 style="font-size:30px;">Contactanos</h4>
      </article>
            <form>
             <h5>Te escuchamos!</h4> 
                
                 <LABEL for="nombre">Nombre: </LABEL>
                  <INPUT type="text" id="nombre"><BR>
                 <LABEL for="email">Email: </LABEL>
              <INPUT type="text" id="email"><BR>
              <BR>
                <LABEL for="email">Mensaje: </LABEL>
                <br>
              <textarea id="mensaje" rows="3" cols="35">
                </textarea><br><br>
            
        <INPUT type="submit" value="Enviar" class="sumbmit">
        
        </form>
        
       
 <img src="img/contacto.png" id="img-contacto" alt="imagen contactanos">
    </section>

    
  

    <footer>
        <div id="footer-pitch">
            <figure>
            <img src="img/logo-small.png" class="logo-small" alt="logo pequeño">
            </figure>
            
            <p>"the best applications for your beuty center"</p>
           
        </div>
            <div id="enlaces">

            <img src="img/fonade.png" alt="fondo nacional de ahorro">
            <img src="img/sena.png" alt="sena tecnoaprque nodo medellin">
            <img src="img/colombia.png" alt="republica de colombia">

            <a href="https://play.google.com/store/apps/details?id=com.conduit.app_0c6edfd83da74a3094223bb84e017ba3.app"><img src="img/android.png" alt="visitanos android store"/></a>
            <a href="https://itunes.apple.com/es/app/tecnostylo/id912333404?mt=8"><img src="img/apple.png"alt="visitanos en appsstore"/></a>

            </div>
    </footer>
</body>
</html>