<?php
	include_once ("AutoPen.php"); 
	class AutoPencil extends AutoPen
	{
		private $symbolsPerClick;
		private $currentSymbolsLeft = 0;
		public function __construct($symbols = 100)
		{
			$this->symbolsPerClick = $symbols;
		}
		
		public function clickOnButton(){
			$this->currentSymbolsLeft += $this->symbolsPerClick;
		}
		
		public function write($text){
			if(count($text) <= $this->currentSymbolsLeft){
				echo $text;
				$this->currentSymbolsLeft -= count($text);
			} else {
				$symbolsToFit = substr($text, 0, $this->currentSymbolsLeft);
				echo $symbolsToFit . " !!!no pencil core left. Please click on button!!!";
				$this->currentSymbolsLeft -= count($symbolsToFit);
			}
			
		}
		 
	}
	
?>