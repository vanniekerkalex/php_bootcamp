<?PHP

class NightsWatch
{
	private $fighters = array();

	function recruit ($p)
	{
		$this->$fighters[] = $p;
	}

	function fight() 
	{
		foreach ($this->$fighters as $p)
		{
			if (method_exists($p, 'fight'))
				$p->fight();
		}
	}	
}

?>