<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v4 by Colorlib</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link rel="stylesheet" href="css/edit_trs.css"/>
</head>
<body class="form-v4">
	<div class="page-content">
		<div class="form-v4-content">
			<div class="form-left">
				<h2>INFOMATION</h2>
				<p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et molestie ac feugiat sed. Diam volutpat commodo.</p>
				<p class="text-2"><span>Eu ultrices:</span> Vitae auctor eu augue ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel.</p>
				<div class="form-left-last">


                <form action="<?= base_url('login') ?>" method="get">
        <input type="submit" name="account" class="account" value="Sign in">
    </form>
				</div>
			</div>
            <form class="form-detail" method="post" action="<?= base_url('update_touriste') ?>">
            <h2>Update Touriste</h2>

            <input type="hidden" name="touriste_id" value="<?= $touriste['touriste_id'] ?>">

            <div class="form-row">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="input-text" value="<?= $touriste['nom'] ?>" required>
            </div>

            <div class="form-row">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="input-text" value="<?= $touriste['prenom'] ?>" required>
            </div>

            <div class="form-row">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="input-text" value="<?= $touriste['telephone'] ?>" required>
            </div>

            <div class="form-row">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="select" required>
                    <option value="Male" <?= $touriste['sexe'] == 'Male' ? 'selected' : '' ?>>Male</option>
                    <option value="Female" <?= $touriste['sexe'] == 'Female' ? 'selected' : '' ?>>Female</option>
                </select>
            </div>

            <div class="form-row">
                <label for="city">City</label>
                <input type="text" name="city" id="city" class="input-text" value="<?= $touriste['ville'] ?>" required>
            </div>

            <div class="form-row">
                <label for="pays">Pays</label>
                <input type="text" name="pays" id="pays" class="input-text" value="<?= $touriste['pays'] ?>" required>
            </div>

            <div class="form-row">
                <label for="your_email">Email</label>
                <input type="email" name="your_email" id="your_email" class="input-text" value="<?= $touriste['email'] ?>" required>
            </div>

            <div class="form-row-last">
                <input type="submit" name="register" class="register" value="Update">
            </div>
        </form>
</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	
</body>
</html>