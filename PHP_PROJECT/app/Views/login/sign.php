<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/sign.css'); ?>" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
</head>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Touriste</title>
</head>
<body>
<?php if (session()->getFlashdata('error')): ?>
    <div class="error-message" style="color: red; margin-bottom: 1rem;">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

    <div class="body">
    <div class="form">
    <h1>please enter your informations</h1>
    <p>fill in all fields(all fields are )required</p>
    <div class="formCont">
    <form action="<?= site_url('TouristeController/store') ?>" method="post">
        <label for="nom">First Name:</label>
        <input type="text" name="nom" id="nom" placeholder="enter your first name" required><br>

        <label for="prenom">Least Name:</label>
        <input type="text" name="prenom" id="prenom" placeholder="enter your least name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="enter your email" required><br>

        <label for="sexe">Sexe:</label>
        <select name="sexe" id="sexe" required>
            <option value="Homme">Male</option>
            <option value="Femme">Female</option>
        </select><br>

        <label for="telephone">Phone Number :</label>
        <input type="tel" name="telephone" id="telephone" placeholder="enter your phone number" required><br>

        <label for="ville">City:</label>
        <input type="text" name="ville" id="ville" placeholder="enter your city" required><br>

        <label for="pays">Country:</label>
        <input type="text" name="pays" id="pays" placeholder="enter your Country" required><br>

        <label for="nationalite">Nationality:</label>
        <input type="text" name="nationalite" id="nationalite" placeholder="enter your Notionality" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="enter your password" required><br>


        <label for="preferences">Preferences:</label>
        <textarea name="preferences" id="preferences" placeholder="enter your Preferences" ></textarea><br>
<div class="btn">
        <button type="submit">submit</button>
          <button type="reset">reset</button>
        <button id="reser" type="submit">back home</button>
        </div>
    </form>
</div>
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
