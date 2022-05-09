<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="BS5/css/bootstrap.min.css">
    <title>Acceuil</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php
    require_once 'database.php';
    include_once 'nav.php';
    $sqlState=$pdo->query('SELECT * FROM person');
    $bnadem=$sqlState->fetchAll(PDO::FETCH_OBJ);
  ?>

  




  <table class="table table-striped   mt-2">
  
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">age</th>
      <th scope="col">action</th>
      <th scope="col"></th>
    </tr>
  
  
  <?php 
      foreach($bnadem as $bnademm){ ?>
         <tr>
                        <td><?= $bnademm->id ?> </td>
                        <td><?= $bnademm->Nom ?> </td>
                        <td><?= $bnademm->Prenom ?> </td>
                        <td><?= $bnademm->Age ?> </td>
                        <td style="width: 10%;"><form action="modifier.php" method="POST" class="form-control">
                          <input type="hidden" name="id" value="<?= $bnademm->id ?>">
                          <input type="submit" value="modifier" class="form-control no-border btn btn-primary"name="modifier">
                        </form>
                      </td>
                      <td style="width:10% ;"><form action="suprimer.php" method="POST" class="form-control">
                          <input type="hidden" name="id" value="<?= $bnademm->id ?>">
                          <input type="submit" value="Suprimer" class="form-control no-border btn btn-danger"name="Suprimer">
                        </form></td>
                        <?php 
      }
    ?>
    </tr>
  
</table>
  
</body>
</html>