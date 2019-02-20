<<?php
session_start();
session_unset($_SESSION['id']);
session_unset($_SESSION['mode']);
session_unset($_SESSION['orderid']);
session_destroy();
header('location: /index.php');
 ?>
