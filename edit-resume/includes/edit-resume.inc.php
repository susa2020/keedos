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
    $age = $_POST['age'];
    $hashtag1 = $_POST['hashtag1'];
    $hashtag2 = $_POST['hashtag2'];
    $hashtag3 = $_POST['hashtag3'];
    $keyword = $hashtag1.$hashtag2.$hashtag3;
    $job_title = $_POST['job_title'];
    $eng_level = $_POST['eng_level'];
    $email = $_POST['email'];
    $social_media = $_POST['social_media'];
    $phone = $_POST['phone'];
    $portfolio = $_POST['portfolio'];
    $self_intro = $_POST['self_intro'];


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
