<?php
ini_set("display_errors","off");
?>
<?php echo form_open('dang-ky'); ?>

</style>
<section id="product-detail ">
	<div class="container">
		<div class="col-md-3 col-sm-3 hidden-xs"></div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="products-wrap reveal fade-left active">
				<div class="accordion accordion-lg divcenter nobottommargin clearfix form_login" style="max-width: 550px;">
				<!-- <div class="col-xs-12 col-sm-6 logo sidebar_logo">
                <a href="trang-chu">
                    <img src="public/images/logo2.png" style="width: 90%;" class="img-fix f-logo" alt="smart-construction">
                </a>
                   <div class="about-store">
                   
                  PTITFOOD - CĂN TIN HỌC VIỆN HOÀNG GIA
           
                 </div> 
                 </div> -->
					<div id="register">
						<div class="acctitle a acctitlec"style="text-align:center;">Đăng ký tài khoản</div>
						<?php 
						if(isset($success))
							echo '<h4 style="color:green;">'.$success.'</h4>';
						?>
						<div class="acc_content clearfix" style="display: block;">
							<form accept-charset="UTF-8" action="" id="customer_register" method="post">
								
								<input name="FormType" type="hidden" va`	lue="customer_register">
								<input name="utf8" type="hidden" value="true"> 
								<div class="col_full">
									<label for="first_name">Tên đăng nhập:<span class="require_symbol">*</span></label>
									<input type="text" id="first_name" name="username" value="" class="form-control" placeholder="Tên đăng nhập">
									<div class="error" id="username_error"><?php echo form_error('username')?></div>
								</div> 
								<div class="col_full">
									<label for="register-form-password">Mật khẩu:<span class="require_symbol">*</span></label>
									<input type="password" id="register-form-password" name="password" placeholder="Mật khẩu" class="form-control">
									<div class="error" id="password_error"><?php echo form_error('password')?></div>
								</div>

								<div class="col_full">
									<label for="register-form-repassword">Nhập lại mật khẩu:<span class="require_symbol">* </span></label>
									<input type="password" id="register-form-repassword" name="re_password" value="" class="form-control" placeholder="Nhập lại mật khẩu">
									<div class="error" id="re_password_error"><?php echo form_error('re_password')?></div>
								</div>
								<div class="col_full">
									<label for="first_name">Họ tên:<span class="require_symbol">*</span></label>
									<input type="text" id="first_name" name="name" placeholder="Họ tên" class="form-control">
									<div class="error" id="name_error"><?php echo form_error('name')?></div>
								</div>              
								<div class="col_full">
									<label for="register-form-email">Email:<span class="require_symbol">*</span></label>
									<input type="text" id="register-form-email" name="email" class="form-control" placeholder="Nhập email">
									<div class="error" id="email_error"><?php echo form_error('email')?></div>
								</div>
								<div class="col_full">
									<label for="first_name">Số điện thoại:<span class="require_symbol">*</span></label>
									<input type="text" id="first_name" name="phone" placeholder="Số điện thoại" class="form-control">
									<div class="error" id="name_error"><?php echo form_error('phone')?></div>
								</div>
								<div class="col_full nobottommargin">
									<button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" type="submit" style="margin-bottom: 20px">Đăng ký</button>
									<ul>
										<li class="right" style="font-size: 18px;">Nếu đã có tài khoản, hãy <a href="<?php echo base_url()?>dang-nhap" style="font-size: 19px; color: red;">Đăng nhập</a></li>
									</ul>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-3 hidden-xs"></div>
	</div>
</section>
<style>
	#register .acctitlec{
		color: black;
		font-size: 25px;
		font-weight: 600;
	}
.form_login{
    width:80%;
	
	/* display:flex;
	flex-direction: row-reverse; */

}
.form_login .col_full input{
	border-radius:6px;
}
.nobottommargin #register-form-submit{
	background-image: linear-gradient(to right, rgb(100 169 197), rgb(224 51 75));
border-radius:5px;
border:1px solid black;

}
/* .products-wrap{
		margin:0px auto;
		
	    display: block;
		width:fit-content;
		background:darkgray;
	    display: flex;
	}
	.sidebar_logo{
	
	} */

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
</script>