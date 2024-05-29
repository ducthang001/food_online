<?php
ini_set("display_errors","off");
?>
<section id="content" class="reveal fade-bottom active">
    <div class="row wraper">
      <div class="banner-product">
    <div class="container">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <img src="public/images/sp.png">
      </div>
    </div>
  </div>
 <div class="container reveal fade-bottom active" style="margin-top:24px;">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-menu pull-left">
                    <?php $this->load->view('frontend/modules/category'); ?> 
                </div>
                <?php $this->load->view('frontend/modules/news'); ?> 
            </div>
            <div class = "col-xs-12 col-sm-12 col-md-9 col-lg-9 product-content" id="list-content">
                <div class="product-wrap">
                  <div class="fs-newsboxs">
                    <?php foreach ($list as $item) :?>
                        <div class="fs-ne2-it clearfix">
                            <div class="fs-ne2-if">
                                <a class="fs-ne2-img" href="tin-tuc/<?php echo $item['alias']; ?>">
                                    <img style="border-radius:20px;margin-right: 73px;" src="public/images/posts/<?php echo $item['img']; ?>"">
                                </a>
                                <div class="fs-n2-info">
                                    <h3><a class="fs-ne2-tit" href="tin-tuc/<?php echo $item['alias']; ?>" title=""><?php echo $item['title']; ?></a></h3>
                                    <div class="fs-ne2-txt"><?php echo $item['introtext']; ?></div>
                                    <p style="color:aqua;" class="fs-ne2-bot">
                                        <span class="fs-ne2-user">
                                            <img class="lazy"src="" style="">
                                        </span> 
                                        <span><?php echo $item['created']; ?></span>
                                    </p>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>   

                </div>
                <div class = "row text-center">
                   <ul class ="pagination">
                      <?php echo $strphantrang; ?>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</div>
</section>
<style>
.product-wrap .collection__title,.main-ul li,.list-menu ul.sub{

    background-image: linear-gradient(to right, rgba(243, 9, 52,0.8), rgba(29, 173, 193,0.8));
    border-radius:5px;
    
}
.widget{
    background:black;
}
.main-ul li a{
    border:1px solid transparent;
}
.main-ul li a:hover{
    border-color: black !important;
}
.main-ul li a{
    color:white;
}

#list-product{
    margin:30px;
}
.fs-newsboxs{
    background-image: linear-gradient(to right, rgba(243, 9, 52,0.8), rgba(29, 173, 193,0.8));
    border-radius: 5px;
}

</style>
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