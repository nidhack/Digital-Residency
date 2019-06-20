<?php
session_start();
$_SESSION['l_id'] = '';
$_SESSION['utype'] = '';
session_destroy();
header('location:index.php')
	?>
