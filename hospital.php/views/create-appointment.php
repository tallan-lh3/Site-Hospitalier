<?php
require '../Controllers/create-appointmentController.php';
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
            <i class="fas fa-calendar-check fa-3x text-warning"></i><span class="float-right"><h3>Prendre un rendez-vous</h3></span>  
			</div>
		</div>
		<div class="col-md-9">
    <form action="" method="POST">
			<div class="contact-form">				
        <div class="form-group">
				  <label class="control-label col-sm-2" for="heureRdv">Heure</label>
				  <div class="col-sm-10">
					<input type="time" class="form-control text-center" id="heureRdv"  name="heureRdv">
				  </div>
				</div><div class="form-group">
				  <label class="control-label col-sm-2" for="dateRdv">Date</label>
				  <div class="col-sm-10">
					<input type="date" class="form-control text-center" id="dateRdv" name="dateRdv">
				  </div>
				</div>
				
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn" value="Ajouter un patient" name="addappointment">Valider</button>
				  </div>
				</div>
      </div>
    </form>
		</div>
	</div>
</div>
<!-- test -->
<?php
require '../public/cdn.php';
?>
</body>

</html>