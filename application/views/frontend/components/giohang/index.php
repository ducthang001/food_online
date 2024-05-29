<?php
ini_set("display_errors","off");
?>
<style>
	.view_cat{
		background-image: linear-gradient(to right, rgb(100 169 197), rgb(224 51 75));
		font-weight: 800;
		font-size: 1.7rem;
		border-radius:10px;
		padding:10px;
	}
	.view_cat h2{
		font-weight: 600;
	padding-left:20px;
	
	}
	#product-detail #ProductDetailsForm .product-v-desc.col-md-10.col-12.col-xs-12 h3, #product-detail #ProductDetailsForm .product-comment.product-v-desc h3{
		text-decoration: none !important;
	}
	.btn,.btn-next-checkout{
		background-image: linear-gradient(to right, rgb(100 169 197), rgb(224 51 75));
border-radius:5px;
padding:8px;
margin-bottom:10px;
border:1px solid black;
	}
	.content-cart{
		min-height:400px;
	}
	.table span.amount{
		color: #22e781 !important;
	}
	
</style>

<div class="row content-cart ">
	<div class="container">
		<?php if($this->session->userdata('cart')):
			$cart = $this->session->userdata('cart');
			?>
			<form action="" method="post" id="cartformpage" class="view_cat">
				<div class="cart-index">
				<h2> Chi tiết giỏ hàng</h2>
					<div class="tbody text-center">
						<div class="col-xs-12 col-12 col-sm-12 col-md-8 col-lg-8">

							<table class="table table-list-product">

								<thead>
									<tr style="background: #f3f3f3;">
										<th>Hình ảnh</th>
										<th>Tên sản phẩm</th>
										<th class="text-center">Đơn giá</th>
										<th class="text-center">Số lượng</th>
										<th class="text-center">Thành tiền</th>
										<th class="text-center">Xóa</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($cart as $key => $value) :
										$row = $this->Mproduct->product_detail_id($key);
										?>
										<tr>
											<td class="img-product-cart">	
												<a href="<?php echo $row['alias'] ?>">
													<img src="public/images/products/<?php echo $row['avatar'] ?>" alt="<?php echo $row['name'] ?>">
												</a>
											</td>
											<td>
												<a href="<?php echo $row['alias'] ?>" class="pull-left"><?php echo $row['name'] ?></a>
											</td>
											<td>
												<span class="amount">
													<?php 
													if($row['price_sale'] > 0){
														echo (number_format($row['price_sale'])).' VNĐ';
													}else{
														echo (number_format($row['price'])).' VNĐ';
													}
													?>
												</span>
											</td>
											<td>
												<div class="quantity clearfix">
													<input name="quantity" id="<?php echo $row['id'] ?>" class="form-control" type="number" value="<?php echo $value ?>" min="1" max="1000" onchange="onChangeSL(<?php echo $row['id'] ?>)">
												</div>
											</td>
											<td>
												<span class="amount">
													<?php 
													if($row['price_sale'] > 0){
														echo (number_format($row['price_sale']*$value)).' VNĐ';
													}else{
														echo (number_format($row['price'] * $value)).' VNĐ';
													}
													?>
												</span>
											</td>
											<td>
												<a class="remove" title="Xóa" onclick="onRemoveProduct(<?php echo $row['id']; ?>)"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							<button class="btn" onclick="window.location.href='san-pham'" > <a href="<?php echo base_url() ?>san-pham">Tiếp tục mua hàng</a></button>
						</div>
						<?php $total = 0; ?>
						<?php foreach ($cart as $key => $value) : 
							$row = $this->Mproduct->product_detail_id($key);?>
							<?php
							if($row['price_sale'] > 0)
								$sum = $row['price_sale'] * $value;
							else
								$sum = $row['price'] * $value;
							$total += $sum;
							?>	
						<?php endforeach; ?>
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="clearfix btn-submit" style="padding-left: 10px;margin-top: 20px;">
								<table class="table total-price" style="border: 1px solid #ececec;">
									<tbody>
										<tr style="background: #f4f4f4;">
											<td>Tổng tiền</td>
											<td><strong><?php echo (number_format($total)).' VNĐ'; ?></strong></td>
										</tr>
										<tr>
											<td colspan="2"><h5>Mua hàng trực tiếp tại cửa hàng giảm giá 5%</h5></td>
										</tr>
										<tr>
											<td colspan="2"><h5>Nếu đặt online Bạn hãy đồng ý với điều khoản sử dụng & hướng dẫn hoàn trả.</h5></td>
										</tr>
										 
										<tr>

											<td colspan="2">
												<button type="button" onclick="window.location.href='info-order'" class="btn-next-checkout">Đặt hàng</button>
											</td>
										</tr>
									</tbody>
								</table>

							</div>
						</div>
					</div>

				</div>

			</form>
			<?php else: ?>
				<div class="cart-info reveal fade-left active">
					<img src="public/images/sad.png" alt=""style="width:300px;">
					Chưa có sản phẩm nào trong giỏ hàng !
					<br>	
					<br>	
					<br>	
					<button class="btn" onclick="window.location.href='san-pham'"> Tiếp tục mua hàng</button>
				</div>

			<?php endif;?>
		</div>
	</div>
	<script>
		function onChangeSL(id){
			var sl = document.getElementById(id).value;
			var strurl="<?php echo base_url();?>"+'/sanpham/update';
			jQuery.ajax({
				url: strurl,
				type: 'POST',
				dataType: 'json',
				data: {id: id, sl:sl},
				success: function(data) {
					document.location.reload(true);
				}
			});
		}
		function onRemoveProduct(id){
			var strurl="<?php echo base_url();?>"+'/sanpham/remove';
			jQuery.ajax({
				url: strurl,
				type: 'POST',
				dataType: 'json',
				data: {id: id},
				success: function(data) {
					document.location.reload(true);
					alert('Xóa sản phẩm thành công !!');
				}
			});
		}
	</script>
	<style>

