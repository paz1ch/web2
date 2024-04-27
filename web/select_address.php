<?php session_start();
include('config/config.php');
global $mysqli;
$username=$_GET['username'];

if(isset($_POST['submit_update'])){
    $id = $_POST['id'] ;
    header("location: update_selection_address_detail.php?admin=" .$username ."&id=".$id);
}

if(isset($_POST['submit_select'])){
    $id = $_POST['id'];
    header("location: thanhtoan.php?admin=" .$username ."&id=".$id);
}

if (isset($_GET['id'])){
    $id=$_GET['id'];
    $sql_delete = "DELETE FROM address WHERE id='$id'";
    $query = $mysqli->query($sql_delete);
    if($query){
        echo '<script type="text/JavaScript">
                alert("Delete successful");
                window.location.href = "select_address.php?admin=' . ($username) . '";
              </script>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Thông tin cá nhân</title>
    <link rel="icon" type="image/jpg" href="images/iconuser.png">
    <meta charset="utf-8" />
    <meta name="viewpoint" content="width=device-width,initial-scal=1.0">
    <meta http-equip="X-UA-compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_topnav.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_ourteam.css" media="screen" type="text/css">
    <link rel="stylesheet" href="style/style_banner.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_serviece.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_product.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="style/style_pagination.css">
    <link rel="stylesheet" href="style/style_products.css" media="screen" type="text/css">
    <link rel="stylesheet" href="style/bootstrap.min.css" media="screen" type="text/css">
    <link rel="stylesheet" href="style/p_inf.css" media="screen" type="text/css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="script/jquery.store.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<section id="home">
    <?php include ('header_user.php')?>
</section>
<!-- top nav -->

<div>
    <div>
        <div class="text-center">
            <br><br>
            <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
            <h2>Thanh toán</h2>
            <p class="lead">Vui lòng chọn địa chỉ trước khi thanh toán.</p>
        </div>
        <div class="div_center">
            <div class="nav">
                <div class="nav_address">
                    <h4>Địa chỉ</h4>
                </div>
                <div class="nav_add_address">
                    <a class="box" href="add_selection_address.php?admin=<?php echo urldecode($username)?>">Thêm địa chỉ</a>
                </div>
            </div>
            <?php
                $sql = "SELECT * FROM address where username ='$username'";
                $result = $mysqli->query($sql);
                // output data of each row
                while ($row = $result->fetch_assoc() ) {
                ?>
                        <div class="UUD4No SXp5o_" style="margin-left: 2%; margin-right: 5%">
                            <div class="_RPpod">
                                <div role="heading" class="X57SfF V4So7f" >
                                    <div id="address-card_ece04d21-3363-470d-872a-0515990bdad5_header" class="QyRpwQ lWXnp3">
                                <span class="Fi1zsg OwAhWT">
                                    <div class="mjiDsj"><?php echo ($row['name']) ?>
                                    </div>
                                </span>
                                        <div class="YJU6OK"></div>
                                        <span class="Fi1zsg OwAhWT">
                                    <div class="mjiDsj"><?php echo ($row['phone'])?></div>
                                </span>
                                    </div>

                                    <form method="POST">
                                        <div class="YziUfM">
                                            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                            <input type="submit" name="submit_update" class="T_oZqJ" value="Cập nhật">
                                            <div class="YJU6OK"></div>
                                            <a class="T_oZqJ"
                                               href="address.php?admin=<?php echo ($row['username']); ?>
                                                &id=<?php echo ($row['id']); ?>">Xóa
                                            </a>
                                        </div>
                                    </form>

                                </div>
                                <div id="address-card_ece04d21-3363-470d-872a-0515990bdad5_content"
                                     role="heading" class="X57SfF V4So7f">
                                    <div class="QyRpwQ lWXnp3">
                                        <div class="We6XvC">
                                            <div role="row" class="E24UKj"><?php echo ($row['detail'])?></div>
                                            <div role="row" class="E24UKj">
                                                <?php echo ($row['district'].", ".$row['city'].", ".$row['country'])?>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="POST">
                                        <div class="KFu3R3 YziUfM">
                                            <input type="hidden" name="id"
                                                   value="<?php echo $row['id'];?>">

                                            <input type="submit" name="submit_select"
                                                   class="k8tV5Y zvyzwn zDPndA" value="Chọn">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
            ?>
        </div>
    </div>
</body>
</html>