<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $data['page_title'] . " | " . WEBSITE_TITLE ?></title>
    <link rel="stylesheet" href="<?=ASSETS?>BeautyE-commerce/css/components.css">
    <link rel="stylesheet" href="<?=ASSETS?>BeautyE-commerce/css/icons.css">
    <link rel="stylesheet" href="<?=ASSETS?>BeautyE-commerce/css/responsee.css">
    <link rel="stylesheet" href="<?=ASSETS?>BeautyE-commerce/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?=ASSETS?>BeautyE-commerce/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="<?=ASSETS?>BeautyE-commerce/css/lightcase.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="<?=ASSETS?>BeautyE-commerce/css/template-style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet">
    <script type="text/javascript" src="<?=ASSETS?>BeautyE-commerce/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?=ASSETS?>BeautyE-commerce/js/jquery-ui.min.js"></script>
  </head>

  <body class="size-1140">

      <!-- HEADER -->
      <header role="banner" class="position-absolute margin-top-10 margin-m-top-0 margin-s-top-0">
        <!-- Top Navigation -->
        <nav class="background-transparent background-transparent-hightlight full-width sticky">

            <?php if(isset($_SESSION['user_name'])): ?>
             Hi <?=$_SESSION['user_name']?>
            <?php endif; ?>
             <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
              <a class="navbar-brand" href="#">BUTIZZ</a>

          <div class="s-12 l-10">
            <div class="top-nav right">
              <p class="nav-text"></p>
              <ul class="right chevron">
                <li><a href="<?=ROOT?>home">Home</a></li>
                <li><a href="<?=ROOT?>about">About Us</a></li>
                <li><a href="<?=ROOT?>contact">Contact</a></li>

                <?php if(!isset($_SESSION['user_name'])): ?>
                <li><a href="<?=ROOT?>login">Login</a></li>
                <li><a href="<?=ROOT?>signup">Signup</a></li>
              <?php else: ?>

                <li><a href="<?=ROOT?>logout">Logout</a></li>

              <?php endif; ?>


              </ul>
            </div>
          </div>
        </nav>
        </nav>
        

      </header>
