<?php
ini_set("display_errors","off");
?>
<div class="menu-pri">
    <div class="container">
        <div class="panel-left">
            <!--MOBILE-->
            <nav class="navbar navbar-default hidden-md hidden-lg" role="navigation">
                <div class="container-fluid" style="background-color: #0fd872;">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar primary-color"></span>
                            <span class="icon-bar primary-color"></span>
                            <span class="icon-bar primary-color"></span>
                        </button>
                        <a class="navbar-brand" style="color: #fff;" href="#">Danh mục sản phẩm</a>
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse hidden-md hidden-lg">

                        <?php
                        $listcat = $this->Mcategory->category_menu(0);
                        $html_menu = '<ul class="nav navbar-nav">';
                        foreach ($listcat as $menu) {
                            $parentid = $menu['id'];
                            $submenu = $this->Mcategory->category_menu($parentid);
                            $html_menu .= '<li class="dropdown">';
                            $html_menu .= "<a href='san-pham/" . $menu['link'] . "' class='dropdown-toggle' data-toggle='dropdown'>";
                            $html_menu .= $menu['name'];
                            if (!empty($submenu)) {
                                $html_menu .= '<i class="fa fa-angle-right pull-right" aria-hidden="true">';
                                $html_menu .= '</i>';
                            }
                            $html_menu .= "</a>";
                            if (count($submenu)) {
                                $html_menu .= '<ul class="dropdown-menu">';
                                foreach ($submenu as $menu1) {
                                    $html_menu .= '<li>';
                                    $html_menu .= "<a href='san-pham/" . $menu1['link'] . "'> " . $menu1['name'] . "</a>";
                                    $html_menu .= "</li>";
                                }
                                $html_menu .= "</ul>";
                            }
                            $html_menu .= "</li>";
                        }
                        $html_menu .= "</ul>";
                        echo $html_menu;
                        ?>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
            <!--MD LG-->
        </div>
        <div class="col-md-12 col-lg-12 panel-right hidden-xs text-center">
            <ul class="menu-right" style="display: inline-block;">
                <li class="pull-left"><a href="" class=""><i class="fas fa-home u" aria-hidden="true"></i> Trang chủ</a></li>
                <li class="pull-left"><a href="san-pham"><i class="fas fa-cart-plus" aria-hidden="true"></i> Sản phẩm</a></li>
                <?php
                $listcat = $this->Mcategory->category_menu(0);
                $html = '';
                foreach ($listcat as $menu) {
                    $html = '<li class="pull-left">';
                    $html .= "<a href='san-pham/" . $menu['link'] . " '>";
                    $html .= $menu['name'];
                    $html .= "</a>";
                    $html .= '</li>';
                    echo $html;
                }
                ?>
                <li class="pull-left"><a href="tin-tuc/1"><i class="fas fa-ticket-alt" aria-hidden="true"></i> Tin tức</a></li>
                <li class="pull-left"><a href="gioi-thieu"><i class="fas fa-user" aria-hidden="true"></i> Giới thiệu</a></li>
                <!-- <li class="pull-left"><a href="lien-he"><i class="fab fa-facebook-messenger" aria-hidden="true"></i> Liên hệ</a></li> -->
            </ul>
        </div>
    </div>
</div>
<style>
    .menu-right {
        margin-top: 16px;
        position: relative;
        background-clip: padding-box;
        border: 15px solid transparent;
        display: inline-block;
        height: 80px;
        border-radius: 18px;
        background-color: #f3f3f3;
        z-index:100;

    }

    .menu-right::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: -1;
        margin: -10px;
        border-radius: inherit;
        /* background-image: linear-gradient(to bottom right, rgba(27, 124, 250, 0.1) 10%, rgba(243, 13, 13, 0.1) 70%); */
        background-color: #fafafa;
        animation-name: bg;
        animation-duration: 1s;
        animation-direction: normal;
        animation-iteration-count: infinite;

    }

    @keyframes bg {
        to {
            /* background-image: linear-gradient(to  right, #f0f0f0 60%, rgba(27, 124, 250, 0.1) 10%); */
            background-color: #f3f3f3;
        }
    }

    .menu-right li a {
        color: darkred;
        font-size: 15px;
    }

    .menu-right li a:hover {
        background-image: linear-gradient(to right, rgb(223, 39, 134), rgb(244, 22, 22));
    }
</style>
<script>
    window.onscroll=function(){
        var header=document.querySelector(".menu-right");
        if(document.documentElement.scrollTop>150||docuemnt.body.scrollTop>150){
          
            header.style.position="fixed";

            header.style.top=0;
            
        }
        else{
            header.style.position="relative";
        }
        console.log(header)
    }
</script>
<style>
	.nav.navbar.navbar-nav.pull-right li {
		background-image: linear-gradient(to right, rgb(223, 39, 134), rgb(244, 22, 22));
		margin: 10px 28px 10px 8px;
		border-radius: 10px;
		position: relative;
		box-sizing: border-box;

	}

	.menu-right li a {
		color: gray ;
		font-weight: 500;
		border-radius: 40px;
	}

	.menu-right .pull-left a:hover,.menu-right .pull-left a.active_menu {
		background: gray !important;
		color: #fafafa !important;
		border:3px solid aqua;
		
	}
 
	.nav.navbar.navbar-nav.pull-right li:before {
		content: "";
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
		background-image: inherit;
		transform: scale(1.2, 1.2);
		border-radius: inherit;
		opacity: 0.3;
	}
</style>
<script>
    const location_=location.href;
    const menu_item=document.querySelectorAll(".menu-right .pull-left a");
    const length=menu_item.length;
    for(let i=0;i<length;i++){
        if(menu_item[i].href===location_){
            menu_item[i].className="active_menu";
        }
    }
</script>
