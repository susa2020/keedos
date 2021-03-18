<?php

session_start();

require '../../assets/includes/auth_functions.php';
require '../../assets/includes/datacheck.php';
require '../../assets/includes/security_functions.php';


//if (!isset($_POST['resumesubmit'])){

  //  header("Location: ../");
  //  exit();
//}
//else {

    /*
    * -------------------------------------------------------------------------------
    *   Securing against Header Injection
    * -------------------------------------------------------------------------------
    *

    foreach($_POST as $key => $value){

        $_POST[$key] = _cleaninjections(trim($value));
    }*/


    /*
    * -------------------------------------------------------------------------------
    *   Verifying CSRF token
    * -------------------------------------------------------------------------------
    *

    if (!verify_csrf_token()){

        $_SESSION['STATUS']['loginstatus'] = 'Request could not be validated';
        header("Location: ../");
        exit();
    }*/


    //require '../../assets/setup/db.inc.php';
    require("../../assets/vendor/PHPDatabase/easyCRUD/Person.class.php");
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $experience = $_POST['experience'];
    $keyword = $_POST['keyword'];

    // Instantiate the person class
    $person  = new Person();

    // Create new person
    $person->Name = $name;
    $person->Keyword  = $keyword;
    $person->Gender = $gender;
    $person->Experience = $experience;
    $creation = $person->Create();
    header("Location: ../");




//}
