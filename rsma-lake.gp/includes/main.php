<body class="bg-light">
    
    <div class="container">
      <div class="py-5 text-center">
        <h2>Formulaire-lake</h2>
      </div>
     <div class="container">
         <div class="row-3">
             <dic class="col-md-4">
             <form method="POST" action="traitement.php" class="needs-validation" novalidate>        
      <form>
   <div class="form-group">
   <select class="custom-select" name="civFrm"  maxlength="2">
            <option selected value="">civilité</option>
            <option value="1">Mr</option>
            <option value="2">Mle</option>
            <option value="3">Mme</option>
        </select>
   </div>
      
              <div class="form-group">
        <label for="exampleInputname">Nom</label>
        <input name="nom" type="text" class="form-control" id="" aria-describedby="nameHelp" required maxlength="100" minlength="3">
        <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Indiquer votre NOM!!!</div>
     
      
      </div>
    
      <div class="form-group">
        <label for="exampleInputprenom">Prénom</label>
       <input  name="prenom" type="text" class="form-control" id="" aria-describedby="prenomlHelp" required maxlength="55" minlength="4">
       <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Indiquer votre Prénom!!!</div>
      
      </div>
      
      <div class="form-group">
        <label for="Inputtel">Téléphone</label>
        <input name="tel" type="text" class="form-control " id="" aria-describedby="tel" required  maxlength="15">
        <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Indiquer votre Téléphone!!!</div>
    <small id="" class="form-text text-muted">.</small>
      </div>
    
      <div class="form-group">
        <label for="exampleInputEmail1"> Adresse Email</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required maxlength="160" minlength=4>
        <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Indiquer votre Email!!!</div>
      
      </div>
    
      <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe </label>
        <input name="motdepasse"type="password" class="form-control" id="password" required maxlength="20" minlength="4">
        <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Indiquer votre Mot de passe!!!</div>

      </div>
      
    
      <div class="form-group">
        <label for="Inputadress">Adresse</label>
        <input name="adresse" type="text" class="form-control" id="" aria-describedby="adressHelp" required maxlength="60" minlength="3">
        <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Indiquer votre Adresse!!!</div>
    
      </div>
      
       <div class="form-group">
        <label for="Inputadress2"> Complémentaire</label>
        <input name="adresse2" type="text" class="form-control " id="" aria-describedby="adressHelp" >
        <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Indiquer votre adresse!!!</div>
      </div>
    
      <div class="form-group">
        <label for="Inputcodepostal"> Code postal</label>
        <input name="codepostal" type="text" class="form-control " id="" aria-describedby="codepostalHelp" required maxlength="5">
        <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Indiquer votre Code postal!!!</div>
      </div>
      
      <div class="form-group">
        <label for="Inputville">Ville</label>
        <input name="ville" type="text" class="form-control" id="" aria-describedby="adressHelp" required maxlength="40" minlength=4>
        <div class="valid-feedback">Looks good!</div>
      <div class="invalid-feedback">Indiquer votre Ville!!!</div>
  
      </div>
      
      <div class="form-group">
   <select class="custom-select" maxlength="60">
            <option selected value="">pays</option>
            <option value="1">Guadeloupe</option>
            <option value="2">Martinique</option>
            <option value="3">La réunion</option>
            <option value="3">France</option>
        </select>
   </div>
    
      <div class="form-group form-check">
        <input name="cochez" type="checkbox" class="form-check-input" id="exampleCheck1" >
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
             </dic>
         </div>
     </div>