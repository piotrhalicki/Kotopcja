<hr>

<dl>
	<dd><a href='index.php'>Powrtót na stronę główną</a></dd>
	<dd>
		<?php 
		echo ("<strong><em>Ilość wyświetleń strony: </em></strong>").$_SESSION['licznik']; 
		?>
	</dd>
	<dd>
		<?php 
		if (!$conn->connect_error) {
			echo ("Połączenie z bazą <strong>".$db['dbName']."</strong> udane.");
		};
		?>
	</dd>
	<dd>
		<?php 
		echo ("<em>Podgląd sesji:</em>");
		echo "<pre>";
		echo var_dump($_SESSION);
		echo "<pre>";
		?>
	</dd>
</dl>

</body>
</html>