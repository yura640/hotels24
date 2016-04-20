<?php
	include_once ("AutoPencil.php"); 
	class ColorPen extends AutoPencil
	{
		private $colors;
		private $currentColor;
		public function __construct($colors)
		{
			
			if(count($colors) >0){
				$this->currentColor = $colors[0];
				$this->colors = $colors;
			} else {
				$this->currentColor = "blue";
				$this->colors = array ($this->currentColor);
				echo "WARNING Color not sellected. Building with default BLUE color";
			}
			
		}
		public function write($text){
			echo $this->currentColor . " : " . $text;
		}
		public function clickOnButton(){
			$indexOfcurrentColor = array_search($this->currentColor, $this->colors);
			$nextColorIndex = ($indexOfcurrentColor == count($this->colors) -1)? 0 : $indexOfcurrentColor +1;
			$this->currentColor = $this->colors[$nextColorIndex];
			echo "color changed to : " . $this->currentColor;
		}
		
	}
?>