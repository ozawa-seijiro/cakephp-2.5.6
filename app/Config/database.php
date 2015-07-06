class DATABASE_CONFIG {
    public $default = [];
    public $test = [];

    public function __construct() {
        $this->default = Configure::read('DATABASE_OPTIONS');
        $this->test = Configure::read('TEST_DATABASE_OPTIONS');
    }
}


