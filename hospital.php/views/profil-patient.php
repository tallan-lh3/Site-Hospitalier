<?php
require '../Controllers/profil-patientController.php';
require '../public/header.php';
?>
<body class="img-fluid">
<?php
require '../public/navbar.php';
?>

  <?php
foreach ($patientInfos as $patients) {
    ?>
<div class="card text-center col-6 mx-auto card-profil-patient">
  <div class="card-body">
    <h5 class="card-title"><span class="h2 logo">Bienvenue</span> <br/><u><?=$patients['firstname']?> <?=$patients['lastname']?></u></h5>
    <br/>
    <h6 class="h4 text-navbar"><i class="fas fa-birthday-cake"></i> <u><?=$patients['birthdate']?></u> </h6>
    <p class="h4 text-navbar"><i class="fas fa-phone-volume"></i> <u><?=$patients['phone']?></u> </p>
    <p class="h4 text-navbar"><i class="fas fa-envelope"></i> <u><?=$patients['mail']?></u> </p>
    <br>
    <p class=" h4 logo">Rendez-vous programmé</p>
    <p class="rdv-programme" > - <?= isset($patients['dateHour']) ? $patients['dateHour'] : 'Aucun rendez-vous programmé' ?></p>
<form action="" method="POST">
<button class="bg-danger rounded border border-danger text-white btn" type="submit" value="<?= $patients['idAppointment'] ?>" name="idAppointment">Supprimer</button>
</form>
    <form action="upload-patient.php" method="POST">
<button class=" mt-2 btn btn-success rounded border border-success" type="submit" value="<?=$patients['id']?>" name="idPatient">
Modifier
</button>
       </form>
       <a href="create-appointment.php?id=<?=$idPatient?>">
        <button class=" mt-2 btn btn-warning border border-warning rounded">Prendre <br/> un rendez-vous</button></td>
        </a>
  </div>
  </div>
        <?php
}
?>
<?php
require '../public/cdn.php';
?>
</body>
</html>
