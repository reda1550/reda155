<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    

        <?php 

            require_once 'database.php';
            include_once 'nav.php';
            $idd=$_POST['id'];
            $sqlState = $pdo->prepare('SELECT * FROM person WHERE id=?');
            $sqlState->execute([$idd]);
            $b=$sqlState->fetch(PDO::FETCH_OBJ);
                
        if(isset($_POST['s'])){
            $n=$_POST['n'];
            $p=$_POST['p'];
            $a=$_POST['a'];
            $id=$_POST['id'];
            if(!empty($id) && !empty($n) && !empty($a)  && !empty($p)){
                $sqlState = $pdo->prepare('UPDATE person SET Nom=?,Prenom=?,Age=? WHERE id=?');
                $search=$sqlState->execute([$n,$p,$a,$id]);
                if($search==true){
                    header('location:index.php');
                }else{
                    echo 'ressayer';
                }
                
               
                   
                
                
            }

        }
        ?>
    
   


    <form method="POST"  action="modifier.php" class="form-control">
    <input type="hidden" name="id" value="<?php echo $b->id?>">
  <div class="mb-3 mt-3">
    <label  class="form-label">nom:</label>
    <input type="text" class="form-control" id="email" placeholder="Entrer votre nom" name="n">
  </div>
  <div class="mb-3">
    <label  class="form-label">prenom:</label>
    <input type="text" class="form-control" id="pwd" placeholder="Entrer votre prenom" name="p">
  </div>
  <div class="mb-3">
    <label  class="form-label">age:</label>
    <input type="number" class="form-control"  placeholder="Entrer votre age" name="a">
  </div>
  
  </div>
  <button type="submit" class="btn btn-primary" name="s">modifier les informations de  stagiaire</button>
</form>
</body>
</html>