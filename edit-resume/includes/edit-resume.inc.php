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
    $work_way = $_POST['work_way'];
    $email = $_POST['email'];
    $social_media = $_POST['social_media'];
    $phone = $_POST['phone'];
    $portfolio = $_POST['portfolio'];
    $self_intro = $_POST['self_intro'];


    // Instantiate the person class
    $person  = new Person();

    // Create new person
    $person->Name = $name;
    $person->Gender = $gender;
    $person->Keyword  = $keyword;
    $person->Age = $age;
    $person->Job_title = $job_title;
    $person->Work_way = $work_way;
    $person->Email = $email;
    $person->Social_Media = $social_media;
    $person->Phone = $phone;
    $person->Portfolio = $portfolio;
    $person->Introduction = $self_intro;
    //$person->Experience = $experience;
    $creation = $person->Create();



    $last_id = $person->lastInsertId();
    echo "Records inserted successfully. Last inserted ID is: " . $last_id;

    //$last_id = mysqli_insert_id($link);
    //$db->query("SELECT LAST_INSERT_ID 'resume'" );
    //echo $resume_id;


    header("Location: ../../resume/?id=".$last_id);




//}
