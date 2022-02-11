
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://bootswatch.com/5/vapor/bootstrap.min.css"
    />
    <link rel="stylesheet" href="templates/style.css">
    <title> <?= $pageTitle ?>  </title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-secondary bg-dark mb-5">
      <a href="" class="navbar-brand ms-3 logo">Examen</a>


      <a href="?type=user&action=signup" class="btn btn-info me-2">Sign up</a>
        <a href="?type=user&action=signin" class="btn btn-secondary me-2">Log in</a>
        <a href="?type=user&action=signout" class="btn btn-primary me-2">Log out</a>

    </nav>
    <!-- FIN NAVBAR -->
    <div class="alert alert-warning alert-dismissible fade <?php if(isset($_GET['info'])){ echo $_GET['show'];}?>" role="alert">
  <strong> <?=  $_GET['info']?></strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="container">

    <!-- BAN HEADER -->
    <div class="container w-auto h-auto mb-5">
      <div class="row">
        <header>
          <div
            class="row justify-content-center align-items center text-center"
          >
            <div class="col-12 mb-5 mt-5">
              <h1 class="text-secondary">Welcome to Marie's Examen / Php</h1>

               


            </div>

            
          </div>
        </header>
      </div>
    </div>
       <!-- FIN BAN HEADER -->



       <div class="container">
       <div class="row d-flex flex-row justify-content-center">

           <?php


           var_dump($_SESSION);
           ?>
            <?= $pageContent ?>


       </div>
       </div>
<footer> FIN DE PAGE</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>

  </body>

 