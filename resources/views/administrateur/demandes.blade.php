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
                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-1-tab"
                    href="{{route('adminUsers')}}"><i class="fa fa-users mr-1"></i> Gestion des utilisateurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab"
                    href="{{route('adminRequests')}}"><i class="fa fa-clock-o mr-1"></i> Traitement des demandes</a>
            </li>
        </ul>
    </nav>
</div>
@endsection

@section('Holder')
{{-- Validé des demandes inscriptions --}}
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
       @if ($companie['status'] !='deleted')
       <tr>
        <th scope="row">{{$companie['id']}}</th>
        <td>{{$companie['nameCompany']}}</td>
        <td>{{$companie['Type']}}</td>
        <td>{{$companie['status']}}</td>
        <td>{{$companie['created_at']}}</td>
        <td>
          
              <div>
                @if ($companie['status'] =='Refused' || $companie['status'] =='Reactivated' )
                <button type="submit" class="btn btn-sm btn-outline-success"  onclick="event.preventDefault();
                document.getElementById('Accept-user-form').submit();"><i class="fa fa-check">Accepter</i></button>
                <form id="Accept-user-form" action="{{ route('adminAcceptUser') }}" method="POST" class="d-none">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$companie['id']}}">
                </form>
            
                @elseif ($companie['status'] =='Accepted'  || $companie['status'] =='Reactivated' )
                <button type="submit" class="btn btn-sm btn-outline-danger"  onclick="event.preventDefault();
                  document.getElementById('Refuse-user-form').submit();"><i class="fa fa-times">Refuser</i></button>
                  <form id="Refuse-user-form" action="{{ route('adminRefuseUser') }}" method="POST" class="d-none">
                    <input type="hidden" name="user_id" value="{{$companie['id']}}">
                      @csrf
                  </form>
                  @endif
              </div>
        </td>
      </tr>       
        @endif
      
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
