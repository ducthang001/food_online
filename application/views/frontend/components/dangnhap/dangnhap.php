<?php
ini_set("display_errors","off");
?>
<?php echo form_open('dang-nhap'); ?>

<div class="container">
	<div class="products-wrap reveal fade-left active">
		<div class="container">
			<div class="col-md-3 col-sm-3 hidden-xs"></div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div id="login">
					<div class="acctitle acctitlec">Đăng nhập</div>
					<div class="acc_content clearfix" style="display: block;">
						<form accept-charset="UTF-8" action="" id="customer_login" method="post">
							<div class="col_full">
								<label for="login-form-username">Tài khoản:<span class="require_symbol">* </span></label>
								<input type="text" id="login-form-username" name="username" value="" class="form-control">
								<div class="error" id="password_error"><?php echo form_error('username')?></div>
							</div>
							<div class="col_full">
								<label for="login-form-password">Mật khẩu:<span class="require_symbol">* </span></label>
								<input type="password" id="login-form-password" name="password" value="" class="form-control">
								<div class="error" id="password_error"><?php echo form_error('password')?></div>	
							</div>
							<?php  if(isset($error)):?>
								<div class="row">
									<?php echo "<p  style='color:red;'>$error</p>"; ?>
								</div>
							<?php  endif;?>
							<div class="col_full nobottommargin">
								<button class="button button-3d button-black nomargin pull-left" id="login-form-submit" name="login-form-submit" type="submit" value="login">Đăng nhập</button>
								<ul class="pull-right">
									<li><a href="quen-mat-khau" class="fright">Quên mật khẩu?</a></li>
									<li><a href="<?php echo base_url() ?>dang-ky" class="fright">Người dùng mới? Đăng ký tài khoản</a></li>
								</ul>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 hidden-xs"></div>
		</div>
	</div>
</div>
<style>
	#login .acctitle{
		color: black;
		font-size: 25px;
		font-weight: 600;
	}
	#login input{
		border-radius:6px;
		outline: none;
	
	}
	.nobottommargin button{
		background-image: linear-gradient(to right, rgb(100 169 197), rgb(224 51 75));
border-radius:5px;

	}
	#login .button.button-3d{
		border:1px solid black;
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
</script>