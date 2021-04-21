<!doctype html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
            crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title></title>
    </head>
    <body>
            <!-- Content here -->
            <header>
            <img src="img/logo hygitech.png" alt="logo">
<div class="container">
<div class="row">
<div class="col-12">
<form  class="needs-validation" novalidate>        
  <form>
          <div class="form-group">
    <label for="exampleInputname">Nom</label>
    <input name="nom" type="text" class="form-control" id="" aria-describedby="nameHelp" required maxlength="1000" minlength="1">
    <div class="valid-feedback">Looks good!</div>
  <div class="invalid-feedback">Indiquer votre NOM!!!</div>
    <small id="" class="form-text text-muted">Écrire son nom </small>
  
  </div>

  <div class="form-group">
    <label for="exampleInputprenom">Prénom</label>
   <input  name="prenom" type="text" class="form-control" id="" aria-describedby="prenomlHelp" required maxlength="1984" minlength="4">
   <div class="valid-feedback">Looks good!</div>
  <div class="invalid-feedback">Indiquer votre Prénom!!!</div>
    <small id="" class="form-text text-muted">Écrire son prénom.</small>
    
  </div>
  

  <div class="form-group">
    <label for="exampleInputEmail1"> Adresse Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required maxlength="5977"minelength="7">
    <div class="valid-feedback">Looks good!</div>
  <div class="invalid-feedback">Indiquer votre Email!!!</div>
    <small id="emailHelp" class="form-text text-muted">Renseigner votre Email.</small>
  </div>

  <div class="form-group">
    <label for="Inputtel">Téléphone</label>
    <input name="tel" type="text" class="form-control " id="" aria-describedby="tel" required>
    <div class="valid-feedback">Looks good!</div>
  <div class="invalid-feedback">Indiquer votre Téléphone!!!</div>
<small id="" class="form-text text-muted">.</small>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</div>
</div>
</div>

<footer>
  <p> Aéroport Sud le Raizet - 97139 Les Abymes
Tél. : 0590 68 51 04 • Fax : 0590 68 44 10</p>  
    </footer>
</div>
                              
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    </body>
</html>

