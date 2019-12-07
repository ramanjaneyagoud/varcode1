<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reward store</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css?hgjg">
  <script type="text/javascript" src="script.js"></script>

</head>

<body>
  <div class="container">

  <div class="review_profile">
    <div class="author_details text-center mx-auto">
      <img src="https://via.placeholder.com/94" alt="Profile Image" class="rounded-circle d-block author_pic mx-auto">
      <h3 class="author_name text-uppercase my-2 font-weight-bold">Rachel Garrett</h3>
      <p class="author_location font-weight-light">Hyderabad, India</p>
      <a href="#" class="d-block edit_profile my-2 font-weight-light">Edit Profile</a>
    </div>
    <p class="my-3 author_desc">Aenean sed lorem est. Sed quis neque ut nibh suscipit imperdiet ac non augue. Aenean ornare sit amet lectus non tristique. Nunc ut volutpat lectus. Nulla velit augue, pulvinar sed nisi sit amet, eleifend fermentum est. Quisque nibh justo, congue ut erat at, aliquet efficitur purus. Integer venenatis odio vitae orci efficitur mollis. Donec ultrices diam dictum dignissim vestibulum. Proin eleifend nunc nunc. Sed non arcu eget lorem viverra sodales.</p>

    <div class="beauty_profile">
      <div class="d-flex justify-content-between">
        <div class="beauty">
          <p><b>Beauty Profile</b></p>
        </div>
        <div class="edit">
          <p><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></p>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-sm-4">
            <p class="skintone">Skin Tone: <span>Very fair</span></p>
        </div>
        <div class="col-6 col-sm-4">
            <p class="skintype">Skin Type: <span>Normal</span></p>
        </div>
        <div class="col-6 col-sm-4">
            <p class="eyecolor">Eye Color: <span>Blue</span></p>
        </div>
        <div class="col-6 col-sm-4">
            <p class="haircolor">Hair Color: <span>Black</span></p>
        </div>
        <div class="col-6 col-sm-4">
            <p class="hairtype">Hair Type: <span>Straight</span></p>
        </div>
      </div>
    </div>

    <div class="social_follow my-3">
      <div class="d-flex justify-content-between">
        <div class="followme">
          <p><b>Follow me on: </b></p>
        </div>
        <div class="follow_edit">
          <p><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></p>
        </div>
      </div>

      <div class="row border border-right-0 border-left-0">
        <div class="col-3 p-1 p-sm-2 border-right text-center">
            <p class="mb-0"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></p>
            <p class="small mb-0 d-none d-sm-block">www.facebook.com/scproduct</p>
        </div>
        <div class="col-3 p-1 p-sm-2 border-right text-center">
            <p class="mb-0"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></p>
            <p class="small mb-0 d-none d-sm-block">www.instagram.com/scproduct</p>
        </div>
        <div class="col-3 p-1 p-sm-2 border-right text-center">
            <p class="mb-0"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></p>
            <p class="small mb-0 d-none d-sm-block">www.twitter.com/scproduct</p>
        </div>
        <div class="col-3 p-1 p-sm-2 text-center">
            <p class="mb-0"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></p>
            <p class="small mb-0 d-none d-sm-block">9704548442</p>
        </div>

      </div>
    </div>
    <?php include "rev_tabs.php"; ?>
  </div>


  </div>
</body>

</html>
