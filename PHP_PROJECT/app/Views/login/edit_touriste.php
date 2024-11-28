<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v4 by Colorlib</title>
<link rel="stylesheet" href="css/edit_trs.css"/>
</head>
<body class="form-v4">
	<div class="page-content">
		<div class="form-v4-content">
			<div class="form-left">
				<h2>INFOMATION</h2>
                <p class="text-1">Modifiez les informations de votre profil ci-dessous. Assurez-vous que tous les champs sont remplis correctement pour garantir que vos informations soient mises à jour avec succès. Après avoir effectué les modifications souhaitées, cliquez sur "Mettre à jour" pour enregistrer vos changements.</p>
<p class="text-2"><span>Instructions :</span> Veuillez vérifier que votre nom, prénom, numéro de téléphone et adresse e-mail sont à jour. Si vous souhaitez modifier votre mot de passe, il vous suffira de le faire dans la section appropriée. Une fois toutes les modifications terminées, cliquez sur le bouton de mise à jour pour finaliser.</p>
<div class="form-left-last">


                <form action="<?= base_url('touriste') ?>" method="get">
        <input type="submit" name="account" class="account" value="Retour">
    </form>
				</div>
			</div>
            <form class="form-detail" method="post" action="<?= base_url('update_touriste') ?>">
    <h2>Update Touriste</h2>

    
    <input type="hidden" name="touriste_id" value="<?= $touriste['touriste_id'] ?>">

    <div class="form-row">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name" class="input-text" value="<?= $touriste['nom'] ?>" >
    </div>

    <div class="form-row">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name" class="input-text" value="<?= $touriste['prenom'] ?>" >
    </div>

    <div class="form-row">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" class="input-text" value="<?= $touriste['telephone'] ?>" >
    </div>

    <div class="form-row">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="select" >
            <option value="Male" <?= $touriste['sexe'] == 'Male' ? 'selected' : '' ?>>Male</option>
            <option value="Female" <?= $touriste['sexe'] == 'Female' ? 'selected' : '' ?>>Female</option>
        </select>
    </div>

    <div class="form-row">
        <label for="city">City</label>
        <input type="text" name="city" id="city" class="input-text" value="<?= $touriste['ville'] ?>" >
    </div>

    <div class="form-row">
        <label for="pays">Pays</label>
        <input type="text" name="pays" id="pays" class="input-text" value="<?= $touriste['pays'] ?>" >
    </div>

    <div class="form-row">
        <label for="your_email">Email</label>
        <input type="email" name="your_email" id="your_email" class="input-text" value="<?= $touriste['email'] ?>" >
    </div>

    <div class="form-row-last">
        <input type="submit" name="register" class="register" value="Update">
    </div>
</form>

</div>
	</div>

</body>
</html>