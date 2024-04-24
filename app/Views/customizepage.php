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
      <link href="<?= base_url('homefile/css/style.css') ?>" rel="stylesheet" />
      <!-- responsive style -->
      <link href="<?= base_url('homefile/css/responsive.css') ?>" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
      


   </head>
   <body>
        <!-- header section strats -->
        <?= $this->include('partials/navbar') ?>
        <!-- end header section -->

       

        <!-- main content -->
        
        <div class="custom-bar">
            <div class="image-container">
                <img src="<?= base_url('homefile/images/plain shirt.jpg') ?>" id="tshirt-image" alt="white tshirt">
            </div>

            <div class="content">
                <h2>Customize Your T-Shirt</h2>
                <form id="customize-form">
                    <label for="size">Size:</label>
                    <select id="size" name="size">
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                        <option value="xlarge">X-Large</option>
                    </select>

                    <label for="color">Color:</label>
                    <input type="color" id="color" name="color" value="#ffffff">

                    <label for="upload-design">Upload your design:</label>
                    <input type="file" id="upload-design" name="upload-design" accept="image/*">

                    <label for="preset-designs">Choose a preset design:</label>
                    <select id="preset-designs" name="preset-designs">
                        <option value="none">None</option>
                        <option value="design1">Design 1</option>
                        <option value="design2">Design 2</option>
                        <option value="design3">Design 3</option>
                    </select>

                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" min="1" value="1">

                    <div class="price-estimate">
                        Estimated Price: <span id="estimated-price">PHP 0.00</span>
                    </div>

                    <button type="submit">Submit Request</button>
                </form>
            </div>
        </div>

         <!-- footer start -->
         <?= $this->include('partials/footer') ?>
      <!-- footer end -->

        <style>

            .image-container img {
                width: 650px; /* Adjust based on your image and preference */
                height: auto;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .custom-bar {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                margin: 1px;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                gap: 20px;
            }

            .content {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h2 {
                text-align: center;
            }

            form {
                display: flex;
                flex-direction: column;
            }

            label {
                margin-top: 10px;
            }

            input[type="color"] {
                width: 100%;
                padding: 5px;
                border: 1px solid #ccc;
                border-radius: 4px;
                margin-top: 5px;
            }

            input[type="file"] {
                margin-top: 5px;
            }

            select, input[type="number"] {
                padding: 10px;
                margin-top: 5px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            .price-estimate {
                margin-top: 15px;
                font-size: 18px;
            }

            button {
                margin-top: 20px;
                padding: 10px;
                border: none;
                background-color: black;
                color: white;
                cursor: pointer;
                border-radius: 4px;
            }

            button:hover {
                background-color: gray;
            }

        </style>

        <!-- custom js -->
        <script src="<?= base_url('homefile/js/custom.js') ?>"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.10/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
        
   </body>
</html>