<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>CodeMid</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/63e2dea6dc.js"></script>
    <!-- Estilos propios -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="preheader" id="home">
        <div class="infos d-flex">
            <div class="info">
                <i class="fa fa-mobile-alt" aria-hidden="true"></i>
                <p>9997498635</p>
            </div>
            <div class="info">
                <i class="fa fa-at" aria-hidden="true"></i>
                <p>info@codemid.mx</p>
            </div>
            <div class="info">
                <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                <p>Merida, Yucatán CP.97218</p>
            </div>
        </div>
        <div class="socials">
            <a href="#" class="icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="icon"><i class="fab fa-instagram"></i></a>
        </div>

    </div>
    <nav class="navbar p-0 pl-3 navbar-expand-md navbar-expand-sm  sticky-top d-flex justify-content-beetwen ">

        <a class="navbar-brand p-0 contenelogo" href="#home">
            <figure class="logo">
                <img src="img/codemidLogo2.png" alt="">
            </figure>
        </a>
        <div class="mr-4">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse " id="collapsibleNavbar">
            <ul class="navbar-nav d-flex justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portafolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contactanos</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="inicio">
        <div id="slide" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slide" data-slide-to="0" class="active"></li>
                <li data-target="#slide" data-slide-to="1"></li>
                <li data-target="#slide" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slide1.jpg" alt="Los Angeles">
                    <div class="carousel-caption">
                        <h3>Software a la medida</h3>
                        <p>Soluciones adecuadas al cliente</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slide2.jpg" alt="Chicago">
                    <div class="carousel-caption">
                        <h3>Diseño Inicial</h3>
                        <p>Diseñamos con el cliente y adaptamos las ideas</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slide3.jpg" alt="New York">
                    <div class="carousel-caption">
                        <h3>Implementación</h3>
                        <p>Llevamos tu idea a la realidad, hosting, dominio, web... Nosotros te ayudamos</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#slide" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slide" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <div class="about pt-5" id="about">
        <div class="codemid pt-5">
            <div>
                <h2>CodeMID</h2>
                <P>En el mundo actual, no se puede subestimar la importancia de una presencia web bien ejecutada.</P>
            </div>
            <div>
                <h3>¿Quienes somos?</h3>
                <p>CodeMID es una pequeña empresa conformada por emprendedores que buscan inspirar y transformar al mundo con su pasión, ofrece software a la medida y presencia en la web. <br> Creemos que si tienes una idea, se puede hacer posible.</p>
            </div>
        </div>

        <div class="citas">
            <a target="_blank" href="https://meetings.hubspot.com/stjimmytzuc">Reserva tu cita ahora mismo.</a>
        </div>
        <div class="miembros pt-5 mb-5">
            <div class="pl-5 pr-5">
                <h2>El equipo</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, fugiat non, nam reiciendis ea voluptatum libero laborum porro rem ipsum tempora, labore eligendi perspiciatis vitae expedita alias culpa numquam cumque!</p>
            </div>
            <div class="nos d-flex w-100 justify-content-center">
                <div class="person m-5">
                    <figure class="">
                        <img src="img/jimmy.jpg" alt="">
                    </figure>
                    <figcaption>
                        <h3>Jimmy Tzuc</h3>
                        <div class="pl-2 pr-2">
                            <p><b><i>Co-Founder & CEO</i></b></p>
                            <p><b>Front End Dev</b></p>
                            <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ut.</i></p>
                            <p><b>Site: </b><a taget="_blank" href="">www.jimmytzuc.com</a></p>
                        </div>

                        <div class="d-flex p-2 justify-content-around">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </figcaption>
                </div>
                <div class="person m-5">
                    <figure>
                        <img src="img/miguel.jpg" alt="">
                    </figure>
                    <figcaption>
                        <h3>Miguel Huchim</h3>
                        <div class="pl-2 pr-2">
                            <p><b><i>Co-Founder</i></b></p>
                            <p><b>Back End Dev</b></p>
                            <p><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, ut.</i></p>
                            <p><b>Site: </b><a taget="_blank" href="">www.miguelhuchim.com</a></p>
                        </div>
                        <div class="d-flex p-2 justify-content-around">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </figcaption>
                </div>

            </div>
        </div>
    </div>
    <section class="services p-5" id="services">
        <h2 class="text-center mb-5 pt-5">SERVICIOS</h2>
        <div class="one d-flex justify-content-around flex-wrap">
            <div class="service d-flex flex-column align-items-center">
                <p>Paginas web optimas para cualquier dispositivo</p>
                <div class="responsive">
                    <i class="fas res1 fa-desktop fa-3x"></i>
                    <i class="fas res2 fa-tablet-alt fa-2x"></i>
                    <i class="fas res3 fa-mobile-alt"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At adipisci delectus deserunt neque, velit ex asperiores rerum, est quasi porro esse ipsa culpa rem natus consectetur tempore aperiam error ab.</p>
            </div>
            <div class="service d-flex flex-column align-items-center">
                <p>Desarrollo de software</p>
                <i class="fas fa-code fa-3x"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa amet laudantium adipisci qui quibusdam assumenda quasi labore ratione consectetur at omnis, aliquid est beatae, aspernatur ab soluta aut expedita inventore.</p>
            </div>
        </div>
        <div class="two d-flex justify-content-around flex-wrap">
            <div class="service d-flex flex-column align-items-center">
                <p>Hosting y Dominio</p>
                <i class="fas fa-server fa-3x"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia eos quibusdam fugit provident et alias nobis nihil saepe. Culpa, voluptatibus ex. Perferendis iusto incidunt error laboriosam iure facilis suscipit excepturi?</p>
            </div>
            <div class="service d-flex flex-column align-items-center">
                <p>Implementacion de proyectos en web</p>
                <i class="fas fa-rocket fa-3x"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, adipisci maiores mollitia repellat excepturi modi rem. Facilis qui explicabo veniam, dolorum aut, repellendus saepe cupiditate commodi, magnam animi voluptates eius.</p>
            </div>
            <div class="service d-flex flex-column align-items-center">
                <p>cursos y Capacitación</p>
                <i class="fas fa-users fa-3x"></i>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus enim cum alias? Non repellendus rem sequi. Nihil saepe ullam sit eaque doloremque asperiores error aperiam quis, eligendi magnam dolor recusandae!</p>
            </div>
        </div>
    </section>
    <section class="portfolio border pt-5" id="portfolio">
        <div class="contenedor">
            <div class="bus">
                <form action="">
                    <input type="text" class="barra-busqueda" id="barra-busqueda" placeholder="Buscar">
                </form>
                <div class="categorias" id="categorias">
                    <a href="#" class="activo">Todos</a>
                    <a href="#">Diseño Web</a>
                    <a href="#">Software</a>
                </div>
            </div>

            <section class="grid" id="grid">
                <div class="item" data-categoria="diseño web" data-etiquetas="diseño web" data-descripcion="1.- Lorem ipsum dolor sit amet consectetur.">
                    <div class="item-contenido">
                        <img src="img/ciudad1.png" alt="">
                    </div>
                </div>

                <div class="item" data-categoria="diseño web" data-etiquetas="diseño web" data-descripcion="2.- Lorem ipsum dolor sit amet consectetur.">
                    <div class="item-contenido">
                        <img src="img/persona1.png" alt="">
                    </div>
                </div>

                <div class="item" data-categoria="diseño web" data-etiquetas="diseño web" data-descripcion="3.- Lorem ipsum dolor sit amet consectetur.">
                    <div class="item-contenido">
                        <img src="img/paisaje1.png" alt="">
                    </div>
                </div>

                <div class="item" data-categoria="diseño web" data-etiquetas="diseño web" data-descripcion="4.- Lorem ipsum dolor sit amet consectetur.">
                    <div class="item-contenido">
                        <img src="img/animal1.png" alt="">
                    </div>
                </div>

                <div class="item" data-categoria="software" data-etiquetas="software" data-descripcion="5.- Lorem ipsum dolor sit amet consectetur.">
                    <div class="item-contenido">
                        <img src="img/animal2.png" alt="">
                    </div>
                </div>

                <div class="item" data-categoria="diseño web" data-etiquetas="diseño web" data-descripcion="6.- Lorem ipsum dolor sit amet consectetur.">
                    <div class="item-contenido">
                        <img src="img/persona2.png" alt="">
                    </div>
                </div>

                <div class="item" data-categoria="software" data-etiquetas="software" data-descripcion="7.- Lorem ipsum dolor sit amet consectetur.">
                    <div class="item-contenido">
                        <img src="img/paisaje2.png" alt="">
                    </div>
                </div>

                <div class="item" data-categoria="diseño web" data-etiquetas="diseño web" data-descripcion="8.- Lorem ipsum dolor sit amet consectetur.">
                    <div class="item-contenido">
                        <img src="img/ciudad2.png" alt="">
                    </div>
                </div>

                <div class="item" data-categoria="software" data-etiquetas="software" data-descripcion="9.- Lorem ipsum dolor sit amet consectetur.
				 	">
                    <div class="item-contenido">
                        <img src="img/naturaleza1.png" alt="">
                    </div>
                </div>
            </section>

            <section class="overlay" id="overlay">
                <div class="contenedor-img">
                    <button id="btn-cerrar-popup"><i class="fas fa-times"></i></button>
                    <img src="" alt="">
                </div>
                <p class="descripcion"></p>
            </section>


        </div>

        <script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
        <script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
        <script src="js/main.js"></script>
    </section>
    <footer class="" id="contact">
        <div class="foo">
            <div class="foo1">
                <h2>Contact Info</h2>
                <p>You can contact us any way that is convenient for you. we are available 24/7 via email or telephone. You can also use a quick contact form on the right or visit our office personally. We would be happy to answer your questions.</p>
                <p><i class="fas fa-2x fa-map-marker-alt"></i>San Damian, Merida Yuc. CP:9839</p>

                <p><i class="fas fa-2x fa-mobile-alt"></i>9997498635</p>

                <p><i class="fas fa-2x fa-envelope"></i>info@codemid.mx</p>
            </div>
            <div class="foo2">
                <div><a href="#"><i class="fa-2x fab fa-linkedin-in"></i></a></div>
                <div><a href="#"><i class="fab fa-2x fa-facebook-f"></i></a></div>
                <div><a href="#"><i class="fa-2x fab fa-github"></i></a></div>
                <div><a href="#"><i class="fa-2x fab fa-instagram"></i></a></div>
                <div><a href="#"><i class="fa-2x fab fa-twitter"></i></a></div>
            </div>
        </div>
        <div class="foo">
            <h2>Get in Touch</h2>
            <form action="">
                <div class="inputs">
                    <input placeholder="Name:" type="text" name="" id="">
                    <input placeholder="Email:" type="email" name="" id="">
                </div>
                <textarea placeholder="Message:" name="" id="" cols="30" rows="10"></textarea>
                <input id="botonsend" type="submit" value="SEND">
            </form>
        </div>
    </footer>
    <a href="#prueba">
        <script src="js/custom.js"></script>
        <div class="subir">
            <i class="fas fa-caret-up fa-2x"></i>
        </div>
    </a>
</body>

</html>