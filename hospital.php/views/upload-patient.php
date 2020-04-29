<?php
require '../Controllers/upload-patientController.php';
require '../public/header.php';
?>
<body class="img-fluid">
<?php
require '../public/navbar.php';
?>
 <!-- test -->
        <div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
      <i class="fas fa-user-edit fa-3x text-warning"></i><span class="float-right"><h3>Modifier le Profil</h3></span>
			</div>
		</div>
		<div class="col-md-9">
    <form action="" method="POST">
			<div class="contact-form">
			<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Nom :</label>
				  <div class="col-sm-10">
					<input value="<?=isset($infoPatient[0]['lastname']) ? $infoPatient[0]['lastname'] : ''?>" type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lastname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">Prénom :</label>
				  <div class="col-sm-10">
					<input value="<?=isset($infoPatient[0]['firstname']) ? $infoPatient[0]['firstname'] : ''?>" type="text" class="form-control" id="fname" placeholder="Enter First Name" name="firstname">
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input value="<?=isset($infoPatient[0]['mail']) ? $infoPatient[0]['mail'] : ''?>" type="email" class="form-control" id="email" placeholder="Enter email" name="mail">
				  </div>
        </div>
        <div class="form-group">
				  <label class="control-label col-sm-2" for="email">Téléphone :</label>
				  <div class="col-sm-10">
					<input value="<?=isset($infoPatient[0]['phone']) ? $infoPatient[0]['phone'] : ''?>" type="tel" class="form-control" id="phone" placeholder="Entrer votre Tel" name="phone">
				  </div>
				</div><div class="form-group">
				  <label class="control-label col-sm-2" for="email">Date de naissance :</label>
				  <div class="col-sm-10">
					<input value="<?=isset($infoPatient[0]['birthdate']) ? $infoPatient[0]['birthdate'] : ''?>" type="date" class="form-control" id="birthdate" name="birthdate">
				  </div>
				</div>

				<div class="form-group">
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn" value="<?=$id?>" name="uploadProfil">Modifier le profil</button>
				  </div>
				</div>
      </div>
    </form>
		</div>
	</div>
</div>
<?php
require '../public/cdn.php';
?>
</body>
</html>
