<?php include 'conexion.php';
 ?>
<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://kit.fontawesome.com/c538ed8188.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/stylo.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;400&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="user">
            <b><h1>Melany Bevacqua</h1><br><h4>Developer Web</h4></b>
            <img src="./assets/img/foto_perfil.jpg" alt="portada melanybevacqua">
            </div>
        <nav class="navbar">
            <ul>
                <li><a href="#home">INICIO</a></li>
                <li><a href="#about">SOBRE MI</a></li>
                <li><a href="#experience">PROYECTOS</a></li>
                <li><a href="#education">EDUCACIÓN</a></li>
                <li><a href="#skills">SKILLS</a></li>
                <li><a href="#contact">CONTACTO</a></li>
            </ul>
        </nav>
    </header>
    <section class="home" id="home">
        <h2>Bienvenidos!</h2>
        <h1><span> Melany Bevacqua</span></h1>
        <h2>Desarroladora Web & Analista de Datos</h2>
        <p>Soy Desarroladora web desde 2020, estoy continuamente capacitandome para adquirir nuevas habilidades de programacion.
        Estoy entuasiasmada por comenzar nuevos proyectos y realizar nuevas tareas que sean un desafio para desarrollarme profesionalmente.
        me adapto rapido a grupos de trabajos y personalmente me considero una persona responsable y carismatica.</p>
        <a href="#about"><button class="b"> SOBRE MI </button></a>
        </section>
        <section class="about" id="about" >
    <h2 class="heading">Sobre <span> mi</span></h2>
    <div class="row">
           <div class="info">
               <h4>Nombre: <span>Melany Bevacqua</span></h4>
               <h4>Edad: <span>29</span></h4>
               <h4>Posición: Estudiante<span></span></h4>
               <h4>Cursando :  <span>Analista Programador Universitario- UNLP</span></h4>
        </div>
        <div class="counter">
            <div class="box">
                <span>3+</span>
                <h3>Trabajando con Codigos</h3>
            </div>
            <div class="box">
                <span>100+</span>
                <h3>Conexiones en LinkedIn</h3>
            </div>
            </div>   
    </div>
</section>
    <section class="experience" id="experience">
        <h1 class="heading"><span>Mi </span>Experiencia</h1>
        <div class="column">
           <img src="./assets/img/BA mult.png" width="150px" height="100px" alt="logoBAMultiplica">
           <div class="info">
               <h3><span>+2 años</span>  en Proyectos FrontEnd HTML, CSS, JS mQuerys y más! en cursos del Gobierno de la Ciudad Autonoma de Buenos Aires, Argentina.</h3>
            </div>
        </div>
        <br>
    </section>
    <section class="Proyects" id="Proyects">
    <div class="container pb-5">
        <h2 class="text-white ">Mis Proyectos</h2>
        <div class ="row row-cols-1 row-cols-md-3 g-4">
            <?php
            foreach($proyectos as $proyecto){ 
                ?>
                <div class="col">
                    <div class="card border border-3 shadow w-100">
                        <a>
                            <img class="card-img-top" width="100" src="imagenes/<?php echo $proyecto['imagen'];?>" alt="">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <?php echo $proyecto['nombre'];?>
                            </h5>
                            <p class="card-text text-dark">
                                <?php echo $proyecto['descripcion'];?>
                            </p>
                            <a href="https://github.com/Melhulandia/Portfolio-MelanyBevacqua"><svg class="svg-inline--fa fa-github" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" role="img" viewBox="0 0 496 512" data-fa-i2svg=""><path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg></a>
                            <a href=""><svg class="svg-inline--fa fa-link" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="link" role="img" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M172.5 131.1C228.1 75.51 320.5 75.51 376.1 131.1C426.1 181.1 433.5 260.8 392.4 318.3L391.3 319.9C381 334.2 361 337.6 346.7 327.3C332.3 317 328.9 297 339.2 282.7L340.3 281.1C363.2 249 359.6 205.1 331.7 177.2C300.3 145.8 249.2 145.8 217.7 177.2L105.5 289.5C73.99 320.1 73.99 372 105.5 403.5C133.3 431.4 177.3 435 209.3 412.1L210.9 410.1C225.3 400.7 245.3 404 255.5 418.4C265.8 432.8 262.5 452.8 248.1 463.1L246.5 464.2C188.1 505.3 110.2 498.7 60.21 448.8C3.741 392.3 3.741 300.7 60.21 244.3L172.5 131.1zM467.5 380C411 436.5 319.5 436.5 263 380C213 330 206.5 251.2 247.6 193.7L248.7 192.1C258.1 177.8 278.1 174.4 293.3 184.7C307.7 194.1 311.1 214.1 300.8 229.3L299.7 230.9C276.8 262.1 280.4 306.9 308.3 334.8C339.7 366.2 390.8 366.2 422.3 334.8L534.5 222.5C566 191 566 139.1 534.5 108.5C506.7 80.63 462.7 76.99 430.7 99.9L429.1 101C414.7 111.3 394.7 107.1 384.5 93.58C374.2 79.2 377.5 59.21 391.9 48.94L393.5 47.82C451 6.731 529.8 13.25 579.8 63.24C636.3 119.7 636.3 211.3 579.8 267.7L467.5 380z" data-darkreader-inline-fill=""></path></svg></a>
                            <a href=""></a><!-- <a href="<?php echo $proyecto['index_admin.php'];?>">Ingresa a la pagina</a>
                            <a href="<?php echo $proyecto['https://github.com/Melhulandia/Portfolio-MelanyBevacqua'];?>">Ingresa al GitHub</a>--></div>
                    </div>
                </div>
            <?php 
            } 
            ?>
        </div>
    </div>
    </section>
    <section class="education" id="education">
       <h1 class="heading">Estudios:</h1> 
       <div class="container">
           <div class="box">
               <i class="fa fa-graduacion-cap"></i>
        <span><b>2011</b></span>
        <h3>Promedio: 8.35/10 </h3>
        <p>Bachillerato orientado a Ciencias Naturales - "EMN°2 Thompson"</p>
       </div>
       <div class="box">
        <i class="fa fa-graduation-cap"></i>
        <span><b>2021</b></span>
        <h3>Promedio: 7/9</h3>
        <p>Desarrollador FullStack orientado a objetos-"Argentina Programa"</p>
       </div>
       <div class="box">
        <i class="fa fa-graduation-cap"></i>
        <span><b>2022</b></span>
        <h3>Promedio: 91/100 </h3>
        <p>Data Analitics - Coursera ("Google")</p>
       </div>
       <div class="box">
           <i class="fa fa-graduation-cap"></i>
           <span><b>2022</b></span>
           <h3>Promedio: 30/30</h3>
           <p>Desarrollador FrontEnd & Inteligencia Emosional - "BA Mult. 2.0"</p>
        </div>
       <div class="box">
           <i class="fa fa-graduation-cap"></i>
           <span><b>2023</b></span>
        <h3>Promedio: en curso</h3>
        <p>FrontEnd PHP - "Codo a Codo" (en curso)</p>
       </div>
       </div>
    </section>
    <section class="skills" id="skills">
        <h2 class="heading"><span>Mis </span>Skills</h2>
        <div class="row">
            <div class="content">
                <div class="box">
                    <img src="./assets/img/python.png" alt="logoPython">
                    <h3>Python</h3>
                </div>
                <div class="box">
                    <img src="./assets/img/java.png" alt="logoJavaS">
                    <h3>JavaScript</h3>
                    </div>
                    <div class="box">
                        <img src="./assets/img/html.png" alt="logoHTML">
                    <h3>HTML 5</h3>
                    </div>
                    <div class="box">
                    <img src="./assets/img/css.png" alt="logoCSS">
                    <h3>CSS</h3>
                </div>
                <div class="box">
                    <img src="./assets/img/github.png" alt="logoGitHub">
                    <h3>GitHub</h3>
                </div>
                    <div class="box">
                        <img src="./assets/img/R.png" alt="logoMySQL">
                        <h3>MySQL</h3>
                    </div>
                <div class="box">
                <img src="./assets/img/Bootstrap.png" alt="logoBootstrap">
                <h3>Bootstrap</h3>
                     </div>
                     </div>
        </div>
    </section>
    <section class="contact" id="contact" >
        <h1 class="heading">Contactame</h1>
<div class="row">
    <div class="content">
        <h3 class="title">INFORMACION DE CONTACTO</h3>
        <div class="info">
            <h3><i class="fa fa-envelope">melanyrbevacqua@gmail.com</i></h3>
            <h3><i class="fa fa-phone">+54 11 5709 5320</i></h3>
            <h3><i class="fa fa-map-pin">Buenos Aires, Argentina</i></h3>
                    </div>
            </div>
        <form action="enviar.php" method='post' class="form">
            <input type="text" placeholder="nombre">
            <input type="email" placeholder="email">
            <textarea name="" id="" cols="30" rows="10" class="box_message" placeholder="Mensaje" requerid ></textarea>
            <button type="submit" class="b btn btn-light">Enviar<i class="fa fa-paper-plane"></i></button>
        </form>
    <footer>
        <div class="credit">
            <h3>Melany Bevacqua</h3>
            <div class="box">
            <a href="https://www.instagram.com/melhulandia/"><img src="./assets/img/logoIG.png" alt="logoInstagram"></a>
            <a href="https://www.linkedin.com/in/melanybevacqua"><img src="./assets/img/linkedin.png" alt="logoLinkedin"></a>
            <a href="https://github.com/Melhulandia"><img src="./assets/img/github.png" alt="logoGitHub"></a>
        </div>
        </div>
    </footer>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="./js/index.js">
</body>
</html>
