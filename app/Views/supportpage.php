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
        <div class="support-body">
            <div class="support-container">
                <h1>Customer Support</h1>
                <div class="form-container">
                    <h2>Submit a Ticket</h2>
                    <form id="support-form">
                        <label for="name">Your Name:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">Your Email:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="issue">Issue:</label>
                        <textarea id="issue" name="issue" rows="4" required></textarea>

                        <button type="submit">Submit Ticket</button>
                    </form>
                </div>
                
                <div class="form-container">
                    <h2>Request for Return and Refund</h2>
                    <form id="refund-form">
                        <label for="order-number">Order Number:</label>
                        <input type="text" id="order-number" name="order-number" required>

                        <label for="reason">Reason for Return/Refund:</label>
                        <textarea id="reason" name="reason" rows="4" required></textarea>

                        <button type="submit">Submit Request</button>
                    </form>
                </div>
            </div>
        </div>

        <?= $this->include('partials/footer') ?>

        <style>

            .support-body {
                font-family: Arial, sans-serif;
                margin: 1px;
                padding: 20px;
                background-color: #f0f0f0;
            }

            .support-container {
                max-width: 800px;
                margin: auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h1, h2 {
                color: #333;
            }

            .form-container {
                margin-top: 20px;
            }

            form {
                display: flex;
                flex-direction: column;
            }

            label {
                margin-top: 10px;
            }

            input[type="text"],
            input[type="email"],
            textarea {
                width: 100%;
                padding: 10px;
                margin-top: 5px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            button {
                margin-top: 20px;
                padding: 10px 20px;
                background-color: black;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
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