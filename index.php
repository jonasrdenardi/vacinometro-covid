<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Vacinômetro Covid</title>
  <script data-ad-client="ca-pub-6059926323992215" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <meta charset="utf-8">
</head>

<body>
  <?php
  $xml = file_get_contents("https://www.saopaulo.sp.gov.br/");
  $doc = new \DOMDocument();
  $dom->load($xml);
  $finder = new DomXPath($dom);
  $classname="container container-vacinometro";
  $nodes = $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");
  echo $nodes[0]->nodeValue;
  ?>

  <h1>Teste Vacinômetro</h1>
</body>

</html>