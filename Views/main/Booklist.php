<div class="page-content bg-grey">
		<section class="content-inner-1 border-bottom">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
					<h4 class="title">Books</h4>
				</div>
				<div class="filter-area m-b30">
					<div class="grid-area">
						<div class="shop-tab">
							
						</div>
					</div>
					<div class="category">
						<div class="filter-category">
							<a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
								<i class="fas fa-list me-2"></i>
								Categories
							</a>
						</div>
						
					</div>
				</div>

				<div class="acod-content collapse " id="collapseExample">
					<div class="widget widget_services">
						<a href="" class="form-check search-content">
							
							<label class="form-check-label" for="productCheckBox1">
								Architecture
							</label>
						</a>
					</div>
				</div>


				
				<div class="row book-grid-row">

				<?php foreach($book as $lis): ?>
					<div class="col-book style-1">
						<div class="dz-shop-card style-1">
							<div class="dz-media">
								<img src="<?= URLROOT ?>uploads/img/<?= $lis->cover_image ?>" alt="book">										
							</div>
							<div class="bookmark-btn style-2">
								<input class="form-check-input" type="checkbox" id="flexCheckDefault16">
								<label class="form-check-label" for="flexCheckDefault16">
									<i class="flaticon-heart"></i>
								</label>
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="<?= URLROOT ?>main/viewbook/<?= $lis->slug ?>"><?= $lis->title ?></a></h5>
								<ul class="dz-tags">
									<li><a href="<?= URLROOT ?>main/viewbook/<?= $lis->slug ?>"><?= $lis->langue ?></a></li>
									<li><a href="<?= URLROOT ?>main/viewbook/<?= $lis->slug ?>"><?= $lis->autheur ?></a></li>
								</ul>
								
								<div class="book-footer">
									
									<a href="<?= URLROOT ?>main/viewbook/<?= $lis->slug ?>" class="btn btn-secondary box-btn btnhover btnhover2"><i class="flaticon-shopping-cart-1 m-r10"></i> 
								Lire  l'ouvrage
								</a>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach ?>



				</div>
			
			</div>
		</section>
		
		
		
		
	</div>
	
