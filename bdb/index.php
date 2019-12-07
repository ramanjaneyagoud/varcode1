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
                  <button type="button" name="button" class="btn create_campaign rounded text-white">Create new Campaigns</button>
                  <div class="form-group has-search position-relative mb-0">
                    <span class="fa fa-search form-control-feedback position-absolute search_icon"></span>
                    <input type="text" class="form-control search_input" placeholder="Search">
                  </div>
              </div>

              <div class="d-flex justify-content-start pl-4 reports_headings">
                <div class="campaign_name">Campaign Name</div>
                <div class="product_name">Product Name</div>
                <div class="quality">Quality</div>
                <div class="hashtag">#Hashtag</div>
                <div class="brand_handles">Brand Social Handles</div>
                <div class="status">Current Status</div>
                <div class="action">Action</div>
                <div class="view_report">Reports</div>
              </div>


              <div class="d-flex justify-content-start ml-4 py-2 reports reports_responces">
                <div class="campaign_name">Diwali one</div>
                <div class="product_name">Oral life extra vigin coconut oil</div>
                <div class="quality">08</div>
                <div class="hashtag">#brand</div>
                <div class="brand_handles">Facebook brand</div>
                <div class="status waiting">Waiting for inventory</div>
                <div class="action"><span class="edit">Edit</span>/<span class="delete">Delete</span></div>
                <div class="view_report">View Reports</div>
              </div>

              <div class="d-flex justify-content-start ml-4 py-2 reports reports_responces">
                <div class="campaign_name">Diwali one</div>
                <div class="product_name">Oral life extra vigin coconut oil</div>
                <div class="quality">08</div>
                <div class="hashtag">#brand</div>
                <div class="brand_handles">Facebook brand</div>
                <div class="status live">Live</div>
                <div class="action"><span class="edit">Edit</span>/<span class="delete">Delete</span></div>
                <div class="view_report">View Reports</div>
              </div>

              <div class="d-flex justify-content-start ml-4 py-2 reports reports_responces">
                <div class="campaign_name">Diwali one</div>
                <div class="product_name">Oral life extra vigin coconut oil</div>
                <div class="quality">08</div>
                <div class="hashtag">#brand</div>
                <div class="brand_handles">Facebook brand</div>
                <div class="status ended">Ended</div>
                <div class="action"><span class="edit">Edit</span>/<span class="delete">Delete</span></div>
                <div class="view_report">View Reports</div>
              </div>
          </div>
      </div>
  </div>
</body>

</html>
