<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Confirmation message container */
.confirmation {
  max-width: 600px;
  margin: 50px auto;
  background: #ffffff;
  border: 2px solid #5a9;
  border-radius: 10px;
  padding: 30px;
  text-align: center;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  font-family: 'Arial', sans-serif;
}

/* Title */
.confirmation h2 {
  color: #478a76;
  font-size: 24px;
  margin-bottom: 20px;
}

/* General text */
.confirmation p {
  font-size: 16px;
  color: #333;
  line-height: 1.5;
  margin-bottom: 10px;
}

/* Highlighted details */
.confirmation strong {
  color: #5a9;
  font-weight: bold;
}

/* Button */
.confirmation .btn {
  display: inline-block;
  margin-top: 20px;
  padding: 10px 20px;
  background-color: #5a9;
  color: #ffffff;
  text-decoration: none;
  border-radius: 5px;
  font-size: 16px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.confirmation .btn:hover {
  background-color: #478a76;
}

    </style>
</head>
<body>
<div class="confirmation">
    <h2>thanks for your rservation, <?= esc($userName) ?> ! 🎉</h2>
    <p>your reservation for <strong><?= esc($destination) ?></strong> is confirmed.</p>
    <p>reservation  number: <strong><?= esc($reservationNumber) ?></strong></p>
    <p>Date : <strong><?= esc($departureDate) ?></strong></p>
    <p>Number of persons : <strong><?= esc($nombrePersonnes) ?></strong></p>
    <p>
        have a good day !
    </p>
    <a href="<?= base_url('home1') ?>" class="btn">Back to home page</a>
</div>

    
</body>
</html>