<div class="page-content bg-grey">
		<section class="content-inner-1 border-bottom">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
					<h4 class="title">Books Adminitration</h4>
				</div>

                <div class="container d-flex py-3">
                    <a href="<?= URLROOT ?>admin" class="btn btn-primary me-2">Les livres</a>
                    <a href="<?= URLROOT ?>admin/users" class="btn btn-primary me-2">Users</a>
                    <a href="<?= URLROOT ?>admin/lecture" class="btn btn-primary me-2">Lectures</a>
                    <a href="<?= URLROOT ?>admin/categorie" class="btn btn-primary me-2">Categorie Livres</a>

                    <a href="<?= URLROOT ?>admin/addbook" class="btn btn-primary me-2" style="float:right">Ajouter un livre</a>
                   
                </div>

                <div class="table-responsive py-4">

          

     <table class="table table-striped  "  id="myTable">

     <thead class="thead-light">
        <th>Numéro</th>
        <th>Titre de l'ouvrage</th>
        <th>Categorie</th>
        <th>Ville de publication</th>
        <th>Annee publication</th>
        <th>Langue</th>
        <th>Hauteur</th>
        <th>Actions</th>
     </thead>

     <tbody>
        <?php $i=0; foreach($books as $lis): $i+=1; ?>
            <tr>
              <td><?= $i ?></td>
              <td class="d-flex text-center  align-items-center">
                <img src="<?=URLROOT  ?>uploads/img/<?= $lis->cover_image?>" style='width: 60px; margin: 4px; border-raduis:7px' alt=" <?= $lis->title ?>"/>
                <?= $lis->title ?></td>
                <td><?= $lis->id_categorie ?></td>
                <td><?= $lis->ville_fab ?></td>
                <td><?= $lis->annee_fab ?></td>
                <td><?= $lis->langue ?></td>
                <td><?= $lis->autheur ?></td>
                
                <td>
                    <a href="<?= URLROOT ?>admin/deletbook/<?= $lis->id ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <?php endforeach ?>
     </tbody>

     </table>
     </div>

   


		</section>
		
		
		
		
	</div>
	
