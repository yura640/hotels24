<?php	

	include_once ("SimplePen.php"); 
	class AutoPen extends SimplePen
	{
		private $_active = false;
				
		public function write($text){
			if($this->_active){
				parent::write($text);
			} else{
				echo "please turn ON the Pen";
			}
		}
		
		public function clickOnButton(){
			$this->_active = !$this->_active;
		}
	}
?>