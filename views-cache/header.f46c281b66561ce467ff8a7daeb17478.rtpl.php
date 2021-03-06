<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/ecommerce/res/site/css/style1.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="/ecommerce/res/site/img/logo.png" sizes="32x32" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Truck & Wheel</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/ecommerce/res/site/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/ecommerce/res/site/css/owl.carousel.css">
    <link rel="stylesheet" href="/ecommerce/res/site/css/style.css">
    <link rel="stylesheet" href="/ecommerce/res/sitecss/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
		<div class="container-fluid">
			<a href="/ecommerce/index.php" alt="meu site - home" title="Home"><img id="logo" src="/ecommerce/res/site/img/logo.png"></a>
		  
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			  <li class="nav-item">
				<a class="nav-link "></a>
			  </li>
			  <li class="nav-item dropdown drop">
				<a class="nav-link dropdown-toggle" id="text" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				  Empresa
				</a>
				<ul class="dropdown-menu dropdown-menu-dark link_menu " aria-labelledby="navbarDropdown">
					<li><a class="text-decoration-none dropdown-item" href="/ecommerce/index.php/historia">Hist??ria</a></li>
					<li><a class="text-decoration-none dropdown-item" href="/ecommerce/index.php/missao">Miss??o e Vis??o </a></li>
					<li><a class="text-decoration-none dropdown-item" href="/ecommerce/index.php/estrategia">Estrat??gia e Valores </a></li>
					<li><a class="text-decoration-none dropdown-item" href="/ecommerce/index.php/setor">Solu????es Setoriais</a></li>
					<li><a class="text-decoration-none dropdown-item" href="/ecommerce/index.php/contactos">Contactos</a></li>
				</ul>
			  </li>
			  <li class="nav-item dropdown drop">
				<a class="nav-link dropdown-toggle" id="text" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				  Distribui????o
				</a>
				<ul class="dropdown-menu dropdown-menu-dark link_menu " aria-labelledby="navbarDropdown">
					<li><a class="text-decoration-none dropdown-item" href="/ecommerce/index.php/carga">Carga Completa</a></li>
					<li><a class="text-decoration-none dropdown-item" href="/ecommerce/index.php/expnot">Distribui????o Expresso e Noturna</a></li>
					<li><a class="text-decoration-none dropdown-item" href="/ecommerce/index.php/palete">Distribui????o ?? Palete</a></li>
					<li><a class="text-decoration-none dropdown-item" href="/ecommerce/index.php/cisternas">Cisternas</a></li>
					<li><a class="text-decoration-none dropdown-item" href="/ecommerce/index.php/basc">Basculantes e Pisos M??veis</a></li>
				</ul>
			  </li>
			  <li class="nav-item dropdown drop">
				<a class="nav-link dropdown-toggle" id="text" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				  Log??stica
				</a>
				<ul class="dropdown-menu dropdown-menu-dark link_menu " aria-labelledby="navbarDropdown">
					<li><a class="text-decoration-none dropdown-item" href="/ecommerce/index.php/twms">TWMS</a></li>
					<li><a class="text-decoration-none dropdown-item" href="/ecommerce/index.php/warehousing">Warehousing </a></li>
					<li><a class="text-decoration-none dropdown-item" href="/ecommerce/index.php/4pl">4PL</a></li>
				</ul>
			  </li>
			  
			</ul>
			<ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
				<li class="nav-item dropdown drop">
					<a class="nav-link dropdown-toggle" id="text" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Categorias
					</a>
					<ul class="dropdown-menu dropdown-menu-dark link_menu " aria-labelledby="navbarDropdown">
					<?php require $this->checkTemplate("categories-menu");?>  
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link btn btn-outline-light text1" aria-current="page" href="/ecommerce/index.php/cart">Carrinho - <span class="cart"><?php echo getCartTotal(); ?>???</span> <i class="fa fa-shopping-cart"></i> <span class="badge bg-light text-black ms-1 rounded-pill"><?php echo getCartNrQtd(); ?></span></a>
				</li>
				
				<?php if( checkLogin(false) ){ ?>

				<li class="nav-item">
					<a class="nav-link active" id="text" aria-current="page" href="/ecommerce/index.php/profile"><?php echo getUserName(); ?> <i class="fa fa-user"></i> </a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" id="text" aria-current="page" href="/ecommerce/index.php/logout">Logout <i class="fa fa-close"></i> </a>
				</li>
				<?php }else{ ?>

				<li class="nav-item">
					<a class="nav-link active" id="text" aria-current="page" href="/ecommerce/index.php/login">Login <i class="fa fa-lock"></i> </a>
				</li>
				<?php } ?>

			</ul>
		</div>

		</div>
	</nav>
</header>
