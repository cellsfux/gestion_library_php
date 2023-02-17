<div class="page-content bg-grey">
		<section class="content-inner-1 border-bottom">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
					<h4 class="title">Lecture Adminitration</h4>
				</div>

                <div class="container d-flex py-3">
                    <a href="<?= URLROOT ?>admin" class="btn btn-primary me-2">Les livres</a>
                    <a href="<?= URLROOT ?>admin/users" class="btn btn-primary me-2">Users</a>
                    <a href="<?= URLROOT ?>admin/lecture" class="btn btn-primary me-2">Lectures</a>
                    <a href="<?= URLROOT ?>admin/categorie" class="btn btn-primary me-2">Categorie Livres</a>

                    <a href="<?= URLROOT ?>admin/addbook" class="btn btn-primary me-2" style="float:right">Ajouter un livre</a>
                   
                </div>


     <table class="table table-striped" id="myTable">

     <thead>
        <th>Numéro</th>
        <th>User</th>
        <th>Books</th>
        <th>Date lecture</th>
     </thead>
     <body>
        <?= $html ?>
     </body>

     </table>

   


		</section>
		
		
		
		
	</div>
	
