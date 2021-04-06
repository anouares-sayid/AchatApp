@extends('layouts.site')

@section('services')
<div class="col-lg-12 mt-5 mt-lg-0 col-md-12 text-muted mx-auto border-bottom py-1">
    <nav class="nav-wrapper ">
        <ul class="nav nav-pills nav-fill flex-column flex-md-row " id="tabs-text" >
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab"
                    href="{{route('adminHome')}}"><i class="fa fa-users mr-1"></i> Liste des offres </a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-1-tab"
                    href="{{route('adminUsers')}}"><i class="fa fa-users mr-1"></i> Votre appel d'offres </a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-1-tab"
                    href="{{route('adminRequests')}}"><i class="fa fa-clock-o mr-1"></i> Les Offres cloturés  </a>
            </li>
        </ul>
    </nav>
</div>
@endsection

@section('Holder')
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
                </div>
                <button class="btn btn-outline-success rounded-0" type="button" id="button-cherch">Chercher</button>
              </div>
        </div>
        </form>
        {{-- Liste Des Offres --}}
        <div class="tab-pane fade active show row p-4 container">
            <div class="row justify-content-center">
                <div class="card col-12 mx-2 p-1 rounded" >
                    <!--pagination nav-->
                    <div class="col-lg-5">
                        <small>
                        <nav aria-label="Page navigation ">
                          <ul class="pagination">
                            <li class="page-item">
                              <a class="page-link" href="javascript:;">
                                  <i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="page-item">
                              <a class="page-link active" href="javascript:;">1</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:;">2</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:;">3</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:;">4</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:;">5</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:;"><i class="fa fa-angle-right"></i></a>
                            </li>
                          </ul>
                        </nav>
                    </small>
                      </div>
                    <!--Publication -->
                      <div class="card-body">
                        <div class="card-title alert-light border-bottom">
                            <h4>offre de :<a href="#portfolio" class=" text-bold">Electroplanet</a> <small class=" float-right"> Dernier modification : 10 mars 2021  17:55</small></h4>
                            </div>
                      <div class=" card-body border-bottom">
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                      </div>
                      <div class="float-right pt-2">
                        <a href="#" class=" btn btn-sm  btn-outline-primary "><i class="fa fa-wpforms mr-2"></i>Voir détails</a>
                        <a href="#" class=" btn btn-sm  btn-outline-info "><i class="fa fa-upload mr-2"></i>Déposer une offre</a>
                      </div>
                    </div>
                  </div>
                  <div class="card col-12 mx-2 p-1 rounded" >

                  </div>
                  <div class="card col-12 mx-2 p-1 rounded" >

                  </div>
            </div>
        </div>
    </div>

@endsection
