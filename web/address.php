<?php session_start(); ?>
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
        <div style="display: flex;">
            <?php include ('link_personalinfo.php')?>
            <div class="div_right">
                <div class="UUD4No SXp5o_">
                    <div class="_RPpod">
                        <div role="heading" class="X57SfF V4So7f">
                            <div id="address-card_ece04d21-3363-470d-872a-0515990bdad5_header" class="QyRpwQ lWXnp3">
                                <span class="Fi1zsg OwAhWT">
                                    <div class="mjiDsj">Nhajat truong</div>
                                </span>
                                <div class="YJU6OK"></div>
                                <div role="row" class="N_WJUf lw_xYb E24UKj">0345295121</div>
                            </div>

                            <div class="YziUfM">
                                <button class="T_oZqJ">Cap nhat</button>
                                <button class="T_oZqJ">Xoa</button>
                            </div>
                        </div>
                            <div id="address-card_ece04d21-3363-470d-872a-0515990bdad5_content"
                                 role="heading" class="X57SfF V4So7f">
                                <div class="QyRpwQ lWXnp3">
                                    <div class="We6XvC">
                                        <div role="row" class="E24UKj">kinh duong vuong</div>
                                        <div role="row" class="E24UKj">binh tan, hcm</div>
                                    </div>
                                </div>

                                <div class="KFu3R3 YziUfM">
                                    <button class="k8tV5Y zvyzwn zDPndA">thiet lap mac dinh</button>
                                </div>
                            </div>
                        <div class="address-card_4153ddf3-8212-453b-a076-21b3978fa10f_badge" role="row" class="vy2yND E24UKj"> </div>
                    </div>
                </div>
            </div>
    </div>

<?php include("footer.php");?>
</body>
</html>