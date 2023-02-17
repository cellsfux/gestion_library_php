<div class="page-content bg-grey">
		<section class="content-inner-1 border-bottom">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
					<h4 class="title"> Adminitration Categorie off Books</h4>
				</div>

                <div class="container d-flex py-3">
                    <a href="<?= URLROOT ?>admin" class="btn btn-primary me-2">Les livres</a>
                    <a href="<?= URLROOT ?>admin/users" class="btn btn-primary me-2">Users</a>
                    <a href="<?= URLROOT ?>admin/lecture" class="btn btn-primary me-2">Lectures</a>
                    <a href="<?= URLROOT ?>admin/categorie" class="btn btn-primary me-2">Categorie Livres</a>

                    <a href="<?= URLROOT ?>admin/addcategorie" class="btn btn-primary me-2" style="float:right">Ajouter une Catégorie</a>
                   
                </div>


     <table class="table table-striped" id="myTable">

     <thead>
        <th>Numéro</th>
        <th>Titre</th>
        <th>Actions</th>
     </thead>
       <tbody>
          <?php
          $i=0;
          foreach($categorie as $list): $i+=1; ?>
<tr>
<td><?= $list->id ?></td>
<td><?= $list->title ?></td>
<td> <a href="<?= URLROOT ?>admin/deletecat/<?= $list->id ?>" class="btn btn-danger">Delete</a> </td>
</tr>
    <?php endforeach ?>
          
          
       </tbody>
     </table>

   


		</section>
		
		
		
		
	</div>
	
