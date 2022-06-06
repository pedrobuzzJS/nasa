<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Projeto Nasa</title>
    <meta charset="utf-8"/>
    <style type="text/css">
      @import url("css/style.css");
   </style>
  </head>
  <body> 
      <header class="header">
          <label for="btn">&#9776;</label>
          <a href="./index.php" class="menu-logo">Projeto Nasa</a>
          <nav>
            <ul class="menu">
              <li><a href="./index.php">Inicio</a></li>
              <li><a href="./foguete.php">Foguete</a></li>
          </ul>
          </nav>
      </header>
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
  </body>
</html>