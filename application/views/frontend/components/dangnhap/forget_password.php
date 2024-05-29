<?php
ini_set("display_errors","off");
?>
<div class="container reveal fade-left active ">
	<div class="row">
		<div class="col-md-3 col-sm-3 hidden-xs">
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<form action="" accept-charset="UTF-8" action="" id="reset_password" method="post">
				<div id="login">
					<div class="acctitle acctitlec">Quên mật khẩu</div>
					<?php 
					if(isset($success))
						echo '<h4 style="color:green;">'.$success.'</h4>';
					?>
					<div class="acc_content clearfix btn_forget" style="display: block;">
						<div class="col_full">
							<label for="login-form-password">Email :<span class="require_symbol">* </span></label>
							<input type="email" id="login-form-password" name="email" value="" class="form-control">
							<div class="error" id="password_error"><?php echo form_error('email')?></div>
						</div>
						<button class="button button-3d button-black nomargin pull-left" id="login-form-submit" name="login-form-submit" type="submit" value="login">Tiếp tục</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	
</div>
<style>
    #reset_password{
        background-image: linear-gradient(to right, rgb(100 169 197), rgb(224 51 75));

border-radius:20px;

    }
    #reset_password input{
        width:140%;
        border-radius:20px;
    }
   
	.btn_forget button{
		background-image: linear-gradient(to right, rgb(100 169 197), rgb(224 51 75));
border-radius:5px;
border:1px solid black !important;
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