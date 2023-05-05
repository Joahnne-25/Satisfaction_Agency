<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SatisfactionAgency</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  @include('layouts.header')
   <!-- ======= Property Search Section ======= -->
  <main id="main">
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Meilleurs Appartements</h2>
              </div>
              <div class="title-link">
                <a href="property-grid.html">Appartements
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="/img/app/téléchargement (1).jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="/appartements/1">Cotonou
                          <br /> Cadjehoun</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">prix | 30.000/jr</span>
                      </div>
                      <a href="/" class="link-a">Voir plus
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Surface</h4>
                          <span>34m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Chambres</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Douches</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garage</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="/img/app/téléchargement (2).jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="/appartements/1">Cotonou
                          <br /> Suru-lere</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">prix | 30.000/jr</span>
                      </div>
                      <a href="/appartements/1" class="link-a">Voir plus
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Surface</h4>
                          <span>30m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Chambres</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Douches</h4>
                          <span>3</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Balcons</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="/img/app/téléchargement (3).jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="/appartements/1">Calavi
                          <br /> Arconville</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">prix| 50.000/jr</span>
                      </div>
                      <a href="/appartements/1" class="link-a">Voir plus
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Surface</h4>
                          <span>50
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Chambres</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Douches</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="/img/app/téléchargement.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="/appartements/1">Calavi
                          <br /> Bidossessi</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">prix | 55.000/jr</span>
                      </div>
                      <a href="/appartements/1" class="link-a">Voir plus
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Surface</h4>
                          <span>60m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Chambres</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Douches</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span>2</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
          </div>
        </div>
       
    </section><!-- End Latest Properties Section -->

    <!--Un deuxieme caroussel-->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a"> Appartements les plus loués</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="/img/app/im7.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="/appartements/1">Cotonou
                          <br /> Sènade</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">prix | 30.000/jr</span>
                      </div>
                      <a href="#" class="link-a">Voir plus
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item1 -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="/img/app/im6.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="/appartements/1">Cotonou
                          <br /> Suru-lere</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">prix | 30.000/jr</span>
                      </div>
                      <a href="/appartements/1" class="link-a">Voir plus
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item2 -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="/img/app/im9.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="/appartements/1">Cotonou
                          <br /> Avotrou</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">prix| 25.000/jr</span>
                      </div>
                      <a href="/appartements/1" class="link-a">Voir plus
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
          </div>
       
    </section><!-- End Latest Properties Section -->
   
    <section class="form-connexion"> <!--Le formulaire de connexion-->>
      <div class="effet bg">
        <section>
            <h1>RESERVER DES MAINTENANT VOTRE SEJOUR</h1>
            
        </section>
      </div>
    </section> <!--Fin formulaire de connexion-->

    <!--le formulaire d'inscription-->
  

    </section>

    <section> <!--Début formulaire pour réserver appartements-->
      <div>
        <form class="form-a">
          <div class="row">
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label class="pb-2" for="Type">Type de séjour</label>
                <input type="text" class="form-control form-control-lg form-control-a" placeholder="">
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="Type">Type</label>
                <select class="form-control form-select form-control-a" id="Type">
                  <option>Aucun</option>
                  <option>Appartements avec Balcon</option>
                  <option>Appartements avec Garage</option>
                  <option>Appartements simples</option>
                  <option>Appartements meublés</option>
                  <option>Appartements double entrées</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="city">Ville</label>
                <select class="form-control form-select form-control-a" id="city">
                  <option>Aucune</option>
                  <option>Cotonou</option>
                  <option>Porto-Novo</option>
                  <option>Calavi</option>
                  <option>Cadjehoun</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="bedrooms">Chambres</label>
                <select class="form-control form-select form-control-a" id="bedrooms">
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                  <option>04</option>
                </select>
              </div>
            </div>
    
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="bathrooms">Début Séjour</label>
                <input type="date" id="start" name="trip-start" value="yyyy-mm-jj"
                    min="2023-01-01" max="2023-12-31">
              </div>
              <div class="form-group mt-3">
                <label class="pb-2" for="bathrooms">Fin Séjour</label>
                <input type="date" id="end" name="trip-start" value="yyyy-mm-jj"
                    min="2023-01-01" max="2023-12-31">
              </div>
            </div>
          <!--
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="price">Budget</label>
                <select class="form-control form-select form-control-a" id="price">
                  <option>Unlimite</option>
                  <option>FCFA50,000</option>
                  <option>FCFA100,000</option>
                  <option>FCFA150,000</option>
                  <option>FCFA200,000</option>
                </select>
              </div>
            </div>
          -->  
            
          </div>
          <div class="d-flex">
            <button type="submit" class="btn btn-outline-success"><b>RESERVER</b> </button>
          </div>
        </form>
      </div>
    </section>
    
  </main><!-- End #main -->

  @include('layouts.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>

</body>

</html>