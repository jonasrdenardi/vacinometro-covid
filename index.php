<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Vacinômetro Covid São Paulo</title>
  <script data-ad-client="ca-pub-6059926323992215" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <meta charset="utf-8">
  <meta name="description" content="Número de vacinados no estado de São Paulo"/>
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <h1>Vacinômetro São Paulo</h1>

  <?php
  $html = file_get_contents("https://www.saopaulo.sp.gov.br/");
  $start = stripos($html, '<div class="container container-vacinometro">');

  $end = stripos($html, '<section class="section section--first">', $offset = $start);
  $length = $end - $start;

  $htmlSection = substr($html, $start, $length);

  echo $htmlSection;
  ?>

</body>

</html>