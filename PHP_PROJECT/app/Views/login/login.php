<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-image: url(../images/kotubai.jpg);
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
  height: 150vh;
  filter: brightness(0.9);
  opacity: 0.5px;
  position: relative;
        }
        .form{
   background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
  width: 500px;
  padding: 2rem;
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  z-index: 10; /* Higher z-index to ensure it appears on top */
  position: fixed; /* Enables placement over the header */
  top: 40%; /* Adjust this to move the card vertically */
  left: 50%; /* Center horizontally */
  transform: translate(-50%, -50%); /* Centers the card */
  border-radius: 10px; /* Optional: adds rounded corners */
  margin-bottom;        }

        button {
  position: relative;
  width: 150px;
  padding: 0.5px;
  background: transparent;
  border-radius: 10px;
  border: 2px solid #043c4a;
  outline: 2px solid #cf883b;
  outline-offset: -2px;
  font-size: 1rem;
  color: white;
  background-color: #cf883b;
  cursor: pointer;
  transition: outline-offset 200ms ease;
  margin:1rem;
  padding: 0.75rem;
}
button:hover {
  color: #e0ffff;
  outline-offset: 3px;
  background-color: #043c4a;
}
button:active {
  transform: scale(0.95);
}
label {
  color: rgb(225, 159, 17);
  padding: 0.75rem;
}

   input {
    background-color: purple;
    color: white;
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    box-sizing: border-box;
    margin:1rem;

}
h2{
 text-align: center;
}
.btn{
    text-align: center;
}
    </style>
</head>
<body>
    
<div class="form">
<h2>Login</h2>
<form method="post" action="<?= site_url('auth/login'); ?>">
    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>
<div class="btn">
    <button type="submit">Login</button>
    <form action=<?= base_url('home/home1'); ?>>
    <button id="home">Back to home</button>
    </form>
    </div>
<a href="http://">Forget Password?</a>
    </div>
</form>


</body>
<script>
     document.addEventListener("DOMContentLoaded", function () {
        let kech = document.getElementById("home");
        kech.addEventListener("click", function () {
          window.location.assign("home1");
        });
      });
</script>

</html>
