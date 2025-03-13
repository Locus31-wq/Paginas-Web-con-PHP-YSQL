<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel=" stylesheet" href="style.css">
</head>
<body>

    <header class="header">

        <div class="menu container">

            <a href="#" class="logo">Estaba vacío, imagino que va un logo</a>

                <input type="checkbox" id="menu"/>

                <label for="menu">
                    <img src="Imagenes de Pagina/menu.png" class="menu-icono" alt="menu">
                </label>

                <nav class="navbar">

                    <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="vistas/nosotros.php">Nosotros</a></li>
                    <li><a href="#">Servicio</a></li>
                    <li><a href="#">Contacto</a></li>
                    </ul>

                </nav>
        </div>
        
    <div class="header-content container">
            <div class="header-txt">
                <h1>Medical center</h1>
                    <p>
                    Bienvenidos a [Nombre del Centro Médico]

            En [Nombre del Centro Médico], nos dedicamos a brindar atención integral y de calidad a nuestros pacientes, ofreciendo servicios especializados en ginecología, cardiología, dermatología y pediatría. Nuestro equipo de profesionales altamente capacitados está comprometido con tu salud y bienestar, proporcionando un ambiente cálido y acogedor para que te sientas cómodo durante cada visita.

            Ginecología: Ofrecemos un enfoque integral en la salud de la mujer, desde chequeos rutinarios hasta atención especializada en embarazo y menopausia. Nuestro objetivo es acompañarte en cada etapa de tu vida.

            Cardiología: Nuestro equipo de cardiólogos se enfoca en la prevención, diagnóstico y tratamiento de enfermedades del corazón, utilizando tecnología de vanguardia para garantizar una atención precisa y efectiva.

           Dermatología: Cuidamos de tu piel con tratamientos personalizados para diversas condiciones dermatológicas. Ya sea que necesites un chequeo de rutina o tratamiento para problemas específicos, estamos aquí para ayudarte.

            Pediatría: En [Nombre del Centro Médico], entendemos la importancia de la salud infantil. Nuestros pediatras están dedicados a proporcionar atención cariñosa y profesional a los más pequeños, asegurando su crecimiento y desarrollo saludable.

            Te invitamos a visitarnos y experimentar un enfoque integral en salud, donde cada paciente es tratado con respeto y dedicación. ¡Tu bienestar es nuestra prioridad!


                    </p>
                <a href="#" class="btn-1">informacion</a>
            </div>
        <div class="header-img">
            <img src="Imagenes de Pagina/left.png"alt="">
        </div>
    </div>

    

    </header>

    <section class="about container">
        <div class="about-img">
            <img src="images/about.png" alt="">

        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quasi expedita eius iure
                 perferendis natus officia sunt adipisci tenetur! Soluta nisi recusandae iste sunt, porro aliquid 
                 veritatis voluptates non optio.
            </p>
            <br>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, dignissimos praesentium facilis 
                quam dolorum ad quia id harum facere tenetur deleniti cumque, iusto veritatis at quasi consectetur 
                ipsa ducimus asperiores.
            </p>
        </div>

    </section>

    <main class="servicio">
        <h2>Servicio</h2>
    <div class="servicio-1">
        <i class="fa-sharp fa-solid fa-hospital-user"></i>
        <h3>pediatria</h3>
    </div>

    <div class="servicio-1">
        <i class="fa-sharp fa-solid fa-stehoscope"></i>
        <h3>ginecologia</h3>
    </div>

    <div class="servicio-1">
        <i class="fa-sharp fa-solid fa-bad-pulse"></i>
        <h3>dermatologia</h3>
    </div>



    <div class="servicio-1">
    <i class="fa-sharp fa-solid fa-hospital-user"></i>
    <h3>cardiologia</h3>
</div>


    </main>

    <section class="formulario container">  
        <form method="post" autocomplete="off">
            <h2>Agenda Consulta</h2>    
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y apellido">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono celular">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo">
                    <i class="fa-solid fa-envelope"></i>
                
                </div>

                <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la conculta"></textarea>
                </div>
                <input type="submit" name="send" class="btn" onclick="myFunction()">
            </div>
        </form>
    </section>
    
    <footer class="footer">
        <div class="footer-content container">

        
        <div class="link">
            <ul>

            <li><a href="#">Inicio</a></li>
            <li><a href="#">Nosotros</a></li>
            <li><a href="#">Servicio</a></li>
            <li><a href="#">Contacto</a></li>
            </ul>
            </div>
        </div>
    </footer>

    <?php
    include("send.php");
    ?>

    <script>

        function myFunction(){
            window.location.href="http://localhost/pagina";
        }
    </script>
</body>
</html>