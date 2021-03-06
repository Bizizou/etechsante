<!doctype html>
<html lang="en">
<head>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>E-TechDiag</title>

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
                        <li>
                            <a href="/list" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-group"></span><span class="mtext">Cas internes</span>
                            </a>
                        </li>

                        <li>
                            <a href="/files" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-ambulance"></span><span class="mtext">Cas cliniques</span>
                            </a>
                        </li>

                        <li>
                            <a href="/archived" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-elderly"></span><span class="mtext">Cas pris en charge</span>
                            </a>
                        </li>     
                        <li>
                            <a href="https://webnamics.github.io/u-dicom-viewer/" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-eye"></span><span class="mtext">Visualiseur DICOM</span>
                            </a>
                        </li>                     
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-50 xs-pd-20-10">
            <div class="min-height-200px">
        @yield("content")
            </div>
        </div>
    </div>
        @guest
            <div class="modal" id="registerModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Inscription</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" id="register-form" action="/register">
                            <div class="modal-body">
                                    <div class="form-group">
                                        <label for="username">Pseudo:</label>
                                        <input type="text" class="form-control"
                                               id="username" name="username">
                                        <div class="invalid-feedback username-error"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control"
                                               id="email" name="email">
                                        <div class="invalid-feedback email-error"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Mot de passe:</label>
                                        <input type="password" class="form-control"
                                               id="password" name="password">
                                        <div class="invalid-feedback password-error"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation">Confirmer mot de passe:</label>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                    </div>
                                    

                            </div>
                            <div class="modal-footer">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">inscription</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            

            <div class="modal" id="loginModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Connexion</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" id="login-form" action="/login">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="loginEmail">Email:</label>
                                    <input type="email" name="email" class="form-control" id="loginEmail">
                                    <div class="invalid-feedback email-error"></div>
                                </div>
                                <div class="form-group">
                                    <label for="loginPassword">Mot de passe:</label>
                                    <input type="password" name="password" class="form-control" id="loginPassword">
                                    <div class="invalid-feedback password-error"></div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="form-group mr-auto">
                                    <div class="invalid-feedback auth-error"></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary align-middle">Connexion</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        @endguest
    
    </main>
    
<!-- js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{ asset("vendors/scripts/core.js") }}"></script>
<script src="{{ asset("vendors/scripts/script.min.js") }}"></script>
<script src="{{ asset("vendors/scripts/process.js") }}"></script>
<script src="{{ asset("vendors/scripts/layout-settings.js") }}"></script>
<script src="{{ asset("js/app.js") }}"></script>
<script src="{{ asset("src/plugins/datatables/js/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("src/plugins/datatables/js/dataTables.bootstrap4.min.js") }}"></script>
<script src="{{ asset("src/plugins/datatables/js/dataTables.responsive.min.js") }}"></script>
<script src="{{ asset("src/plugins/datatables/js/responsive.bootstrap4.min.js") }}"></script>
<!-- buttons for Export datatable -->
<script src="{{ asset("src/plugins/datatables/js/dataTables.buttons.min.js") }}"></script>
<script src="{{ asset("src/plugins/datatables/js/buttons.bootstrap4.min.js") }}"></script>
<script src="{{ asset("src/plugins/datatables/js/buttons.print.min.js") }}"></script>
<script src="{{ asset("src/plugins/datatables/js/buttons.html5.min.js") }}"></script>
<script src="{{ asset("src/plugins/datatables/js/buttons.flash.min.js") }}"></script>
<script src="{{ asset("src/plugins/datatables/js/pdfmake.min.js") }}"></script>
<script src="{{ asset("src/plugins/datatables/js/vfs_fonts.js") }}"></script>
<!-- Datatable Setting js -->
<script src="{{ asset("vendors/scripts/datatable-setting.js") }}"></script></body>
</body>
</html>