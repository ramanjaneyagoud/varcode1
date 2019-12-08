<?php //include "header.php"; ?>


    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="review_card card">
                    <ul class="nav nav-tabs" id="reve" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab" data-toggle="tab" href="#product_rating"
                                role="tab" aria-controls="product_rating" aria-selected="true">Profile&nbsp;Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="how-to-use-tab" data-toggle="tab" href="#how_to_use" role="tab"
                                aria-controls="how_to_use" aria-selected="false">Pending&nbsp;Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="benefits-tab" data-toggle="tab" href="#benefits" role="tab"
                                aria-controls="benefits" aria-selected="false">All&nbsp;Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ingredients-tab" data-toggle="tab" href="#ingredients" role="tab"
                                aria-controls="ingredients" aria-selected="false">Q&A</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="shades-tab" data-toggle="tab" href="#shades" role="tab"
                                aria-controls="shades" aria-selected="false">Photos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="side-effects-tab" data-toggle="tab" href="#side_effects" role="tab"
                                aria-controls="side_effects" aria-selected="false">Badges</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="product_rating" role="tabpanel"
                            aria-labelledby="product-tab">
                            <div class="d-none d-sm-block">
                                <div class="row">
                                    <div class="col-sm-2 py-3 px-2">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                            aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill"
                                                href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                                aria-selected="true">Profile</a>
                                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
                                                href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                                aria-selected="false">Beauty Profile</a>
                                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                                href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                                aria-selected="false">Product Category</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 py-2 px-3">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                                aria-labelledby="v-pills-home-tab">
                                                <?php include "details.php"; ?>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                aria-labelledby="v-pills-profile-tab">
                                                <?php include "beauty_profile.php"; ?>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                                aria-labelledby="v-pills-messages-tab">
                                                <?php include "category.php"; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-block d-sm-none">
                                <div class="row">
                                    <div id="accordion_profile">
                                        <div class="card">
                                            <div class="card-header" id="accordion_profile_one">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" data-toggle="collapse"
                                                        data-target="#collapse_One" aria-expanded="true"
                                                        aria-controls="collapse_One">
                                                        Profile
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapse_One" class="collapse show"
                                                aria-labelledby="accordion_profile_one"
                                                data-parent="#accordion_profile">
                                                <div class="p-2"><?php include "details.php"; ?></div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="accordion_profile_two">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed"
                                                        data-toggle="collapse" data-target="#collapse_Two"
                                                        aria-expanded="false" aria-controls="collapse_Two">
                                                        Beauty profile
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapse_Two" class="collapse"
                                                aria-labelledby="accordion_profile_two"
                                                data-parent="#accordion_profile">
                                                <?php include "beauty_profile.php"; ?>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="accordion_profile_three">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed"
                                                        data-toggle="collapse" data-target="#collapse_Three"
                                                        aria-expanded="false" aria-controls="collapse_Three">
                                                        Category
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapse_Three" class="collapse"
                                                aria-labelledby="accordion_profile_three"
                                                data-parent="#accordion_profile">
                                                <?php include "category.php"; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="how_to_use" role="tabpanel" aria-labelledby="how-to-use-tab">
                            <?php include "pending_reviewes.php"; ?>
                        </div>
                        <div class="tab-pane fade" id="benefits" role="tabpanel" aria-labelledby="benefits-tab">
                        <?php include "all_reviews.php"; ?>
                        </div>
                        <div class="tab-pane fade" id="ingredients" role="tabpanel" aria-labelledby="ingredients-tab">
                        <?php include "review_for_product.php"; ?>
                        </div>
                        <div class="tab-pane fade" id="shades" role="tabpanel" aria-labelledby="shades-tab">R</div>
                        <div class="tab-pane fade" id="side_effects" role="tabpanel" aria-labelledby="side-effects-tab">
                            J</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    $('#reve li').on("click", function() {
        $("#reve li").removeClass("activeee");
        $(this).addClass("activeee");
        $("#reve").scrollCenter(".activeee", 300);
    });

    jQuery.fn.scrollCenter = function(elem, speed) {
        var active = jQuery(this).find(elem);
        var activeWidth = active.width() / 2;
        var pos = active.position().left + activeWidth;
        var elpos = jQuery(this).scrollLeft();
        var elW = jQuery(this).width();
        pos = pos + elpos - elW / 2;
        jQuery(this).animate({
            scrollLeft: pos
        }, speed == undefined ? 1000 : speed);
        return this;
    };

    var pro = document.querySelectorAll(".product_boxes .product_box");
    for (var i = 0; i < pro.length; i++) {
        pro[i].addEventListener("click", function() {
            this.classList.toggle("selected");
        });
    }

    $('.panel-collapse').on('show.bs.collapse', function() {
        $(this).siblings('.panel-heading').addClass('active');
    });

    $('.panel-collapse').on('hide.bs.collapse', function() {
        $(this).siblings('.panel-heading').removeClass('active');
    });
    </script>

