
  

    <div class="main-content">

  

        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">
                       
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <small>Or Saisiser les information pour votre compte</small>
                            </div>
                            <form id="form-submit" data-url="../login/addteachaction" role="form">
                            <h6>Account Information</h6>
                          <div class="form-group">
                            <label class="col-form-label">Nom </label>
                            <input class="form-control" name="nom" type="text" required placeholder="Nom ">
                          </div>
                          <div class="form-group">
                            <label class="col-form-label">Prenom </label>
                            <input class="form-control" name="prenom" type="text" required placeholder="Prenom ">
                          </div>
                          <div class="form-group">
                            <label class="col-form-label">Email Address</label>
                            <input class="form-control" name="email" type="email" required placeholder="Enter email">
                          </div>
                          <div class="form-group">
                            <label class="col-form-label">Contact Number</label>
                            <input class="form-control" name="phone"  type="number" required placeholder="Enter phone number">
                          </div>

                          <div class="form-group">
                            <label class="col-form-label">Image de profile</label>
                            <input class="form-control" name="image"  type="file" required >
                          </div>

                          <div class="form-group">
                            <label class="col-form-label">Mot de passe</label>
                            <input class="form-control" name="pass"  type="password" required placeholder="***********">
                          </div>


                           <div id="result"></div>
                          <div class="card-footer">
                        <button type="submit" id="btn-save" data-text="save" data-before="Saving..." class="btn btn-primary btn-pill">Enregistrer</button>
                        <a href="<?= URLROOT ?>login" class="btn btn-secondary btn-pill">Se connecter</a>
                      </div>
                         
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                          
                        </div>
                        <div class="col-6 text-right">
                            <a href="<?= URLROOT ?>login" class="text-primary"><small>Se connecter</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
