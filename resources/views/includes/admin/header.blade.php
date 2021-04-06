<nav class="navbar navbar-expand-md navbar-light bg-transparent">
	<div class="bloc_logo col-2">
	<a href="./" class="navbar-brand text-primary"><i class="fa fa-cube"></i> ACHAT<b>COM</b></a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
	  <span class="navbar-toggler-icon"></span>
	</button>
	</div>
	<!--nav Services -->
    <!-- if connecter -->
    <div id="menu-services" class="col-7">
        <!--start Services Name-->
        @yield('services')
	    <!--end Services Name-->
  </div>
	 <!-- if non-connecter -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start col-3" >

		<div class="nav-item dropdown">
		  <a href="#" data-toggle="dropdown" class="dropdown user-action btn btn-primary  text-gray text-uppercase text-decoration-none">
			<i class="fa fa-user-circle mr-1"></i>Administrateur</a>
		  <div class="dropdown-menu">
			<a href="#" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a>
			<a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendrier</a>
			<div class="dropdown-divider"></div>
			<a href="#" class="dropdown-item"><i class="fa fa-sign-out"></i> Déconnexion</a>
		  </div>
		</div>

	</div>
  </nav>
