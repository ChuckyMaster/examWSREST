
        <!-- DISPLAY ONE CARD START HERE -->
        <div class="card border-dark m-3 p-3 justify-content-center" style="max-width: 45rem">
          <div class="card-header text-center text-big"> <?= $velo->getName() ?></div>
          <div class="card-body d-flex flex-column justify-content-center
          ">
          
          <div class="justify-content-center">
          <p class="card-text m-3 text-center">
              Description: 
             <?= $velo->getDescription()?>
            </p>
          <p class="card-text m-3 text-center">
              Price: 
             <?= $velo->getPrice()?>
            </p>

            <img 
              src="images/<?=$velo->getImage()?>"
              alt=""
            /> </div>
            
          </div>


          <div class="buttons d-flex justify-content-center">



          <div class="d-flex mt-5"> 
          <form class="me-3" action=""> 
            <button class="btn btn-primary ms-2" name="idToEdit" value="<?= $velo->getId()?>"> EDIT</button>
          </form>

<form action="" method="post">
   <button class="btn btn-secondary" name="id" value="<?= $velo->getId()?>"> DELETE</button>
</form>    </div>
         
        
          </div>
        </div>
        <!-- END ONE CARD -->


        <!-- PARTIE FORM GAUCHE -->

    <!-- method post partie formulaire
    author
    content
    veloId -->

    <!-- method post partie affichage 
    btn supprimer
    veloId -->

<div class="col-6">  
  
  <form action="?type=avis&action=new" method="post">
  <div class="form-group">
    <input type="text" name="author" placeholder="Your name" class="form-control-plaintext mb-5">
  </div>
  <div class="form-group">
    <textarea name="content" id="" cols="30" rows="10" placeholder="Your comment..." class="form-control"></textarea>
  </div>
  <div class="form-group mt-4">
  <button type="submit" value="<?=$velo->getId()?>"
  class="btn btn-outline-secondary" 
  name="veloId">POST</button>
  
  
  </div>
  </form>
</div>


<!-- PARTIE AFFICHAGE AVIS DROITE -->

<div class="col-6"> 


<?php foreach($avis as $avi) :?>
<!-- UN COMMENTAIRE -->
<div class="container mb-3">
  <div class="row d-flex flex-column">
    <div class="col-12">
      <div >
      <h4 class="mb-4 mt-4"> <?=  $avi->getAuthor()->getDisplayName() ?></h4>
      <p> <?= $avi->getContent() ?>  </p>

    
    </div>
   </div>
   <form action="?type=avi&action=delete" method="post">
    <input type="hidden" name="idVelo" value="<?= $velo->getId() ?>">


      <button type="submit" class="btn btn-danger" name="id" value="<?= $avi->getId()?>">Supprimer</button>
            </form>
  </div>
</div>
<!-- fin un commentaire -->
<?php  endforeach ?>

<?php 
  if(!$avis) { ?>

    <h4 class="text-muted text-center mt-5"> Nobody comment yet....</h4>


<?php } ?>
