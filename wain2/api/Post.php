<?php 
  class Post {
    // DB stuff
    private $conn;
  
	
	public $name_hall;
    public $location;
    public $Apace;
    public $Cost;	

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    public function hall(){
	if($this->typeSearch==1)
	{
	 $query = 'SELECT * FROM hall WHERE name_hall=:name';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $this->hall);
	}
	else if($this->typeSearch==2)
	{
	 $query = 'SELECT * FROM hall WHERE Cost =:Cost';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':Cost', $this->hall);
	}

	else if($this->typeSearch==3)
	{
	 $query = 'SELECT * FROM hall WHERE location=:location';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':location', $this->hall);
	}
	else if($this->typeSearch==4)
	{
	 $query = 'SELECT * FROM hall WHERE Date =:Date';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':Date', $this->hall);
	}
	
	
	   
		
	    $stmt->execute();
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          $this->name_hall = $row['name_hall'];
          $this->location = $row['location'];
          $this->Apace = $row['Apace'];
          $this->Cost = $row['Cost'];
          
	
	}
	
	public function artist(){
	if($this->typeSearch==1)
	{
	 $query = 'SELECT * FROM artist WHERE name_Artist=:name';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $this->artist);
	}
	else if($this->typeSearch==2)
	{
	 $query = 'SELECT * FROM artist WHERE Cost =:Cost';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':Cost', $this->artist);
	}

		
	    $stmt->execute();
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          $this->name_artist = $row['name_Artist'];
         $this->Cost = $row['Cost'];
          
	
	}
	
	public function doctors(){
	if($this->typeSearch==1)
	{
	 $query = 'SELECT `name_doctor`,`cost`,sp.specialization FROM doctor do INNER JOIN specialization sp on sp.id=do.id_speci WHERE do.name_doctor=:name';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $this->doctors);
	}
	else if($this->typeSearch==2)
	{
	 $query = 'SELECT name_doctor,do.cost,sp.specialization FROM doctor do INNER JOIN specialization sp on sp.id=do.id_speci WHERE do.Cost =:Cost';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':Cost', $this->doctors);
	}
else if($this->typeSearch==3)
	{
	 $query = 'SELECT name_doctor,do.cost,sp.specialization FROM doctor do INNER JOIN specialization sp on sp.id=do.id_speci WHERE id_speci=:specialization';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':specialization', $this->doctors);
	}
		
	    $stmt->execute();
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          $this->name_doctor = $row['name_doctor'];
         $this->Cost = $row['cost'];
		 $this->specialization = $row['specialization'];
          
	
	}
	public function Atm(){
	if($this->typeSearch==1)
	{
	 $query = 'SELECT * FROM Atm WHERE Atm=:Atm';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':Atm', $this->Atm);
	}
	else if($this->typeSearch==2)
	{
	 $query = 'SELECT * FROM Atm WHERE location =:location';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':location', $this->Atm);
	}

		
	    $stmt->execute();
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          $this->Atm = $row['Atm'];
         $this->location = $row['location'];
          
	
	}
	 public function create() {
          // Create query
          $query = 'INSERT INTO reservation  SET id_typeS  = :id_typeS , id_user  = :id_user , id_side  = :id_side , date_reservation = :date_reservation, cost = :cost';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->id_typeS = htmlspecialchars(strip_tags($this->id_typeS));
          $this->id_user = htmlspecialchars(strip_tags($this->id_user));
          $this->id_side = htmlspecialchars(strip_tags($this->id_side));
          $this->date_reservation = htmlspecialchars(strip_tags($this->date_reservation));
		  $this->cost = htmlspecialchars(strip_tags($this->cost));

          // Bind data
          $stmt->bindParam(':id_typeS', $this->id_typeS);
          $stmt->bindParam(':id_user', $this->id_user);
          $stmt->bindParam(':id_side', $this->id_side);
          $stmt->bindParam(':date_reservation', $this->date_reservation);
		  $stmt->bindParam(':cost', $this->cost);

          // Execute query
          if($stmt->execute()) {
            return true;
      }

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
    }
	
  }