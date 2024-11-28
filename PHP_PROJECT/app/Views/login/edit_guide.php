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
<p class="text-2"><span>Instructions :</span> Veuillez vérifier que votre nom, prénom, numéro de téléphone et adress e-mail sont à jour. Si vous souhaitez modifier votre mot de passe, il vous suffira de le faire dans la section appropriée. Une fois toutes les modifications terminées, cliquez sur le bouton de mise à jour pour finaliser.</p>
<div class="form-left-last">


                <form action="<?= base_url('guide') ?>" method="get">
        <input type="submit" name="account" class="account" value="Retour">
    </form>
				</div>
			</div>
            <form class="form-detail" method="post" action="<?= base_url('update_guide') ?>">
    <h2>Update guide</h2>


    <input type="hidden" name="id_guide" value="<?= $guide['id_guide'] ?>">

    <div class="form-row">
        <label for="full_name">Full Name</label>
        <input type="text" name="full_name" id="full_name" class="input-text" value="<?= $guide['nom'] ?>" >
    </div>


    <div class="form-row">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" class="input-text" value="<?= $guide['telephone'] ?>" >
    </div>

    <div class="form-row">
        <label for="adress">adress</label> 
        <input type="text" name="adress" id="adress" class="input-text" value="<?= $guide['adresse'] ?>" >
    </div>


    <div class="form-row">
        <label for="city">City</label>
        <input type="text" name="city" id="city" class="input-text" value="<?= $guide['ville'] ?>" >
    </div>

    <div class="form-row">
        <label for="pays">Country</label>
        <input type="text" name="pays" id="pays" class="input-text" value="<?= $guide['pays'] ?>" >
    </div>

    <div class="form-row">
        <label for="your_email">Email</label>
        <input type="email" name="your_email" id="your_email" class="input-text" value="<?= $guide['email'] ?>" >
    </div>

    <div class="form-row-last">
        <input type="submit" name="register" class="register" value="Update">
    </div>
</form>

</div>
	</div>

</body>
</html>