<?php

session_start();

require '../../../assets/includes/auth_functions.php';
require '../../../assets/includes/datacheck.php';
require '../../../assets/includes/security_functions.php';


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
    require("../../../assets/vendor/PHPDatabase/easyCRUD/Person.class.php");
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $hashtag1 = $_POST['hashtag1'];
    $hashtag2 = $_POST['hashtag2'];
    $hashtag3 = $_POST['hashtag3'];
    $hashtag_other = $_POST['hashtag_other'];
    $keyword_search = $hashtag1.$hashtag2.$hashtag3.$hashtag_other;
    $job_title = $_POST['job_title'];
    $work_way = $_POST['work_way'];
    $email = $_POST['email'];
    $social_media = $_POST['social_media'];
    $phone = $_POST['phone'];
    $pro_link = $_POST['pro-link'];
    //$portfolio = $_POST['portfolio'];
    $if_other_org = $_POST['if-other-org'];
    $location = $_POST['location'];
    $self_intro = $_POST['self_intro'];
    $experience = $_POST['experience'];


    // Instantiate the person class
    $person  = new Person();

    // Update Person Info
    $person->Name = $name;
    $person->Gender = $gender;
    $person->Hashtag1 = $hashtag1;
    $person->Hashtag2 = $hashtag2;
    $person->Hashtag3 = $hashtag3;
    $person->Hashtag_other = $hashtag_other;
    $person->Keyword_search  = $keyword_search;
    $person->Age = $age;
    $person->Job_title = $job_title;
    $person->Work_way = $work_way;
    $person->Email = $email;
    $person->Social_Media = $social_media;
    $person->Phone = $phone;
    $person->Pro_link = $pro_link;
    $person->If_other_org = $if_other_org;
    $person->Location = $location;
    $person->Introduction = $self_intro;
    $person->Experience = $experience;
    $creation = $person->Create();


    $last_id = $person->lastInsertId();
    echo "Records inserted successfully. Last inserted ID is: " . $last_id;

    //$last_id = mysqli_insert_id($link);
    //$db->query("SELECT LAST_INSERT_ID 'resume'" );
    //echo $resume_id;

    require( $_SERVER['DOCUMENT_ROOT'].'/file_dir_config.php' );
    require( DIR_EASYCRUD.'ResumeOwner.class.php' );
    //require("/assets/vendor/PHPDatabase/easyCRUD/ResumeOwner.class.php");
    $owner = new ResumeOwner();

    $owner->user_id =$_SESSION['id'];
    $owner->resume_id = $last_id;
    $creation = $owner->Create();
    //echo "user_id: " . $_SESSION['id'];


    header("Location: /resume/?id=".$last_id);





//}
