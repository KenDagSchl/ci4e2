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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css"
        integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this template -->
    <link href="<?= base_url('homefile/css/style.css') ?>" rel="stylesheet" />
    <!-- responsive style -->
    <link href="<?= base_url('homefile/css/responsive.css') ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">



</head>

<body>
    <?php //phpinfo() ?>
    <?php echo view('partials/navbar'); ?>

    <div class="custom-bar">
        <div class="image-container">
            <div class="tshirt"> <!-- Add a container for the t-shirt image style="background-color: white;"-->
                <img src="\ci4e2\public\homefile\images\plain shirt.png" id="tshirt-image" alt="white tshirt">
            </div>
        </div>

        <div class="content">
            <h2>Customize Your T-Shirt</h2>
            <p>Got your own design idea? We can make it for you!!!</p>

            <form id="customize-form" method="POST" action="<?= site_url('CustomizationController/process') ?>"
                enctype="multipart/form-data">
                <label for="size">Size:</label>
                <select id="size" name="size">
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                    <option value="xlarge">X-Large</option>
                </select>

                <label for="color">Color: <span id="color-name"></spa></label>
                <p>Color Selection based from Supplier</p>
                <input type="hidden" id="color" name="color">
                <div class="color-box-container">
                    <div class="color-box" id="black" style="background-color: black;"></div>
                    <div class="color-box" id="red" style="background-color: red;"></div>
                    <div class="color-box" id="blue" style="background-color: blue;"></div>
                    <div class="color-box" id="green" style="background-color: green;"></div>
                    <div class="color-box" id="yellow" style="background-color: yellow;"></div>
                </div>


                <label for="preset-designs"> Choose a preset design:</label>
                <select id="preset-designs" name="options">
                    <option value="none">None</option>
                    <option value="design1">Design 1</option>
                    <option value="design2">Design 2</option>
                    <option value="design3">Design 3</option>
                </select>

                <label for="description">Description:</label>
                <textarea id="description" name="description"></textarea>

                <label for="design_image">Upload an image:</label>
                <input type="file" id="design_image" name="design_image" onchange="previewImage(event)">
                <img id="uploaded-image" src="#" alt="Uploaded Image"
                    style="display: none; width: 128px; height: 128px;">

                <script>
                    function previewImage(event) {
                        var input = event.target;
                        var image = document.getElementById('uploaded-image');

                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                image.src = e.target.result;
                                image.style.display = 'block';
                            };

                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                </script>

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
    <?php echo view('partials/footer'); ?>
    <!-- footer end -->

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif background-color: #f0f0f0;
        }

        .image-container img {
            width: 650px;
            /* Adjust based on your image and preference */
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 0px solid #ccc;
        }

        .custom-bar {
            font-family: Arial, sans-serif;
            background-color: white;
            /* Change this to your desired color */
            margin: 1px;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            gap: 20px;
        }

        .content {
            background-color: lightblue;

            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
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

        select,
        input[type="number"] {
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

        .color-box-container {
            display: flex;
            justify-content: space-around;
            padding: 10px;
            gap: 5px;
        }

        .color-box {
            width: 30px;
            height: 30px;
            cursor: pointer;
            border: 1px solid black;
            border-radius: 4px;
        }

        .file-upload {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .upload-button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #file-name {
            color: #555;
        }

        .color-box-selected {
            border: 5px solid gold;
            /* Change to the color you want */
        }
    </style>

    <!-- custom js -->
    <script src="<?= base_url('homefile/js/custom.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.10/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Wait for the document to load
        document.addEventListener('DOMContentLoaded', function () {
            // Get all color boxes
            var colorBoxes = document.querySelectorAll('.color-box');

            // Add click event listener to each color box
            colorBoxes.forEach(function (box) {
                box.addEventListener('click', function () {
                    // Remove selected class from all color boxes
                    colorBoxes.forEach(function (box) {
                        box.classList.remove('color-box-selected');
                    });

                    // Add selected class to clicked color box
                    this.classList.add('color-box-selected');

                    // Update color name
                    document.getElementById('color-name').textContent = this.id;

                    // Set color input field value
                    document.getElementById('color').value = this.id;
                });
            });
        });

    </script>

    <script>
        // Wait for the document to load
        document.addEventListener('DOMContentLoaded', function () {
            // Get the image upload field
            var imageUpload = document.getElementById('image-upload');

            // Add change event listener
            imageUpload.addEventListener('change', function () {
                // Check if a file was selected
                if (this.files && this.files[0]) {
                    // Create a new FileReader object
                    var reader = new FileReader();

                    // Define the onload event for the FileReader
                    reader.onload = function (e) {
                        // Set the value of the hidden input field to the data URL of the file
                        document.getElementById('image-data').value = e.target.result;
                    };

                    // Read the selected file as a data URL
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var colorBoxes = document.querySelectorAll('.color-box');
            var tshirtImage = document.getElementById('tshirt-image');

            colorBoxes.forEach(function (box) {
                box.addEventListener('click', function () {
                    var color = window.getComputedStyle(this).backgroundColor;
                    var hslColor = rgbToHsl(color);
                    tshirtImage.style.filter = `grayscale(100%) sepia(0.5) hue-rotate(${hslColor[0]}deg) saturate(${hslColor[1] * 2}%) brightness(${hslColor[2] * 1.9}%)`; document.getElementById('color-name').textContent = this.id;
                    document.getElementById('color').value = this.id;
                });
            });
        });

        function rgbToHsl(color) {
            var rgb = color.match(/\d+/g);
            var r = rgb[0] / 255, g = rgb[1] / 255, b = rgb[2] / 255;
            var max = Math.max(r, g, b), min = Math.min(r, g, b);
            var h, s, l = (max + min) / 2;

            if (max == min) {
                h = s = 0;
            } else {
                var d = max - min;
                s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
                switch (max) {
                    case r: h = (g - b) / d + (g < b ? 6 : 0); break;
                    case g: h = (b - r) / d + 2; break;
                    case b: h = (r - g) / d + 4; break;
                }
                h /= 6;
            }

            return [h * 360, s * 100, l * 100];
        }
    </script>

</body>

</html>