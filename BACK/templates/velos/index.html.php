<div class="container">
  <div class="row ">
    <div class="col-12 d-flex justify-content-center"> 
      <a href="?type=velo&action=new" class="btn btn-info"> Créer un Velo</a>
    </div>
  </div>
</div>


<?php foreach($velos as $velo){ ?>


<!-- START ONE CARD -->

<div class="col-3 card border-dark m-3 p-3" style="max-width: 20rem">
          <div class="card-header text-center">   <?= $velo->getName() ?> </div>
          <div class="card-body d-flex flex-column ">

          <!-- Affichage de l'image -->
            <img style="max-width: 15rem" class="justify-content-center"
              src="images/<?= $velo->getImage() ?>"
              alt=""
            />



            
            <p class="card-text text-center m-2">
             Description: <?= $velo->getDescription() ?>
            </p>
            <p class="card-text text-center m-2">
             Price: <?= $velo->getPrice() ?>
            </p>


              <p> <?=  $velo->getUserId()  ?> </p>
          </div>


          <div class="buttons d-flex justify-content-center">



          <div>  
          <a href="?type=velo&action=show&id=<?= $velo->getId() ?>" class="btn btn-primary"> VIEW  </a>
          </div>
          
      <form action="?type=velo&action=delete" method="post" class="ms-2">
   <button class="btn btn-secondary " name="id" value="<?= $velo->getId() ?>"> DELETE</button>
          </form>  </div>
          
        </div>











<?php } ?>