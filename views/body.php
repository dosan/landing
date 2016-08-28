	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://sandor.cu.cc"><b>Landing Page</b></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" id='open_basic_modal' data-toggle="modal" data-target="#basicModal">Услуги</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div id="headerwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<h1>Получить больше информации<br/>
					подпишитесь.</h1>
					<form role="form" id='first-form'>
						<div class="form-group">
							<label for="user_name" style='color: white'>Ваше Имя: </label>
							<input type="text" class="form-control" id="user_name" name="user_name" placeholder="введите ваше имя">
							<div class="hidden" id='error_user_name' style='color: red'></div>
						</div>
						<div class="form-group">
							<label for="user_name" style='color: white'>Ваш Email: </label>
							<input type="text" class="form-control" id="user_email" name="user_email" placeholder="введите ваш email">
							<div class="hidden" id='error_user_email' style='color: red'></div>
						</div>
						<button type="submit"  class="btn btn-warning btn-lg btn_subscribe" >Подписаться на новости!</button>
					</form>					
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3">
				<h1>Lorem Ipsum is simply dummy<br>text of the printing and typesetting industry.</h1>
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores adipisci eum nesciunt distinctio rerum! Natus qui sed commodi, quas quo eaque nobis expedita nemo aut ipsa dicta repellendus placeat veniam..</h3>
			</div>
		</div>
		<div class="row mt centered">
			<div class="col-lg-4">
				<img src="theme/assets/img/ser01.png" width="180" alt="">
				<h4>1 - Lorem Ipsum is simply</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
			</div>
			<div class="col-lg-4">
				<img src="theme/assets/img/ser02.png" width="180" alt="">
				<h4>2 - Lorem Ipsum is simply</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
			</div>
			<div class="col-lg-4">
				<img src="theme/assets/img/ser03.png" width="180" alt="">
				<h4>3 - Lorem Ipsum is simply</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
			</div>
		</div>
	</div>
	

	<div class="container">
		<hr>
		<div class="row centered">
			<div class="col-lg-9">
				<form class="form-inline" id='second-form' role="form">
					<div class="form-group">
						<input type="text" name="user_name" class="form-control" id="user_name" placeholder="введите ваше имя">
						<div class="hidden" id='error_user_name' style='color: red'></div>
					</div>
					<div class="form-group">
						<input type="text" name="user_email" class="form-control" id="user_email" placeholder="введите ваш email">
						<div class="hidden" id='error_user_email' style='color: red'></div>
					</div>
					<button type="submit" class="btn-warning form-control btn_subscribe" >Подписаться на новости!</button>
				</form>					
			</div>
			<div class="col-lg-3"></div>
		</div>
		<hr>
		<p class="centered">Dosan 2016</p>
	</div>