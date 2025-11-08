

<link rel="stylesheet" href="css/hang.css">

    <section class="main">

      <h1 class="titulo">Start to Play</h1>
      <h1 id="msg-final"></h1>
      <h3 id="acierto"></h3>
      <div class="flex-row no-wrap">
        <h2 class="palabra" id="palabra"></h2>
        <picture>
          <img src="img/ahorcado_6.png" alt="" id="image6">
          <img src="img/ahorcado_5.png" alt="" id="image5">
          <img src="img/ahorcado_4.png" alt="" id="image4">
          <img src="img/ahorcado_3.png" alt="" id="image3">
          <img src="img/ahorcado_2.png" alt="" id="image2">
          <img src="img/ahorcado_1.png" alt="" id="image1">
          <img src="img/ahorcado_0.png" alt="" id="image0">
        </picture>
      </div>
      <div class="flex-row" id="turnos">
        <div class="col">
          <h3>remaining attempts: <span id="intentos">6</span></h3>
        </div>

        <div class="col">
          <button onclick="inicio()" id="reset">Next Word</button>
          <button onclick="pista()" id="pista">Give me a clu!</button>
          <span id="hueco-pista"></span>
        </div>
      </div>

      <div class="flex-row">
        <div class="col">
          <div class="flex-row" id="abcdario">
          </div>
        </div>
        <div class="col"></div>
      </div>

  </div>




  </section>

<script src="js/hang.js"></script>


