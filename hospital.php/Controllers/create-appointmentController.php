<?php 
require '../models/class/Database.php';
require '../models/class/Appointment.php';
require '../models/class/Patient.php';



$appointment = new Appointment();
// je recupere l'id via la methode get
$idPatient = $_GET['id'];

if(isset($_POST['addappointment'])){
$dateHour = isset($_POST['dateRdv']) && isset($_POST['heureRdv'])  ? ($_POST['dateRdv']).' '.($_POST['heureRdv']) :'';

$appointment->setDatehour($dateHour);
// je set l'id du patient pour que le rdv soit pour ce patient
$appointment->setIdPatient($idPatient);
$appointment->addAppointment();


}