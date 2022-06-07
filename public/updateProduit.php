<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="./css/first1-page.css">
       <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Mise à jour produit</title>
</head>
<body>
   <h1>
       Mettre à jour un produit
   </h1>
    <div class="container">
        <div class="row">
           <div class="col-6">
                <form action="" method="POST" class="form-group">
                        Référence Produit : 
                        <input type="text" name="reference" id=""class="form-control">
                        
                        Nom Produit : 
                        <input type="text" name="nomproduit" id=""class="form-control">
                        
                        Description :
                        <input type="text" name="description" id=""class="form-control">
                        
                        Disponibilité : 
                        <input type="text" name="disponibilite" id=""class="form-control">
                        
                        Etat : 
                        <input type="text" name="etat" id=""class="form-control">
                        
                        <input type="submit" name="update" id="" value="mettre a jours" class="btn btn-primary mt-3" >
                    </form>
           </div> 
        </div>
    </div>
</body>
</html>