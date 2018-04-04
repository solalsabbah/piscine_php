<?PHP

class Exemple {

	public $publicFoo = 0; // attribut foo
	private $_privateFoo = "hello";

	function __construct() {
		print ("Constructor called\n");

		print ('$this->publicFoo: ' . $this->publicFoo . "\n");
		$this->publicFoo = 42;
		print ('$this->publicFoo: ' . $this->publicFoo . "\n");

		print ('$this->privateFoo: ' . $this->_privateFoo . "\n");
		$this->_privateFoo = "world";
		print ('$this->privateFoo: ' . $this->_privateFoo . "\n");
		
		$this->publicBar();
		$this->_privateBar();
		return;
	}

	function __destruct() {
		print ("Destruct\n");
		return;
	}

	function publicBar () { // == method bar
		print ("Method publicBar called\n");
	}
	private function _privateBar () {
		print ("Methode privateBar called\n");
	}

}
$instance = new Exemple();

print ('$instance->publicFoo: ' . $instance->publicFoo . "\n");
$instance->publicFoo = 100;
print ('$instance->publicFoo: ' . $instance->publicFoo . "\n");
$instance->publicBar();

$instance->_privateFoo = "bitch";



?>
