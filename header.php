<!doctype html>

<html lang="ja">
	<head>
		<meta charset="utf-8">

		<title>The HTML5 Herald</title>
		<meta name="description" content="The HTML5 Herald">
		<meta name="author" content="SitePoint">

		<?php wp_head(); ?>
		  <!--[if lt IE 9]>
		    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
		  <![endif]-->
		</head>

	<body>
<?php wp_body_open(); ?>

	<!-- navi start -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 bg-body rounded" aria-label="Fifth navbar example">
	    <div class="container-fluid">
	    <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">Expand at lg</a>
	      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	
	      <div class="collapse navbar-collapse" id="navbarsExample05">
	        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	          <li class="nav-item">
	            <a class="nav-link active" aria-current="page" href="#">Home</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#">Link</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
	          </li>
	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
	            <ul class="dropdown-menu" aria-labelledby="dropdown05">
	              <li><a class="dropdown-item" href="#">Action</a></li>
	              <li><a class="dropdown-item" href="#">Another action</a></li>
	              <li><a class="dropdown-item" href="#">Something else here</a></li>
	            </ul>
	          </li>
	        </ul>
	        <form>
	          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
	        </form>
	      </div>
	    </div>
	  </nav>
	<!-- navi end -->


