<div class="form_data">
    <div class="about_block block">
        <div class="d-flex justify-content-between align-items-start">
            <div class="about">
                <h2 class="d-inline">Details</h2>
                <button class="ml-3 border-0 bg-white d-inline small myedit">(<i class="fa fa-pencil"
                        aria-hidden="true"></i>
                    Edit)</button>
                <form>
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
                        <textarea class="form-control" id="aboutme" rows="3">Aenean sed lorem est. Sed quis neque ut nibh suscipit imperdiet ac non augue. Aenean ornare sit amet lectus non tristique. Nunc ut Aenean sed lorem est. Sed quis neque ut nibh suscipit imperdiet ac non augue. Aenean ornare sit amet lectus non tristique. Nunc ut
                        </textarea>
                    </div>
                </form>
            </div>
            <div class="product_box edit text-center mr-sm-3">
                <img src="images/user.png" alt="Profile Image" class="rounded mx-auto">
                <p>Make it your own,<br> Edit picture</p>
            </div>
        </div>
    </div>
    <div class="phone_block block">
        <h2 class="d-inline">Mobile number</h2>
        <button class="ml-3 border-0 bg-white d-inline small myedit">(<i class="fa fa-pencil" aria-hidden="true"></i>
            Edit)</button>
        <span class="change">Change Mobile Number</span>
        <form>
            <div class="form-group">
                <input type="tel" name="phone" pattern="[0-9]{10}" required class="form-control" value="9494074924">
            </div>
            <div class="change">
                <input type="tel" name="otp" pattern="[0-9]{6}" required class="form-control">
                <a href="#">Resend OTP</a>
                <button class="btn custom_btn back-to-product">Verify</button>
            </div>
        </form>
    </div>
</div>

<script>
var edit = document.querySelectorAll(".myedit");
for (var i = 0; i < edit.length; i++) {
    edit[i].addEventListener("click", function() {
        // var current = document.querySelectorAll("about_editing");
        // current[0].classList.remove("about_editing");
        this.parentElement.classList.add("about_editing");
    });
}
</script>