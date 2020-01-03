<?php 
	/**
	 * 
	 */
	class Form extends DB
	{
		
		function getKelamin()
		{
			return $this->fetch('
				SELECT * FROM gender WHERE status = 1
				');
		}
		function getTl()
		{
			return $this->fetch('
				SELECT * FROM kab order by parent asc
				');
		}
	}
 ?>