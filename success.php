<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page success</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

	<nav>
      <div id ="haut">
      	<div class="submenu">
            <div class="menu-accueil">  <a href="../siteweb.htm"> <h5>  Accueil </h5> </a>  </div>
             <div class="menu-presentation"> <a href="MonCv.html"> <h5>  MON CV  </h5></a> </div>	
			   <div class="menu-contact">  <a href="contact.htm"> <h5> Contact </h5> </a> </div>
			   <div class="menu-travaux">  <a href="travaux.html"> <h5> PROJETS </h5> </a> </div>
		 </div>
		</div>
	</nav>

		<label for="customRange3" class="form-label">Etape de création : </label>
<input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">

<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>

<div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Vous devez accepter les termes et conditions
      </label>
      <div class="invalid-feedback">
        Vous êtes obligé d'accepter les conditions avant de continuer
      </div>
    </div>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>

		<div>
  <label for="formFileLg" class="form-label"> Importer le ticket :</label>
  <input class="form-control form-control-lg" id="formFileLg" type="file">
</div>

				    <div> <img src="new_user.png" class="img-fluid"></div>



</body>
</html>