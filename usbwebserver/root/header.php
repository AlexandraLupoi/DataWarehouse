<html>
    <body>
        <div class="menu-bar">
        <nav class="menu">
		    <a id=titleCategories class="item_menu">CATEGORIES</a>
            <div class="listcontainer">
            <label class="container">Fiction
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <label class="container">History
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <label class="container">Psychology
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <label class="container">Religion
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            </div>
        </nav>
            <ul>
             <!--<li><div class="top">
			        <a href="#" class="menu_icon"><i class="fa fa-bars" aria-hidden="true"></i></a>
		        </div></li>-->
                <li class="active" id="homeBtn"><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a></li>
                <li><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="#">Cart</a></li>
                <li><button class="btn btn-primary" type="button" name="login" id="login" data-toggle="modal" data-target="#loginModal">Login</button></li>
            </ul>
        </div>
    </body>
</html>

<script>
//    $(document).ready(function() {
//	$("body").on('click', '.top', function() {
//		$("nav.menu").toggleClass("menu_show");
//	});
//});

$(function(){
     $(".btn-primary").click(function(){
     
          //document.getElementById('loginModal').style.display = "block";
          //$('#loginModal').modal('show');
     })
})
//LOGIN/LOGOUT - https://www.webslesson.info/2016/11/make-login-form-by-using-bootstrap-modal-with-php-ajax-jquery.html

</script>
