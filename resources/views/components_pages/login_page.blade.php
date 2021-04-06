<!--form login-->
<div class="row">
     <!--photo login-->
     <div class="col-md-6">
        <img class=" img-responsive col-9 img-circle img-rounded rounded-circle"
            src="https://image.freepik.com/free-vector/illustration-cartoon-female-user-entering-login_241107-682.jpg"
            alt="">
    </div>
    <div class="col-md-6">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse e-mail</label>
                <input id="email" name="email" type="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input id="password" name="password" type="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="t-user">S'authentifier en tant que</label>
                <select name="t-user" class="form-control" id="t-user">
                    <option value="">Fournisseur</option>
                    <option value="">Acheteur</option>
                </select>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="type_user">
                <label class="form-check-label" for="type_user">Se rappeler de moi</label>
              </div>
              <button type="submit" class="btn btn-primary my-2">Authentifier</button>
              <a  type="button" class="btn btn-sm" data-toggle="modal"
                  data-target="#ModalLogin">
                  <u>Récupérer mot de passe</u>
              </a>
        </form>
        <!-- Modal -->
        <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog"
        aria-labelledby="ModalLoginTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLoginTitle">Récupérer mot de passe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body form-group">
                    <input type="email"  id="" name="" placeholder="Votre e-mail" class=" form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Envoyer</button>
                </div>
            </div>
        </div>
    </div>
    </div>

</div>
