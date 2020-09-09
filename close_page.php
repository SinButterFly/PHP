<?php
session_start();

echo "Привет, " . $_SESSION['user_name'];
?>
<form action="exit.php" method="post">
    <input type="submit" value="Выход">
</form>

