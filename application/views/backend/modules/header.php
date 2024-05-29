<?php
ini_set("display_errors","off");
?>
<header class="main-header reveal fade-left active">
    <a href="<?php echo base_url()?>admin" class="logo">
        <span class="logo-lg">Quản trị hệ thống </span>
    </a>
    <nav class="navbar navbar-static-top" style="height: 50px">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <img style="width:20px;" src="public/images/list.png" alt="">
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav" style="height: 52px;  padding: 1px">
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i style="margin-right:10px;"class="fa fa-bell-o">Thông báo</i>
                      <span class="label label-warning"style="width:20px;height:15px;border-radius:30px;color: black !important;">
                          <?php
                          $approved = $this->Morders->orders_count_header();
                          $not_approved = $this->Morders->orders_count_header_not();
                          echo  $approved+$not_approved;
                        //   ?>
                      </span>
                  </a>
                  <ul class="dropdown-menu">
                      <li>
                        <ul class="menu">
                          <li>
                            <a href="#">
                              <i class="fa fa-users text-aqua"></i><a href="<?php echo base_url() ?>admin/orders">
                              <?php echo $this->Morders->orders_count_header_not();?> 
                              Đơn hàng chưa duyệt
                          </a>
                      </li>
                  </ul>
              </li>
              <li>
                <ul class="menu">
                  <li>
                      <i class="fa fa-users text-aqua"></i> <a href="<?php echo base_url() ?>admin/orders">
                      <?php echo $this->Morders->orders_count_header();?>
                      Đơn hàng đang giao
                  </a>
              </li>
          </ul>
      </li>
      <li class="footer"><a href="<?php echo base_url() ?>admin/orders">Xem</a></li>
  </ul>
</li>
<li style="height: 52px">
    <a target="_blank" href="<?php echo base_url(); ?>">
        <span class="glyphicon glyphicon-home"></span>
        <span>Website</span>
    </a>
</li>
<?php 
$image='';
if($user['img']){
    $image=$user['img'];
}else{
    $image='user.png';
}
?>
<li class="dropdown user user-menu" style="height: 52px; padding: 0px">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="public/images/admin/<?php echo $image ?>" class="user-image" alt="User Image">
        <span class="hidden-xs"><?php echo $user['fullname'] ?></span>
    </a>
    <ul class="dropdown-menu">
        <li class="user-header">
            <img src="public/images/admin/<?php echo $image ?>" class="img-circle" alt="User Image">
            <p><?php echo $user['fullname'] ?><small><?php echo $user['phone'] ?></small></p>
        </li>
        <li class="user-footer">
            <div class="pull-left">
                <a href="<?php echo base_url()?>admin/useradmin/update/<?php echo $user['id'] ?>" class="btn btn-default btn-flat">Chi tiết</a>
            </div>
            <div class="pull-right">
                <a href="admin/user/logout.html" class="btn btn-default btn-flat">Thoát</a>
            </div>
        </li>
    </ul>
</li>
</ul>
</div>
</nav>
</header>
<style>
   .skin-blue .main-header .navbar{
    background-image: linear-gradient(to right, rgba(243, 9, 52, 0.8), rgba(29, 173, 193, 0.8)) !important;
    }
    .main-sidebar{
        background-image: linear-gradient(to right, rgba(243, 9, 52, 0.7) 1%, rgba(29, 173, 193, 0.7)) !important;
    }
    .main-header .sidebar-toggle:before{
        content:"";
    }

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