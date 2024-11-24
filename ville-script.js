let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  //   let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex - 1].style.display = "block";
  //   dots[slideIndex-1].className += " active";
}

// /// Show details
// function showDetails(id) {
//   document.getElementById(id + "-details").classList.remove("hidden");
// }

// function hideDetails() {
//   // Hide all details overlays
//   document
//     .querySelectorAll(".details-overlay")
//     .forEach((el) => el.classList.add("hidden"));
// }

// // Ensure overlays are hidden when the page is loaded
// window.addEventListener("DOMContentLoaded", (event) => {
//   document.querySelectorAll(".details-overlay").forEach((overlay) => {
//     overlay.classList.add("hidden");
//   });
// });
// activity-script.js
document.addEventListener("DOMContentLoaded", function () {
  // Show Activity 1 Details when button is clicked
  document
    .getElementById("activity1-btn")
    .addEventListener("click", function () {
      document.getElementById("activity1-details").style.display = "block";
    });

  // Show Activity 2 Details when button is clicked
  document
    .getElementById("activity2-btn")
    .addEventListener("click", function () {
      document.getElementById("activity2-details").style.display = "block";
    });
});

// Hide the details overlay
function hideDetails(activityId) {
  document.getElementById(activityId).style.display = "none";
}
