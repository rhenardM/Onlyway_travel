
<!DOCTYPE html>
<html lang="en">

<body>
  <!-- ======= Header ======= -->
  <?php include "header.php"; ?>
 <!-- End Header -->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Table d'enregistrement</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="accueil.php">Accueil</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Table</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Les enregistrements des clients</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Nom</th>
                    <th scope="col">Post-nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Age</th>
                    <th scope="col">Nom tuteur</th>
                    <th scope="col">Num tuteur</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php require 'login-connexion.php';  
                  $query="select * from tb_inscription";
                  $pdostmt=$pdo->prepare($query);
                  $pdostmt->execute();
                ?>
                <?php while($ligne=$pdostmt->fetch(PDO::FETCH_ASSOC)):?>
                  <tr>
                    <th scope="row"></th>
                    <td><?php echo $ligne["nom"]; ?></td>
                    <td><?php echo $ligne["postnom"]; ?></td>
                    <td><?php echo $ligne["prenom"]; ?></td>
                    <td><?php echo $ligne["sexe"]; ?></td>
                    <td><?php echo $ligne["numero"]; ?></td>
                    <td><?php echo $ligne["age"]; ?></td>
                    <td><?php echo $ligne["nom_tuteur"]; ?></td>
                    <td><?php echo $ligne["num_tuteur"]; ?></td>
                    <td>
                    <!-- integration modal -->
                      <?php //require 'modal.php';?>
                    <!--end integration modal -->
                      <div class="d-flex justify-content">
                      <button  type="button" class="btn btn-info bi bi-pencil-square btn-sm"  data-bs-toggle="modal"  data-bs-target="#exampleModal"></button>&nbsp;
                      <button class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i></button>
                      </div>
                    </td>
                  </tr>
                  <?php endwhile; ?>
                </tbody>
              </table><br><br><br>
              <!-- End Table with stripped rows -->
            </div>
          </div>

        </div>
      </div>
    </section>
  </main><!-- End #main -->

<!-- ======= footer ======= -->
<?php include "footer.php"; ?>
 <!-- End footer -->