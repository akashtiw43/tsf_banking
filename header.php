
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A Basic Banking System|The Sparks Foundation">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Aakash Tiwari">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TSF-Banking</title>
    <link rel="shortcut icon"type="image" href="./img/bank-logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!------OWL  caRousel-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./responsive.css">
 
      <!---------functions------->
      <?php
       require('connect.php');
       ?>
    <!--xxxxxxx-----functions-------xxxxxx-->
</head>
<body>
  <div class="scroll-up-btn">
    <i class="fas fa-angle-up top-up"></i>
  </div>
    <header id="header">
        <div class="row">
            <div class="col-xl-2 col-lg-12 pri-bg logo-div">
                <img src="./img/logo.png" alt="" class="img-responsive logo ms-3">
                <input type="checkbox"id="check">
                        <label for="check"class="nav-label">
                          <i class="fas fa-bars ms-auto"id="bars"></i>
                          <i class="fas fa-times ms-auto"id="cancel"></i>
                        </label>
            </div>
            <div class="col-xl-10 col-lg-12">
                <div class="row pri-bg top-row">
                    <nav class="navbar top-nav bg-light">
                        <div class="container-fluid font-14">
                          <a class="nav-link pri effect-2 anton fw-bold ps-5">PERSONAL</a>
                          <a class="nav-link pri effect-2 anton fw-bold me-auto">BUSINESS</a>
                          <form class="d-flex">
                            <button class="btn btn-log font-14 midnight me-2 px-4 mid-bg text-light rounded-pill"onclick="tp()">
                              <i class="fas fa-user me-3"></i>LOGIN </button>
                          </form>
                        </div>
                      </nav>
                </div>
                <div class="row pri-bg bottom-row">
                    <nav class="navbar navbar-expand-lg"id="navbarNav">
                      
                        <div class="container-fluid ms-5 nav-ul oswald fw-bold nav-anim">
                       
                          <a class="navbar-brand font-18 midnight effect" href="home.php">Home</a>
                          <a class="navbar-brand font-18 midnight effect mx-4" href="customers.php">Accounts</a>
                          <a class="navbar-brand font-18 midnight effect mx-2" href="customers.php">Transact</a>
                          <a class="navbar-brand font-18 midnight effect mx-4" href="history.php">History</a>
                          <div class="navbar-collapse anton" >
                            <ul class="navbar-nav ms-auto">
                              <li class="nav-item">
                                <a class="nav-link font-14 midnight"href="#"><i class="fas fa-comment-alt icon"></i><span>&nbsp Customer Support</span></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link font-14 midnight"href="#"><i class="fas fa-phone icon" ></i><span>&nbspContact Us</span></a>
                              </li>
                              
                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
        </div>
    </header>
   