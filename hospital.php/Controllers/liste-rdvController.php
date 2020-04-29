<?php 
require '../models/class/Database.php';
require '../models/class/Appointment.php';

$newAppointment = new Appointment();
$AllAppointment = $newAppointment->listAppointment();