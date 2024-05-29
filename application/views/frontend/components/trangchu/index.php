
<section id="menu-slider">
    <div class="slider ">
        <div class="container reveal fade-bottom active">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 list-menu pull-left ptitfood-menu" style="height: 321px;">
                <div class="ptitfood-info">
                    <a href="#" class="info-item_link first-item"><i class="fas fa-school"></i>WELCOME TO PTITFOOD</a>
                    <ul class="info-list">
                        <li class="info-item">
                            <a href="#trend" class="info-item_link">MÓN ĂN BÁN CHẠY</a>
                        </li>
                        <li class="info-item">
                            <a href="#hot" class="info-item_link">MÓN ĂN NỔI BẬT</a>
                        </li>
                        <li class="info-item">
                            <a href="#new" class="info-item_link">TIN TỨC</a>
                        </li>
                        <li class="info-item">
                            <a href="#footer" class="info-item_link">THÔNG TIN</a>
                        </li>
                        <!-- <li class="info-item">
                            <a href="#" class="info-item_link"></a>
                            trend,hot,new,footer
                        </li> -->
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 slider-main pull-left">
                <?php
                $this->load->view('frontend/modules/slider');
                ?>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <?php
            $listCategory = $this->Mcategory->category_list(0, '10');
            foreach ($listCategory as $rowCategory) :
                //lấy subcategory
                $subCategory = $this->Mcategory->category_list($rowCategory['id'], '10');
                //lấy categoryID
                $catId = $this->Mcategory->category_id($rowCategory['link']);
                //danh sách category
                $listCatId = $this->Mcategory->category_listcat($catId);
                //giới hạn sản phẩm mỗi danh mục
                $listProducts = $this->Mproduct->product_home_limit($listCatId, 10);
                //lẫy những category có số lượng sản phẩm lớn hơn 5
                if ((count($listProducts) >= 5)) : ?>
                    <div class="list-product">
                        <div class="list-header-z">
                            <h2><a href="<?php echo  $rowCategory['link'] ?>"> <img src="http://localhost/ptitfood/public/images/hot.gif" alt=""> <?php echo  $rowCategory['name'] ?> nổi bật <img src="http://localhost/ptitfood/public/images/hot.gif" alt=""></a></h2>
                            <b>
                                <ul class="sub-category ">
                                    <?php foreach ($subCategory as $rowSubCategory) : ?>
                                        <li>
                                            <a href="san-pham/<?php echo $rowSubCategory['link'] ?>" title="<?php echo $rowSubCategory['name'] ?>" class="ws-nw overflow ellipsis">
                                                <?php echo $rowSubCategory['name'] ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </b>
                        </div>
                        <div class="product-container ">
                            <?php foreach ($listProducts as $sp) : ?>
                                <div class="p-box-5">
                                    <div class="product-lt">
                                        <div class="lt-product-group-image">
                                            <a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>">
                                                <img class="img-p" src="public/images/products/<?php echo $sp['avatar'] ?>" alt="">
                                            </a>

                                            <?php if ($sp['sale'] > 0) : ?>
                                                <div class="giam-percent">
                                                    <span class="text-giam-percent">Giảm <?php echo $sp['sale'] ?>%</span>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="lt-product-group-info">
                                            <a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>" style="text-align: left;">
                                                <h3><?php echo $sp['name'] ?></h3>
                                            </a>
                                            <div class="price-box">
                                                <?php if ($sp['sale'] > 0) : ?>

                                                    <p class="old-price">
                                                        <span class="price"><?php echo (number_format($sp['price'])); ?>₫</span>
                                                    </p>
                                                    <p class="special-price">
                                                        <span class="price"><?php echo (number_format($sp['price_sale'])); ?>₫</span>
                                                    </p>
                                                <?php else : ?>
                                                    <p class="old-price">
                                                        <span class="price" style="color: #fff"><?php echo (number_format($sp['price'])); ?>₫</span>
                                                    </p>
                                                    <p class="special-price">
                                                        <span class="price"><?php echo (number_format($sp['price'])); ?>₫</span>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="divider" style="height: 20px;"></div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="container" style="margin-bottom: 20px;">
    </div>
    <div class="container reveal fade-left box_scoll " style="margin-bottom: 20px;">
        <div class="recommend-prod">
            <div class="sale-title">
                <span id="hot" class="title-cart" style="color:red;"><i class="fas fa-cat"></i> KHUYẾN MÃI HOT</span>
                <a href="#">XEM TẤT CẢ <i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="owl-carousel owl-carousel-product owl-theme">
                <?php
                $product_sale = $this->Mproduct->product_sale(10);
                foreach ($product_sale as $row) : ?>
                    <div class="item" style="margin: 0px;">
                        <div class="products-sale">
                            <div class="lt-product-group-image">
                                <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>">
                                    <img class="img-p" src="public/images/products/<?php echo $row['avatar'] ?>" alt="">
                                </a>

                                <?php if ($row['sale'] > 0) : ?>
                                    <div class="giam-percent">
                                        <span class="text-giam-percent">Giảm <?php echo $row['sale'] ?>%</span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="lt-product-group-info">
                                <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>" style="text-align: left;">
                                    <h3><?php echo $row['name'] ?></h3>
                                </a>
                                <div class="price-box">
                                    <?php if ($row['sale'] > 0) : ?>

                                        <p class="old-price">
                                            <span class="price"><?php echo (number_format($row['price'])); ?>₫</span>
                                        </p>
                                        <p class="special-price">
                                            <span class="price"><?php echo (number_format($row['price_sale'])); ?>₫</span>
                                        </p>
                                    <?php else : ?>
                                        <p class="old-price">
                                            <span class="price" style="color: #fff"><?php echo (number_format($row['price'])); ?>₫</span>
                                        </p>
                                        <p class="special-price ">
                                            <span class="price"><?php echo (number_format($row['price'])); ?>₫</span>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="clear "></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>



    <div id="trend" class="container show_produc reveal fade-bottom box_scoll " style="margin-bottom: 20px;">
        <div class="recommend-prod">
            <div class="sale-title">
                <span class="title-cart"><i class="fas fa-cat"></i> MÓN ĂN BÁN CHẠY NHẤT </span>
                <a href="#">XEM TẤT CẢ <i class="fas fa-chevron-right"></i></a>
            </div>
            <div class="owl-carousel owl-carousel-product owl-theme">
                <?php
                $product_sale = $this->Mproduct->product_selling(10);
                foreach ($product_sale as $row) : ?>
                    <div class="item" style="margin: 0px;">
                        <div class="products-sale">
                            <div class="lt-product-group-image">
                                <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>">
                                    <img class="img-p" src="public/images/products/<?php echo $row['avatar'] ?>" alt="">
                                </a>
                                <?php if ($row['sale'] > 0) : ?>
                                    <div class="giam-percent">
                                        <span class="text-giam-percent">Giảm <?php echo $row['sale'] ?>%</span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="lt-product-group-info">
                                <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>" style="text-align: left;">
                                    <h3><?php echo $row['name'] ?></h3>
                                </a>
                                <div class="price-box">
                                    <?php if ($row['sale'] > 0) : ?>

                                        <p class="old-price">
                                            <span class="price"><?php echo (number_format($row['price'])); ?>₫</span>
                                        </p>
                                        <p class="special-price">
                                            <span class="price"><?php echo (number_format($row['price_sale'])); ?>₫</span>
                                        </p>
                                    <?php else : ?>
                                        <p class="old-price">
                                            <span class="price" style="color: #fff"><?php echo (number_format($row['price'])); ?>₫</span>
                                        </p>
                                        <p class="special-price">
                                            <span class="price"><?php echo (number_format($row['price'])); ?>₫</span>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>

</section>


<div class="home-blog reveal fade-right box_scoll " id="new">
    <div class="container">
        <div class="row-p">
            <div class="text-center">
                <h2 class="sectin-title title title-blue"> <img src="http://localhost/organic/upload/icon/hot.gif" alt=""> Tin tức <img src="http://localhost/organic/upload/icon/hot.gif" alt=""></h2>
            </div>
        </div>
        <div class="blog-content">
            <?php
            $listBaiViet = $this->Mcontent->content_list_home(6, 'all');
            foreach ($listBaiViet as $rowPost) : ?>
                <div class="col-xs-12 col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="latest">
                        <a href="tin-tuc/<?php echo $rowPost['alias'] ?>">
                            <div class="tempvideo">
                                <img width="98%" src="public/images/posts/<?php echo $rowPost['img'] ?>">
                            </div>
                            <h3 class="content-heading" style="color: #000;"><?php echo $rowPost['title'] ?></h3>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
 <div class="adv">
    <section id="service" style="margin: 20px;">
        <div class="container reveal fade-right">
            <div class="row">
                <div id="service_home" class="clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center m-b-xs-10">
                        <div class="service_item">
                            <div class="icon icon_product">
                                <img src="public/images/icon_142e7.png" alt="">
                            </div>
                            <div class="description_icon">
                                <span class="large-text">
                                    Miễn phí giao hàng
                                </span>
                                <span class="small-text">
                                    Cho hóa đơn từ 300,000 đ
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center m-b-xs-10">
                        <div class="service_item">
                            <div class="icon icon_product">
                                <img src="public/images/icon_242e7.png" alt="">
                            </div>
                            <div class="description_icon">
                                <span class="large-text">
                                    Giao hàng trong ngày
                                </span>
                                <span class="small-text">
                                    Với tất cả đơn hàng
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center m-b-xs-10">
                        <div class="service_item">
                            <div class="icon icon_product">
                                <img src="public/images/icon_342e7.png" alt="">
                            </div>
                            <div class="description_icon">
                                <span class="large-text">
                                    Sản phẩm an toàn
                                </span>
                                <span class="small-text">
                                    Cam kết chính hãng
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--Begin-->
    <!--End-->
</div>
<!--amination =============================================================================================================== -->
<style>

.reveal {
        position: relative;
        opacity: 0;
    }
    
    .reveal.active {
        opacity: 1;
    }
    
    .active.fade-bottom {
        animation: fade-bottom 0.5s ease-in;
    }
    
    .active.fade-left {
        animation: fade-left 0.5s ease-in;
    }
    
    .active.fade-right {
        animation: fade-right 0.5s ease-in;
    }
    
    @keyframes fade-bottom {
        0% {
            transform: translateY(50px);
            opacity: 0;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }
    
    @keyframes fade-left {
        0% {
            transform: translateX(-100px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes fade-right {
        0% {
            transform: translateX(100px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }
    .ptitfood-info .info-list li a:hover, .ptitfood-info .info-list li a:active{
        background: #00c2cb;
        color: #42455a;
        transition: 0.5s ease-out;
        letter-spacing: 2px;
    }
</style>
<script>


 
  
    
  
    


let section = document.querySelectorAll(".box_scoll");
    let menu = document.querySelectorAll(".ptitfood-info .info-list li a");

    window.onscroll = () => {
        section.forEach((i) => {
            let top = window.scrollY;
            let offset = i.offsetTop - 150;
            let height = i.offsetHeight;
            let id = i.getAttribute("id");

            if (top >= offset && top < offset + height) {
                menu.forEach((link) => {
                    link.classList.remove("active");
                    document
                        .querySelector(".ptitfood-info .info-list li a[href*=" + id + "]")
                        .classList.add("active");
                });
            }
        });
    };
   

   
 


    function reveal() {
        var reveals = document.querySelectorAll(".reveal");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    window.addEventListener("scroll", reveal);
</script>
<!--animation =============================================================================================================== -->

<!--=== BEGIN: SITE PHẢI ===-->
<style type="text/css">
    .alo-ph-img-circle {
        width: 30px;
        height: 30px;
        top: 35px;
        left: 35px;
        position: absolute;
        background: rgba(30, 30, 30, 0.1) url(https://1.bp.blogspot.com/-UbTOXZnLovo/V9kU1RLbX4I/AAAAAAAAGYA/4qQQ0CBifcM8IlNe7f-aVL2Ln-wzLcF4wCLcB/s1600/alo.png) no-repeat center center;
        background-size: contain;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid transparent;
        opacity: .7;
        -webkit-animation: alo-circle-img-anim 1s infinite ease-in-out;
        -moz-animation: alo-circle-img-anim 1s infinite ease-in-out;
        -ms-animation: alo-circle-img-anim 1s infinite ease-in-out;
        -o-animation: alo-circle-img-anim 1s infinite ease-in-out;
        animation: alo-circle-img-anim 1s infinite ease-in-out;
        -webkit-transform-origin: 50% 50%;
        -moz-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        -o-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }

    .alo-phone {
        position: fixed;
        visibility: hidden;
        background-color: transparent;
        width: 100px;
        height: 100px;
        cursor: pointer;
        z-index: 999;
        -webkit-backface-visibility: hidden;
        -webkit-transform: translateZ(0);
        -webkit-transition: visibility .5s;
        -moz-transition: visibility .5s;
        -o-transition: visibility .5s;
        transition: visibility .5s;
        right: 0;
        top: 0
    }

    .alo-phone.alo-show {
        visibility: visible
    }

    .alo-phone:hover {
        opacity: 1
    }

    .alo-ph-circle {
        width: 100px;
        height: 100px;
        top: 0;
        left: 0;
        position: absolute;
        background-color: transparent;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid rgba(30, 30, 30, 0.4);
        border: 2px solid #bfebfc;
        opacity: .1;
        -webkit-animation: alo-circle-anim 1.2s infinite ease-in-out;
        -moz-animation: alo-circle-anim 1.2s infinite ease-in-out;
        -ms-animation: alo-circle-anim 1.2s infinite ease-in-out;
        -o-animation: alo-circle-anim 1.2s infinite ease-in-out;
        animation: alo-circle-anim 1.2s infinite ease-in-out;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -moz-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        -o-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }

    .alo-phone:hover .alo-ph-circle,
    .hotline&gt;

    a:hover .alo-ph-circle {
        border-color: #00aff2;
        opacity: .5
    }

    .alo-phone.alo-green:hover .alo-ph-circle,
    .hotline&gt;

    a:hover .alo-ph-circle {
        border-color: #04AFEF;
        border-color: #baf5a7;
        opacity: .5
    }

    .alo-phone.alo-green .alo-ph-circle {
        border-color: #ffbc0a;
        border-color: #bfebfc;
        opacity: .5
    }

    .alo-ph-circle-fill {
        width: 60px;
        height: 60px;
        top: 20px;
        left: 20px;
        position: absolute;
        background-color: #000;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid transparent;
        opacity: .1;
        -webkit-animation: alo-circle-fill-anim 2.3s infinite ease-in-out;
        -moz-animation: alo-circle-fill-anim 2.3s infinite ease-in-out;
        -ms-animation: alo-circle-fill-anim 2.3s infinite ease-in-out;
        -o-animation: alo-circle-fill-anim 2.3s infinite ease-in-out;
        animation: alo-circle-fill-anim 2.3s infinite ease-in-out;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -moz-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        -o-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }

    .alo-phone:hover .alo-ph-circle-fill,
    .hotline&gt;

    a:hover .alo-ph-circle-fill {
        background-color: rgba(0, 175, 242, 0.5);
        background-color: #00aff2;
        opacity: .75 !important
    }

    .alo-phone.alo-green:hover .alo-ph-circle-fill,
    .hotline&gt;

    a:hover .alo-ph-circle-fill {
        background-color: rgba(4, 175, 239, 0.5);
        background-color: #baf5a7;
        opacity: .75 !important
    }

    .alo-phone.alo-green .alo-ph-circle-fill {
        background-color: rgba(255, 188, 10, 0.5);
        background-color: #ffbc0a;
        opacity: .75 !important
    }

    .alo-phone:hover .alo-ph-img-circle,
    .hotline&gt;

    a:hover .alo-ph-img-circle {
        background-color: #00aff2
    }

    .alo-phone.alo-green.alo-hover .alo-ph-img-circle,
    .alo-phone.alo-green:hover .alo-ph-img-circle,
    .hotline&gt;

    a:hover .alo-ph-img-circle {
        background-color: #04AFEF;
        background-color: #04AFEF
    }

    .alo-phone.alo-green .alo-ph-img-circle {
        background-color: #ffbc0a;
        background-color: #ffbc0a
    }

    @-moz-keyframes alo-circle-anim {
        0% {
            transform: rotate(0) scale(.5) skew(1deg);
            opacity: .1
        }

        30% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5
        }

        100% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .1
        }
    }

    @-webkit-keyframes alo-circle-anim {
        0% {
            transform: rotate(0) scale(.5) skew(1deg);
            opacity: .1
        }

        30% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5
        }

        100% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .1
        }
    }

    @-o-keyframes alo-circle-anim {
        0% {
            transform: rotate(0) scale(.5) skew(1deg);
            opacity: .1
        }

        30% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5
        }

        100% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .1
        }
    }

    @keyframes alo-circle-anim {
        0% {
            transform: rotate(0) scale(.5) skew(1deg);
            opacity: .1
        }

        30% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5
        }

        100% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .1
        }
    }

    @-moz-keyframes alo-circle-fill-anim {
        0% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }

        50% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }

        100% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }

    @-webkit-keyframes alo-circle-fill-anim {
        0% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }

        50% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }

        100% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }

    @-o-keyframes alo-circle-fill-anim {
        0% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }

        50% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }

        100% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }

    @keyframes alo-circle-fill-anim {
        0% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }

        50% {
            transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }

        100% {
            transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
    }

    @-moz-keyframes alo-circle-img-anim {
        0% {
            transform: rotate(0) scale(1) skew(1deg)
        }

        10% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        20% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        30% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        40% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        50% {
            transform: rotate(0) scale(1) skew(1deg)
        }

        100% {
            transform: rotate(0) scale(1) skew(1deg)
        }
    }

    @-webkit-keyframes alo-circle-img-anim {
        0% {
            transform: rotate(0) scale(1) skew(1deg)
        }

        10% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        20% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        30% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        40% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        50% {
            transform: rotate(0) scale(1) skew(1deg)
        }

        100% {
            transform: rotate(0) scale(1) skew(1deg)
        }
    }

    @-o-keyframes alo-circle-img-anim {
        0% {
            transform: rotate(0) scale(1) skew(1deg)
        }

        10% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        20% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        30% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        40% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        50% {
            transform: rotate(0) scale(1) skew(1deg)
        }

        100% {
            transform: rotate(0) scale(1) skew(1deg)
        }
    }

    @keyframes alo-circle-img-anim {
        0% {
            transform: rotate(0) scale(1) skew(1deg)
        }

        10% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        20% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        30% {
            transform: rotate(-25deg) scale(1) skew(1deg)
        }

        40% {
            transform: rotate(25deg) scale(1) skew(1deg)
        }

        50% {
            transform: rotate(0) scale(1) skew(1deg)
        }

        100% {
            transform: rotate(0) scale(1) skew(1deg)
        }
    }

    #alo-fixed {
        visibility: visible;
        opacity: 0;
        position: fixed;
        right: -100px;
        top: 100px
    }

    #alo-fixed.show {
        right: 10px;
        visibility: visible;
        opacity: 1
    }
</style>

<a href="tel:0333.441.620" rel="nofollow">
    <div class="alo-phone alo-green alo-show">
        <div class="alo-ph-circle"></div>
        <div class="alo-ph-circle-fill"></div>
        <div class="alo-ph-img-circle"></div>
    </div>
</a>
<!--=== CALL LIÊN HỆ ĐỘNG ===-->

<!--=== FOOTER LIÊN HỆ NGANG ===-->


<div class="bottom_support" style="z-index:999px;">
    <div class="wrap_bottom">
        <div class="hotline_bottom"> <span class="ico"><img src="https://1.bp.blogspot.com/-2t8Fkz-XcxY/V34e6T2c2zI/AAAAAAAAFTU/TljIpi_TLjs1HttVtsWB-mEsS1fPrAhpwCLcB/s1600/bottom_support_ico_phone.png" /></span>
            <div class="txt">Hotline: <strong>033.622.1622</strong> - <strong>0909.678.999</strong> <span>(CSKH)</span></div>
        </div>
        <div class="guide_payment"> <a target="_blank" href="http://localhost/ptitfood/tin-tuc/huong-dan-thanh-toan"> <span class="ico"><img src="https://4.bp.blogspot.com/-HcT7Kt4C8VA/V34fL1DNrWI/AAAAAAAAFTc/UI3fSHd7TesOTyf94TjnShxvy8quhImLACLcB/s1600/bottom_support_ico_guidepayment.png" /></span> <span class="txt">Hướng dẫn thanh toán</span> </a> </div>
        <div class="advisory_online"> <a target="_blank" href="https://www.facebook.com/bao060101/"> <span class="ico"><img src="https://2.bp.blogspot.com/-C5F14CaOBhc/V34fL7_9p8I/AAAAAAAAFTY/QaXidsUV5xk_GaKaDZY8XW2lHMNT0XUkwCLcB/s1600/bottom_support_ico_advisoryonline.png" /></span> <span class="txt">Tư vấn online</span> </a> </div>
    </div>
</div>
<style type="text/css">
    /* contact admin start */
    .bottom_support {
        height: 45px;
        width: 96%;
        position: fixed;
        bottom: 0;
        background: transparent;
        font-family: 'Roboto Condensed', sans-serif;
        color: #fff;
        line-height: 45px;
        z-index: 9999
    }

    .bottom_support a {
        font-family: 'Roboto Condensed', sans-serif;
        color: #fff;
        line-height: 45px;
        font-size: 18px
    }

    .wrap_bottom {
        max-width: 1380px;
        margin: 0 auto
    }

    .bottom_support .hotline_bottom {
        background: #f5da8b;
        width: 40%;
        float: left;
        font-size: 16px;
        margin-left: 5%;
        position: relative
    }

    .bottom_support .hotline_bottom .ico {
        width: 16%;
        position: absolute;
        bottom: 0
    }

    .bottom_support .hotline_bottom .txt {
        margin-left: 16%
    }

    .bottom_support .hotline_bottom .ico img {
        max-width: 100%
    }

    .bottom_support .hotline_bottom strong {
        font-weight: bold;
        font-size: 19px
    }

    .bottom_support .hotline_bottom span {
        font-size: 13px
    }

    .bottom_support .guide_payment {
        background: linear-gradient(-60deg, #EECD6E 90%, #f5da8b 50%) no-repeat;
        width: 25%;
        float: left;
        position: relative
    }

    .bottom_support .guide_payment .ico {
        width: 20%;
        position: absolute;
        bottom: -25%;
        left: 15%
    }

    .bottom_support .guide_payment .ico img {
        max-width: 100%
    }

    .bottom_support .guide_payment .txt {
        margin-left: 35%
    }

    .bottom_support .advisory_online {
        background: linear-gradient(-60deg, #c34545 90%, #EECD6E 50%) no-repeat;
        width: 30%;
        float: left;
        position: relative
    }

    .bottom_support .advisory_online .ico {
        width: 20%;
        position: absolute;
        bottom: -10%;
        left: 15%
    }

    .bottom_support .advisory_online .ico img {
        max-width: 100%;
        float: left;
        margin-top: -20px
    }

    .bottom_support .advisory_online .txt {
        margin-left: 35%
    }

    @media screen and (max-width:1200px) {
        .bottom_support .hotline_bottom {
            width: 45%
        }

        .bottom_support .hotline_bottom .ico {
            width: 12%
        }

        .bottom_support .hotline_bottom .txt {
            margin-left: 12%
        }

        .bottom_support .guide_payment {
            width: 25%
        }

        .bottom_support .guide_payment .ico {
            bottom: -15%
        }

        .bottom_support .advisory_online {
            width: 25%
        }

        .bottom_support .advisory_online .ico {
            bottom: 0
        }
    }

    @media screen and (max-width:1000px) {
        .bottom_support {
            height: 40px;
            line-height: 40px
        }

        .bottom_support a {
            font-size: 17px;
            line-height: 40px
        }

        .bottom_support .hotline_bottom {
            margin-left: 2%;
            width: 48%
        }

        .bottom_support .guide_payment .ico {
            bottom: 0;
            left: 7%
        }

        .bottom_support .guide_payment .txt {
            margin-left: 27%
        }

        .bottom_support .advisory_online .ico {
            bottom: 10%;
            left: 10%
        }

        .bottom_support .advisory_online .txt {
            margin-left: 30%
        }
    }

    @media screen and (max-width:820px) {
        .bottom_support {
            height: 30px;
            line-height: 30px
        }

        .bottom_support a {
            font-size: 15px;
            line-height: 30px
        }

        .bottom_support .hotline_bottom {
            font-size: 15px
        }

        .bottom_support .hotline_bottom strong {
            font-size: 18px
        }

        .bottom_support .hotline_bottom span {
            font-size: 12px
        }
    }

    @media screen and (max-width:720px) {

        .bottom_support a,
        .bottom_support .hotline_bottom {
            font-size: 13px
        }

        .bottom_support .hotline_bottom strong {
            font-size: 15px
        }
    }

    @media screen and (max-width:620px) {
        .bottom_support {
            height: 25px;
            line-height: 25px
        }

        .bottom_support a {
            font-size: 11px;
            line-height: 25px
        }

        .bottom_support .hotline_bottom {
            margin-left: 0;
            width: 50%;
            font-size: 11px
        }

        .bottom_support .hotline_bottom strong {
            font-size: 15px
        }

        .bottom_support .hotline_bottom span {
            font-size: 11px
        }
    }

    @media screen and (max-width:560px) {
        .bottom_support {
            height: 20px;
            line-height: 20px
        }

        .bottom_support img {
            display: none
        }

        .bottom_support a {
            font-size: 10px;
            line-height: 20px
        }

        .bottom_support .hotline_bottom,
        .bottom_support .hotline_bottom span {
            font-size: 10px
        }

        .bottom_support .hotline_bottom strong {
            font-size: 13px
        }

        .bottom_support .hotline_bottom .txt {
            margin-left: 1%
        }

        .bottom_support .guide_payment .txt,
        .bottom_support .advisory_online .txt {
            margin-left: 15%
        }
    }

    @media screen and (max-width:440px) {
        .bottom_support .hotline_bottom {
            width: 55%
        }

        .bottom_support .guide_payment {
            width: 27%
        }

        .bottom_support .advisory_online {
            width: 18%
        }
    }

    @media screen and (max-width:400px) {

        .bottom_support a,
        .bottom_support .hotline_bottom,
        .bottom_support .hotline_bottom span {
            font-size: 9px
        }

        .bottom_support .hotline_bottom strong {
            font-size: 12px
        }
    }

    @media screen and (max-width:340px) {

        .bottom_support a,
        .bottom_support .hotline_bottom,
        .bottom_support .hotline_bottom span {
            font-size: 8px
        }
    }
</style>
</footer>

<!--=== ĐÓNG LIÊN HỆ NGANG ===-->

<!--=== CHATBOX ===-->
<script id="chatBroEmbedCode">
    /* Chatbro Widget Embed Code Start */
    function ChatbroLoader(chats, async) {
        async = !1 !== async;
        var params = {
                embedChatsParameters: chats instanceof Array ? chats : [chats],
                lang: navigator.language || navigator.userLanguage,
                needLoadCode: 'undefined' == typeof Chatbro,
                embedParamsVersion: localStorage.embedParamsVersion,
                chatbroScriptVersion: localStorage.chatbroScriptVersion
            },
            xhr = new XMLHttpRequest;
        xhr.withCredentials = !0, xhr.onload = function() {
            eval(xhr.responseText)
        }, xhr.onerror = function() {
            console.error('Chatbro loading error')
        }, xhr.open('GET', '//www.chatbro.com/embed.js?' + btoa(unescape(encodeURIComponent(JSON.stringify(params)))), async), xhr.send()
    }
    /* Chatbro Widget Embed Code End */
    ChatbroLoader({
        encodedChatId: '38TcG'
    });
</script>

<!--=== ĐÓNG CHATBOX ===-->
<style>
    .fa-cat,
    .title-cart {
        color: gray !important;
    }


    .ptitfood-info {
        /* background-image: linear-gradient(to right, rgba(243, 9, 52,0.8), rgba(29, 173, 193,0.8)); */
        background-image: linear-gradient(to right, rgb(223, 39, 134), rgb(244, 22, 22));
        border-radius: 5px;
        color: white;
    }

    .ptitfood-info .first-item,
    .ptitfood-info .first-item i {
        color: #dfe4eced;
        font-size: 18px;
    }

    .ptitfood-info .info-list li a {
        color: black;
        font-size: 1.5rem;
    }

    .recommend-prod,
    .home-blog .container,
    .clearfix .service_item {
        /* background-image: linear-gradient(to right, rgba(243, 9, 52,0.8), rgba(29, 173, 193,0.8)); */
        background: #f3f3f3;

        border-radius: 20px;
    }

    span.small-text {
        display: inline-block;
        background: red;
        color: transparent;
        background-clip: text;
        -webkit-background-clip: text;
        text-transform: uppercase;
        font-weight: 600;
    }

    /* khuyen ma hot */
    .recommend-prod .owl-stage-outer {
        padding: 20px;
        overflow: auto;
    }

    .recommend-prod .owl-stage-outer::-webkit-scrollbar{
        width: 0px;
        display: none;
    }

    .recommend-prod .owl-stage-outer .img-p {
        border-radius: 30% 0 30% 0;
    }

    .recommend-prod .owl-item:hover .img-p {
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);

    }

    .recommend-prod .owl-stage-outer .owl-item {







        z-index: 100;


        position: relative;
        /* background-clip: padding-box; */
        border: 15px solid transparent;

        border-radius: 30px;

        min-height: 370px;
        background-color: black;
        margin-top: 5px;

    }

    .recommend-prod .owl-stage-outer .owl-item:before {


        content: "";
        position: absolute;
        inset: 0;
        z-index: -100;
        margin: -10px;
        border-radius: inherit;
        background-image: linear-gradient(to right top, #3d9bb1, rgba(29, 173, 193, 0.1)) !important;


    }

    .lt-product-group-image a {
        display: block;
    }

    .lt-product-group-info h3 {
        text-align: center;
        color: white;
        font-size: 1.7rem;

    }

    .lt-product-group-info .price-box {

        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .lt-product-group-info .price-box p {
        padding: 20px;
        color: white;
    }

    .lt-product-group-info .price-box p span {

        color: white;
    }

    .lt-product-group-image .img-p {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;

    }

    .lt-product-group-inf a,
    .lt-product-group-inf div {
        text-align: center;
    }
</style>