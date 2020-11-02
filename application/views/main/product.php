<section class="product-page page fix"><!--Start Product Details Area-->
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
                <div class="shop-details">
                    <img src="/public/materials/<?php echo $data['id']; ?>.jpg" alt="qq" class="postImg">
                </div>
            </div>
			<div class="col-sm-6">
				<div class="shop-details">
					<!-- Product Name -->
					<h2><?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?></h2>
					<h3>Цена: <?php echo htmlspecialchars($data['price'], ENT_QUOTES); ?> руб.</h3>
					<!-- Product action Btn -->	
					<form action="/product/<?php echo $data['id']; ?>" method="post">
						<input type="hidden" name="id" value="<?php echo $data['id']; ?>"></input>		
					<button type="submit">Добавить в корзину</button>
					</form>	

				</div>
				
			</div>
		<div class="col-sm-12 fix">
			<div class="description">
				<!-- Nav tabs -->
				<ul class="nav product-nav">
					<li class="active"><a data-toggle="tab" href="#indication">Показания</a></li>
					<li class=""><a data-toggle="tab" href="#contraindications">Противопоказания</a></li>
					<li class=""><a data-toggle="tab" href="#composition">Состав</a></li>
					<li class=""><a data-toggle="tab" href="#application">Способ применения</a></li>
					<li class=""><a data-toggle="tab" href="#spec_instructions">Особые указания</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div id="indication" class="tab-pane fade active in" role="tabpanel">
						<p><?php echo htmlspecialchars($data['indication'], ENT_QUOTES); ?></p>	
					</div>
					<div id="contraindications" class="tab-pane fade in" role="tabpanel">
						<p><?php echo htmlspecialchars($data['contraindications'], ENT_QUOTES); ?></p>						
					</div>
					<div id="composition" class="tab-pane fade in" role="tabpanel">
						<p><?php echo htmlspecialchars($data['composition'], ENT_QUOTES); ?></p>	
					</div>
					<div id="application" class="tab-pane fade in" role="tabpanel">
						<p><?php echo htmlspecialchars($data['application'], ENT_QUOTES); ?></p>	
					</div>
					<div id="spec_instructions" class="tab-pane fade in" role="tabpanel">
						<p><?php echo htmlspecialchars($data['spec_instructions'], ENT_QUOTES); ?></p>	
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</section><!--End Product Details Area-->