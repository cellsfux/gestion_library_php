<div class="page-content bg-grey">
		<section class="content-inner-1">
			<div class="container">
                <?php foreach($book as $list): ?>

            <iframe src="<?= URLROOT ?>uploads/files/<?= $list->file_pah ?>" frameborder="0" width="100%", height="500"></iframe>
            <?php endforeach ?>

            </div>
        </section>
    </div>