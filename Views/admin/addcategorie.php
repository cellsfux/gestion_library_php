<div class="page-content bg-grey " >
			<section class="content-inner-1 border-bottom">
			<div class="container">
			<div class="container d-flex">
                    <a href="<?= URLROOT ?>admin/categorie" class="btn btn-primary me-2">Retour sur la liste des Catégories</a>
			</div>



				<div style="width:40%; margin:auto">
					 <form action="" class="form" id="form-submit" data-url="<?= URLROOT ?>admin/createcate">
					 <div class="d-flex justify-content-between align-items-center">
					<h4 class="title">Ajouter une categorie</h4>
				</div>

                      <div class="form-group">
						<label>Titre de la Categorie</label>
						<input name="title" type="text" placeholder="entrer le titre de la categorie" class="form-control" required>
					  </div>

					 <div id="result"></div>
					  <div class="form-group py-2 d-flex justify-content-center">
						<button id="btn-save"  data-before="Saving please wait..." data-text='Enregistrer' type="submit" class="btn btn-primary">
							Enregistrer
						</button>
					  </div>

					 </form>
				</div>

            </div>
        </section>
</div>

