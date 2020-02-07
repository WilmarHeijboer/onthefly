<?php
$host = "localhost";
$dbname = "onthefly";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="onthefly.css"/>
</head>
<body>
<header class="header sticky sticky--top js-header">

  <div class="grid">

    <nav class="navigation">
      <ul class="navigation__list navigation__list--inline">
        <li class="navigation__item"><a href="onthefly.php" class="is-active">Home</a></li>
        <li class="navigation__item"><a href="ontheflyvliegtuigen.php">Vliegtuigen</a></li>
        <li class="navigation__item"><a href="ontheflyinplannen.php">Inplannen</a></li>
        <li class="navigation__item"><a href="ontheflyvliegtuigentoevoegen.php">Vliegtuigen toevoegen</a></li>
      </ul>
    </nav>

  </div>

</header>

<main class="main">

  <div class="jari">

    <h1 align="center">Vluchten inplannen</h1>

  </div>

</main>
</body>
</html>
