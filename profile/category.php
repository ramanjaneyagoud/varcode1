<div class="product-categories p-2">
    <div class="social_box">
        <div class="box_inner">
            <div>
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
<script type="text/javascript">
var product = document.querySelectorAll(".product-container .product");
for (var i = 0; i < product.length; i++) {
    product[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].classList.remove("active");
        this.classList.add("active");
    });
}
</script>