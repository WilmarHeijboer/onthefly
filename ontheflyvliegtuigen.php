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
                <li class="navigation__item"><a href="onthefly.php">Home</a></li>
                <li class="navigation__item"><a href="ontheflyvliegtuigen.php" class="is-active">Vliegtuigen</a></li>
                <li class="navigation__item"><a href="ontheflyinplannen.php">Inplannen</a></li>
                <li class="navigation__item"><a href="ontheflyvliegtuigentoevoegen.php">Vliegtuigen toevoegen</a></li>
            </ul>
        </nav>

    </div>

</header>

</body>
</html>

