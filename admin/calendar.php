<?php
session_start();
$_SESSION['menu'] = 6;
include 'include/header.php';

?>
<link href="calendar/css/bootstrap.min.css" rel="stylesheet">
	<link href='calendar/css/fullcalendar.css' rel='stylesheet' />
<?php 
include 'include/calendar.php';
?>