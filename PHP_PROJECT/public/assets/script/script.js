(function () {
  // Create footer container
  const footer = document.createElement("footer");

  // Set the inner HTML to match the exact structure you provided
  footer.innerHTML = `
        <div class="footerContainer">
          <div class="socialIcons">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-google-plus"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
          </div>
          <div class="footerNav">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Our Team</a></li>
            </ul>
          </div>
        </div>
        <div class="footerBottom">
          <p>Copyright &copy;2024; Designed by <span class="designer">FATIMA ZAHRA</span></p>
        </div>
      `;

  // Append footer to the body
  document.body.appendChild(footer);

  // Apply styles using JavaScript
  const style = document.createElement("style");
  style.textContent = `
        footer {
          background-color: black;
          padding: 20px 0;
          margin: 0;
          flex-wrap: wrap;
        }
        .socialIcons {
          display: flex;
          justify-content: center;
        }
        .socialIcons a {
          text-decoration: none;
          padding: 10px;
          background-color: white;
          margin: 10px;
          border-radius: 50%;
          transition: all 0.3s;
        }
        .socialIcons a i {
          font-size: 1em;
          color: black;
          opacity: 0.9;
        }
        .socialIcons a:hover {
          background-color: #111;
          transition: 0.5s;
        }
        .socialIcons a:hover i {
          color: white;
          transition: 0.5s;
        }
        .footerNav {
          margin: 30px 0;
        }
        .footerNav ul {
          display: flex;
          justify-content: center;
          list-style-type: none;
          padding: 0;
        }
        .footerNav ul li a {
          color: white;
          margin: 20px;
          text-decoration: none;
          font-size: 1.3em;
          opacity: 0.7;
          transition: 0.5s;
        }
        .footerNav ul li a:hover {
          opacity: 1;
        }
        .footerBottom {
          background-color: #000;
          padding: 20px;
          text-align: center;
        }
        .footerBottom p {
          color: white;
          margin: 0;
        }
        .designer {
          opacity: 0.7;
          text-transform: uppercase;
          letter-spacing: 1px;
          font-weight: 400;
          margin: 0px 5px;
        }
        @media (max-width: 700px) {
          .footerNav ul {
            flex-direction: column;
          }
          .footerNav ul li {
            width: 100%;
            text-align: center;
            margin: 10px;
          }
          .socialIcons a {
            padding: 8px;
            margin: 4px;
          }
        }
        @media screen and (max-width: 500px) {
          footer {
            padding: 10px;
          }
        }
      `;

  // Append the styles to the document head
  document.head.appendChild(style);
})();

//video section
function showVideo() {
  var videoContainer = document.getElementById("video-container");
  var video = document.getElementById("natureVideo");

  // hadi to Show the video container
  videoContainer.style.display = "block";

  // Play the video
  video.play();
}

let kech = document.getElementById("kechB");
kech.addEventListener("click", function () {
  window.location.assign("kech");
});
let chefne = document.getElementById("tangaB");
chefne.addEventListener("click", function () {
  window.location.assign("chefn");
});

let fez = document.getElementById("fezB");
fez.addEventListener("click", function () {
  window.location.assign("fez");
});
let dakhla = document.getElementById("dakhlaB");
dakhla.addEventListener("click", function () {
  window.location.assign("dakhla");
});
let casa = document.getElementById("casaB");
casa.addEventListener("click", function () {
  window.location.assign("casa");
});
let mrzg = document.getElementById("mrzgB");
mrzg.addEventListener("click", function () {
  window.location.assign("marzouga");
});
