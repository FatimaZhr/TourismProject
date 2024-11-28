<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v4 by Colorlib</title>
<link rel="stylesheet" href="/css/edit_trs.css"/>
</head>
<body class="form-v4">
	<div class="page-content">
		<div class="form-v4-content">
			<div class="form-left">
				<h2>INFOMATION</h2>
                <p class="text-1">Modifiez les informations de votre profil ci-dessous. Assurez-vous que tous les champs sont remplis correctement pour garantir que vos informations soient mises à jour avec succès. Après avoir effectué les modifications souhaitées, cliquez sur "Mettre à jour" pour enregistrer vos changements.</p>
<p class="text-2"><span>Instructions :</span> Veuillez vérifier que votre nom, prénom, numéro de télétouriste_id et date_reservatione e-mail sont à jour. Si vous souhaitez modifier votre mot de passe, il vous suffira de le faire dans la section appropriée. Une fois toutes les modifications terminées, cliquez sur le bouton de mise à jour pour finaliser.</p>
<div class="form-left-last">


                <form action="<?= base_url('reservation') ?>" method="get">
        <input type="submit" name="account" class="account" value="Retour">
    </form>
				</div>
			</div>
            <form class="form-detail" method="post" action="<?= base_url('update_reservation') ?>">
    <h2>Update reservation</h2>

    <!-- Champs cachés pour l'ID -->
    <input type="hidden" name="id" value="<?= $reservation['id'] ?>">

    <div class="form-row">
        <label for="name_rese">Name of reservation</label>
        <input type="text" name="name_rese" id="name_rese" class="input-text" value="<?= $reservation['titre_reservation'] ?>" >
    </div>


    <div class="form-row form-row-1">
    <label for="touriste_id">Touriste</label>
    <select class="select" name="touriste_id" id="touriste_id" class="input-text">
        <?php foreach ($touristes as $touriste): ?>
            <option 
                value="<?= $touriste['touriste_id']; ?>" 
                <?= $touriste['touriste_id'] == $reservation['touriste_id'] ? 'selected' : ''; ?>>
                <?= $touriste['nom'] . ' ' . $touriste['prenom']; ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>



    <div class="form-row">
        <label for="date_reservation">Date of reservation</label> 
        <input type="text" name="date_reservation" id="date_reservation" class="input-text" value="<?= $reservation['date_reservation'] ?>" >
    </div>


    <div class="form-row">
        <label for="nombre_personnes">Numbres of persones</label>
        <input type="text" name="nombre_personnes" id="nombre_personnes" class="input-text" value="<?= $reservation['nombre_personnes'] ?>" >
    </div>

    <div class="form-row">
        <label for="">Total price</label>
        <input type="text" name="" id="prix_total" class="input-text" value="<?= $reservation['prix_total'] ?>" >
    </div>

    <div class="form-row">
        <label for="attraction_name">Statut</label>
        <input type="text" name="attraction_name" id="attraction_name" class="input-text" value="<?= $reservation['statut'] ?>" >
    </div>

    <div class="form-row">
        <label for="attraction_name">Attraction</label>
        <input type="text" name="attraction_id" id="attraction_id" class="input-text" value="<?= $reservation['attraction_id'] ?>" >
    </div>

   


    <div class="form-row-last">
        <input type="submit" name="register" class="register" value="Update">
    </div>
</form>

</div>
	</div>

</body>
</html>