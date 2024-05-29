<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo base_url(); ?>">
    </base>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        <?php
        if (isset($title))
            echo $title;
        else
            echo "PTITFOOD - CĂN TIN HỌC VIỆN HOÀNG GIA";
        ?>
    </title>
    <link rel="icon" href="public/images/favicon.png" />
    <script type="module" crossorigin src="public/js/index.js"></script>
    <link rel="modulepreload" href="public/js/vendor.js">
    <link rel="stylesheet" href="public/css/index.2aaa860d.css">



    <link rel="icon" type="image/x-icon" href="public/images/icon.png">
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link href="public/css/font-awesome.css" rel="stylesheet">
    <link href="public/css/lte.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="public/css/owl.carousel.min.css" rel="stylesheet">
    <link href="public/css/AdminLTE.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style-jc.css">
    <link href="public/css/menu-tab.css" rel="stylesheet">
    <link href="public/css/jquery.bxslider.css" rel="stylesheet">
    <link href="public/css/flexslider.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/about-style.css" rel="stylesheet">
    <link rel="icon" href="public/images/favicon.png" />
    <script type="module" crossorigin src="gioithieu/"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>


    <script src="public/js/jquery-2.2.3.min.js"></script>
    <style>
        body::-webkit-scrollbar {
            /* chiều rộng của thanh scroll */
            width: 15px;
        }

        body,
        .navbar-collaps {
            /* background-image: linear-gradient(to left top, rgba(103, 106, 106, 0.2), rgba(196, 204, 207, 0.3)) !important; */
            /* background: #fafafa; */
            background-color: #efefef;

            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 18px;

        }

        body::-webkit-scrollbar-thumb {
            background-image: linear-gradient(to bottom, rgba(165, 20, 184, 0.6), rgba(24, 144, 224, 0.8));
            border-radius: 10px;
        }

        body::-webkit-scrollbar-track {
            background-image: linear-gradient(to left bottom, rgba(182, 236, 227, 0.3), rgba(235, 16, 187, 0.4));
            border-radius: 10px;
            margin: 20px;
        }

        .bottom_support .hotline_bottom {
            background-image: linear-gradient(to right, rgba(243, 9, 52, 0.8), rgba(29, 173, 193, 0.8)) !important;
            border-top: 2px solid red;
        }

        .bottom_support .guide_payment {
            background-image: linear-gradient(to right, rgba(29, 173, 193, 0.8), rgba(243, 9, 52, 0.8)) !important;
            border-top: 2px solid red;
        }

        .bottom_support .advisory_online {
            background-image: linear-gradient(to right, rgba(243, 9, 52, 0.8), rgba(29, 173, 193, 0.8)) !important;
            border-top: 2px solid red;
        }
    </style>
</head>

<!-- TOPBAR -->
<?php
$this->load->view('frontend/modules/topbar');
?>
<!-- HEADER LOGO + SEARCH -->
<?php
$this->load->view('frontend/modules/logo-search');
?>
<!-- <?php
        $this->load->view('frontend/modules/category');
        ?> -->
<section id="menu-slider">
    <?php
    $this->load->view('frontend/modules/panel-left');
    ?>
</section>
<!--CONTENT-->
<?php
if (isset($com, $view)) {
    $this->load->view('frontend/components/' . $com . '/' . $view);
} else
    $this->load->view('frontend/components/Error404/index');
?>
<!--FOOTER-->
<?php
$this->load->view('frontend/modules/footer');
?>
<script>
    let phone_contact = document.querySelectorAll(".bottom_support .hotline_bottom strong");
    for (index in phone_contact.length) {
        phone_contact[index].innerHTML = "0111222333";
    }
</script>
<script src="public/js/bootstrap.js"></script>
<script src="public/js/app.min.js"></script>
<script src="public/js/owl.carousel.js"></script>
<script src="public/js/jquery.jcarousel.js"></script>
<script src="public/js/jcarousel.connected-carousels.js"></script>
<script src="public/js/scroll.js"></script>
<script src="public/js/search-quick.js"></script>
<script src="public/js/custom-owl.js"></script>
<script src="public/js/jquery.flexslider.js"></script>
<div class="backtop">
  <a href="javascript:;" onclick="backtop()">  <img src="public/images/backtop.png" alt=""></a>
</div>

</body>
<style>
    .backtop{
        
        position:fixed;
        bottom:80px;
        right:30px;
        max-width:45px;
        transform: rotate(-90deg); 
        /* cursor:pointer;  */
        display:none;
    }
    .backtop img{
        display:block;
        width:100%;
        height:100%;
    }
    .menu-right .pull-left a:hover,.menu-right .pull-left a.active_menu {
		background: gray !important;
		color: #fafafa !important;
		border:3px solid aqua;
		
	}
   
</style>
<script>
    window.onscroll=function(){
        var backtop=document.querySelector(".backtop");
        var header=document.querySelector(".menu-right");
        if(document.documentElement.scrollTop>100||document.body.scrollTop>100){
            backtop.style.display="block";
         
            header.style.position="fixed";
            header.style.top= "-30px";
           
            header.style.left= 0;
            header.style.opacity= 0.6;
            header.style.top=-100;
            
        }
        else{
            backtop.style.display="none";
            header.style.position="relative";
        }
    }
    function backtop(){
        var top=setInterval(function(){
            document.documentElement.scrollTop-=20;

            if(document.documentElement.scrollTop<=0){
               
                clearInterval(top);
            }
        },10);
    }
</script>

</html>