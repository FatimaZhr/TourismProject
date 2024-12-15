<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>dakhla - City Attractions</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="stylesheet" href="<?= base_url('assets/css/ville.css'); ?>" />
  </head>
  <body>
    <!-- City Header Section -->

    <header class="city-header">
      <img

        src="<?= base_url('assets/images/photo1jpg.jpg'); ?>" 
        alt="Marrakech"
        class="banner-image"
      />
      <div class="header-text">
        <h1>Dakhla</h1>
        <p>Discover the beauty, history, and vibrant life of Dakhla.</p>
        <div class="btn">
          <button id="reser" >reservation</button>
 <form action="<?=base_url('home1')?>">
          <button id="home">back to cities</button>
          </form>        </div>
      </div>
    </header>

    <div class="h1"><h1>Top Atractive places in Dakhla</h1></div>

    <!-- Main Content Section -->
    <div class="container">
      <div class="content">
        <!-- Text Content -->
        <div class="text-content">
          <h2>Heading</h2>

          <p>
            In the far north of Morocco, the city of Tangier invites travelers.
            On its coasts where the Mediterranean and Atlantic waters converge,
            you will discover an authentic city cradled by varied influences.
            <br />
            <br />
            Stroll through Tangier the White. Stroll through streets lined with
            lime-coated houses and, like Matisse before you, like Delacroix too,
            let yourself be carried away by this dreamy air that emanates from
            the city. Lose yourself in the alleys of the great "Socco"; at the
            foot of the high walls of the "Kasbah", admire the fortress that
            dominates the medina. Not far away, it is the "Sultan's Palace"
            today dedicated to the arts of Morocco. Tangier also has Spanish
            influences with an arena that stands on the "Plaza de Torros", not
            to mention the "Cervantes" theater built in 1913.
          </p>
        </div>
        <div class="vl"></div>
        <!-- Image Slider with <img> Tags -->
        <!-- Slideshow container -->
        <div class="slideshow-container">
          <!-- Full-width images with number and caption text -->
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="<?= base_url('assets/images/dkhl.jpg'); ?>"  style="width: 100%" />
            <div class="text">Caption Text</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="<?= base_url('assets/images/dkhl2.jpg'); ?>" style="width: 100%" />
            <div class="text">Caption Two</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="<?= base_url('assets/images/dkhl3.jpg'); ?>" style="width: 100%" />
            <div class="text">Caption Three</div>
          </div>

          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br />
      </div>
    </div>

    <!-- Featured Activities Grid -->
   
    <section class="activities">
  <h2>Top Activities in Chefchaouen</h2>
  <div class="activity-grid">
    <!-- Activity 1 -->
    <div class="activity-card">
      <img src="<?= base_url('assets/images/dkhl3.jpg'); ?>" alt="Activity 1" />
      <div class="activity-info">
      <h3>Activity 1 <strong>from $80</strong></h3>
      <p>white dunes.</p>
        <button class="activity-btn" data-target="activity-details-1">Learn More</button>
      </div>
    </div>

    <!-- Activity 2 -->
    <div class="activity-card">
      <img src="<?= base_url('assets/images/dkhl2.jpg'); ?>" alt="Activity 2" />
      <div class="activity-info">
      <h3>Activity 2 <strong>from $36.9</strong></h3>
      <p>boat trip.</p>
        <button class="activity-btn" data-target="activity-details-2">Learn More</button>
      </div>
    </div>

    <!-- Activity 3 -->
    <div class="activity-card">
      <img src="<?= base_url('assets/images/bike-dakhla-maroc.jpg'); ?>" alt="Activity 3" />
      <div class="activity-info">
      <h3>Activity 3 <strong>from $35.9</strong></h3>
      <p>Walking in the desert.</p>
        <button class="activity-btn" data-target="activity-details-3">Learn More</button>
      </div>
    </div>
  </div>
</section>

<!-- Overlays for Activity Details -->
<div id="activity-details-1" class="details-overlay">
  <div class="details-content">
    <h3>white dunes</h3>
    <p>Among the natural sights of Dakhla, we can mention the white dune. It is a white sand dune in the shape of a crescent. At high tide, it turns into an island. To date, this phenomenon remains a real mystery. There is no reliable scientific data or theory to explain this. There are two ways to visit the white dune, in a 4x4 or during kitesurfing trips. Many hotels in the region offer this excursion to their guests..</p>
    <button onclick="hideDetails('activity-details-1')">Close</button>
  </div>
</div>

<div id="activity-details-2" class="details-overlay">
  <div class="details-content">
    <h3>boat trip</h3>
    <p>If you are not too excited about a boat trip, you can always visit Dragon Island. At low tide, it is possible to walk there. This walk will also be an opportunity for you to admire the ballet of kitesurfers and dolphins. As with the boat trip, pink flamingos and other migratory birds will serve as your welcoming committee.</p>
    <button onclick="hideDetails('activity-details-2')">Close</button>
  </div>
</div>

<div id="activity-details-3" class="details-overlay">
  <div class="details-content">
    <h3>Activity 3 Details</h3>
    <p>For those who enjoy cycling, there are excursions in the desert on electric mountain bikes. Even those who are not experienced cyclists can take this bike ride in the desert. The advantage of the electric bicycle is that it reduces the pedalling effort. When you climb the dunes, etc., the engine takes over, to allow you to rest your calf. The interest of the bike ride is that you are as close as possible to nature. You could better admire the lunar landscapes of this desert terrain.</p>
    <button onclick="hideDetails('activity-details-3')">Close</button>
  </div>
</div>



    <!-- Interactive Map Section -->
    <section class="city-map">
      <h2>Explore on the Map</h2>
      <div class="map-placeholder">
        <!-- Insert interactive map here -->
        <p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116901.49981577344!2d-16.027979032177214!3d23.705555724790894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc2248393aa06243%3A0x2572dbf2ee5f0172!2sDakhla%2073000!5e0!3m2!1sfr!2sma!4v1732899759605!5m2!1sfr!2sma" width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </p>
      </div>
    </section>

    <!-- User Reviews Section -->
    <section class="reviews">
      <h2>What Visitors Say</h2>
      <div class="review">
        <p>
          "An unforgettable experience! Marrakech is vibrant and full of life!"
        </p>
        <span>- Sarah J.</span>
      </div>
      <div class="review">
        <p>"Loved the historical sites and the bustling markets!"</p>
        <span>- Ahmed K.</span>
      </div>
      <button>Read More Reviews</button>
    </section>

    <script src="<?= base_url('assets/script/script.js'); ?>"  defer></script>
    <script src="<?= base_url('assets/script/ville-script.js'); ?>"  defer></script>


    <script>
      document.addEventListener("DOMContentLoaded", function () {
        let kech = document.getElementById("home");
        kech.addEventListener("click", function () {
          window.location.assign("home1");
        });
      });

      document.addEventListener("DOMContentLoaded", function () {
        let res = document.getElementById("reser");
        res.addEventListener("click", function () {
          window.location.assign("reservation");
        });
      });
    </script>
  </body>
</html>
