<div class="form_data">
    <div class="d-flex justify-content-end">
        <button type="button" class="btn d-none" id="back_btn"><i class="fa fa-arrow-left" aria-hidden="true"></i>
            Back
        </button>
    </div>
    <div class="about_block block">
        <div class="d-flex justify-content-between align-items-start">
            <div class="about">
                <h2 class="d-inline first_heading">Details</h2>
                <button class="ml-3 border-0 bg-white d-inline small myedit">(<i class="fa fa-pencil"
                        aria-hidden="true"></i>
                    Edit)</button>
                <form action="" method="post" class="about_block_form">
                    <div class="row">
                        <div class="col">
                            <label for="">First Name</label>
                            <input type="text" class="form-control" value="Rachel">
                        </div>
                        <div class="col">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" value="Garrett">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="aboutme">About me</label>
                        <textarea class="form-control" id="aboutme" rows="3" cols="50">Aenean sed lorem est. Sed quis neque ut nibh suscipit imperdiet ac non augue. Aenean ornare sit amet lectus non tristique. Nunc ut Aenean sed lorem est. Sed quis neque ut nibh suscipit imperdiet ac non augue. Aenean ornare sit amet lectus non tristique. Nunc ut
                        </textarea>
                    </div>
                    <div class="change">
                <button id="about_block_submit" class="mt-3 btn custom_btn back-to-product d-block text-white">Save Changes</button>
            </div>
                </form>
            </div>
            <div class="product_box edit text-center mr-sm-3">
                <img src="images/user.png" alt="Profile Image" class="rounded mx-auto">
                <p>Make it your own,<br> Edit picture</p>
            </div>
        </div>
    </div>

    <div class="address_block block">
        <h2 class="d-inline">Address</h2>
        <button class="ml-3 border-0 bg-white d-inline small myedit">(<i class="fa fa-pencil" aria-hidden="true"></i>
            Edit)</button>
        <span class="change">Change Address</span>
        <form action="">
            <div class="form-group">
                <input type="text" name="door_number" required class="form-control" value="Door#123">
            </div>
            <div class="form-group">
                <input type="text" name="Street_name" required class="form-control" value="Apple colony,Android Street">
            </div>
            <div class="form-group">
                <select class="form-control" id="city">
                    <option>Hyderabad</option>
                    <option>Bangalore</option>
                    <option>Chennai</option>
                    <option>Pune</option>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" id="state">
                    <option>Telangana</option>
                    <option>Karnataka</option>
                    <option>Tamilanadu</option>
                    <option>Maharashtra</option>
                </select>
            </div>
            <div class="form-group">
                <input type="number" name="pincode" required class="form-control" value="516434" pattern="[0-9]{6}">
            </div>
            <div class="change">
                <button class="mt-3 btn custom_btn back-to-product d-block text-white">Verify</button>
            </div>
        </form>
    </div>


    <div class="phone_block block">
        <h2 class="d-inline">Mobile number</h2>
        <button class="ml-3 border-0 bg-white d-inline small myedit">(<i class="fa fa-pencil" aria-hidden="true"></i>
            Edit)</button>
        <span class="change">Change Mobile Number</span>
        <form action="">
            <div class="form-group">
                <input type="tel" name="phone" pattern="[0-9]{10}" required class="form-control" value="9494074924">
            </div>
            <div class="change">
                <input type="tel" name="otp" pattern="[0-9]{6}" required class="form-control float-left">
                <a href="#" class="resend">Resend OTP</a>
                <button class="mt-3 btn custom_btn back-to-product d-block text-white clearfix">Verify</button>
            </div>
        </form>
    </div>

    <div class="email_block block">
        <h2 class="d-inline">Email address</h2>
        <button class="ml-3 border-0 bg-white d-inline small myedit">(<i class="fa fa-pencil" aria-hidden="true"></i>
            Edit)</button>
        <span class="change">Change Email</span>
        <form action="">
            <div class="form-group">
                <input type="email" name="email" required class="form-control" value="rachelgarrett@gmail.com">
            </div>
            <div class="change">
                <button class="mt-3 btn custom_btn back-to-product d-block text-white clearfix">Verify</button>
            </div>
        </form>
    </div>

    <div class="pwd_block block">
        <h2 class="d-inline">Password</h2>
        <button class="ml-3 border-0 bg-white d-inline small myedit">(<i class="fa fa-pencil" aria-hidden="true"></i>
            Edit)</button>
        <span class="change">Change Password</span>
        <form action="">
            <div class="form-group">
                <input type="password" name="password" required class="form-control" value=""
                    placeholder="New Password">
            </div>
            <div class="change">
                <form action="">
                    <div class="form-group">
                        <input type="password" name="password" required class="form-control" value=""
                            placeholder="Confirm Password">
                    </div>
                </form>
                <button class="mt-3 btn custom_btn back-to-product d-block text-white clearfix">Verify</button>
            </div>
        </form>
    </div>
</div>

<script>
var edit = document.querySelectorAll(".myedit");
for (var i = 0; i < edit.length; i++) {
    edit[i].addEventListener("click", function() {
        var current = document.querySelectorAll(".about_editing");
        for(var j=0; j< current.length; j++){
            current[j].classList.remove("about_editing");
        }
        this.parentElement.classList.add("about_editing");
    });
}
</script>

<script>
$(document).ready(function() {
    $(".myedit").on("click", function() {
        $(".block").css("display", "none");
        $(this).parents(".block").css("display", "block");
        $("#back_btn").removeClass("d-none");
        $("#back_btn").addClass("d-block");
        $(".change").css("display","block");
    });
    $("#back_btn").click(function() {
        $(".block").css("display", "block");
        $(this).removeClass("d-block");
        $(this).addClass("d-none");
        $(".change").css("display","none");
    });
});
</script>