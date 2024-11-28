<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v4 by Colorlib</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v4">
	<div class="page-content">
		<div class="form-v4-content">
			<div class="form-left">
				<h2>INFOMATION</h2>
                <p class="text-1">Modifiez les informations de votre profil ci-dessous. Assurez-vous que tous les champs sont remplis correctement pour garantir que vos informations soient mises à jour avec succès. Après avoir effectué les modifications souhaitées, cliquez sur "Mettre à jour" pour enregistrer vos changements.</p>
<p class="text-2"><span>Instructions :</span> Veuillez vérifier que votre nom, prénom, numéro de téléDate et adresse e-mail sont à jour. Si vous souhaitez modifier votre mot de passe, il vous suffira de le faire dans la section appropriée. Une fois toutes les modifications terminées, cliquez sur le bouton de mise à jour pour finaliser.</p>
<div class="form-left-last">


                <form action="<?= base_url('event') ?>" method="get">
        <input type="submit" name="account" class="account" value="Retour">
    </form>
				</div>
			</div>
            <form class="form-detail" method="post" action="<?= base_url('update_event') ?>">
    <h2>Update event</h2>

    <!-- Champs cachés pour l'ID -->
    <input type="hidden" name="id" value="<?= $event['id'] ?>">

    <div class="form-row">
        <label for="name"> Name</label>
        <input type="text" name="name" id="name" class="input-text" value="<?= $event['nom'] ?>" >
    </div>

    

    <div class="form-row">
        <label for="Date">Date</label>
        <input type="text" name="Date" id="Date" class="input-text" value="<?= $event['date'] ?>" >
    </div>

    

    <div class="form-row">
        <label for="lieu">lieu</label>
        <input type="text" name="lieu" id="lieu" class="input-text" value="<?= $event['lieu'] ?>" >
    </div>

    <div class="form-row">
        <label for="Description">Description</label>
        <input type="text" name="Description" id="Description" class="input-text" value="<?= $event['description'] ?>" >
    </div>
    <div class="form-row form-row-1">
            
            <label for="organisateur">Organisateur :</label>
    <select  class="select" name="organisateur" id="organisateur" class="input-select">
        <option value="">Sélectionnez un organisateur</option>
        <?php foreach ($guides as $guide): ?>
            <option value="<?= $guide['id_guide']; ?>"
                <?= $event['organisateur'] == $guide['id_guide'] ? 'selected' : ''; ?>>
                <?= $guide['nom'] ?>
            </option>
        <?php endforeach; ?>
    </select>
        </div>
        
    
    <div class="form-row">
        <label for="organisateur">Capacite</label>
        <input type="text" name="Capacite" id="Capacite" class="input-text" value="<?= $event['capacite'] ?>" >
    </div>

<div class="form-row">
        <label for="organisateur">Status</label>
        <input type="text" name="status" id="status" class="input-text" value="<?= $event['status'] ?>" >
    </div>
    <div class="form-row-last">
        <input type="submit" name="register" class="register" value="Update">
    </div>
</form>

</div>
	</div>

</body>
</html>