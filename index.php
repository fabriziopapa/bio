<?php
// Mostra info PHP solo in sviluppo: commenta in produzione!
// phpinfo();

$now = new DateTime('now', new DateTimeZone('Europe/Rome'));
?>
<!doctype html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <title>Pagina su Aruba + PHP + Test2</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>body{font-family:system-ui,Arial,sans-serif;padding:2rem;max-width:60ch;margin:auto}</style>
</head>
<body>
  <h1>Ciao da PHP su Aruba</h1>
  <p>Ora locale: <?= htmlspecialchars($now->format('Y-m-d H:i:s')) ?></p>
</body>
</html>
