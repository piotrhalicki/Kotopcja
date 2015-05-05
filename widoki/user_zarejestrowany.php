<?php

echo ("<h1>Witaj ".ucfirst($_SESSION['userLogin'])."</h1><br>");

header("Refresh: 5; url=/kotopcja/logowanie")

?>

<div style="text-align: center">
<p style="margin-top: 100px;">
Do przekierowania na stronę logowania pozostało: <span id="odliczanie">5</span><br>
</p>
</div>