<?php
include 'includes/scripts.php';
include 'includes/header.php';
?>
<style>
  body {
    background-color: #FFFAEF;
  }

  .w3-panel {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s;
    margin: 5px;
    width: calc(33.333% - 10px);
    float: left;
    box-sizing: border-box;
    text-align: center;
  }

  .w3-panel:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }

  .carousel-container {
    overflow: hidden;
    position: relative;
    white-space: nowrap;
  }

  .carousel-text {
    display: inline-block;
    animation: marquee 20s linear infinite;
  }

  @keyframes marquee {
    0% {
      transform: translateX(100%);
    }

    100% {
      transform: translateX(-100%);
    }
  }

  #rcorners {
    border-radius: 25px;
    background: rgba(255, 165, 0, 0.5);
    padding: 20px;
    color: black;
  }

  h3 {
    text-align: center;
  }

  body {
    font-family: 'Arial', sans-serif;
    color: black;
  }

  p {
    font-family: 'Arial', Helvetica, sans-serif;
    color: orange;
  }

  h2 {
    color: orange;
    font-family: 'Arial', Helvetica, sans-serif;
    font-weight: bold;
  }

  h4 {
    color: black;
    font-family: 'Arial', Helvetica, sans-serif;
  }

  div {
    color: black;
  }

  .w3-panel img {
    display: block;
    margin: 0 auto;
    max-width: 100%;
    height: auto;
  }

  .w3-panel p {
    margin-top: 10px;
  }

  .w3-panel p a {
    text-decoration: none; /* Remover sublinhado dos links dentro de p */
  }
</style>

<div class="w3-container">
  <div class="w3-container w3-margin-top w3-center w3-light-grey" style="display: flex; align-items: center; justify-content: center; background-color: #f0f0f0; border-radius: 10px; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
    <img src="images/l1.png" alt="Imagem Esquerda" style="width: 200px; height: 10px; margin-right: 20px;">
    <h2 style="flex-grow: 1; margin: 0;">RECEITAS PARA TODOS OS GOSTOS</h2>
    <img src="images/l2.png" alt="Imagem direita" style="width: 200px; height: 10px; margin-left: 20px;">
  </div>

  <!-- Primeira Linha -->
  <div class="w3-row-padding">
    <div class="w3-third w3-panel w3-light-grey">
      <h4 class="w3-text-orange">
        <b>
          <p><a href="http://localhost/AGTCC/receitas.php?id=2">Lasanha de Frango</a></p>
        </b>
        <a href="http://localhost/AGTCC/receitas.php?id=2"><img src="images/lasanhafrango.jpg" style="width: 80%; height: 250px" class="w3-opacity w3-hover-opacity-off"></a>
      </h4>
    </div>

    <div class="w3-third w3-panel w3-light-grey">
      <h4 class="w3-text-orange">
        <b>
          <p><a href="http://localhost/AGTCC/receitas.php?id=3">Arroz de Frono</a></p>
        </b>
        <a href="http://localhost/AGTCC/receitas.php?id=3"><img src="images/arrozforno.png" style="width: 80%; height: 250px" class="w3-opacity w3-hover-opacity-off"></a>
      </h4>
    </div>

    <div class="w3-third w3-panel w3-light-grey">
      <h4 class="w3-text-orange">
        <b>
          <p><a href="http://localhost/AGTCC/receitas.php?id=4">Torta de Limão</a></p>
        </b>
        <a href="http://localhost/AGTCC/receitas.php?id=4"><img src="images/tortalimao.png" style="width: 80%; height: 250px" class="w3-opacity w3-hover-opacity-off"></a>
      </h4>
    </div>
  </div>

  <!-- Segunda Linha -->
  <div class="w3-row-padding">
    <div class="w3-third w3-panel w3-light-grey">
      <h4 class="w3-text-orange">
        <b>
          <p><a href="http://localhost/AGTCC/receitas.php?id=5">Strogonoff de Carne</a></p>
        </b>
        <a href="http://localhost/AGTCC/receitas.php?id=5"><img src="images/strogonoffcarne.png" style="width: 80%; height: 250px" class="w3-opacity w3-hover-opacity-off"></a>
      </h4>
    </div>

    <div class="w3-third w3-panel w3-light-grey">
      <h4 class="w3-text-orange">
        <b>
          <p><a href="http://localhost/AGTCC/receitas.php?id=1">Bolo de cenoura</a></p>
        </b>
        <a href="http://localhost/AGTCC/receitas.php?id=1"><img src="images/bolocenoura.png" style="width: 80%; height: 250px" class="w3-opacity w3-hover-opacity-off"></a>
      </h4>
    </div>

    <div class="w3-third w3-panel w3-light-grey">
      <h4 class="w3-text-orange">
        <b>
          <p><a href="http://localhost/AGTCC/lista.php">Mais Receitas</a></p>
        </b>
        <a href="http://localhost/AGTCC/lista.php"><img src="images/mais1.png" style="width: 80%; height: 250px" class="w3-opacity w3-hover-opacity-off"></a>
      </h4>
    </div>
  </div>

  <!-- Texto adicional -->
  <div class="w3-container">
    <div class="w3-container w3-margin-top w3-center carousel-container">
      <h4>
        <p id="rcorners" class="carousel-text">Nossas receitas são fáceis de seguir |
          Com ingredientes simples e Saborosos | Visite nosso site e descubra uma nova receita hoje!</p>
      </h4>
    </div>
  </div>


  <?php
  include 'includes/footer.php';
  ?>