<?php
	class shopping _cart
	{
		public $amount;
		
		function check_amount($amt)
		{
			$this->amount = $amt;

			if($amount < 1000)
			{
				paypal();
			}
			else
			{
				credit_card();
			}
		}

		function paypal()
		{
			echo "I am in paypal";
		}

		function credit_card()
		{
			echo "I am in credit_card";
		}

	}

	$temp =1000;

	$obj = new shopping_cart();
	$obj-> check_amount($temp);
	
?>