<?php
ini_set("display_errors","off");
?>
<style>
  .logo-search .container {
    background: red;
  }

  .logo-search .container.fa-phone {
    /* font-weight: 600;
        margin-top: 20px;
        display: inline-block; */
    color: red;
  }

  @supports (-webkit-background-clip:text) {
    .text_gradient {
      background: #f0f0f0;
      /* mau chu trong suot */
      color: transparent;
      /* /hinh nen duoc hien thi trong khong gian chu */
      background-clip: text;
      -webkit-background-clip: text;
    }
  }
</style>
<script>
  item = document.querySelector(".user_login .user_login_icon img");
  item.src = "http://localhost/ptitfood/public/images/man.png";
</script>
<!-- ----------------------------------------------------------------------------------------------------------------- -->
<section class="logo-search">
  <div class="container">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 search">
      <div class="contact-row">
        <div class="phone inline abc">
          <i class="icon fa fa-phone" id="font-color"></i>0333.441.620
        </div>
        <div class="contact inline">
          <i class="icon fa fa-envelope" id="font-color"></i>ptitfood@gmail.com
        </div>
      </div>
      <form action="search" method="get" role="form">
        <div class="search-box ">

          <div class="input-box input">
            <input type="text" class="form-control" id="search_text" name="search" placeholder="Bạn đang tìm kiếm gì?">
          </div>
          <div class="search-button">
            <button>
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 logo logo-gradient">
      <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>public/images/logo.png" alt="Logo Construction"></a>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs" style="padding: 24px;">
      <!-- Cart -->
      <div class="cart_header">
        <a href="gio-hang" title="Giỏ hàng">
          <span class="cart_header_icon">
            <img src="<?php echo base_url() ?>public/images/cart.png" alt="Cart">
          </span>
          <span class="box_text">
            <strong class="cart_header_count">Giỏ hàng <span>(<?php
                                                              if ($this->session->userdata('cart')) {
                                                                $val = $this->session->userdata('cart');
                                                                echo count($val);
                                                              } else {
                                                                echo 0;
                                                              }
                                                              ?>)</span></strong>
            <span class="cart_price">
              <?php if ($this->session->userdata('cart')) :
                $cart = $this->session->userdata('cart');
                $money = 0;
                foreach ($cart as $key => $value) :
                  $row = $this->Mproduct->product_detail_id($key); ?>
                  <?php
                  $total = 0;
                  if ($row['price_sale'] > 0) {
                    $total = $row['price_sale'] * $value;
                  } else {
                    $total = $row['price'] * $value;
                  }
                  $money += $total;
                  ?>
                <?php endforeach; ?>
                <?php echo number_format($money) . ' VNĐ'; ?>
              <?php else : ?>
                <p>0 VNĐ</p>
              <?php endif; ?>
            </span>
          </span>
        </a>
        <div class="cart_clone_box">
          <div class="cart_box_wrap hidden">
            <div class="cart_item original clearfix">
              <div class="cart_item_image">
              </div>
              <div class="cart_item_info">
                <p class="cart_item_title"><a href="" title=""></a></p>
                <span class="cart_item_quantity"></span>
                <span class="cart_item_price"></span>
                <span class="remove"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Cart -->
      <!-- Account -->
      <div class="user_login">
        <a href="thong-tin-khach-hang" title="Tài khoản">
          <div class="user_login_icon">
            <img src="<?php echo base_url() ?>public/images/man.png" alt="Cart">
          </div>
          <div class="box_text">
            <strong>Tài khoản</strong>
            <!--<span class="cart_price">Đăng nhập, đăng ký</span>-->
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- <script>
  $(document).ready(function(){

   load_data();
   var strurl="<?php echo base_url(); ?>"+'/search/quick';
   function load_data(query)
   {
    $.ajax({
      url: strurl,
      method:"POST",
      data:{query:query},
      success:function(data){
        if(data){
          $('#result').html(data);
        }else{
          $('#result').html(data);
        }
      }
    })
  }

  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
     load_data(search);
   }
   else
   {
     load_data();
   }
 });
});
</script> -->
<script>
  $("search-box .input-box input").focus(
    () => {
      $('.search-box .input-box').addClass('active')
    }
  );
  $("search-box .input-box input").blur(
    () => {
      $('.search-box .input-box').removeClass('active')
    }
  );
</script>
<style>
  .logo-search .container {
    /* background-image: linear-gradient(to left, rgb(8, 103, 181), rgb(8, 103, 181)); */
    background-color: #fafafa;
    border-radius: 30px;
  }

  .user_login,
  .cart_header {
    background: gray;
    padding: 7px;
    border-radius: 20px;



  }

  .logo {
    transform: rotate(10deg);
  }

  .contact-row div {
    color: black;
  }

  .contact-row #font-color {
    color: teal;
  }

  .contact-row .phone {

    border-right: 2px solid black;
  }

  .cart_header img {
    color: white;
  }

  /* ------------------------------ */
  .logo-gradient {

    position: relative;
  }

  .logo-gradient:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 70%;
    top: 20px;
    left: -40px;
    background-image: linear-gradient(to right, rgba(29, 173, 193, 0.8) -40%, #fafafa) !important;
    border-radius: 0px 100px 0px 90px;
    z-index: -10;
    transform: rotate(344deg);
  }

  form {
    margin-top: 20px;
    margin-left: 50px;
    display: flex;
    justify-content: flex-start;
    align-items: center;
  }

  .search-box {
    box-sizing: border-box;
    position: relative;
    display: flex;
    flex-direction: row;
    align-items: center;
    /* background-image: linear-gradient(to left, rgba(90, 90, 93,0.4), rgba(106, 108, 109,0.4)); */
    border-radius: 35px;

  }

  .search-box .input-box {
    position: relative;
    background-image: linear-gradient(to left, rgba(90, 90, 93, 0.4), rgba(106, 108, 109, 0.4));
    padding: 8px;
    border-radius: 35px;
    width: 0px;
    transition: 0.3s;
  }

  .search-box .input-box input {
    width: 80%;
    background-image: inherit;
    border: none;
    outline: none;
    color: black;
    font-size: 18px;

  }

  .search-box .input-box input::placeholder {
    font-weight: 500;
    color: black;
  }

  .search-button {
    width: 53px;
    height: 53px;
    border-radius: 50%;
    background-color: #436870;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    right: -20px;
    box-shadow: -15px 0px 0 8px #fafafa;
    cursor: pointer;
    /* animation-name: zoom-search;
        animation-duration: 1s;
        animation-direction: normal;
        animation-iteration-count: infinite; */
  }

  .search-button i {
    animation-name: zoom-search;
    animation-duration: 1s;
    animation-direction: normal;
    animation-iteration-count: infinite;
  }

  /*  */

  @keyframes zoom-search {
    from {
      transform: scale(1, 1);
    }

    to {
      transform: scale(1.2, 1.2);

      width: 40px;
    }
  }

  /*  */



  .search-button button {
    width: 80%;
    height: 80%;
    border: none;
    outline: none;
    color: black;
    border-radius: inherit;
    background-image: inherit;
  }

  .search-button i {
    font-size: 20px;

  }

  .search-box:hover .input-box {
    width: 300px;
  }
</style>