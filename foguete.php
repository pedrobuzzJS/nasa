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
      <div class="menu11">
        <nav>
          <ul>
            <li><a class="link-mobile" href="./index.php">Inicio</a></li>
            <li><a class="link-mobile" href="./foguete.php">Foguete</a></li>
          </ul>
        </nav>
      </div>
      <section class="foguetes">
        <div class="foguete">
          <h2>Challenger</h2>
          <p>
          O Challenger foi o terceiro ônibus espacial, ou vaivém espacial em Portugal, construído pela NASA, 
          finalizado em julho de 1982, que fez parte da sua frota de 5 ônibus espaciais. Sua primeira missão 
          foi a STS-6, realizada entre os dias 4 a 9 de abril de 1983
          </p>
        </div>
        <div>
          <img class="img" width="201" height="251" alt="Foguete Challenger" src="./img/galeria/challenger.jpg">
          <br>
        </div>
        <div class="foguete">
          <h2>Discovery</h2>
          <p>
          Discovery é o terceiro dos cinco orbitadores que constituíram o programa de ônibus espaciais 
          da NASA. Os dois primeiros foram o Columbia e o Challenger, respectivamente. Sua primeira 
          missão foi a STS-41-D, que aconteceu entre os dias 30 de agosto e 5 de setembro de 1984. Foi 
          ao espaço 39 vezes ao longo de 27 anos em serviço, tornando-se assim o ônibus espacial que mais 
          realizou missões. Após as tragédias com o Challenger e o Columbia, o Discovery passou a ser o 
          ônibus espacial mais antigo em funcionamento.
          </p>
        </div>
        <div>
          <img class="img" width="305" height="482" alt="Foguete Discovery" src="./img/galeria/Discovery.jpg">
        </div>
       </section>
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