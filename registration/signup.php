<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup page</title>
    <link rel="stylesheet" href="signup.css">
  </head>
  <body>
    <div class="body">
        <div class="heading1">
        <h1>Create an Account</h1>
      </div>

      <div class="form-lay">
        <form action="../backend/registration_backend/signup.php" method="post">
          <div class="form-controll">
            <label class="label-lay" for="name">Name</label>
            <input
              type="text"
              name="name"
              id="name"
              placeholder="Name"
              required
              class="input-lay"
            />
          </div>
          <div class="form-controll">
            <label class="label-lay label" for="contact">Contact <span class="span-lay">DISCORD</span></label>
            <input
              type="text"
              name="contact"
              id="contact"
              placeholder="contact"
              required
              class="input-lay"
            />
          </div>
          <div class="form-controll">
            <label class="label-lay" for="email">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Email"
              required
              class="input-lay"
            />
          </div>
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
            <a class="link-lay" href="login.php">Login using your account</a>
          </div>

          <div class="btn-lay">
            <input class="btn-log" type="submit" value="Create" name="submit" />
            <input class="btn-cancel" type="reset" name="cancel" value="Cancel" />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
