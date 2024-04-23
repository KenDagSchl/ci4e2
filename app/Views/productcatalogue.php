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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- font awesome style -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- Custom styles for this template -->
      <link href="homefile/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="homefile/css/responsive.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
      
       
   </head>

   <body>

   
   <!-- header section strats -->
   @include('partials.navbar')
    <!-- end header section -->

       
   <div class="container content">
    <aside class="filter-section">
        <h4>Filters</h4>
        <hr>
        <div class="filter">
            <input type="checkbox" id="stock">
            <label for="stock">In stock only</label>
            
            <hr>
        </div>
        
        <div class="product">
        <h4> Products </h4>
            <input type="checkbox" id="stock">
            <label for="stock">Tops</label>
            
            <br>
            <input type="checkbox" id="stock">
            <label for="stock">Bottoms</label>
            
            <br>
            <input type="checkbox" id="stock">
            <label for="stock">Accesories</label>
            
        </div>

        <hr>

        <div class="color">
        <h4> Color </h4>
            <input type="checkbox" id="stock">
            <label for="stock">Black</label>
            
            <br>
            <input type="checkbox" id="stock">
            <label for="stock">White</label>
            
            <br>
            <input type="checkbox" id="stock">
            <label for="stock">Gray</label>
            
            <br>
            <input type="checkbox" id="stock">
            <label for="stock">Brown</label>
            
            <br>
            <input type="checkbox" id="stock">
            <label for="stock">Blue</label>
            
            <br>
            <input type="checkbox" id="stock">
            <label for="stock">Maroon</label>
            
        </div>

        <hr>

        <div class="size">
        <h4> Size </h4>
            <input type="checkbox" id="stock">
            <label for="stock">Small</label>
            
            <br>
            <input type="checkbox" id="stock">
            <label for="stock">Medium</label>
            
            <br>
            <input type="checkbox" id="stock">
            <label for="stock">Large</label>
            
            <br>
            <input type="checkbox" id="stock">
            <label for="stock">X-Large</label>
            
        </div>

    </aside>
    
    <main class="product-section">
        <br>
        <center>
        <h1>PRODUCTS</h1>
        <center>
        <br>
        <div class="products">
    
            <div class="product-card">
                <a href="{{ url('/description') }}">
                    <img src="homefile/images/everyday1.jpg" alt="Product Name">
                </a>
                <h6>THE CREW <br> TSHIRT</h6>
                <br>
                <h6>Small<h6>
                <p class="price">₱599.00</p>
                <br>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>

            <div class="product-card">
            <a href="{{ url('/description') }}">
                    <img src="homefile/images/everyday2.jpg" alt="Product Name">
                </a><h6>GREAT THINGS TSHIRT</h6>
                <br>
                <h6>Large<h6>
                <p class="price">₱599.00</p>
                <br>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>

            <div class="product-card">
                <a href="{{ url('/description') }}">
                    <img src="homefile/images/everyday3.jpg" alt="Product Name">
                </a>
                <h6>EVERYDAY BLK TSHIRT</h6>
                <br>
                <h6>Small<h6>
                <p class="price">₱599.00</p>
                <br>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>

            <div class="product-card">
                <img src="homefile/images/shorts1.jpg" alt="Product Name">
                <h6>EVERYDAY WHT SHORTS</h6>
                <br>
                <h6>Large<h6>
                <p class="price">₱399.00</p>
                <br>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>

            <div class="product-card">
                <img src="homefile/images/shorts2.jpg" alt="Product Name">
                <h6>EVERYDAY BROWN SHORTS</h6>
                <br>
                <h6>Small<h6>
                <p class="price">₱399.00</p>
                <br>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>

            <div class="product-card">
                <img src="homefile/images/tote1.jpg" alt="Product Name">
                <h6>EVERY PLAIN TOTE BAG</h6>
                <br>
                <br>
             
                <p class="price">₱299.00</p>
                <br>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>

            <div class="product-card">
                <img src="homefile/images/tote2.jpg" alt="Product Name">
                <h6>EVERYDAY WHT TOTE BAG</h6>
                <br>
                <br>
               
                <p class="price">₱299.00</p>
                <br>
                
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>

            <div class="product-card">
                <img src="homefile/images/tote3.jpg" alt="Product Name">
                <h6>EVERY BROWN TOTE BAG</h6>
                <br>
                <br>
                <p class="price">₱299.00</p>
                <br><br>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>

        </div>
    </main>

</div>

<br>
@include('partials.footer')

    <style>

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f7f7f7; 
            color: #333; 
            margin: 0; 
        }

        .content {
            display: flex;
            width: 100%;
            max-width: 1200px; 
            justify-content: center;
        }


        .filter-section {
            flex: .7;
            padding: 20px;
            margin-top:40px;
            background-color: white; 
            border-radius: 10px; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); 
            margin-right: 20px; 
        }

        .product-section {
            flex: 3;
            padding: 20px;
        }

        .products {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .product-card {
            position: relative; /* Position relative for absolute positioning */
            width: 200px;
            background-color: white; /* Card background */
            border: none; /* Remove the border */
            padding: 15px;
            text-align: center;
            border-radius: 15px; /* Rounded corners for the product cards */
            box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Drop shadow for the cards */
            transition: transform 0.2s ease, box-shadow 0.2s ease; /* Transition for hover effects */
        }

        .product-card:hover {
            transform: translateY(-5px); /* Slightly raise the card on hover */
            box-shadow: 0 6px 12px rgba(0,0,0,0.3); /* Enhance shadow on hover */
        }

        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 10px; /* Rounded corners for the images */
        }

        .price {
            color: #333;
            font-weight: bold;
            margin-top: 8px; /* Space between the image and price */
        }

        .add-to-cart-btn {
            display: none; /* Initially hide the button */
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            background-color: black;
            color: #fff;
            border: none;
            padding: 5px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .product-card:hover .add-to-cart-btn {
            display: block; /* Show the button on hover */
        }

        .add-to-cart-btn:hover {
            background-color: gray;
        }

    </style>

        <!-- custom js -->
        <script src="homefile/js/custom.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.10/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


   </body>
</html>