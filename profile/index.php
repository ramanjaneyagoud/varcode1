<?php include "header.php"; ?>

<body>
    <header class="shadow p-3 mb-5 bg-white rounded">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <img src="images/logo.png" alt="">
                </div>
                <div class="prof_img">
                    <img src="https://via.placeholder.com/40x40" alt="" class="rounded-circle">
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="d-flex justify-content-between">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0 bg-white">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><a href="#">View Profile</a></li>
                    </ol>
                </nav>
                <button type="button" class="btn back-to-product text-white"><i class="fa fa-arrow-left"
                        aria-hidden="true"></i> Back to Products</button>
            </div>
        </div>
    </section>
    <section class="my-3">
        <div class="container">
            <div class="card px-3 py-2">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="d-flex justify-content-start">
                            <img src="images/user.png" alt="" class="author_image d-block mr-2">
                            <div class="author_info mt-2">
                                <div class="auth_name">@RachelGarrett</div>
                                <div class="auth_location">Hyderabad, India</div>
                            </div>
                        </div>
                        <div class="auth_desc mt-3">
                            <p>Aenean sed lorem est. Sed quis neque ut nibh suscipit imperdiet ac non augue. Aenean
                                ornare sit amet lectus non tristique. Nunc ut
                                <span class="read_more"> Read more…</span></p>
                        </div>
                    </div>
                    <div class="col-sm-8 mt-3">
                        <div class="row bsp">
                            <div class="col-sm-10">
                                <div class="beauty_profile">
                                    <h2 class="">Beauty Profile</h2>
                                    <div class="profile">
                                        <div class="skin_tone">Skin Tone:<span> Very fair</span></div>
                                        <div class="skin_type">Skin Type:<span> Normal</span></div>
                                        <div class="eye_color">Eye Color:<span> Blue</span></div>
                                        <div class="hair_color">Hair Color:<span> Black</span></div>
                                        <div class="hair_type">Hair Type:<span> Straight</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="social_profile mt-4">
                                    <h2 class="mb-1">Social Profile</h2>
                                    <div class="d-flex">
                                        <div class="facebook position-relative">
                                            <a href="#">
                                                <img src="images/fb.svg" alt="" class="fb">
                                                <div class="review"></div>
                                            </a>
                                        </div>
                                        <div class="insta position-relative">
                                            <a href="#">
                                                <img src="images/insta.svg" alt="" class="instagram">
                                                <div class="review"></div>
                                            </a>
                                        </div>
                                        <div class="youtube position-relative">
                                            <a href="#">
                                                <img src="images/ytube.svg" alt="" class="ytube">
                                                <div class="unreview"></div>
                                            </a>
                                        </div>
                                        <!-- <div class="giphy_image">
                                            <a href="#">
                                                <img src="images/ytube.svg" alt="" class="ytube">
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-link acco" id="acco" type="button">
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </section>
    <section>
            <?php include "rev_tabs.php"; ?>
    </section>
</body>

</html>