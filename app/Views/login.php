<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        border: 1px solid #ddd; /* Added border */
        padding: 1rem;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1); /* Optional: Add a subtle shadow for depth */
    }
    .login-form {
        flex: 1;
        padding: 2rem;
        border-right: 1px solid #ddd;
    }
    .image-section {
        flex: 1;
        padding: 2rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .image-section img {
        max-width: 100%;
        height: auto;
    }
    
    body, input, button {
        font-family: 'Century Gothic', sans-serif;
    }
    .btn-primary {
        background-color: #000;
        border-color: #000;
        color: #fff;
    }
    .btn-primary:hover {
        background-color: #fff;
        border-color: #000;
        color: #000;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h2 class="text-center"><strong>Admin Login</strong></h2> <!-- Admin Login label -->
            <br>
            <?= form_open('login') ?>
                <input type="text" name="username" placeholder="Username" class="form-control mb-3">
                <input type="password" name="password" placeholder="Password" class="form-control mb-3">

                <div class="text-center mt-3"> <!-- Forgot Password link -->
            <a href="forgot-password-url">Forgot your password?</a>
        </div>
        <br>
        <div class="text-center">
    <input type="submit" value="Login" class="btn btn-primary">
</div>
            <?= form_close() ?>
            
        </div>
        
        <div class="image-section">
            <a href="your-image-url">
                <img src="<?= base_url('homefile/images/logo.png') ?>" alt="Image Description">
            </a>
        </div>
    </div>
    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>