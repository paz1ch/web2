<div class="topnav">
            <div style="display: flex;" class="dangxuat">
                <a href="register.php" class="dangxuat">Đăng ký</a>
            </div>
            <div style="display: inline-flex;" class="dangnhap">
                <a href="login.php">Đăng nhập</a>
            </div>

			<a class="active" href="index.php">Trang chủ</a>
			<a href="products.php">Sản phẩm</a>
			<a href="#" id="giohang">Giỏ hàng</a>
            <script>
                button = document.getElementById("giohang");
                button.onclick = function(){
                    alert("Hãy đăng nhập trước để vào giỏ hàng");
                    location.assign("login.php");
                }
            </script>
			<a href="search.php" class="account">Tìm kiếm</a>
			<div class="search-container">
				<form action="search.php">
				<input type="text" placeholder="Search.." name="search">
				<button type="submit" class="buttonsubmit"><i class="fa fa-search"> </i></button>
				</form>
			</div>
</div>