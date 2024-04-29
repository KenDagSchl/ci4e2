<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>EveryDay</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <!-- font awesome style -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- Custom styles for this template -->
      <link href="<?= base_url('homefile/css/style.css') ?>" rel="stylesheet" />
      <!-- responsive style -->
      <link href="<?= base_url('homefile/css/responsive.css') ?>" rel="stylesheet" />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


   </head>
   <body>
        <!-- header section strats -->
        <?= $this->include('partials/navbar') ?>
        <!-- end header section -->
         
      <section class="slider_section ">
            <div class="slider_bg_box">
            <img src="<?= base_url('homefile/images/slider-bg.jpg') ?>" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    EVERYDAY
                                    </span>
                                    <br>
                                    FASHION
                                 </h1>
                                 <p>
                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    Shop Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item ">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    EVERYDAY
                                    </span>
                                    <br>
                                    FASHION
                                 </h1>
                                 <p>
                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    Shop Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    EVERYDAY
                                    </span>
                                    <br>
                                    FASHION
                                 </h1>
                                 <p>
                                    Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    Shop Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <ol class="carousel-indicators">
                     <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                     <li data-target="#customCarousel1" data-slide-to="1"></li>
                     <li data-target="#customCarousel1" data-slide-to="2"></li>
                  </ol>
               </div>
            </div>
      </section>


      <!-- end slider section -->
         
      <?= $this->include('partials/content') ?>
      <?php
      // Load the database library
      $database = \Config\Database::connect();

      // Get the products from the database
      $query = $database->query('SELECT * FROM product');
      $products = $query->getResultArray();
      ?>
        
      <section class="product_carousel">
         <div class="container">
         <div class="row">
         <div class="col-md-12">
         <h2>Featured Products</h2>
         <div id="productCarousel" class="carousel slide mx-auto" data-ride="carousel">
            <div class="carousel-inner">
            <?php foreach ($products as $key => $product) : ?>
            <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>">
            <div class="row">
               <div class="col-md-8 mx-auto">
               <h3><?= $product['product_name'] ?></h3>
               <p><?= $product['description'] ?></p>
               <img src="<?= $product['image_url'] ?>" alt="<?= $product['product_name'] ?>">
               <a href="" class="btn btn-primary">Buy Now</a>
               </div>
            </div>
            </div>
            <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         </div>
         </div>
         </div>
      </section>


         <!-- footer start -->
         <?= $this->include('partials/footer') ?>
      <!-- footer end -->
     
        <!-- custom js -->
        <script src="<?= base_url('homefile/js/custom.js') ?>"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.10/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </body>
</html>