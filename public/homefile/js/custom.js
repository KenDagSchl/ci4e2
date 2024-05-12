// to get current year
function getYear() {
  var currentDate = new Date();
  var currentYear = currentDate.getFullYear();
  document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();

// client section owl carousel
$(".client_owl-carousel").owlCarousel({
  loop: true,
  margin: 0,
  dots: false,
  nav: true,
  navText: [],
  autoplay: true,
  autoplayHoverPause: true,
  navText: [
    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
    '<i class="fa fa-angle-right" aria-hidden="true"></i>',
  ],
  responsive: {
    0: {
      items: 1,
    },
    768: {
      items: 2,
    },
    1000: {
      items: 2,
    },
  },
});

document.addEventListener("DOMContentLoaded", () => {
  const sidebar = document.getElementById("sidebar");

  document.querySelectorAll(".sidebar-link").forEach((item) => {
    item.addEventListener("mouseenter", () => {
      sidebar.style.width = "250px";
    });
    item.addEventListener("mouseleave", () => {
      sidebar.style.width = "80px";
    });
  });
});

/** google_map js **/
function myMap() {
  var mapProp = {
    center: new google.maps.LatLng(40.712775, -74.005973),
    zoom: 18,
  };
  var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

// Get all color boxes
var colorBoxes = document.querySelectorAll('.color-box');

// Add click event listener to each color box
colorBoxes.forEach(function(box) {
    box.addEventListener('click', function() {
        // Remove selected class from all color boxes
        colorBoxes.forEach(function(box) {
            box.classList.remove('color-box-selected');
        });

        // Add selected class to clicked color box
        this.classList.add('color-box-selected');
    });
});



document
  .getElementById("upload-design")
  .addEventListener("change", function () {
    var fileName = this.value.split("\\").pop();
    document.getElementById("file-name").textContent = fileName
      ? fileName
      : "No file chosen";
  });

document.querySelector(".upload-button").addEventListener("click", function () {
  document.getElementById("upload-design").click();
});

document.getElementById("fileUpload").addEventListener("change", function () {
  // The selected file(s) will be in this.files
  console.log(this.files);
});
