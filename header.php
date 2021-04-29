<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mealledi</title>
    <!-- Link bootstrap 4 -->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <!-- Link css -->
    <link rel="stylesheet" href="assets/sass/style.css">
    <!-- link css carousel -->
    <link rel="stylesheet" href="assets/carousel/">
    <!-- Google font -->
    <link rel="stylesheet" href="assets/fonts/myriad-pro.css">
</head>
<body>
    <?php
        function svg($name, $width = false)
        {
            $dir  = 'assets/icon/';
            $path = $dir . $name . '.svg';
        
            if ($name && file_exists($path)) {
                $svg = file_get_contents($path);
            if ($width) {
                $size = '<svg';
                $new_size = '<svg width="' . $width . 'px"';
                $svg = str_replace($size, $new_size, $svg);
            }
                return $svg;
            }
            return '';
        }
    ?>
    <div class="overlay"></div>
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-top__content">
                    <div class="header-top__lang">
                        <p>Chọn ngôn ngữ</p>
                        <a href="#">Vi</a>
                    </div>
                    <div class="header-top__bright">
                        <p>Đặt hàng & giao tận nơi
                            <a href="#">1800 6828</a>
                        </p>
                        <div class="header-top__divide"></div>
                        <a class="btn-white" href="#">Truy xuất nguốn gốc</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="nav">
                    <ul class="nav__list">
                        <li class="current-item"><a href="#">Trang chủ</a></li>
                        <li><a href="#">Câu chuyện thịt sạch MEATDELI</a></li>
                        <li><a href="#">Sản phẩm</a></li>
                        <li class="nav__logo">
                            <a href="#">
                                <img src="assets/images/logo.svg" alt="">
                            </a>
                        </li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Góc ẩm thực</a></li>
                        <li><a href="#">Cửa hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main id="page-wrapper">
