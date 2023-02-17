<div class="page-content bg-grey">
		<section class="content-inner-1">
			<div class="container">

            <?php foreach($book as $lis): ?>
				<div class="row book-grid-row style-4 m-b60">
					<div class="col">
						<div class="dz-box">
							<div class="dz-media">
								<img style="max-width: 300px ;" src="<?=URLROOT ?>uploads/img/<?= $lis->cover_image ?>" alt="book">
							</div>
							<div class="dz-content">
								<div class="dz-header">
									<h3 class="title"><?= $lis->title ?></h3>
								
								</div>
								<div class="dz-body">
									<div class="book-detail">
										<ul class="book-info">
											<li>
												<div class="writer-info">
													<img src="<?=URLROOT ?>uploads/img/<?= $lis->cover_image ?>" alt="book">
													<div>
														<span>Ecris par </span><?= $lis->autheur ?>
													</div>
												</div>
											</li>
											<li><span>Publisher</span><?= $lis->ville_fab ?></li>
											<li><span>Year</span><?= $lis->annee_fab ?></li>
										</ul>
									</div>
									<p class="text-1"><?= $lis->description ?></p>
									<div id="error-send"></div>
								<button class="btn btn-primary" onclick="send('<?= $lis->slug ?>')" data-slug="<?= $lis->slug ?>">Lire cet ouvrage</button>
								</div>
							</div>
						</div>
					</div>
				</div>

                <?php endforeach ?>

				
				
			</div>
		</section>
		
		

</div>
