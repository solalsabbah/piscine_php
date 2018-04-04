<?PHP

Class Color {

	public $red = 0;
	public $green = 0;
	public $blue = 0;
	public static $verbose = FALSE;
	public static $doc;

	function __construct (array $kwargs ) {

		if (array_key_exists('rgb', $kwargs))
		{
			$this->red = ((0xFF0000) & intval($kwargs['rgb'])) >> 16;
			$this->green = ((0x00FF00) & intval($kwargs['rgb'])) >> 8;
			$this->red = ((0x0000FF) & intval($kwargs['rgb']));
		}
		else if (array_key_exists('red', $kwargs) && array_key_exists('green', $kwargs) && array_key_exists('blue', $kwargs))
		{
			$this->red = $kwargs['red'];
			$this->green = $kwargs['green'];
			$this->blue = $kwargs['blue'];
		}

		if ($this->red > 255)
			$this->red = 255;
		if ($this->blue > 255)
			$this->blue = 255;
		if ($this->green > 255)
			$this->green = 255;
		if (self::$verbose === TRUE)
			printf("Color( red: %3d green: %3d blue: %3d) constructed.\n", $this->red, $this->green, $this->blue);
		return ;
	}

	function __destruct () {
		if (self::$verbose === TRUE)
			printf("Color( red: %3d green: %3d blue: %3d) destructed.\n", $this->red, $this->green, $this->blue);
		return ;
	}

	function __toString () {
		return (sprintf("Color( red: %3d green: %3d blue: %3d)", $this->red, $this->green, $this->blue));
	}

	static function doc() {
		return (file_get_contents('Color.doc.txt'));

	}

	function add($color) {
		return (new Color(array('red' => $this->red + $color->red, 'green' => $this->green + $color->green, 'blue' => $this->blue + $color->blue)));

	}


	function sub($color) {
		return (new Color(array('red' => $this->red - $color->red, 'green' => $this->green - $color->green, 'blue' => $this->blue - $color->blue)));
	}

	function mult($color) {
		return (new Color(array('red' => $this->red * $color->red, 'green' => $this->green * $color->green, 'blue' => $this->blue * $color->blue)));
	}

}

?>
