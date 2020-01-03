<?php 
	/**
	 * 
	 */
	class Depan extends DB
	{
		
		function getGender()
		{
			return $this->fetch("
				SELECT * FROM gender WHERE status = 1
				");
		}
	}
 ?>