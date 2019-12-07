<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php include "head.php"; ?>

<body>
  <div class="container-fluid main_block my-3">
      <div class="row align-items-stretch">
          <div class="col-sm-2 px-0">
              <?php include "sidebar.php"; ?>
          </div>
          <div class="col-sm-10 px-0 right_screen">
            <header class="py-3 px-4">
              <div class="d-flex justify-content-between">
                <div class="d-flex justify-content-start align-items-center">
                    <img src="https://via.placeholder.com/32" alt="author_image" class="author_image rounded-circle">
                    <div class="d-flex align-items-start flex-column pl-3">
                      <div class="author_name">Lori Wallace</div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> Cairo, Dominica</div>
                    </div>
                </div>
                <div class="logout d-flex justify-content-end align-items-center">
                      <img src="logout.svg" alt="" class="">
                      <span class="d-block pl-2">Logout</span>
                </div>
              </div>
            </header>

            <div class="d-flex justify-content-between align-items-center pl-4 my-4">
                <div class="campaign_name rounded">Campaigns: Diwali</div>
                <div class="form-group has-search position-relative mb-0">
                  <span class="fa fa-search form-control-feedback position-absolute search_icon"></span>
                  <input type="text" class="form-control search_input" placeholder="Search">
                </div>
            </div>
    <div class="analysis_filters pl-4">
      <h2 class="review_analysis">Review Analysis</h2>
      <div class="sku_product">
        <form action="#">
          <div class="form-group">
            <span>SKU:</span>
            <select name="sku" id="sku_products">
              <option value="ABC Product">ABC Product</option>
              <option value="ABC Product">ABC Product</option>
              <option value="ABC Product">ABC Product</option>
            </select>
          </div>
        </form>
      </div>
      <div class="platform">
        <form action="#">
          <div class="form-group">
            <span>Platform:</span>
            <select name="platform" id="platform">
              <option value="Facebook">Facebook</option>
              <option value="Google">Google</option>
            </select>
          </div>
        </form>
      </div>
    </div>

    <div class="reviews pl-4">
      <div class="rating">
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star-o" aria-hidden="true"></i>
        <span>4.6/5</span>
      </div>
    </div>

    <div class="distribution pl-4">
      <div class="rating_distribution d_parts">
        <h3>Rating Distribution</h3>
        <div class="star_progress">
          <div>
            <span>5 Stars</span>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="4" style="width:60%">
                 <span class="sr-only">60% Complete</span>
               </div>
             </div>
             <span>654</span>
           </div>
           <div>
             <span>4 Stars</span>
             <div class="progress">
               <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="4" style="width:80%">
                  <span class="sr-only">80% Complete</span>
                </div>
              </div>
              <span>875</span>
            </div>
            <div>
              <span>3 Stars</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="4" style="width:20%">
                   <span class="sr-only">20% Complete</span>
                 </div>
               </div>
               <span>98</span>
             </div>
             <div>
               <span>2 Stars</span>
               <div class="progress">
                 <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="4" style="width:40%">
                    <span class="sr-only">40% Complete</span>
                  </div>
                </div>
                <span>324</span>
              </div>
              <div>
                <span>1 Star</span>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="4" style="width:60%">
                     <span class="sr-only">60% Complete</span>
                   </div>
                 </div>
                 <span>654</span>
               </div>
        </div>
      </div>
      <div class="pros_distribution d_parts">
        <h3>Pros <i class="fa fa-smile-o"></i></h3>
        <div class="pros-content"><p><i class="fa fa-circle-o" aria-hidden="true"></i>Matte finish</p><span>654</span></div>
        <div class="pros-content"><p><i class="fa fa-circle-o" aria-hidden="true"></i>Highly-pigmented</p><span>359</span></div>
        <div class="pros-content"><p><i class="fa fa-circle-o" aria-hidden="true"></i>Transfer-proof</p><span>98</span></div>
        <div class="pros-content"><p><i class="fa fa-circle-o" aria-hidden="true"></i>Non-sticky</p><span>234</span></div>
        <div class="pros-content"><p><i class="fa fa-circle-o" aria-hidden="true"></i>Long-wearing</p><span>176</span></div>
      </div>
      <div class="cons_distribution d_parts">
        <h3>Cons <i class="fa fa-smile-o"></i></h3>
        <div class="cons-content"><p><i class="fa fa-circle-o" aria-hidden="true"></i>Matte finish</p><span>654</span></div>
        <div class="cons-content"><p><i class="fa fa-circle-o" aria-hidden="true"></i>Highly-pigmented</p><span>359</span></div>
        <div class="cons-content"><p><i class="fa fa-circle-o" aria-hidden="true"></i>Transfer-proof</p><span>98</span></div>
        <div class="cons-content"><p><i class="fa fa-circle-o" aria-hidden="true"></i>Non-sticky</p><span>234</span></div>
        <div class="cons-content"><p><i class="fa fa-circle-o" aria-hidden="true"></i>Long-wearing</p><span>176</span></div>
      </div>
    </div>

    <div class="ques_reviews pl-4">
      <div class="ques_ans">
        <h3>Top Questions and Answers</h3>
        <div id="accordion" class="accordion">
          <div class="acc_child">
            <div class="card-header" data-toggle="collapse" href="#collapseOne">
                <a class="card-title"> Does it have any sun protection? </a>
            </div>
            <div id="collapseOne" class="card-body collapse show" data-parent="#accordion">
                <p>The Body Shop Vitamin C Skin Boost Serum does not have any sun protection. But it can be applied under sunscreen easily. The Body Shop Vitamin C Skin Boost Serum does not have any sun protection. But it can be applied under sunscreen easily. </p>
            </div>
          </div>
          <div class="acc_child">
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <a class="card-title"> Does it have any sun protection? </a>
            </div>
            <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                <p>The Body Shop Vitamin C Skin Boost Serum does not have any sun protection. But it can be applied under sunscreen easily. The Body Shop Vitamin C Skin Boost Serum does not have any sun protection. But it can be applied under sunscreen easily.</p>
            </div>
          </div>
            <div class="acc_child">
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <a class="card-title"> Does it have any sun protection? </a>
            </div>
            <div id="collapseThree" class="card-body collapse" data-parent="#accordion">
                <p>The Body Shop Vitamin C Skin Boost Serum does not have any sun protection. But it can be applied under sunscreen easily. The Body Shop Vitamin C Skin Boost Serum does not have any sun protection. But it can be applied under sunscreen easily.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="top_reviews">
        <h3>Top reviews of this product</h3>
        <div class="all_reviews">

          <div class="review_box">
            <h3>Average & Usual fragrance not much stuff</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren…</p>
            <div class="rating_block">
              <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <div class="author-block">
                  <a href="#"><img src="https://cdn2.stylecraze.com/wp-content/themes/buddyboss-child/images/user-deafult-pics/default4.png" alt="Zara " class="author" height="40" width="40">
                  <span class="author_name">Zara </span></a>
              </div>
            </div>
          </div>

          <div class="review_box">
            <h3>Average & Usual fragrance not much stuff</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren…</p>
            <div class="rating_block">
              <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <div class="author-block">
                  <a href="#"><img src="https://cdn2.stylecraze.com/wp-content/themes/buddyboss-child/images/user-deafult-pics/default4.png" alt="Zara " class="author" height="40" width="40">
                  <span class="author_name">Zara </span></a>
              </div>
            </div>
          </div>

        </div>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>

</html>
