

    <div class="main-content">

     

        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                   
                        
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center h2  mb-4">
                                <small>S'authentifier</small>
                            </div>
                            <form id="formAuthentication" data-url="./login/loginparam" role="form">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" id="email" placeholder="Email" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" id="password" placeholder="Password" type="password">
                                    </div>
                                </div>

                                <div class="col-6 text-right">
                            <a href="<?= URLROOT ?>login/register" class="text-primary"><small>Creer un Nouveau Compte</small></a>
                        </div>
                               
                                <div id="result-login"></div>
                                <div class="text-center">
                                    <button type="submit" id="btn-connect" class="btn btn-primary my-4">Se Connecter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    


