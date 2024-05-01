<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
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
    <?= $this->include('partials/navbar') ?>
    <!DOCTYPE html>
    <div class="container">
    <h1 class="text-center mt-5">Current Users</h1>
        <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "everyday";

        // Create connection
        $conn = new mysqli($hostname, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">User Type</th>
                    <th scope="col">User Level</th>
                    <th scope="col">Password</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch data from your database
                $result = mysqli_query($conn, "SELECT * FROM registration");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['user_id'] . "</td>";
                    echo "<td>" . $row['user_type'] . "</td>";
                    echo "<td>" . $row['user_level'] . "</td>";
                    echo "<td>" . $row['password'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['first_name'] . "</td>";
                    echo "<td>" . $row['last_name'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <?= $this->include('partials/footer') ?>
</body>
</html>