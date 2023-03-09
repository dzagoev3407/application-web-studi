<?php session_start(); ?>
<?php include '../mySQL/cnx.php'; ?>
<?php include 'tableAdmin/afficher.php'; ?>
<?php include 'planques/afficherPlanquesDispo.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard Admin - Missions</title>
    <meta charset="utf-8">
    <!-- Bootstrap -->
    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Admin dashboard -->
    <link href="../css/dashboard.css" rel="stylesheet">
	<!-- Responsive Dashboard-->
	<link href="../css/responsiveDashboard.css" rel="stylesheet">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <body>

  <!-- Header -->
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1 class="text-white">Admin - Missions</h1>
	              </div>
	             </div>
	           </div>
	        </div>
			<a href="logout.php" class="text-decoration-none"><button class="btn btn-danger btn-pull-right"><i class="bi bi-door-open-fill">Se déconnecter</i></button></a>
			<button onclick="refresh();" class="btn btn-primary" id="btn-refresh">Rafraîchir</button>
	     </div>
	</div>

  <div class="welcome-admin text-center">

  <?php

  if(isset($_SESSION['email']))
  {
    	echo "Bienvenue Admin : ".$_SESSION['email'].".";
  }

  ?>

</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="submenu">
                    <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Agents
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sous-menu -->
                         <ul>
                            <li><i class="bi bi-plus-circle"><a href="agents/formAgents.php" class="text-decoration-none">Ajouter</a></i></li>
                            <li><i class="bi bi-pencil-square"><a href="agents/modifyAgents.php" class="text-decoration-none">Modifier</a></i></li>
                        </ul>
                    </li>
                    <li class="submenu">
                      <a href="#">
                      <i class="glyphicon glyphicon-list"></i> Cibles
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sous-menu -->
                         <ul>
                            <li><i class="bi bi-plus-circle"><a href="cibles/formCibles.php" class="text-decoration-none">Ajouter</a></i></li>
                            <li><i class="bi bi-pencil-square"><a href="cibles/modifyCibles.php" class="text-decoration-none">Modifier</a></i></li>
                        </ul>
                    </li>
                    <li class="submenu"><a href="#">
                    <i class="glyphicon glyphicon-list"></i> Contact
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sous-menu -->
                         <ul>
                            <li><i class="bi bi-plus-circle"><a href="contact/formContact.php" class="text-decoration-none">Ajouter</a></i></li>
                            <li><i class="bi bi-pencil-square"><a href="contact/modifyContacts.php" class="text-decoration-none">Modifier</a></i></li>
                        </ul>
                    </li>
                    <li class="submenu"><a href="#">
                    <i class="glyphicon glyphicon-list"></i> Planques
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sous-menu -->
                         <ul>
                            <li><i class="bi bi-plus-circle"><a href="planques/formAdd.php" class="text-decoration-none">Ajouter</a></i></li>
                            <li><i class="bi bi-pencil-square"><a href="planques/modifyPlanques.php" class="text-decoration-none">Modifier</a></i></li>
                        </ul>
                    </li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Missions
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sous-menu -->
                         <ul>
                            <li><i class="bi bi-plus-circle"><a href="missions/formMissions.php" class="text-decoration-none">Ajouter</a></i></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>

		  		<div class="col-md-6">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title text-white">Admin</div>
								
								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
							  <table class="table table-dark">
								<thead>
									<tr>
									<th scope="col">
										Nom
									</th>
									<th scope="col">
										Prénom
									</th>
									<th scope="col">
										email
									</th>
								</tr>
							</thead>
								<tbody>

							<?php foreach($displayAdmins as $displayAdmin): ?>
							<tr>
								<th scope="row">
									<?php echo $displayAdmin['nom']; ?>
								</th>
								<td>
									<?php echo $displayAdmin['prenom']; ?>
								</td>
								<td>
									<?php echo $displayAdmin['email']; ?>
								</td>
							<?php endforeach; ?>
						</tr>
				</tbody>
				<div class="text-center">
					<a href="addAdmin/formAdd.php"><button class="btn btn-primary">Ajouter</button></a>
			</div>
			</table>

		</div>
	</div>
</div>
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">Missions disponible</div>
								
								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				<table class="table table-dark">
								  <thead>
									<tr>
									<th scope="col">
										Nom
									</th>
									<th scope="col">
										Pays
									</th>
									<th scope="col">
										Code de la mission
									</th>
									<th scope="col">
										Action
									</th>
								</tr>
								<tbody>
									<?php foreach($displayMissions as $displayMission): ?>
									<tr>
										<td><?php echo $displayMission['titre'] ?></td>
										<td><?php echo $displayMission['pays'] ?></td>
										<td><?php echo $displayMission['code'] ?></td>
										<td><a href="missions/deleteMission.php?id=<?= $displayMission['titre'] ?>"><button class="btn btn-danger">Supprimer</button></td>
									</th>
									<?php endforeach; ?>
							</tbody>
							</thead>
							</table>
							</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div>
    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright <?php echo date('Y') ?> <a href='#'>Bonnefoy Kévin</a>
            </div>
            
         </div>
      </footer>
  </body>
  <!-- jQuery 3.6.2 -->
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.2.min.js"></script>
  <!-- JS -->
  <script src="../js/main.js"></script>
  <!-- Bootstrap JS -->
  <script src="../js/boostrapJS/bootstrap.min.js"></script>
  <!-- BTN Refresh -->
  <script src="../js/refresh.js"></script>
</html>