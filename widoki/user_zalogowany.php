<?php

echo ("<h1>Witaj ".ucfirst($_SESSION['loggedUserLogin'])."</h1><br>");

header("Refresh: 5; url=/kotopcja/")

?>

<p style="text-align: center">
Do przekierowania na główną stronę pozostało: <span id="odliczanie">5</span><br>
</p>