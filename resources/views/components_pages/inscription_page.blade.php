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
        </form>
    </div>

</div>
