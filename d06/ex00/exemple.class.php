<?PHP

class Exemple {

	public $foo = 0; // attribut foo

	function __construct() {
		print ("Constructor called\n");
		print ('$this->foo:' . $this->foo . "\n");
		$this->foo = 42;
		print ('$this->foo:' . $this->foo . "\n");
		$this->bar();
		return;
	}

	function __destruct() {
		print ("Destruct\n");
		return;
	}

	function bar () { // == method bar
		print ("Method bar called\n");
	}
}
$instance = new Exemple();
$this // design l'instance courrante de la classe dans la methode


?>
