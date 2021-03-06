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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Retour Location</title>
    <style>
        body {
            background-color: #041937;
        }

        .modal-body {
            background-color: #041937;
            color: #EC6834;
        }

        .modal-content {
            background-color: #041937;
            color: #EC6834;
            justify-content: center;
        }

        h1 {
            color: #EC6834;
        }

        #button1 {
            background-color: #EC6834;
            color: #041937;
            position: relative;
            left: 70%;
        }

        #button2 {
            background-color: #EC6834;
            color: #041937;
        }
        .text-center{
            color: #EC6834;
        }
    </style>
</head>

<body>
  
    <section class="vh-100" style="background-color: #041937">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Retour de Location</p>
      
                      <form class="mx-1 mx-md-4">
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Nom</label>
                            <input type="text" id="form3Example1c" class="form-control" />
                          </div>
                        </div>
                       
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example3c">Email</label>
                            <input type="email" id="form3Example2c" class="form-control" />
                          </div>
                        </div>

                     

                      
                        
                        
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">                               
                                    <label class="form-label" for="form3Example1c">Date de retour</label>
                                    <input type="date" id="form3Example3c" class="form-control" />  
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <label class=" form-dropdown form-label" for="form3Example4c">Type de retour
                                    <select class="form-control">
                                        <option>Vid??o Projecteur</option>
                                        <option>Ordinateur</option>
                                        <option>??cran</option>
                                        <option>Casque VR</option>
                                        <option>Webcam</option>
                                    </select>
                                </label>

                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Bon ??tat
                            </label>
                        </div>
                           

      
                        
                        <div class="d-flex flex-row align-items-center mb-3">
                          <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example5c">Signaler un soucis... </label>
                            <textarea id="t3" name="msg" maxlength="80" rows="3"></textarea>
      
                       
                        


      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <a href="./materiel.php">
                          <button type="button" class="btn btn-warning btn-lg">Retour </button>
                        </a>
                          <button type="button" class="btn btn-primary btn-lg">Valider </button>

                        </div>

      
                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                    <img src="../image/Location-de-mat??riel-informatique.png" alt="" class="img-fluid mx-auto d-block" />
                        
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
            

                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                                crossorigin="anonymous"></script>

</body>

</html>