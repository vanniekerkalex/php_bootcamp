<?PHP

class NightsWatch
{
	interface IFighter
	{
		public function recruit ($p)
		{
			if ($p instanceof JonSnow)
				$this->fight();
			if ($p instanceof SamwellTarly)
				$this->fight();

		}
		public function fight() {
		}
		public function isABastard() {
			return False;
		}
		public function sendRavens() {
		}
		public function makeHisFatherProud() {
			return False;
		}
	}
	

}


?>