<head>

      <!-- Custom styles for this template -->
      <link href="navbar/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="navbar/css/responsive.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

</head>

        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ url('/home') }}"><img width="150" src="<?= base_url('homefile/images/logo.png') ?>" alt="#" /></a>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/home/home') ?>">Home <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('/home/products') ?>">Products</a>
                            </li>

                            <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Products<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/prod') }}">Tops</a></li>
                                <li><a href="{{ url('/prod') }}">Shorts</a></li>
                                <li><a href="{{ url('/prod') }}">Tote bags</a></li>
                            </ul>
                            </li> -->

                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('/home/customize') ?>">Customize</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('/home/support') ?>">Support</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('/home/about') ?>">About Us</a>
                            </li>
                            </ul>
                            <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('/home/about') ?>"><i class="fas fa-search"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('/home/about') ?>"><i class="fas fa-heart"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('/home/about') ?>"><i class="fas fa-shopping-cart"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('/home/about') ?>"><i class="fas fa-user"></i></a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->

       