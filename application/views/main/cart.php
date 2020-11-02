<section class="cart-page page fix"><!--Start Cart Area-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			
			<?php if (empty($list)): ?>
				<p>Корзина пуста</p>
			<?php else: ?>
				<div class="table-responsive">
					<table class="table cart-table">
						<thead class="table-title">
							<tr>
								<th class="produ">Товар</th>
								<th class="namedes">Название товара &amp; Описание</th>
								<th class="unit">Цена, шт</th>
								<th class="quantity">Количество</th>
								<th class="valu">Сумма</th>
								<th class="acti">Убрать из корзины</th>
							</tr>													
						</thead>
						<tbody>
						<?php foreach ($list as $val): ?>
							<tr class="table-info">
								<td class="produ">
									<a href="/product/<?php echo $val['id']; ?>"><img alt="" src="/public/materials/<?php echo $val['id']; ?>.jpg"></a>
								</td>
								<td class="namedes">
									<h2><a href="/product/<?php echo $val['id']; ?>"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></a></h2>
								</td>
								<td class="unit">
									<h5><?php echo htmlspecialchars($val['price'], ENT_QUOTES); ?> руб</h5>
								</td>
								<td class="quantity">
									<div class="cart-plus-minus">
										<input type="text" value="1" name="qtybutton" class="cart-plus-minus-box">
									</div>
								</td>
								<td class="valu">
								<h5><?php echo htmlspecialchars($val['price'], ENT_QUOTES); ?> руб</h5>
								</td>
								<td class="acti">
									<button type="submit" id="<?php echo $val['id']; ?>"><?php echo $val['id']; ?></button>
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<?php endif; ?>
			</div>
			<div class="col-sm-6 col-md-7">
				<div class="coupon">
					<a href="/">Продолжить покупки</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-5">
				<div class="proceed fix">
					<a href="#">Очистить корзину покупок</a>
					<button type="button">Click Me</button>
						<p></p>
						<script type="text/javascript">
							$(document).ready(function(){
								$("button").click(function(){
									var val = "HI";//$(this).attr("id");
									$.ajax({
										type: 'POST',
										url: 'script.php',
										data: val,
										success: function(data) {
											alert(data);									
										}
									});
						});
						});
						</script>
					<a href="#">Обновить корзину покупок</a>
					<div class="total">
						<h6>Стоимость заказа <span>4200 руб</span></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!--End Cart Area-->