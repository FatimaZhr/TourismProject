<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="stylesheet" href="<?= base_url('assets/css/reseStyle.css'); ?>">
</head>
<body>
   
  <div class="header">
    <div class="headcont">
      <h1>Book Your Experience</h1>
      <section class="reservation">
        <div class="formCont">
        <form action="<?= base_url('/reservation/create') ?>" method="POST"> 
        <label for="city">Select City</label><br>
    <select id="city" name="attraction_id" required>
        <option value="">Select City</option> <!-- Optional default option -->
        <?php foreach ($cities as $city): ?>
            <option value="<?= $city['id'] ?>"><?= $city['nom'] ?></option>
        <?php endforeach; ?>
    </select><br>

    <!-- Event Dropdown (Evenements Table) -->
    <label for="event">Select Event</label><br>
    <select id="event" name="event_id">
        <?php foreach ($events as $event): ?>
            <option value="<?= $event['id'] ?>"><?= $event['nom'] ?> <?= $event['lieu'] ?> (<?= $event['date'] ?>)</option>
        <?php endforeach; ?>
    </select><br>
    <!-- Guide Dropdown (GuideTouristique Table) -->
    <label for="guide">Select Guide</label><br>
    <select id="guide" name="guide_id">
        <?php foreach ($guides as $guide): ?>
            <option value="<?= $guide['id_guide'] ?>"><?= $guide['nom'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <!-- Number of People -->
    <label for="num_people">Number of People</label><br>
    <input type="number" id="num_people" name="nombre_personnes" min="1" required><br>
    <!-- Reservation Date -->
    <label for="reservation_date">Reservation Date</label><br>
    <input type="date" id="reservation_date" name="date_reservation" required><br>
<div class="btn">
    <button type="submit">Reserve Now</button>
    <button type="reset">Restart</button>
    <button id="reser" type="submit">back home</button>

    </div>
</form>
        </div>
      </section>
    </div>
   
</div>
  <script src="<?= base_url('assets/script/script.js'); ?>"></script>
  <script>
     document.addEventListener("DOMContentLoaded", function () {
        let res = document.getElementById("reser");
        res.addEventListener("click", function () {
          window.location.assign("home1");
        });
      });
</script>
</body>
        </html>