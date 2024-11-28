<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password - Secure Account Access</title>
    <link
      rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"  />
    <link rel="stylesheet" href="css/gorgot.css">
    <script>
        // Fonction pour vérifier si la checkbox est cochée
        function validateForm(event) {
            const rememberCheckbox = document.getElementById("remember");
            if (!rememberCheckbox.checked) {
                // Empêche l'envoi du formulaire
                event.preventDefault();
                alert("Veuillez cocher la case 'Remember me' avant de continuer.");
            }
        }
    </script>



</head>
<body>
<div class="container">
    <form action="" onsubmit="validateForm(event)">
        <h2>Forget password</h2>
        <br>
        <br>
        <div class="input-text">
            <input type="email" placeholder="Enter your Email" required>
        </div>
        <div class="forget">
            <label for="remember">
                <input type="checkbox" id="remember">
                <p>Remember me </p>
            </label>
        </div>
        <button type="submit">Send Email</button>
        <div class="register">
            <p>Don't have an account? <a href="<?= base_url('sign') ?>">Sign up here</a></p>
        </div>
    </form>
</div>

</body>
</html>
