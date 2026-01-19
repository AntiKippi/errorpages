<?php
  $OUTDIR = 'pages';

  $error_codes = json_decode(file_get_contents('error_codes.json'), true);
  $template = file_get_contents('template.html');

  mkdir($OUTDIR);

  for($i = 0; $i < count($error_codes); ++$i) {
    $code = $error_codes[$i]["code"];
    $page = str_replace('$code', $code, $template);
    $page = str_replace('$reason', $error_codes[$i]["reason"], $page);
    $page = str_replace('$desc', $error_codes[$i]["desc"], $page);
    file_put_contents("$OUTDIR/$code.html", $page);
  }
?>