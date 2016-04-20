<?php		

	include_once ("SimplePen.php"); 
	include_once ("AutoPen.php"); 
	
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
	
?>