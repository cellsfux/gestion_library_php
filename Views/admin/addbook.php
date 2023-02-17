<div class="page-content bg-grey " >
			<section class="content-inner-1 border-bottom">
			<div class="container">
			<div class="container d-flex">
                    <a href="<?= URLROOT ?>admin" class="btn btn-primary me-2">Retour sur la liste des Books</a>
			</div>



				<div style="width:40%; margin:auto">
					 <form id="form-submit" data-url="<?= URLROOT ?>admin/createbook" action="" class="form" >
					 <div class="d-flex justify-content-between align-items-center">
					<h4 class="title">Ajouter un livre</h4>
				</div>

                      <div class="form-group">
						<label>Titre de l'ouvrage</label>
						<input name="title" type="text" placeholder="saisissez le titre du livre" class="form-control" required>
					  </div>

					  <div class="form-group">
						<label>Langue</label>
						<input name="langue" type="text" placeholder="saisissez la langue du livre" class="form-control" required>
					  </div>

					  <div class="form-group">
						<label>Auteur</label>
						<input name="auth" type="text" placeholder="saisissez l'auteur du livre" class="form-control" required>
					  </div>

					  
					  <div class="form-group">
						<label>Ville de pubication</label>
						<input name="ville" type="text" placeholder="saisissez la ville de pubication du livre" class="form-control" required>
					  </div>

					  <div class="form-group">
						<label>L'année de fabrication</label>
						<input name="annee" type="text" placeholder="saisissez l'année de fabrication du livre" class="form-control" required>
					  </div>


					  <div class="form-group">
						<label>Image de couverture</label>
						<input name="image" type="file"  class="form-control" required>
					  </div>

					  <div class="form-group">
						<label>Fichier pdf livre</label>
						<input name="file" type="file"  class="form-control" required>
					  </div>

					  <div class="form-group">
						<label for="">Categorie</label>
						<select name="categorie" id="" class="form-control" required>
							<?php foreach($categorie as $list){
								echo '<option>'.$list->title.'</option>';
							} ?>
						</select>
					  </div>

					  <div class="form-group">
						<label>Description du livre</label>
						<textarea name="description"  placeholder="Saisissez la description du livre" name="description" id="" cols="30" rows="10" class="form-control" required></textarea>
					  </div>

					  <div id="result"></div>
					  <div class="form-group py-2 d-flex justify-content-center">
						<button id="btn-save" data-before="Savinge please waite..." data-text='Enregistrer' type="submit" class="btn btn-primary">
							Enregistrer
						</button>
					  </div>

					 </form>
				</div>

            </div>
        </section>
</div>

