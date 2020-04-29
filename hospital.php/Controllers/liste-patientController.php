<?php
require '../models/class/Database.php';
require '../models/class/Patient.php';

$newPatient = new Patient();
if (isset($_POST['deletePatient'])) {
    $newPatient->setId(htmlspecialchars($_POST['deletePatient']));
    $newPatient->deletePatient();
}
$AllPatients = $newPatient->listPatient();


