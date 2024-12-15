<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>casa Blanca - City Attractions</title>

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

        src="<?= base_url('assets/images/mosquée hassan II.jpg'); ?>" 
        alt="Marrakech"
        class="banner-image"
      />
      <div class="header-text">
        <h1>Casa Blanca</h1>
        <p>Discover the beauty, history, and vibrant life of casa blanca.</p>
        <div class="btn">
          <button id='reser'>reservation</button>
          <button id="home">back to cities</button>
        </div>
      </div>
    </header>

    <div class="h1"><h1>Top Atractive places in Casa blanca</h1></div>

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
            <img src="<?= base_url('assets/images/mosquée hassan II.jpg'); ?>"  style="width: 100%" />
            <div class="text">Caption Text</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="<?= base_url('assets/images/casa1.webp'); ?>" style="width: 100%" />
            <div class="text">Caption Two</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="<?= base_url('assets/images/kotubai.jpg'); ?>" style="width: 100%" />
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
  <h2>Top Activities in Casa Blanca</h2>
  <div class="activity-grid">
    <!-- Activity 1 -->
    <div class="activity-card">
      <img src="<?= base_url('assets/images/mole.webp'); ?>" alt="Activity 1" />
      <div class="activity-info">
        <h3>Activity 1 <strong>from $35.9</strong></h3>
        <p>Explore the stunning Morocco Mall</p>
        <button class="activity-btn" data-target="activity-details-1">Learn More</button>
      </div>
    </div>

    <!-- Activity 2 -->
    <div class="activity-card">
      <img src="<?= base_url('assets/images/casa2.webp'); ?>" alt="Activity 2" />
      <div class="activity-info">
      <h3>Activity 2 <strong>from $40</strong></h3>
      <p>Discover the luxury and unique beverages.</p>
        <button class="activity-btn" data-target="activity-details-2">Learn More</button>
      </div>
    </div>

    <!-- Activity 3 -->
    <div class="activity-card">
      <img src="<?= base_url('assets/images/casa3.webp'); ?>" alt="Activity 3" />
      <div class="activity-info">
      <h3>Activity 3 <strong>from $20</strong></h3>
      <p>Visit the Parc of la Ligue Arabe</p>
        <button class="activity-btn" data-target="activity-details-3">Learn More</button>
      </div>
    </div>
  </div>
</section>

<!-- Overlays for Activity Details -->
<div id="activity-details-1" class="details-overlay">
  <div class="details-content">
    <h3>Morocco Mall</h3>
    <p>Located at the end of La Corniche area is Morocco Mall, the biggest shopping centre in Africa. A modern hub, Morocco Mall offers enough to entertain anyone, whether you’re with the whole family or travelling as a couple, for the whole day. On top of the extensive range of shops, offering anything from H&M to Dior, and a vast range of food options, Morocco Mall also hosts an indoor aquarium, complete with a small shark, a fountain display outside and even indoor ice skating and an indoor fairground. There really is something for everyone. For a taste of old Morocco, there’s even an indoor souk (market), but the Old Medina is the place to go in Casablanca for a more traditional experience.</p>
    <button onclick="hideDetails('activity-details-1')">Close</button>
  </div>
</div>

<div id="activity-details-2" class="details-overlay">
  <div class="details-content">
    <h3>Activity 2 Details</h3>
    <p>For a taste of luxury and unique beverages, head to the Sky 28. The bar offers guests the chance to sit in a tasteful atmosphere, overlooking the city and drinking a pricey yet worthy cocktail. If you’re wondering what to do in Casablanca at night, this is a good choice, as you can admire the illuminated city and escape the hustle and bustle of the Old Medina. Live music creates a chilled and comfortable atmosphere.</p>
    <button onclick="hideDetails('activity-details-2')">Close</button>
  </div>
</div>

<div id="activity-details-3" class="details-overlay">
  <div class="details-content">
    <h3>Parc of la Ligue Arabe</h3>
    <p>South of Place Mohammed V lies the Parc de la Ligue Arabe. Designed in 1918, this park, complete with a palm-tree-lined avenue, is Casablanca’s biggest open space. Perfect for games and walks, and offering a choice of small cafes, the Arab League Park gives you the chance to relax and admire the African flora, or venture to the Cathédrale de Sacré Coeur, the neglected place of worship on the edge of the park that hints at the art deco past of Casablanca. Book a private tour of the city to explore the park with an expert local guide.</p>
    <button onclick="hideDetails('activity-details-3')">Close</button>
  </div>
</div>



    <!-- Interactive Map Section -->
    <section class="city-map">
      <h2>Explore on the Map</h2>
      <div class="map-placeholder">
        <!-- Insert interactive map here -->
        <p>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212752.96934816532!2d-7.751807671018463!3d33.57246436734522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd4778aa113b%3A0xb06c1d84f310fd3!2sCasablanca!5e0!3m2!1sfr!2sma!4v1732899501891!5m2!1sfr!2sma"
           width="800"
            height="300"
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"></iframe>

         
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
