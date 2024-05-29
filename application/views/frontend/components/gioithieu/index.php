<div class="wrapper_authod reveal fade-left active">
    <div id="app">
        <!-- Carousel slider -->
        <div class="carousel-slider">
            <div class="swiper">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                      <div class="carousel-slider-animate-opacity">
                            <img src="public/images/image/bn.jpg" alt="">
                            <div class="slide-content">
                                <h2> GVHD: Nguyễn Thị Bích Nguyên</h2>
                                <!-- <p>Mã số sinh viên: N19DCAT006</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="carousel-slider-animate-opacity">
                            <img src="public/images/image/dvk.jpg" alt="">
                            <div class="slide-content">
                                <h2>Đỗ Văn Kha</h2>
                                <p>Mã số sinh viên: N19DCAT041</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <!-- elements with  "carousel-slider-animate-opacity" class will have animated opacity -->
                        <div class="carousel-slider-animate-opacity" style="overflow:hidden;border-radius:inherit;">
                            <img class="cover_ncbao" src="public/images/image/nguyenchibao.jpg" alt="">
                            <div class="slide-content">
                                <h2>Nguyễn Chí Bảo</h2>
                                <p>Mã số sinh viên: N19DCAT006</p>
                            </div>
                        </div>

                    </div>
                    
                    
                    <div class="swiper-slide">
                      <div class="carousel-slider-animate-opacity">
                            <img src="public/images/image/hdt.jpg" alt="">
                            <div class="slide-content">
                                <h2>Huỳnh Đức Thắng</h2>
                                <p>Mã số sinh viên: N19DCAT081</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    </div>
<style>
   
    .carousel-slider{
        background-image: linear-gradient(206deg, rgb(222 8 8),rgb(18 202 222));
      
        padding:40px;
        color:white;
        border-radius:50px;
        min-width:1000px;
        min-height:500px;
    }
    .cover_ncbao{
        display: block;
        height: 125% !important;
    overflow-y: hidden;
    }
    .carousel-slider-animate-opacity{
        border-radius: 0px;
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
    <!-- Cloudflare Pages Analytics -->
    <script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "07e9b2efafbd4b458690b79234a62148"}'></script>
   
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
    <!-- Cloudflare Pages Analytics -->
