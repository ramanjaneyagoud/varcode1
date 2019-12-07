<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Brand Dashboard</title>
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <style>
        .logo{margin:20px auto;}
        .logo img{max-width:300px; margin:0 auto;}
        .login_block { max-width: 350px; width: 100%; margin: 150px auto; background: #FFFFFF 0% 0% no-repeat padding-box; border: 1px solid #E2E2E2; border-radius: 5px;    padding: 28px 50px 50px;}
        .login_head{letter-spacing: 0.27px; color: #000000DE; font-family: 'Rubik', sans-serif; font-size: 18px;text-align:center;}
        form.form-signin input { margin-bottom: 10px;font-size: 12px;border-radius: 2px;padding: 10px 15px;letter-spacing: 0.5px;}
        .submit{background:#FD6A80; color:#fff;}
        @media(max-width: 767px){
            .logo img {max-width: 250px;}
            .login_block{margin: 100px auto;padding: 25px 20px 50px;}
        }
    </style>
  </head>
  <body>
  <div class="container">
    <header>
        <div class="logo text-center">
            <img src="https://cdn2.stylecraze.com/wp-content/themes/buddyboss-child/images/sc-logo.png" class="img-fluid logo" alt="stylecraze">
        </div>
    </header>
    <section class="login_block">
        <h2 class="my-3 login_head">Brand Dashboard</h2>
        <form class="form-signin">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <button class="btn btn-block submit" type="submit">Log in</button>
        </form>
    </section>
    </div>
  </body>
</html>
