<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>El título de mi página</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">

    <!-- las tres siguientes líneas son un truco para obtener elementos semánticos de HTML5 que funcionan en versiones de Internet Explorer antiguas -->
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Aquí empieza el encabezado principal que se mantendrá en todas las páginas del sitio web -->

    <header>
      <h1>Encabezado Tercer Commit</h1>
    </header>

    <h2>Agrego un cambio</h2>
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Nuestro equipo</a></li>
        <li><a href="#">Proyectos</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>

       <!-- Un formulario de búsqueda es una forma no-lineal de hacer búsquedas en un sitio web. -->

       <form>
         <input type="search" name="q" placeholder="Buscar">
         <input type="submit" value="¡Vamos!">
       </form>
     </nav>

    <!-- Aquí está el contenido principal de nuestra página -->
    <main>

      <!-- Contiene un artículo -->
      <article>
        <h2>Título del artículo</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Donec a diam lectus. Set sit amet ipsum mauris. Maecenas congue ligula as quam viverra nec consectetur ant hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>

        <h3>Subsección</h3>

        <p>Donec ut librero sed accu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor.</p>

        <p>Pelientesque auctor nisi id magna consequat sagittis. Curabitur dapibus, enim sit amet elit pharetra tincidunt feugiat nist imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros.</p>

        <h3>Otra subsección</h3>

        <p>Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum soclis natoque penatibus et manis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>

        <p>Vivamus fermentum semper porta. Nunc diam velit, adipscing ut tristique vitae sagittis vel odio. Maecenas convallis ullamcorper ultricied. Curabitur ornare, ligula semper consectetur sagittis, nisi diam iaculis velit, is fringille sem nunc vet mi.</p>
      </article>

      <!-- el contenido aparte también se puede anidar dentro del contenido principal -->
      <aside>
        <h2>Relacionado</h2>

        <ul>
          <li><a href="#">Oh, me gusta estar junto al mar</a></li>
          <li><a href="#">Oh, me gusta estar junto al mar</a></li>
          <li><a href="#">Aunque en el norte de Inglaterra</a></li>
          <li><a href="#">Nunca deja de llover</a></li>
          <li><a href="#">Oh, bueno...</a></li>
        </ul>
      </aside>

    </main>

    <!-- Y aquí está nuestro pie de página principal que se utiliza en todas las páginas de nuestro sitio web -->

    <footer>
      <p>©Copyright 2050 de nadie. Todos los derechos revertidos.</p>
    </footer>

  </body>
</html>