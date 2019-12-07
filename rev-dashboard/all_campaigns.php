<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Brand Dashboard</title>
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard.css?ppp" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar sticky-top flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">
      <img src="https://cdn2.stylecraze.com/wp-content/themes/buddyboss-child/images/sc-logo.png" class="img-fluid logo" alt="stylecraze">
      </a>

      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">
          <span data-feather="log-out"></span>
          Logout</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-3 col-lg-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  All Campaigns <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                Reviews Analysis
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <button class="btn btn-lg create">Create new Campaigns</button>
            <div class="btn-toolbar mb-2 mb-md-0">
                <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
            </div>
          </div>

            <div class="dashboard">
                <div class="dashboard_heading">
                  <div>Campaign Name</div>
                  <div>Product Name</div>
                  <div>Quality</div>
                  <div>#Hashtag</div>
                  <div>Brand Social Handles</div>
                  <div>Current Status</div>
                  <div>Action</div>
                  <div>Reports</div>
                </div>
                <div class="dashboard_data">
                  <div>Diwali one</div>
                  <div>Oral life extra vigin coconut oil</div>
                  <div>08</div>
                  <div>#brand</div>
                  <div>Facebook brand</div>
                  <div class="inventory">Waiting for inventory</div>
                  <div class="update">Edit/Delete</div>
                  <div class="view_reports">View Reports</div>
                </div>
                <div  class="dashboard_data">
                  <div>Diwali two</div>
                  <div>Oral life extra vigin coconut oil</div>
                  <div>08</div>
                  <div>#brand</div>
                  <div>Instagram brand</div>
                  <div class="inventory">Live</div>
                  <div class="update">Edit/Delete</div>
                  <div class="view_reports">View Reports</div>
                </div>
                <div class="dashboard_data">
                  <div>Diwali three</div>
                  <div>Oral life extra vigin coconut oil</div>
                  <div>08</div>
                  <div>#brand</div>
                  <div>Facebook brand Instagram brand</div>
                  <div class="inventory">Ended</div>
                  <div class="update">Edit/Delete</div>
                  <div class="view_reports">View Reports</div>
                </div>
              </div>
          </div>
        </main>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
