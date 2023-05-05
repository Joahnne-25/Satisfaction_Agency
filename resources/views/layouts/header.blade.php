<!--le formulairre-->

<!--Code pour gestion appartements-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<div class="click-closed">
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
        <h3 class="title-d">Rechercher Appartements</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
          <div class="row">
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label class="pb-2" for="Type">Mot clés</label>
                <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="Type">Type</label>
                <select class="form-control form-select form-control-a" id="Type">
                  <option>Tous Types</option>
                  <option>Appartements à vendre</option>
                  <option>Appartements meublés</option>
                  <option>Appartements simples</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="city">Ville</label>
                <select class="form-control form-select form-control-a" id="city">
                  <option>Toutes villes</option>
                  <option>Cotonou</option>
                  <option>Porto-Novo</option>
                  <option>Calavi</option>
                  <option>Cadjehoun</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="bedrooms">Bedrooms</label>
                <select class="form-control form-select form-control-a" id="bedrooms">
                  <option>Any</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                </select>
              </div>
            </div>
            </div>

            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="price">Budget</label>
                <select class="form-control form-select form-control-a" id="price">
                  <option>Unlimite</option>
                  <option>=<50.000FR</option>
                  <option>=>60,000</option>
                  <option>=>150,000</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-b">Rechercher Appartements</button>
            </div>
          </div>
        </form>
      </div>
    </div><!-- End Property Search Section -->>
    
    <!-- ======= Header/Navbar ======= -->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
      <div class="container">
       <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
         <span></span>
         <span></span>
         <span></span>
       </button>
       <a class="navbar-brand text-brand" href="index.html">Satisfaction<span class="color-b">Agency</span></a>
    
       <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
         <ul class="navbar-nav">
    
           <li class="nav-item">
             <a class="nav-link active" href="/">Acceuil</a>
           </li>
    
           <li class="nav-item">
             <a class="nav-link " href="/hebergeurs">Devenir Hébergeur</a>
           </li>
    
           <li class="nav-item">
             <a class="nav-link " href="/appartements">Appartements</a>
           </li>  
    
           <li class="nav-item">
             <a class="nav-link " href="">Contact</a>
           </li> 
      
           <a href="/login" class="btn btn-outline-success">Connexion</a>
           <a href="/register" class="btn btn-outline-success">Connexion</a>

         
            <!--Connexion-->
            <section>
              <div class="container">
                <div class="col-md-4 col-lg-12 section-ms-t2 color-d">
                    <button type="button" class=" btn btn-outline-success" data-toggle="modal" data-target="#myModal">
                        CONNECTION
                    </button>
                    <hr>
                </div>
                  <!-- Modal -->
                <div class="modal fade" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                    <div class="modal-header">
                                      
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                      <!-- Modal body -->
                    <div class="modal-body">
                      <form action="">
                          <div class="form-group">
                              <label for="nom">Nom:</label>
                              <input type="text" class="form-control" id="nom">
                          </div>
                          <div class="form-group">
                              <label for="prenom">Prénom:</label>
                              <input type="text" class="form-control" id="prenom">
                          </div>
                          <div class="form-group">
                              <label for="email">Email:</label>
                              <input type="email" class="form-control" id="email" required>
                          </div>
                          <div class="form-group">
                              <label for="adresse">Adresse:</label>
                              <input type="text" class="form-control" id="adresse">
                          </div>
                          <div class="form-group">
                                <label for="ville">Ville:</label>
                                <input type="text" class="form-control" id="ville">
                          </div>
                          <div class="form-group">
                              <label for="pays">Pays:</label>
                              <input type="text" class="form-control" id="pays">
                          </div>
                          <div class="form-group">
                              <label for="codepostal">Numéro de téléphone:</label>
                              <input type="phone" class="form-control" id="phone" required>
                          </div>
                          <div class="form-group">
                              <label for="amount">Montant à payer</label>
                              <input type="number" class="form-control" id="amount" required>
                          </div>
                            
                          <div class="form-group">
                                <label for="amount">Nombre de propriétés</label>
                                <input type="number" class="form-control" id="amount" required>
                          </div>
                          <div class="col-md-6 col-lg-6">
                            <button class="btn-outline-success">
                                  S'INSCRIRE
                            </button>
                          </div>
                        </form>              
                      </div>
                    </div>
                  </div>
                </div>
              </div>              
            </section>      
         
         
         
            <!--inscrire-->
            <section>
              <div class="container">
                <div class="col-md-4 col-lg-12 section-ms-t2 color-d">
                    <button type="button" class=" btn btn-outline-success" data-toggle="modal" data-target="#myModal">
                        S'INSCRIRE
                    </button>
                    <hr>
                </div>
                  <!-- Modal -->
                <div class="modal fade" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                    <div class="modal-header">
                                      
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                      <!-- Modal body -->
                    <div class="modal-body">
                      <form action="">
                          <div class="form-group">
                              <label for="nom">Nom:</label>
                              <input type="text" class="form-control" id="nom">
                          </div>
                          <div class="form-group">
                              <label for="prenom">Prénom:</label>
                              <input type="text" class="form-control" id="prenom">
                          </div>
                          <div class="form-group">
                              <label for="email">Email:</label>
                              <input type="email" class="form-control" id="email" required>
                          </div>
                          <div class="form-group">
                              <label for="adresse">Adresse:</label>
                              <input type="text" class="form-control" id="adresse">
                          </div>
                          <div class="form-group">
                                <label for="ville">Ville:</label>
                                <input type="text" class="form-control" id="ville">
                          </div>
                          <div class="form-group">
                              <label for="pays">Pays:</label>
                              <input type="text" class="form-control" id="pays">
                          </div>
                          <div class="form-group">
                              <label for="codepostal">Numéro de téléphone:</label>
                              <input type="phone" class="form-control" id="phone" required>
                          </div>
                          <div class="form-group">
                              <label for="amount">Montant à payer</label>
                              <input type="number" class="form-control" id="amount" required>
                          </div>
                            
                          <div class="form-group">
                                <label for="amount">Nombre de propriétés</label>
                                <input type="number" class="form-control" id="amount" required>
                          </div>
                          <div class="col-md-6 col-lg-6">
                            <button class="btn-outline-success">
                                  S'INSCRIRE
                            </button>
                          </div>
                        </form>              
                      </div>
                    </div>
                  </div>
                </div>
              </div>              
            </section>
        </div>
      </div>
    </nav><!-- End Header/Navbar -->
</div>