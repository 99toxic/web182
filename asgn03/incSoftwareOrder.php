<?php


		// PROVIDE THE CODE FOR THE getSubTotal FUNCTION..
		
		function getSubTotal ($numCopies)
		{
			$numCopies = $numCopies * 35.75;
			return $numCopies;
		}

		// PROVIDE THE CODE FOR THE getSalesTax FUNCTION..

		function getSalesTax($subTotal)
		{
			$subTotal = $subTotal * 0.07;
			return $subTotal;
		}

		// PROVIDE THE CODE FOR THE getShippingHandling FUNCTION..
		
		function getShippingHandling($numCopies)
		{
			if ($numCopies < 5)
				$numCopies = 3.75;
			else
				$numCopies = $numCopies * 0.75;
			return $numCopies;
			
		}

?>