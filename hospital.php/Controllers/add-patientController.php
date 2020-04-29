<?php 
require '../models/class/Database.php';
require '../models/class/Patient.php';

$patient = new Patient();

if(isset($_POST['addpatients']) && $_POST['addpatients']=='Ajouter un patient'){
$birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] :'';
$firstname = isset($_POST['firstname']) ? $_POST['firstname'] :'';
$lastname = isset($_POST['lastname']) ? ($_POST['lastname']) :'';
$mail = isset($_POST['mail']) ? $_POST['mail'] :'';
$phone = isset($_POST['phone']) ? $_POST['phone'] :'';


//Hydratation
$patient->setFirstname($firstname);
$patient->setLastname($lastname);
$patient->setMail($mail);
$patient->setBirthdate($birthdate);
$patient->setPhone($phone);
$patient->addPatient();

}