<!doctype html>
<html lang="en">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Dashboard Admin</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href={{ asset("vendors/images/apple-touch-icon.png") }}>
	<link rel="icon" type="image/png" sizes="32x32" href={{ asset("vendors/images/favicon-32x32.png") }}>
	<link rel="icon" type="image/png" sizes="16x16" href={{ asset("vendors/images/favicon-16x16.png") }}>
    <link rel="stylesheet" type="text/css" href={{ asset("src/plugins/datatables/css/dataTables.bootstrap4.min.css") }}>
	<link rel="stylesheet" type="text/css" href={{ asset("src/plugins/datatables/css/responsive.bootstrap4.min.css") }}>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
	<link rel="stylesheet" type="text/css" href={{ asset("vendors/styles/core.css") }}>
	<link rel="stylesheet" type="text/css" href={{ asset("vendors/styles/icon-font.min.css") }}>
	<link rel="stylesheet" type="text/css" href={{ asset("vendors/styles/style.css") }}>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
    @include("layouts.nav")
    <main class="container">
        
        <div class="left-side-bar">
            <div class="brand-logo">
                
                <a href="/">
                    <img src="vendors/images/techdiag1.png" alt="" style="padding-top:20px ">
                </a>
                <div class="close-sidebar" data-toggle="left-sidebar-close">
                    <i class="ion-close-round"></i>
                </div>
            </div>
            <div class="menu-block customscroll">
                <div class="sidebar-menu">
                    <ul id="accordion-menu">
                        
                        <div style="padding-top: 20%" class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Creer un utilisateur</button>
                          <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Gerer les administrateurs</button>
                          <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Gerer les radiologues</button>
                          <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Gerer les cliniques</button>
                        </div>                     
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay"></div>
        <div style="padding-top: 10%; padding-left: 10%">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">@include('tables.create')</div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"> @include('tables.admin')</div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">@include('tables.radiologue')</div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">@include('tables.clinique')</div>
          </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{ asset("vendors/scripts/core.js") }}"></script>
<script src="{{ asset("vendors/scripts/script.min.js") }}"></script>
<script src="{{ asset("vendors/scripts/process.js") }}"></script>
<script src="{{ asset("vendors/scripts/layout-settings.js") }}"></script>
    <script src="{{ asset("js/app.js") }}"></script>
</html>