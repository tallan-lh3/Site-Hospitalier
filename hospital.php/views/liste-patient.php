<?php
require '../Controllers/liste-patientController.php';
require '../public/header.php';
?>
<body class="img-fluid">

<?php
require '../public/navbar.php';
?>
<div class="container col-10 mt-5 table-responsive">
  <a href="add-patient.php">
    <button class="float-right badge badge-warning rounded border border-warning">

      Ajouter un patient
    </button>
  </a>

        <table class="table table-hover bg-white rounded">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Adresse mail</th>
      <th scope="col">Téléphone</th>
    </tr>
  </thead>
  <tbody>
  <?php

// boucle de mes patients
foreach ($AllPatients as $patients) {
    ?>
   <tr>
      <th scope="row"><?=$patients['lastname']?></th>
      <td><?=$patients['firstname']?></td>
      <td><?=$patients['birthdate']?></td>
      <td><?=$patients['phone']?></td>
      <td><?=$patients['mail']?></td>
      <td><a href="profil-patient.php?id=<?=$patients['id']?>"><span class="badge badge-info rounded border border-info">Profil</span></a></td>
      <td>
        <form action="" method="POST">
        <button type="submit" name="deletePatient" value="<?= $patients['id'] ?>" class="badge badge-danger border border-danger rounded" >Supprimer</button>
</form>
    </tr>
        <?php
}
?>
  </tbody>
</table>

</div>

<?php
require '../public/cdn.php';
?>
</body>

</html>
