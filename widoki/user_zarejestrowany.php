<?php

echo ("<h1>Witaj ".ucfirst($_SESSION['userLogin'])."</h1><br>");

header("Refresh: 5; url=/kotopcja/logowanie")

?>

<p style="text-align: center">
Do przekierowania na stronę logowania pozostało: <span id="odliczanie">5</span><br>
</p>