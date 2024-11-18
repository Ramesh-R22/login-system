<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
<a href="logout.php">Logout</a>

sudo nano logout.php

//logout.php
<?php
session_start();
session_unset();
session_destroy();

header("Location: login.php");
?>