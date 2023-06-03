<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="body">
      <div class="heading1">
        <h1>LOGIN</h1>
      </div>

      <div class="form-lay">
        <form action="../backend/registration_backend/login.php" method="post">
          <div class="form-controll">
            <label class="label-lay" for="username">Username</label>
            <input
              type="text"
              name="username"
              id="username"
              placeholder="Username"
              required
              class="input-lay"
            />
          </div>
          <div class="form-controll">
            <label class="label-lay" for="password">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Password"
              required
              class="input-lay"
            />
          </div>
          <div>
            <a class="link-lay" href="signup.php">Create New Account</a>
          </div>

          <div class="btn-lay">
            <input class="btn-log" type="submit" value="Login" name="submit" />
            <input class="btn-cancel" type="reset" name="cancel" value="Cancel" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
