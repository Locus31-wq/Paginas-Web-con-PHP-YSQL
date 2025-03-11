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
            <a href="#" classc"logo".logo</a>
                <input type="checkbox" id="menu"/>
                <label for="menu">
                    <img src="Imagenes de Pagina/menu.png" class="menu-icono" alt="menu">
                </label>
                <nav class="navbar">
                    <ul>

                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicio</a></li>
                    <li><a href="#">Contacto</a></li>

                </u>
                </nav>
        </div>
        
     <div class="header-content container">
          <div class="header-txt"
        <h1>Medical center</h1>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, amet necessitatibus? Odit
             facilis ipsam error sit nihil consequatur aliquam? Dolor 
             minima, error vel veniam quidem nesciunt distinctio eum corrupti hic?

        </p>
        <a href="#" class="btn-1">informacion</a>
        </div>
        <div class="header-img">
            <img src="Imagenes de Pagina/left.png"alt="";
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
        <i class="fa-sharp" fa-solid fa-hospital-user"></i>
        <h3>pediatria</h3>
    </div>

    <div class="servicio-1">
        <i class="fa-sharp" fa-solid fa-stehoscope"></i>
        <h3>ginecologia</h3>
    </div>

    <div class="servicio-1">
        <i class="fa-sharp" fa-solid fa-bad-pulse"></i>
        <h3>dermatologia</h3>
    </div>



    <div class="servicio-1">
    <i class="fa-sharp" fa-solid fa-hospital-user"></i>
    <h3>cardiologia</h3>
</div>


    </main>

    <section class="formulario container">  
        <form mathod="post" autocomplete="off">
            <h2>Agenda Consulta</h2>    
            <div class="input-group">
                <div class="input-container">
                    <input tyep"text" name="name" placeholder="Nombe y apellido">
                    <i class="fa-solid fa phone"></i>
                </div>

                <div class="input-container">
                    <input type="tel" nname="phone" placeholder="Telefono celular">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <input type "email" name="email" placeholder="Correo">
                    <i class="fa-solid fa-envelope"></i>
                
                </div>

                <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la conculta"></textarea>
                </div>
                <input type="submit" name="send" class="btn" onclick="myFuntion()">
            </div>
        </form>
    </section>
    
    <footer class "fogter">
        <div class="footer-content container">

        
        <div class "link">
            <ul>

            <li><<a href="#">Inicio</a></li>
            <li><<a href="#">Nosotros</a></li>
            <li><<a href="#">Servicio</a></li>
            <li><<a href="#">Contacto</a></li>
            </ul>
            </div>
        </div>
    </footer>

    <?php
    include("send.php");
    ?>

    <scrip>

        funtion myFuction(){
            windon.location.href="http://localhost/pagina"
        }
    </scrip>
</body>
</html>