<?php
	abstract class good {
		var $price;
		var $weight;

		function setPrice($price) {
			$this->price = $price;
		}

		function getPrice() {
			echo $this->price;
		}

		function setWeight($weight) {
			$this->weight = $weight;
		}
	}

	class cyferGood extends good {
		function setPrice($price)
		{
			$this->price = $price/2;
		}
	}

	class oneGood extends good {

	}

	class weightGood extends good {
		function setPrice($price)
		{
			$this->price = $price * $this->weight;
		}
	}

	$cyferGood = new cyferGood;
	$oneGood = new oneGood;
	$weightGood = new weightGood;

	$weightGood->setWeight(10);
	$oneGood->setPrice(400);
	$cyferGood->setPrice(400);
	$weightGood->setPrice(400);

	$cyferGood->getPrice();
	$oneGood->getPrice();
	$weightGood->getPrice();