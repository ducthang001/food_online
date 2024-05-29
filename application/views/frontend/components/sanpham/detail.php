<?php
ini_set("display_errors","off");
?>
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
/* ------------------------------ */
.products-grid.clearfix{display: flex;
    justify-content: space-around
}
.recommend-prod .owl-stage-outer{
    padding:20px;
}
.product-lt .img-p{
    border-radius:30% 0 30% 0;
}
.product-lt:hover .img-p{
    -webkit-transform: scaleX(-1);
  transform: scaleX(-1);

}

.product-lt{
   
   
       
        
        
      
      
        z-index:100;


        position: relative;
        background-clip: padding-box;
        border:15px solid black;
        border-radius: 30px;
        margin:20px;
        min-height: 370px;
        background-color:black;
        margin-top:5px;
      
        margin-right: 10px;
        width: 110%;
      
}
.product-lt:before{
       

        content: "";
        position: absolute;
        inset: 0;
        z-index: -100;
        margin: -10px;
        border-radius: inherit;
        background-image: linear-gradient(to right top, #3d9bb1, rgba(29, 173, 193, 0.1)) !important;
       
       
}
.lt-product-group-image{
    width:100%;
    height:40%;
    margin-bottom:20px;
   
}
.lt-product-group-image a{
	display: block;
    width: 100%;
    height: 100%;
}
.lt-product-group-info h3{
    text-align: center;
    color: white;
    font-size: 1.7rem;
   
}
.lt-product-group-info .price-box{
    
    width:100%;
    display:flex;
    justify-content: center;
    align-items: center;
}
.lt-product-group-info .price-box p{
    padding:20px;
    color: white;
}
.lt-product-group-info .price-box p span{
    
    color: white;
}
   .lt-product-group-image .img-p{
       width:100%;
       height:100%;
       display: block;
       
       
object-fit: cover;
object-position: center;
   }
   .lt-product-group-inf a,.lt-product-group-inf div{
       text-align: center;
   }
   .product-v-desc h3{
	 text-decoration: none !important;
   }
   .product-v-desc{
	   border:none !important;
	   background-color: gray;
	   margin:10px 0px 20px 20px;
	   border-radius:10px;
	   padding:10px;
   }
   .add_to_cart_detail{
	background-image: linear-gradient(to right, rgb(100 169 197), rgb(224 51 75));
border-radius:5px;
border:1px solid black;
   }
   .lt-product-group-image,.lt-product-group-info{
	   text-align:center;
   }
</style>
<section id="product-detail">
	<div class="container">
		<div class="products-wrap reveal fade-bottom active">
			<form action="" method="post" id="ProductDetailsForm">
				<?php if($row):?>
					<div class="breadcrumbs">
						<ul>
							<li class="home">
								<a href="trang-chu" title="Go to Home Page">Trang chủ</a>
								<i class="fa fa-angle-right"></i>
							</li>
							<li class="category3">
								<a href="<?php echo base_url() ?>/san-pham/<?php $link=$this->Mcategory->category_link($row['catid']); echo $link; ?>" title=""><?php $name=$this->Mcategory->category_name($row['catid']); echo $name; ?></a>
								<i class="fa fa-angle-right"></i>
							</li>
							<li class="product"><?php echo $row['name'] ?></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 listimg-desc-product">
						<?php $this->load->view('frontend/modules/jcarousel');?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="product-view-content">
							<div class="product-view-name">
								<h1><?php echo $row['name'] ?></h1>
							</div>
							<div class="product-view-price">
								<div class="pull-left">
									<span class="price-label">Giá bán:</span>
									<span class="price"><?php echo number_format($row['price_sale'])?>₫</span>
								</div>
								<?php if($row['price_sale']>0 && $row['sale']>0): ?>
									<div class="product-view-price-old">
										<span class="price"><?php echo $row['price'] ?>₫</span>
										<span class="sale-flag">-<?php echo $row['sale'] ?>%</span>
									</div>
								<?php endif; ?>
							</div>
							<div class="product-status">
								<p style=" float: left;margin-right: 10px;">Thương hiệu: <?php $name=$this->Mcategory->category_name($row['catid']); echo $name; ?></p>
								<p>| Tình trạng: <?php if($row['number'] - $row['number_buy']==0 || $row['status'] == 0) echo 'Hết hàng'; else echo 'Còn hàng' ?></p>
							</div>
							<div class="product-view-desc">
								<h4>Mô tả:</h4>
								<p><?php echo $row['sortDesc'] ?></p>
							</div>
							<div class="actions-qty">
								<?php
								if($row['number'] - $row['number_buy']==0 || $row['status'] == 0){
									echo'<h2 style="color:red;">Ngừng kinh doanh</h2>';
								} else{
									echo '<div class="actions-qty__button">
									<button class="button btn-cart add_to_cart_detail detail-button" title="Mua ngay" type="button" aria-label="Mua ngay" class="fa fa-shopping-cart" onclick="onAddCart('.$row['id'].')"> Thêm vào giỏ hàng</button>
								</div>';
								}
								?>
							</div>
							<div class="fk-boxs" id="km-all" data-comt="False">
								<div id="km-detail">
									<p class="fk-tit">Khuyến mại đặc biệt (SL có hạn)</p>
									<div class="fk-main">
										<div class="fk-sales">
											</ul>
											<ul>
												<li>Tặng PMH 20,000đ (khi phiếu mua hàng trên 300,000 đ)</li>
											</ul>
											<ul>
												<li>MIỄN PHÍ GIAO HÀNG TRONG BÁN KÍNH 2KM - Cho hóa đơn từ 100,000 đ <a href="#" target="_blank">Xem chi tiết</a>
												</li>
											</ul>
											<ul>
												<li>Mua từ 5 mặt hàng tổng giá trị 500.000đ sẽ được tặng mã giảm giá 100.000đ <br/> <a href="#" target="_blank">Liên hệ</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div style="margin-top: 20px;">
								<b>ĐẶC TÍNH</b>
								<br>
								<span>XXX</span>
							</div>
							<div style="margin-top: 20px;">
								<b>CHẤT LƯỢNG</b>
								<br>
								<span>PTITFOOD là chuỗi cửa hàng tiện lợi nằm trong trường học lớn nhất Việt Nam</a>
							</div>
						</div>
					</div>
					<div class="product-v-desc col-md-10 col-12 col-xs-12"style="width:100%;">
						<h3>Đặc điểm nổi bật</h3>
						<?php echo $row['detail']?>
					</div>
					<div class="product-comment product-v-desc">
						<h3>Bình luận</h3>
						<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">

							<div class="fb-comments" data-href="<?php echo base_url() ?><?php echo $row['alias'] ?>" data-numposts="5"></div>
						</div>
					</div>
					<div class="product-comment product-v-desc product">
						<h3>Sản phẩm liên quan</h3>
						<?php
						$list_spcungloai = $this->Mproduct->product_cungloai($row['catid'], $row['id'], 5);?>
						<?php 
						if(count($list_spcungloai)>0):?>
							<div class="product-container">
								<div class="owl-carousel-product owl-carousel owl-theme">
									<?php foreach ($list_spcungloai as $sp) :?>
										<div class="item">
											<div class="product-lt">
												<div class="lt-product-group-image">
													<a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>" >
														<img class="img-p"src="public/images/products/<?php echo $sp['avatar'] ?>" alt="">
													</a>

													<?php if($sp['sale'] > 0) :?>
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
														<?php if($sp['sale'] > 0) :?>

															<p class="old-price">
																<span class="price"><?php echo(number_format($sp['price'])); ?>₫</span>
															</p>
															<p class="special-price">
																<span class="price"><?php echo(number_format($sp['price_sale'])); ?>₫</span>
															</p>
															<?php else: ?>
																<p class="old-price">
																	<span class="price" style="color: #fff"><?php echo(number_format($sp['price'])); ?>₫</span>
																</p>
																<p class="special-price">
																	<span class="price"><?php echo(number_format($sp['price'])); ?>₫</span>
																</p>
															<?php endif;?>
														</div>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										<?php endforeach; ?>
									</div>
									<?php else: ?>
										<h4>Chưa có sản phẩm cùng loại</h4>
									<?php endif; ?>
								</div>
							<?php endif; ?>	
						</form>

					</div>
				</div>
			</section>
			<script>

				function onAddCart(id){
					var strurl="<?php echo base_url();?>"+'/sanpham/addcart';
					jQuery.ajax({
						url: strurl,
						type: 'POST',
						dataType: 'json',
						data: {id: id},
						success: function(data) {
							document.location.reload(true);
							alert('Thêm sản phẩm vào giỏ hàng thành công !');
						}
					});
				}

			</script>
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
