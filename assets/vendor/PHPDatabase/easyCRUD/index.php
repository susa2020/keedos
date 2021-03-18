<?php
// Require the person class file
   require("Person.class.php");

// Instantiate the person class
   $person  = new Person();

// Create new person
   $person->Name = "Koqqra";
   $person->Keyword  = "#test233";
   $person->Gender = "F";
   $person->Birth = "2003-01-01";
   $person->Phone = "091234567";
   $person->Email = "asd@asd.com";
   $person->Social_Media = "asd@asd.com";

   $creation = $person->Create();

// Update Person Info
   $person->id = "22";
   $person->Keyword = "#111";
   $saved = $person->Save();

// Find person
   $person->id = "23";
   $person->Find();

   d($person->Name, "Person->Name");
   d($person->Birth, "Person->Birth");

// Delete person
   $person->id = "20";
   $delete = $person->Delete();

 // Get all persons
   $persons = $person->all();

   // Aggregates methods
   /*d($person->max('age'), "Max person age");
   d($person->min('age'), "Min person age");
   d($person->sum('age'), "Sum persons age");
   d($person->avg('age'), "Average persons age");
   d($person->count('id'), "Count persons");*/

   function d($v, $t = "")
   {
      echo '<pre>';
      echo '<h1>' . $t. '</h1>';
      var_dump($v);
      echo '</pre>';
   }

?>
