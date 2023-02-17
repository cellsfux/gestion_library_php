
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="" />
    <meta name="description" content="Bookland-Book Store Ecommerce Website" />
    <meta property="og:title" content="Bookland-Book Store Ecommerce Website" />
    <meta property="og:description" content="Bookland-Book Store Ecommerce Website" />
    <meta property="og:image" content="https://makaanlelo.com/tf_products_007/bookland/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" type="image/x-icon" href="<?= URLROOT ?>assets/images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Book store</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="<?= URLROOT ?>assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?= URLROOT ?>assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="<?= URLROOT ?>assets/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= URLROOT ?>assets/css/style.css">


    

    <link rel="stylesheet" type="text/css" href="<?= URLROOT ?>assets/vendor/jquery.dataTables.min.css">

    <!-- GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>

    <div class="page-wraper">
        
    <!-- <div id="loading-area" class="preloader-wrapper-1">
            <div class="preloader-inner">
                <div class="preloader-shade"></div>
                <div class="preloader-wrap"></div>
                <div class="preloader-wrap wrap2"></div>
                <div class="preloader-wrap wrap3"></div>
                <div class="preloader-wrap wrap4"></div>
                <div class="preloader-wrap wrap5"></div>
            </div>
        </div> -->

        <!-- Header -->
        <header class="site-header mo-left header style-1">
            <!-- Main Header -->
            <div class="header-info-bar">
                <div class="container clearfix">
                    <!-- Website Logo -->
                    <div class="logo-header logo-dark">
                        <a href="<?= URLROOT ?>"><img src="<?= URLROOT ?>assets/images/logo.png" alt="logo"></a>
                    </div>

                    <!-- EXTRA NAV -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <ul class="navbar-nav header-right">
                              
                            <?php if(isset($_SESSION['user-test-covid'])){ ?>
                             
                                <li class="nav-item dropdown profile-dropdown  ms-4">
                                    <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="<?= URLROOT ?>uploads/img/<?= $_SESSION['user-test-covid']['img'] ?>" alt="/">
									<div class="profile-info">
										<h6 class="title"><?= ucfirst($_SESSION['user-test-covid']['prenom']) ?></h6>
										<span><?= $_SESSION['user-test-covid']['email'] ?></span>
									</div>
								</a>
                                    <div class="dropdown-menu py-0 dropdown-menu-end">
                                        <div class="dropdown-header">
                                            <h6 class="m-0"><?= ucfirst($_SESSION['user-test-covid']['prenom'].' '.$_SESSION['user-test-covid']['nom'] ) ?></h6>
                                            <span><?= $_SESSION['user-test-covid']['email'] ?></span>
                                        </div>
                                       
                                        <div class="dropdown-footer">
                                            <a class="btn btn-primary w-100 btnhover btn-sm" href="<?=URLROOT ?>login">Se deconnécter</a>
                                        </div>
                                    </div>
                            </li>
                            <?php }?>


                            </ul>
                        </div>
                    </div>

                    <!-- header search nav -->
                    <div class="header-search-nav">
                        <form class="header-item-search">
                            <div class="input-group search-input">
                              
                                <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Rechercher un livre ici">
                                <button class="btn h1" type="button">🔍</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
            <!-- Main Header End -->

            <!-- Main Header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix">
                    <div class="container clearfix">
                        <!-- Website Logo -->
                        <div class="logo-header logo-dark">
                            <a href="index.html"><img src="<?= URLROOT ?>assets/images/logo.png" alt="logo"></a>
                        </div>

                        <!-- Nav Toggle Button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>

                    <?php if(!isset($_SESSION['user-test-covid'])){ ?>
                        <!-- EXTRA NAV -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <a href="<?= URLROOT ?>login" class="btn btn-primary btnhover">Se connecter</a>
                            </div>
                        </div>
                     <?php }?>

                        <!-- Main Nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                            <div class="logo-header logo-dark">
                                <a href="index.html"><img src="<?= URLROOT ?>assets/images/logo.png" alt=""></a>
                            </div>
                            <form class="search-input">
                                <div class="input-group">
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
                                    <button class="btn" type="button"><i class="flaticon-loupe"></i></button>
                                </div>
                            </form>
                            <ul class="nav navbar-nav">
                                <li ><a href="<?= URLROOT ?>"><span>Acceuil</span></a></li>
                                <li><a href="<?= URLROOT ?>main/booklist"><span>Books</span></a></li>
                               

                                <?php if(isset($_SESSION['user-test-covid']) && $_SESSION['user-test-covid']['role']=="Admin" ){ ?>
                                <li><a href="<?= URLROOT ?>admin"><span>Administartion</span></a></li>
                                <?php } ?>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Header End -->

        </header>
        <!-- Header End -->