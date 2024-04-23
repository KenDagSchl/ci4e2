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

       

        <!-- main content -->
        <div class="aboutus">
            <div class="about-container">
                <div class="image-container">
                    <img src="homefile/images/aboutpic.jpg" alt="Our Clothing Store" id="store-image">
                </div>
                <div class="description-container">
                    <h1>About Our Store</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <button onclick="location.href='{{ url('/products') }}'">Shop Now</button>
                </div>
            </div>
        </div>

        @include('partials.footer')

        <style>

            .aboutus {
                font-family: Arial, sans-serif;
                margin-top: 5px;
                padding: 20px;
                display: flex;
                justify-content: center;
                height: 90vh;
                background-color: #f0f0f0;
            }

            .about-container {
                margin-top: 40px;
                display: flex;
                align-items: justify;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                max-width: 900px;
                height: 77vh;
            }

            .image-container img {
                width: 400px; /* Adjust based on your image size and preference */
                height: auto;
                border-radius: 8px;
                margin-right: 20px;
            }

            .description-container {
                flex-grow: 1;
            }

            .description-container h1 {
                margin-top: 0;
            }

            .description-container p {
                line-height: 1.6;
            }

            button {
                padding: 10px 20px;
                background-color: black;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                margin-top: 20px;
            }

            button:hover {
                background-color: gray;
            }

        </style>

        <!-- custom js -->
        <script src="homefile/js/custom.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.10/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
        
   </body>
</html>