<?php session_start(); ?>
<?php include '../../mySQL/cnx.php'; ?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-brand bg-dark w-100">
    <h1 class="text-center text-white">
        <?php echo "Admin : ".$_SESSION['email']; ?>
    </h1>
</nav>
 
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>