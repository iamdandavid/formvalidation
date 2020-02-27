<?php
    include_once ("validation.php");
    $firstname = $_POST['firstname'];
    //echo $firstname, "\n";
    $lastname = $_POST['lastname'];
     //echo $lastname, "\n";
    $middlename = $_POST['middlename'];
    //echo $middlename, "\n";
    $address = $_POST['address'];
    //echo $address, "\n";
    $dateofbirth = $_POST['dateofbirth']; // your date variable in  '2015-10-10 ' formate
    echo "dateofbirth: ",date('m-d-Y',strtotime($dateofbirth)), "<br>"; // return 10-10-2015
    $placeofbirth = $_POST['placeofbirth'];
    //echo $POB, "\n";
    $gender = $_POST['gender'];
    //echo $gender, "\n";
    $guardian = $_POST['guardian'];
    //echo $guardian, "\n";
    $contactnumber = $_POST['contactnumber'];
   
    //echo substr($number, 0, 1), "<br>";
    $civilstatus = $_POST['civilstatus'];
     //echo $status, "\n";
    $yearlevel = $_POST['yearlevel'];
    //echo $year, "\n";
    $course = $_POST['course'];
    //echo $course, "\n";
    $schoolyear = $_POST['schoolyear'];
    //echo $sy, "\n";
    $email = $_POST['email'];
    //echo $email, "\n";
    /* 1 */
    if (notEmp($firstname) && notEmp($lastname) && notEmp($middlename) && notEmp($address) && notEmp($placeofbirth) && notEmp($guardian) && notEmp($contactnumber) && notEmp($civilstatus) && notEmp($schoolyear) && notEmp($email)){
        echo "valid", "<br>";
    }
    else{
        echo "invalid", "<br>";
    }
    
    /* 2 */
    if (shouldnotNum($firstname) && shouldnotNum($lastname) && shouldnotNum($middlename) &&shouldnotNum($address) && shouldnotNum($placeofbirth) && shouldnotNum($guardian) && shouldnotNum($civilstatus) && shouldnotNum($email)){
        echo "valid", "<br>";
    }
    else{
        echo "invalid", "<br>";
    }
    /* 3 */
    if (notSpecialChar($firstname) && notSpecialChar($lastname) && notSpecialChar($middlename) && notSpecialChar($address) && notSpecialChar($placeofbirth) && notSpecialChar($guardian) && notSpecialChar($civilstatus) && notSpecialChar($schoolyear) && notSpecialChar($email)){
        echo "valid", "<br>";
    }
    else{
        echo "invalid", "<br>";
    }
    /* 4 */
    if (moreThan2($lastname) && moreThan2($firstname)){
        echo "valid", "<br>";
    }
    else{
        echo "invalid", "<br>";
    }
    /* 5 */
    if (notags($lastname) && notags($firstname) && notags($middlename) && notags($address) && notags($placeofbirth) && notags($guardian) && notags($civilstatus) && notags($schoolyear) && notags($email)){
       echo "valid", "<br>";
    }
    else{
        echo "invalid", "<br>"; 
    }
    /* 6 */
    if (emailFormat($email)){
        echo "valid", "<br>";
    }
    else{
        echo "Invalid", "<br>";
    }
    /* 7 */
    if (philpreffix($contactnumber)){
        echo "valid";
    }
    else{
        echo "invalid";
    }
    
?>