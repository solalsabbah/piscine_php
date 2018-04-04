<?PHP

class Exemple {
	
	public $att1 = 0;
	public $att2 = 0;
	public $att3 = 0;
	
	function __construct( array $kwargs ) {
		print ("Constructor called\n");

		$this->att1 = $kwargs['arg1'];
		print ('$this->att1: ' . $this->att1 . "\n");

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
$instance = new Exemple(array ('arg1' => 21, 'arg2' => 32, 'arg3' => 100) );




?>
