<?php
	require("Db.class.php");

	// Creates the instance
	$db = new Db();

	// 3 ways to bind parameters :

	// 1. Read friendly method
	$db->bind("Name","Kona");
	$db->bind("Keyword","#");

	// 2. Bind more parameters
	$db->bindMore(array("Name"=>"John","Keyword"=>"#"));

	// 3. Or just give the parameters to the method
	$db->query("SELECT * FROM Persons WHERE Name = :Name AND Keyword = :Keyword", array("Name"=>"John","Keyword"=>"19"));

	//  Fetching data
	$person 	 =     $db->query("SELECT * FROM Persons");

	// If you want another fetchmode just give it as parameter
	$persons_num     =     $db->query("SELECT * FROM Persons", null, PDO::FETCH_NUM);

	// Fetching single value
	$firstname	 =     $db->single("SELECT Name FROM Persons WHERE id = :id ", array('id' => '3' ) );

	// Single Row
	$id_age 	 =     $db->row("SELECT id, Birth FROM Persons WHERE Name = :n", array("n"=>"Zoe"));

	// Single Row with numeric index
	$id_age_num      =     $db->row("SELECT id, Birth FROM Persons WHERE Name = :n", array("n"=>"Zoe"),PDO::FETCH_NUM);

	// Column, numeric index
	$ages  		 =     $db->column("SELECT Birth FROM Persons");

	// The following statements will return the affected rows

	// Update statement
	$update		 =  $db->query("UPDATE Persons SET Name = :n WHERE id = :id",array("n"=>"Johny","id"=>"1"));

	// Insert statement
//	$insert	 	 =  $db->query("INSERT INTO Persons(Firstname,Age) 	VALUES(:f,:age)",array("f"=>"Vivek","age"=>"20"));

	// Delete statement
//	$delete	 	 =  $db->query("DELETE FROM Persons WHERE Id = :id",array("id"=>"6"));

	function d($v, $t = "")
	{
		echo '<pre>';
		echo '<h1>' . $t. '</h1>';
		var_dump($v);
		echo '</pre>';
	}
	//d($person, "All persons");
	d($id_age, "Single Row, Id and Age");
	d($firstname, "Fetch Single value, The firstname");
	d($ages, "Fetch Column, Numeric Index");

?>
