<?php
require '../Controllers/liste-rdvController.php';
require '../public/header.php';
?>
<body class="img-fluid">

<?php
require '../public/navbar.php';
?>
<div class="container col-7 mt-5 table-responsive">
        <table class="table table-hover bg-white rounded">
  <thead>
    <tr>
      
      <th scope="col">Prénom</th>
      <th scope="col">Date & Heure</th>
  
    </tr>
  </thead>
  <tbody>
  <?php

// boucle de mes patients
foreach ($AllAppointment as $appointment) {
    ?>
   <tr>
      <td><?= $appointment['firstname'] ?></td>
      <td><?= $appointment['dateHour'] ?></td>
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
