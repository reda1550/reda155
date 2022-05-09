<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
    require_once 'database.php';
    include_once 'nav.php';
  ?>
    

        <?php 
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $prenom=$_POST['prenom'];
            $age=$_POST['age'];
            if(!empty($prenom) && !empty($name) && !empty($age)){
                $sqlState = $pdo->prepare('INSERT INTO person VALUES(null,?,?,?)');
                $sqlState->execute([$name,$prenom,$age]);
                
            }else{
                ?>
               
                   <h1> Required fields.</h1>
                
                <?php
            }

        }
        ?>
    
   


    <form method="POST" class="form-control">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">nom:</label>
    <input type="text" class="form-control" id="email" placeholder="Entrer votre nom" name="name">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">prenom:</label>
    <input type="text" class="form-control"  placeholder="Entrer votre prenom" name="prenom">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">age:</label>
    <input type="number" class="form-control"  placeholder="Entrer votre age" name="age">
  </div>
  
  </div>
  <button type="submit" class="btn btn-primary" name="submit">ajouter stagiaire</button>
</form>
</body>
</html>