<!DOCTYPE html>
<html lang="en">

<head>
    <title>Onboard Journey</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png"
        href="https://cdn2.stylecraze.com/wp-content/themes/buddyboss-child/images/favicon/favicon-16x16.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="flickity.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="flickity.css?465"> -->
    <link rel="stylesheet" href="style.css?qwqwdsq">
</head>
<body>
    <div class="header">
        <div class="container">
            <img src="https://cdn2.stylecraze.com/static-content/products-reviews/images/logo.png" class="logo" />
        </div>
    </div>
    <?php include "modals.php"; ?>
    <div class="container-fluid carousel_block">
        <div class="carousel main_carousel" >
            <div class="carousel-cell receive_offers">
                <div class="social_box">
                    <div class="box_inner">
                        <img src="images/suprise box.png" />
                        <p>Want to receive free products and be eligible<br>for exciting offers?</p>
                        <a href="#" class="button_block">Yes, I’m In!</a>
                        <a href="#" class="hate_products" data-toggle="modal" data-target="#hate_products">No, I hate products</a>
                    </div>
                </div>
            </div>
            <div class="carousel-cell instagram_block   is-initial-select">
                <div class="social_box">
                    <div class="box_inner">
                        <img src="images/instagram.png" />
                        <h3>Are you on Instagram?</h3>
                        <p>Millions of products are up for grabs for<br>reviewers active on Instagram.</p>
                        <a href="#" class="button_block">Connect Now</a>
                        <a href="#" class="hate_products">Rest assured, we'll not post to your account.</a>
                        <div style="position:relative" class="tiny">
                        <?php include "pslider.php"; ?>
                      </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="refuse_box">
                    <div class="no_social">No, I don’t use Instagram</div>
                    <div class="skip">Skip</div>
                </div>
            </div>
            <div class="carousel-cell facebook_block">
                <div class="social_box">
                    <div class="box_inner">
                        <img src="images/facebook.png" />
                        <h3>Are you on Facebook?</h3>
                        <p>Millions of products are up for grabs for<br>reviewers active on Facebook.</p>
                        <a href="#" class="button_block">Connect Now</a>
                        <a href="#" class="hate_products">Rest assured, we'll not post to your account.</a>
                        <div style="position:relative" class="tiny">
                        <?php include "pslider.php"; ?>
                      </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="refuse_box">
                    <div class="no_social">No, I don’t use Facebook</div>
                    <div class="skip">Skip</div>
                </div>
            </div>
            <div class="carousel-cell youtube_block">
                <div class="social_box">
                    <div class="box_inner">
                        <img src="images/youtube.png" />
                        <h3>Are you on Youtube?</h3>
                        <p>Millions of products are up for grabs for<br>reviewers active on Youtube.</p>
                        <a href="#" class="button_block">Connect Now</a>
                        <a href="#" class="hate_products">Rest assured, we'll not post to your account.</a>
                        <div style="position:relative" class="tiny">
                        <?php include "pslider.php"; ?>
                      </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="refuse_box">
                    <div class="no_social">No, I don’t use Youtube</div>
                    <div class="skip">Skip</div>
                </div>
            </div>
          <!--  <div class="carousel-cell twitter_block">
                <div class="social_box">
                    <div class="box_inner">
                        <img src="images/twitter.png" />
                        <h3>Connect through Twitter!</h3>
                        <p>We send out millions of free products<br>to Reviewers active on Twitter.</p>
                        <a href="#" class="button_block">Connect Now</a>
                        <a href="#" class="hate_products">Don't worry - we'll never post to your account </a>
                        <div style="position:relative" class="tiny">
                        <?php include "pslider.php"; ?>
                      </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="refuse_box">
                    <div class="no_social">No, I don’t have Twitter</div>
                    <div class="skip">Skip</div>
                </div>
            </div>-->
            <div class="carousel-cell accounts">
                <div class="social_box">
                    <div class="box_inner">
                        <h3>Active on other social platforms?</h3>
                        <p>The more social presence, the better are<br>your offers!</p>
                        <div class="other_accounts">
                            <div class="pinterest"><a href="#"><img src="images/Pinterest.png" /> Pinterest</a></div>
                            <div class="tumbler"><a href="#"><img src="images/Tumbler.png" /> Tumbler</a></div>
                            <div class="blogger"><a href="#"><img src="images/Blogger.png" /> Blogger</a></div>
                            <div class="tiktok"><a href="#"><img src="images/Tiktok.png" /> Tiktok</a></div>
                            <div class="wordpress"><a href="#"><img src="images/Wordpress.png" /> Wordpress</a></div>
                        </div>
                        <a href="#" class="button_block">Connect Now</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="refuse_box">
                    <div class="no_social"></div>
                    <div class="skip">Skip</div>
                </div>
            </div>
            <div class="carousel-cell personal_details">
                <div class="social_box">
                    <div class="box_inner">
                        <h3>Personal Details</h3>
                        <form class="details_form" action="#" method="post">
                            <div class="form-group">
                                <label for="first_name">FIRST NAME</label>
                                <input type="text" class="form-control" id="first_name">
                            </div>
                            <div class="form-group">
                                <label for="last_name">LAST NAME</label>
                                <input type="text" class="form-control" id="last_name">
                            </div>
                            <div class="form-group">
                                <label for="gender">GENDER</label>
                                <select class="form-control" id="gender">
                                  <option>Female</option>
                                  <option>Transgender</option>
                                  <option>Male</option>
                                  <option>Others</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="dob">DOB</label>
                                <input type="date" class="form-control" id="dob">
                            </div>
                            <div class="form-group">
                                <label for="location">LOCATION</label>
                                <input type="text" class="form-control" id="location">
                                <img class="location_img" src="images/location.png" />
                            </div>
                            <div class="form-group">
                                <label for="first_name">DESIRED USERNAME</label>
                                <input type="username" class="form-control" id="username">
                            </div>
                            <button type="submit" class="button_block">Next</button>
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="refuse_box">
                    <div class="no_social"></div>
                    <div class="skip">Skip</div>
                </div>
            </div>
            <div class="carousel-cell mobile_verification">
                <div class="social_box">
                    <div class="box_inner">
                        <h3>Mobile Verification</h3>
                        <form class="mobile_details_form" action="#" method="post">
                            <div class="form-group">
                                <label for="phone">PHONE NUMBER</label>
                                <input type="text" class="form-control" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="otp">OTP</label>
                                <input type="text" class="form-control" id="otp">
                                <a href="#">Resend OTP</a>
                            </div>
                            <button type="submit" class="button_block">Verify Now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="carousel-cell beauty-profile">
                <div class="social_box">
                    <div class="box_inner">
                      <div>
                        <p>Do you have a specific type of self care that you want to focus on? Select all that is applicable so that we can better match you with our campaigns.</p>
                        <p>Please note : This information is for internal use only and will not be displayed to others.</p>
                        <h3>Beauty Profile</h3>

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-uppercase" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            skin type
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body scrollbar">
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Normal / Combination</p>
                                        </div>
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Oily</p>
                                        </div>
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Dry</p>
                    										</div>
										                    <div class="force-overflow"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed text-uppercase" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            skin tone
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body scrollbar">
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Very fair</p>
                                        </div>
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Fair</p>
                                        </div>
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Medium</p>
                    										</div>
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Olive</p>
                                        </div>
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Dark</p>
                                        </div>
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Very Dark</p>
                    										</div>
										                    <div class="force-overflow"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed text-uppercase" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            hair type
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body scrollbar">
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Straight</p>
                                        </div>
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Wavy</p>
                                        </div>
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Curly</p>
                    										</div>
										                    <div class="force-overflow"></div>
                                    </div>
                                </div>
							</div>

							<div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed text-uppercase" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            hair colour
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordion">
                                    <div class="card-body scrollbar">
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Black</p>
                                        </div>
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Grey</p>
                                        </div>
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Brown</p>
                    										</div>
										                    <div class="force-overflow"></div>
                                    </div>
                                </div>
							</div>

							<div class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed text-uppercase" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                            eye colour
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-parent="#accordion">
                                    <div class="card-body scrollbar">
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Blue</p>
                                        </div>
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Green</p>
                                        </div>
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Brown</p>
                    										</div>
                                        <div><img src="https://via.placeholder.com/30" />
                                            <p class="small">Black</p>
                    										</div>
										                    <div class="force-overflow"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="carousel-cell product-categories">
              <div class="social_box">
                  <div class="box_inner">
                    <div>
                    <p>Don't want to browse through a plethora of products? Select the categories that best suit your current needs and, we will try our best to match the campaigns accordingly.</p>
                    <p>Please note : This information is for internal use only and will not be displayed to others.</p>
                      <h3>Product Categories</h3>
                        <div class="product-container scrollbar">
                          <div class="product active">
                            <img src="images/pro1.png" alt="" class="img-fluid">
                            <span class="d-block">Acne products</span>
                          </div>
                          <div class="product">
                            <img src="images/pro1.png" alt="" class="img-fluid">
                            <span class="d-block">Acne products</span>
                          </div>
                          <div class="product">
                            <img src="images/pro1.png" alt="" class="img-fluid">
                            <span class="d-block">Acne products</span>
                          </div>
                          <div class="product">
                            <img src="images/pro1.png" alt="" class="img-fluid">
                            <span class="d-block">Acne products</span>
                          </div>
                          <div class="product">
                            <img src="images/pro1.png" alt="" class="img-fluid">
                            <span class="d-block">Acne products</span>
                          </div>
                          <div class="product">
                            <img src="images/pro1.png" alt="" class="img-fluid">
                            <span class="d-block">Acne products</span>
                          </div>
                          <div class="product">
                            <img src="images/pro1.png" alt="" class="img-fluid">
                            <span class="d-block">Acne products</span>
                          </div>
                          <div class="product">
                            <img src="images/pro1.png" alt="" class="img-fluid">
                            <span class="d-block">Acne products</span>
                          </div>
                          <div class="product">
                            <img src="images/pro1.png" alt="" class="img-fluid">
                            <span class="d-block">Acne products</span>
                          </div>
                          <div class="force-overflow"></div>
                        </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
    <script>
    $('.carousel').flickity({
        initialIndex: '.is-initial-select',
        on: {
            ready: function() {
                console.log('Flickity is ready');
                $('.small_carousel').flickity({
                 prevNextButtons: false,
                 // options
                 autoPlay: true,
               draggable: false,
               groupCells :1
                });
            },
            change: function(index) {
                console.log('Slide changed to' + index);
                //  $('.carousel').
            }
        }
    });
    </script>

    <script>
    $('.panel-collapse').on('show.bs.collapse', function() {
        $(this).siblings('.panel-heading').addClass('active');
    });

    $('.panel-collapse').on('hide.bs.collapse', function() {
        $(this).siblings('.panel-heading').removeClass('active');
    });
    </script>
    <script type="text/javascript">
      var product = document.querySelectorAll(".product-container .product");
      for(var i=0;i<product.length;i++){
        product[i].addEventListener("click",function(){
          var current =document.getElementsByClassName("active");
           	current[0].classList.remove("active");
          this.classList.add("active");
        });
      }
    </script>

</body>

</html>
