<div class="login-page page fix"><!--start login Area-->
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-5">
				<div class="login">
				<form action="/account/login" method="post">
						<div class="control-group">
							<div class="form-group floating-label-form-group controls">
								<p><input type="text" id="phoneMask" class="form-control" name="phone" placeholder="phone"></p>
							</div>
						</div>
                	<br>
						<div id="success"></div>
						<div class="form-group">
							<button type="submit" class="btn btn-secondary">Отправить</button>
						</div>
           		 </form>
                    <script>/*
						$(function(){
							$("#phoneMask").mask("8800553535");
						}); */
                    </script>
				</div>
            </div>			
		</div>
	</div>
</div><!--End login Area-->