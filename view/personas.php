<?php include_once 'template/head.php'?>
<title>Personas</title>
<link rel="stylesheet" href="css/person.css">
</head>

<body>

    <header>
        <?php include_once 'template/nav-general.php'?>
    </header>
    <section class="header-person">
        <section class="textos-header">
            <h1 class="person">Descubre</h1>
            <h2 class="person">Conoce personas</h2>
        </section>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: #fff;"></path>
        </svg>
    </div>
    <main>
        <section class="contenedor-sobre-person-des">
            <h2 class="titulo">¿Que podemos hacer?</h2>
            <div class="contenedor-sobre-person">
                <img src="image\ilustracion1.svg" alt="" class="imagen-sobre-person">
                <div class="contenido-textos">
                    <h3><span>1</span>Colabora con personas</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque error non aperiam assumenda.
                        Quisquam, earum sed modi delectus vel odio sunt maiores, impedit voluptatibus tempore, quas esse
                        unde beatae magnam.</p>
                    <h3><span>2</span>Explora y aprende</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque error non aperiam assumenda.
                        Quisquam, earum sed modi delectus vel odio sunt maiores, impedit voluptatibus tempore, quas esse
                        unde beatae magnam.</p>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor-person">
                <h2 class="titulo">Personas destacadas</h2>
                <div class="person-des">
                    <div class="imagen-person">
                        <img src="image/person1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="image/focus.png" alt="">
                            <p>Proyectos</p>
                        </div>
                    </div>

                    <div class="imagen-person">
                        <img src="image/person2.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="image/focus.png" alt="">
                            <p>Proyectos</p>
                        </div>
                    </div>

                    <div class="imagen-person">
                        <img src="image/person3.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="image/focus.png" alt="">
                            <p>Proyectos</p>
                        </div>
                    </div>

                    <div class="imagen-person">
                        <img src="image/person4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="image/focus.png" alt="">
                            <p>Proyectos</p>
                        </div>
                    </div>

                    <div class="imagen-person">
                        <img src="image/person5.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="image/focus.png" alt="">
                            <p>Proyectos</p>
                        </div>
                    </div>

                    <div class="imagen-person">
                        <img src="image/person6.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="image/focus.png" alt="">
                            <p>Proyectos</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="person-des-contenedor">
            <h2 class="titulo">Sigue explorando</h2>
            <div class="cards">
                <div class="card">
                    <img src="image/person7.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>(nombre persona)</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex beatae aliquid iste. Iusto aut
                            quasi dolorum consectetur velit suscipit accusamus magni quas. Enim facere, inventore optio
                            ea hic odio officiis!</p>
                    </div>
                </div>
                <div class="card">
                    <img src="image/person8.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>(nombre persona)</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex beatae aliquid iste. Iusto aut
                            quasi dolorum consectetur velit suscipit accusamus magni quas. Enim facere, inventore optio
                            ea hic odio officiis!</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

<footer>

    <?php include_once 'template/footer.php'?>

</footer>

</html>