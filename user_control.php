<?php  
if ( !isset($_SESSION['login']) ) header('Location: preview.php');
if ( isset($_SESSION['role']) && ($_SESSION['role'] == 1) ) {
	header('Location: red_arh.php');
}
?>




