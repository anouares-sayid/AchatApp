<div class="container jumbotron py-4">

<form class="" action="" method="get">
    <div>
        <div class="form-inline">
          <div class="input-group">
            <input type="text" style="width:90vh" class="form-control" placeholder="Chercher" aria-label="Chercher" aria-describedby="button-cherch">
            <select class=" custom-select" name="" id="">
             <option value="">Date</option>
              <option value="">Nom</option>
              <option value="">Catégorie</option>
            </select>
          <div class="btn-group-toggle form-group" data-toggle="buttons">
            <label class="btn btn-outline-primary rounded-0">
                <input type="radio" checked>Fournisseur</label>
                <label class="btn btn-outline-primary rounded-0">
                <input type="radio">Acheteur</label>
                </div>
            </div>
            <button class="btn btn-outline-success rounded-0" type="button" id="button-cherch">Chercher</button>
          </div>
    </div>
    </form>
    <div class="tab-pane fade active show row p-4 container">
     @include("components_pages.publication_page")
    </div>
</div>
