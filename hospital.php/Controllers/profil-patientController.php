<?php 
require '../models/class/Database.php';
require '../models/class/Patient.php';
require '../models/class/Appointment.php';
$patient = new Patient();
$Appointment = new Appointment();
$idPatient = $_GET['id'];
if(isset($_POST['idAppointment'])){
$Appointment->setId((int) htmlspecialchars($_POST['idAppointment']));
if($Appointment->deleteAppointment()){
header('Location: profil-patient.php?id='.$idPatient);
}
}
$patient -> setId($idPatient);
$patientInfos = $patient->eachPatient();



