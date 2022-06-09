<?php session_start();

if (!isset($_SESSION['login']))
{
    header("Location: Formulaire/formulaire.co.php");
    die();
}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" title="Matériel">
    <style>
        body {
            color: #041937;
            height: 100vh;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        
        .team-boxed {
            color: #EC6834;
            background-color: #041937;
            height: 100%;
        }
        
        .team-boxed p {
            color: #EC6834;
        }
        
        .team-boxed h2 {
            font-weight: bold;
            margin-bottom: 40px;
            padding-top: 40px;
            color: inherit;
        }
        
        .team-boxed .intro {
            font-size: 16px;
            max-width: 500px;
            margin: 0 auto;
        }
        
        .team-boxed .intro p {
            margin-bottom: 0;
        }
        
        .team-boxed .people {
            padding: 50px 0;
            justify-content: center;
        }
        
        .team-boxed .item {
            text-align: center;
        }
        
        .rounded-circle {
            border-radius: 0%!important;
        }
        
        .team-boxed .item .box {
            text-align: center;
            padding: 50px;
            background-color: #041937;
            margin-bottom: 30px;
            justify-content: center;
            align-items: center;
            border-style: groove;
            border-color: #EC6834;
        }
        
        .team-boxed .item .name {
            font-weight: bold;
            margin-top: 28px;
            margin-bottom: 8px;
            color: inherit;
        }
        
        .team-boxed .item .title {
            text-transform: uppercase;
            font-weight: bold;
            color: #d0d0d0;
            letter-spacing: 2px;
            font-size: 13px;
        }
        
        .team-boxed .item .description {
            font-size: 15px;
            margin-top: 15px;
            margin-bottom: 20px;
        }
        
        .team-boxed .item img {
            max-width: 160px;
        }
        
        a.button {
            color: #EC6834;
        }
    </style>
</head>

<body>
    <div class="team-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Fiche technique</h2>
                <p class="button" style="text-align:center;"><a class="button" href="../materiel.php">Retour</a></p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="../public/image/CasqueVR.jpg">
                        <h3 class="name">CasqueVR</h3>
                        <p class="title">Matériel</p>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>