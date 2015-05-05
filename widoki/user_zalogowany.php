<?php

echo ("<div style='text-align: center'>
		&lt; <strong>
		<h1 style='margin-top: 100px;'>Witaj ".ucfirst($_SESSION['userFirstName'])."</h1>
		</strong> &gt;
		</div><br>");

header("Refresh: 5; url=/kotopcja/")

?>

<div style="text-align: center">
<p style="margin-top: 100px;">
Do przekierowania na główną stronę pozostało: <span id="odliczanie">5</span><br>
</p>
</div>