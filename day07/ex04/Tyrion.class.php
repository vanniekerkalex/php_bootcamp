<?PHP
class Tyrion
{
	public function sleepWith($p)
	{
		if ($p instanceof Jaime)
			print("Not even if I'm drunk !\n");
		if ($p instanceof Sansa)
			print("Let's do this.\n");
		if ($p instanceof Cersei)
			print("Not even if I'm drunk !\n");
	}
}
?>