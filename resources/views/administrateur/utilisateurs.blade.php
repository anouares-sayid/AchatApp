@extends('layouts.admin')

@section('services')
<div class="col-lg-12 mt-5 mt-lg-0 col-md-12 text-muted mx-auto border-bottom py-1">
    <nav class="nav-wrapper ">
        <ul class="nav nav-pills nav-fill flex-column flex-md-row " id="tabs-text" >
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-1-tab"
                    href="{{route('adminHome')}}"><i class="fa fa-users mr-1"></i> Statistiques</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab"
                    href="{{route('adminUsers')}}"><i class="fa fa-users mr-1"></i> Gestion des utilisateurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-1-tab"
                    href="{{route('adminRequests')}}"><i class="fa fa-clock-o mr-1"></i> Traitement des demandes</a>
            </li>
        </ul>
    </nav>
</div>
@endsection

@section('Holder')
{{-- Gestion des utilisateurs --}}
<form class=" " action="" method="get">
    <div>
        <div class="form-inline ml-4">
          <div class="input-group">
            <input type="text" style="width:100vh" class="form-control" placeholder="Chercher" aria-label="Chercher" aria-describedby="button-cherch">
            <select class=" custom-select" name="" id="">
              <option value="">Name</option>
              <option value="">Type activité</option>
              <option value="">Date initiation</option>
          </select>
            </div>
            <button class="btn btn-outline-success rounded-0" type="button" id="button-cherch">Chercher</button>
          </div>
    </div>
    </form>
    <div class="tab-pane fade active show row p-4">
      <table class="table">
        <thead class="thead-light text-capitalize">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Type activité</th>
            <th scope="col">Status</th>
            <th scope="col">Date initiation</th>
            <th scope="col">Opération</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($companies as $companie)
          <tr>
            <th scope="row">{{$companie['id']}}</th>
            <td>{{$companie['nameCompany']}}</td>
            <td>{{$companie['Type']}}</td>
            <td>{{$companie['status']}}</td>
            <td>{{$companie['created_at']}}</td>
            <td>
              <div>
                @if ($companie['status'] =='deleted')
                <button type="submit" class="btn btn-sm btn-outline-success"  onclick="event.preventDefault();
                document.getElementById('Reactivate-user-form').submit();"><i class="fa fa-edit">Reactiver</i></button>
                <form id="Reactivate-user-form" action="{{ route('adminReactivateUser') }}" method="POST" class="d-none">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$companie['id']}}">
                </form>
                @else
                <button type="submit" class="btn btn-sm btn-outline-danger"  onclick="event.preventDefault();
                  document.getElementById('Remove-user-form').submit();"><i class="fa fa-remove">Supprimer</i></button>
                  <form id="Remove-user-form" action="{{ route('adminRemoveUser') }}" method="POST" class="d-none">
                    <input type="hidden" name="user_id" value="{{$companie['id']}}">
                      @csrf
                  </form>
                  @endif
              </div>
            </td>
          </tr>  
          @endforeach
        
         
        </tbody>
      </table>
    </div>
@endsection

