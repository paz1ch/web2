<?php
include('../web/config/config.php');
$username_admin = $_GET["admin"];
?>
<span style="font-family: verdana, geneva, sans-serif;">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>WEB ADMIN</title>
    <link rel="stylesheet" href="style/style_admin.css" />
    <link rel="stylesheet" href="style/style_product-admin.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>

  <body>

    <div class="container">
      <?php include 'navbar.php'; ?>


      <?php 
          if(isset($_POST['search'])){
            $tensp = $_POST['searchtext'];
            $sql = "SELECT sanpham.id_sp, sanpham.tensp, sanpham.image_sp, sanpham.gia, sanpham.motangan, danhmucsp.tendanhmuc FROM sanpham INNER JOIN danhmucsp on sanpham.id_danhmuc = danhmucsp.id_danhmuc WHERE tensp LIKE '%$tensp%'";  
          }else{
          $sql = "SELECT sanpham.id_sp, sanpham.tensp, sanpham.image_sp, sanpham.gia, sanpham.motangan, danhmucsp.tendanhmuc FROM sanpham INNER JOIN danhmucsp on sanpham.id_danhmuc = danhmucsp.id_danhmuc";
                  }        
              $sql_sanpham = mysqli_query($mysqli, $sql);
      ?>

      <!-- top banner -->
      <div class="top-banner">
        <p>Online Store</p>
      </div>

      <section class="main">
        <div class="main-top"></div>
        <div class="search-container">
        <form action="" method="post">
            <input type="text" placeholder="Search.." name="searchtext">
            <button type="submit" name="search">
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>
        <div class="background-section">
          <div class="main-body">
            <h1 style="text-transform: uppercase;">chi tiết sản phẩm</h1>
          </div>
          <form action="" method="post">
          <table>
            <tr>
              <th class="masanpham">Mã sản phẩm</th>
              <th class="planloai">Phân loại</th>
              <th class="anh">Ảnh</th>
              <th class="name">Tên sản phẩm</th>
              <th class="gia">Giá</th>
              <th class="mota">Mô tả</th>
              <th class="chucnang" colspan="2">Chức năng</th>
            </tr>
            <?php
                while ($row = mysqli_fetch_array($sql_sanpham)) {
            ?>
            <tr>
              <td class="masanpham"> <?php echo $row['id_sp'] ?> </td>
              <td class="phanloai"><?php echo $row['tendanhmuc'] ?></td>
              <td class="anh">
                <img src="image/<?php echo $row['image_sp'] ?>" alt="" width="80px" height="80px">
              </td>
              <td class="name"><?php echo $row['tensp'] ?></td>
              <td class="gia"><?php echo $row['gia'] ?>/cái</td>
              <td class="mota"><?php echo $row['motangan'] ?></td>
              <td class="chucnang">
                <a href="suasanpham.php?admin=<?php echo $username_admin?>" style="color: blue;">Sửa</a>
              </td>
              <td class="xoa" onclick="buttonXoa()">Xóa</td>
            </tr>
            <?php } ?>
            <script>
              function buttonXoa() {
                if (confirm("Bạn có muốn xóa sản phẩm không ?")) {
                  alert("Đã xóa sản phẩm thành công!!!");
                }
              }
            </script>
          </table>
            </form>
        </div>
      </section>
    </div>
  </body>

  </html>