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

              <div class="d-flex justify-content-between align-items-center pl-4 my-4">
                  <div class="campaign_snapshot">Campaign Snapshot</div>
                  <div class="campaign_status">Current Status : <span class="status live">Live</span></div>
              </div>

              <div class="d-flex justify-content-between ml-4 px-5 py-4 reports1">
                <div class="d-flex flex-column">
                  <div class="total_heads">Total<br>SKU’s</div>
                  <div class="total_count">2</div>
                </div>
                <div class="d-flex flex-column">
                  <div class="total_heads">Total<br>Quality</div>
                  <div class="total_count">20</div>
                </div>
                <div class="d-flex flex-column">
                  <div class="total_heads">Total<br>#Hashtags</div>
                  <div class="total_count">45 <img src="up_arrow.svg" class="up_arrow"/></div>
                </div>
                <div class="d-flex flex-column">
                  <div class="total_heads">Total Stylecraze <br>Reviews</div>
                  <div class="total_count">54 <img src="up_arrow.svg" class="up_arrow"/></div>
                </div>
                <div class="d-flex flex-column">
                  <div class="total_heads">Total Facebook <br>Reviews</div>
                  <div class="total_count">32 <img src="down_arrow.svg" class="down_arrow"/></div>
                </div>
                <div class="d-flex flex-column">
                  <div class="total_heads">Total Instagram <br>Reviews</div>
                  <div class="total_count">65 <img src="down_arrow.svg" class="down_arrow"/></div>
                </div>
              </div>

              <div class="d-flex align-items-center pl-4 my-4">
                  <div class="campaign_snapshot">Reviews</div>
                  <div class="pl-3 sku_product">
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
                  <div class="pl-2 platform">
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
                  <div class="download ml-auto"><img src="download_icon.svg" class="download_img"/>&nbsp;Download</div>
              </div>

              <div class="d-flex justify-content-between ml-4 px-5 py-4 reports1">
                <img src="reviews_chart.svg" class="reviews_chart img-fluid"/>
              </div>

              <div class="d-flex justify-content-between  pl-4 my-4">
                <div class="d-flex w-100 flex-column pl-3">
                  <div class="d-flex justify-content-between align-items-center my-4">
                        <div class="campaign_snapshot">SEO Ranking</div>
                        <div class="pl-3 sku_product">
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
                    </div>
                    <div class="reports1 p-5">
                      <div class="seo_report">
                        <div class="sku_name">SKU Name <span>: ABC Product</span></div>
                        <div class="web_page">SC Page <span>: www.stylecraze.com/prod</span></div>
                        <div class="page_visits">Page Visits <span>: 12345</span></div>
                        <div class="seo_ranking">SEO Ranking <span>: 10</span></div>
                        <div class="shop_clicks">Shop Now Clicks <span>: 100</span></div>
                      </div>
                    </div>
                </div>


                <div class="d-flex w-100 flex-column pl-3">
                    <div class="d-flex justify-content-between align-items-center my-4">
                        <div class="campaign_snapshot">Inventory Details</div>
                        <div class="pl-3 sku_product">
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
                    </div>
                    <div class="reports1 p-5">
                        <div class="seo_report">
                          <div class="assignment_quantity">Assignment Qty <span>: 40</span></div>
                          <div class="received_quantity">Received Qty <span>: 30</span></div>
                          <div class="assignment_quantity"> &nbsp;<span> &nbsp;</span></div>
                          <div class="assignment_quantity">&nbsp; <span>&nbsp;</span></div>
                          <div class="assignment_quantity">&nbsp; <span>&nbsp;</span></div>
                        </div>
                    </div>
                </div>
              </div>




              <div class="d-flex align-items-center pl-4 my-4">
                  <div class="campaign_snapshot">Distribution</div>
                  <div class="pl-3 sku_product">
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
                  <div class="download ml-auto"><img src="download_icon.svg" class="download_img"/>&nbsp;Download</div>
              </div>

              <div class="d-flex justify-content-between ml-4 px-5 py-4 reports1">
                <img src="distribution.svg" class="distribution_chart img-fluid"/>
              </div>

          </div>
      </div>
  </div>
</body>

</html>
