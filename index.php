<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu portifolio</title>
</head>

<body>
  <?php 
    $nome = "Hyago Mesquita";
    $saudacao = "Oi";
    $titulo = $saudacao . ", eu sou " . $nome;
    $subtitulo = "Seja bem vindo ao meu portifolio!";
    $ano = 2025;

    $projeto = "Meu portifolio";
    $finalizado = true; // true 1 ou false 0
    $dataDoProjeto = "2025-06-15";
    $descricao = "Esse projeto consiste em um portifolio pessoal para exibir meus trabalhos e habilidades.";
  ?>
  <h1><?=$titulo?></h1>

  <p><?=$subtitulo?></p>
  <p><?=$ano?></p>

  <hr/>

  <div  <?php if(2025 - $ano > 2): ?>
      style="background-color: burlywood"
    <?php endif; ?>
  >

    <h2><?=$projeto?></h2>
    <p>Finalizado: <?=$finalizado ? 'Sim' : 'Não'?></p>
    <?php 
  
      if($finalizado) {
        echo "<p>Parabéns por concluir o projeto!</p>";
      } else {
        echo "<p>Continue trabalhando para finalizar o projeto.</p>";
      }

      if(!$finalizado): ?>
          <span style="color: red">✘</span>
          <p>O projeto ainda está em andamento.</p>
        <?php else: ?>
          <span style="color: green">✔</span>
          <p>Você completou o projeto com sucesso!</p>
      <?php endif;
    ?>
    <p>Data de conclusão: <?=$dataDoProjeto?></p>
    <p>Descrição: <?=$descricao?></p>
  </div>

</body>

</html>