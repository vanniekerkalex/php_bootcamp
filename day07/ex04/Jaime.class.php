<?PHP

class Jaime
{
    public function sleepWith($p)
    {
        if ($p instanceof Tyrion) {
            print("Not even if I'm drunk !\n");
        }
        if ($p instanceof Sansa) {
            print("Let's do this.\n");
        }
        if ($p instanceof Cersei) {
            print("With pleasure, but only in a tower in Winterfell, then.\n");
        }
    }
}
