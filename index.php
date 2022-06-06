<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="/service-worker.js"></script>
		<link rel="manifest" href="/manifest.json" crossorigin="use-credentials">

    <title>Projeto Nasa</title>
    <meta charset="utf-8"/>
    <link href="./css/style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.php">NASA</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="./index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./foguete.php">Foguete</a>
              </li>            
            </ul>
          </div>
        </div>
      </nav>

      <input type="checkbox" id="btn">
      <div class="menu11 ">
        <nav>
          <ul>
            <li><a class="link-mobile" href="./index.php">Inicio</a></li>
            <li><a class="link-mobile" href="./foguete.php">Foguete</a></li>
          </ul>
        </nav>
      </div>
      <h1 class="titulo-h1" >Nasa</h1>
        <section class="o-foguete">
          <div class="paragrafo1">
          <h1>O QUE É A NASA?</h1>
          <p>A NASA é uma agência do governo federal dos Estados Unidos responsável pela pesquisa e desenvolvimento 
            de tecnologias e programas de exploração espacial. Sua missão oficial é "fomentar o futuro na pesquisa,
             descoberta e exploração espacial". A NASA foi criada em 29 de julho de 1958, substituindo seu 
             antecessor, do Comitê Consultivo Nacional para a Aeronáutica
          </p>
          </div>
          <div>
              <img class="img" alt="Logo Nasa" src="https://t.ctcdn.com.br/CgXYkXzLQvvhXTxTDLykz9ePGLI=/400x400/smart/filters:format(webp)/i490082.jpeg">
          </div>
        </section>
         <section class="n-icon">
           <div class="paragrafo2">
           <h3>O QUE A NASA FAZ</h3>
            <p>A NASA também tem desenvolvido vários programas com satélites e com sondas de pesquisa espacial que viajaram até outros planetas e até, 
              alguns deles, se preparam para sair do nosso 
              sistema solar, sendo a próxima grande meta, que tem atraído a atenção de todos, uma viagem tripulada até o planeta Marte, nosso vizinho.
            </p>
            <p>
            A ciência da NASA está focada numa melhor compreensão da Terra através do Earth Observing System,[9] na promoção da heliofísica
             através do trabalho do Heliophysics Research Program, na exploração do sistema solar com missões robóticas avançadas, tais como New Horizons,
             e na pesquisa astrofísica, aprofundando-se em tópicos como o Big Bang com o auxílio de grandes observatórios.
            </p>
           </div>
            <div>
              <img class="img" width="560" height="315" src="https://www.hypeness.com.br/1/2020/11/ac1c394d-sate%CC%81lite4.png" alt="Satélite">
            </div>
         </section>       
       <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/tVZbrBbZ16g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       <footer class="footer">
         <div class="footer-content">
           <div class="footer-section sobre-resumido">
             <h1 class="footer-title">Sobre</h1>
             <p class="footer-text">A NASA é uma agência do governo federal dos Estados Unidos responsável pela pesquisa e desenvolvimento 
            de tecnologias e programas de exploração espacial.</p>
                <div class="container-center">
                <nav>
                  <ul>
                    <li class="redes"><a href="https://www.facebook.com/NASA" target="_blank"><img src="./img/redes/facebook.png" alt=""></a></li>
                    <li class="redes"><a href="https://www.instagram.com/nasa/?hl=pt" target="_blank"><img src="./img/redes/instagram.png" alt=""></a></li>
                    <li class="redes"><a href="https://twitter.com/nasa" target="_blank"><img src="./img/redes/twitter.png" alt=""></a></li>
                  </ul>
                </nav>
                </div>
           </div>
           <div class="footer-section">
              <h1 class="footer-link footer-title">Links Rápidos</h1>
              <nav>
                <ul>
                  <li><a class="hyperlinks" href="./index.php">Inicio</a></li>
                  <li><a class="hyperlinks" href="./foguete.php">Foguete</a></li>
                </ul>
              </nav>
           </div>
           <div class="footer-section">
              <h1 class="footer-title">Contato</h1>
              <form class="contact">
                <input type="text" class="campo-texto" placeholder="Sua mensagem">
                <button type="submit" class="enviar-button">Enviar</button>
              </form>
           </div>
         </div>
         <div class="footer-bottom">
           &copy; Projeto Nasa | Designed by Pedro Buzzi
         </div>
       </footer>  
       
      <script>
        if ('serviceWorker' in navigator) {
	     		navigator.serviceWorker.register('/service-worker.js')
	     		.then(function(registration) {
	     			console.log('Registration successful, scope is:', registration.scope);
	     		})
	     		.catch(function(error) {
	     			console.log('Service worker registration failed, error:', error);
	     		});
	    	}
      </script>
  </body>
</html>