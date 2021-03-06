<?php

class baseObj {
    public $mysql = null;
    private $table = null;

    public function __construct ()
    {
        $this->mysql = new mysqli("localhost", "root", "root", "mylab");
        if ($this->mysql->connect_errno) {
            echo "Failed to connect to MySQL: (" . $this->mysql->connect_errno . ") " . $this->mysql->connect_error;
        }
    }
	
	public function setTable($table=""){
		$this->table = $table;
	}

    public function get ($id, $field)
    {
        return $this->mysql->query("SELECT $field FROM $this->table WHERE ID = $id");
    }

    public function getAll ($id)
    {
        $res = $this->mysql->query("SELECT * FROM $this->table WHERE ID = $id");
        return $res->fetch_assoc();
    }
}

class propertyData extends baseObj {
    public $id = null;
    public $type = null;
    public $title = null;
    public $address = null;
    public $bedroom = null;
    public $livingroom = null;
    public $diningroom = null;
    protected $hdbblock = null;
    private $swimmingPool = null;

    private $table = 'Property';
	
	public function __construct (){
		parent::__construct();
		$this->setTable($this->table);
	}
    public function getType ($ID) { $Type = $this->get( $ID, 'Type'); return $Type; }
    public function getTitle ($ID) { $Title = $this->get( $ID, 'Title') ; return $Type;}
    public function getAddress ($ID) { $Address = $this->get( $ID, 'Address') ; return $Address;}
    public function getBedroom ($ID) { $Bedroom = $this->get( $ID, 'Bedroom') ; return $Bedroom;}
    public function getLivingroom ($ID) { $livingroom = $this->get( $ID, 'Living_room') ; return $livingroom;}
    public function getDiningroom ($ID) { $diningroom = $this->get( $ID, 'Diningroom') ; return $diningroom;}
    public function getSwimmingPool ($ID) {
		$swimmingPool = new condoData($ID) ; 
		return $swimmingPool;
	}
	public function getHdbblock ($ID) {
		$hdbblock = new hdbData($ID) ; 
		return $hdbblock;
	}
   
}

class hdbData extends propertyData {
    private $table = 'HDB';
	private $PID = null;
	public function __construct ($PID=0){
		parent::__construct();
		$this->setTable($this->table);
		$this->PID = $PID;
	}
    public function getHDBBlock ($ID) { $this->hdbblock = $this->get($ID, 'HDBBlock'); return $this->hdbblock; }
	public function getHDBBlockByPID () {
		$swimmingPool = $this->mysql->query("SELECT * FROM $this->table WHERE PID = $this->PID");
        return $swimmingPool->fetch_assoc();
	}
}

class condoData extends propertyData {
    private $table = 'ConDO';
    private $PID = null;
	public function __construct ($PID=0){
		parent::__construct();
		$this->setTable($this->table);
		$this->PID = $PID;
	}
    public function gotSwimmingPool ($ID)
    {
        return $this->get($ID, 'SwimmingPool');
    }
	public function getSwimmingPoolByPID () {
		$swimmingPool = $this->mysql->query("SELECT * FROM $this->table WHERE PID = $this->PID");
        return $swimmingPool->fetch_assoc();
	}
}

?>