<?php		

	include_once ("SimplePen.php"); 
	include_once ("AutoPen.php"); 
	include_once ("AutoPencil.php"); 
	
	$simplePen = new SimplePen;
	$simplePen->write("simplePen");
	echo "<br />";
	
	$autoPen = new AutoPen;
	$autoPen->write("auto");
	echo "<br />";
	$autoPen->clickOnButton();
	$autoPen->write("autoAfterClick");
	echo "<br />";
	$autoPen->clickOnButton();
	$autoPen->write("autoAfterDoubleClick");
	
	echo "<br />";	
	$autoPencil = new AutoPencil(20);
	$autoPencil->write("12345");
	echo "<br />";
	$autoPencil->clickOnButton();
	$autoPencil->write("1234567890");
	echo "<br />";
	$autoPencil->write("123456789012");
	
?>