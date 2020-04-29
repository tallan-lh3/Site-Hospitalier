<?php 
require '../models/class/Database.php';
require '../models/class/Patient.php';


$patient = new Patient();

// je recupère l'id via le $_POST['idPatient'] de la page profil patient et je créé une variable $id
$id = isset($_POST['idPatient'])? $_POST['idPatient']:'';

  $birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] :'';
  $firstname = isset($_POST['firstname']) ? $_POST['firstname'] :'';
  $lastname = isset($_POST['lastname']) ? ($_POST['lastname']) :'';
  $mail = isset($_POST['mail']) ? $_POST['mail'] :'';
  $phone = isset($_POST['phone']) ? $_POST['phone'] :'';
  $idEdit = isset($_POST['uploadProfil'])? $_POST['uploadProfil']:'';


// Je set l'attribut id de patient avec la valeur $id.
$patient->setId($id);

// Je crée un tableau $infoPatient via la méthode eachPatient()
$infoPatient = $patient->eachPatient();

 
 $patient->setFirstname($firstname);
 $patient->setLastname($lastname);
 $patient->setMail($mail);
 $patient->setBirthdate($birthdate);
 $patient->setPhone($phone);
 $patient->setId($idEdit);
 $patient->uploadPatient();

if(isset($_POST['uploadProfil'])){
    header('location: liste-patient.php');
}
   


