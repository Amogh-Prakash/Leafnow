

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="agrostyle.css" rel="stylesheet" >
    <title>Farmer SignUp</title>
  </head>
  <body>
      <h1 id="signuphead">Sign Up </h1>

  <form action = "signupentry.php" method = "POST">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="fname" name="fname" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">User ID</label>
    <input type="text" class="form-control" id="fid" name="fid" aria-describedby="emailHelp" required>
    <p style = "opacity:70%">Remember this for further login</p>
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
  <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="femail" name="femail" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="faddr" name="faddr">
  </div>
  <div class="mb-3">
  <label for="phone" class="form-label">Contact.No </label>
    <input type="number" class="form-control" id="fphone" name="fphone" aria-describedby="emailHelp" required>
    <div id="" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="fpasswd" name="fpasswd" required>
  </div>
  <button type="submit" id="btnfarmer" class="btn btn-primary">Submit</button>
  </div>
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>


