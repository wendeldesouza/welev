 <?php
 //lembrar que essa validação não pode ser feita pra home
// session_start();
//if (!$_SESSION['usuario']){
//	header ("Location:index.php");
//}else{
	
	
 ?>
	<!DOCTYPE html>
	<html lang="pt-br">
	  <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>WELEV</title>

		<meta name="description" content="WELEV SOLUTION">
		<meta name="author" content="WELEV SOLUTION">

		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/plugin/lightslider/lightslider.min.css" rel="stylesheet">
		<link href="css/plugin/lightslider/lightgallery.css" rel="stylesheet">
	  </head>
	  <body>
	<section>
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">						 
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
							</button> 
							<a class="navbar-brand"  href="#">WELEV</a> 

						</div>					
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="dropdown">
								 <a href="#" class="dropdown-toggle"  data-toggle="dropdown" >Modelos<strong  class="caret" ></strong> </a>
									<ul class="dropdown-menu">
									
									<li>
											<a href="#">Physical Resistente Liso</a>
											<li role="separator" class="divider"></li>
										</li>
										<li>
											<a href="#">Physical Super Resistente</a>
											<li role="separator" class="divider"></li>
										</li>
										<li>
											<a href="#">Physical Ultra Resistente</a>
											<li role="separator" class="divider"></li>
										</li>
										<li>
											<a href="#">Physical Mega Resistente</a>
											
										</li>
									</ul>
								</li>
								<li class="dropdown">
								 <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Tamanhos  <strong class="caret"></strong></a>
									<ul class="dropdown-menu">
									<li>
											<a href="#">Solteiro (78x188)</a>
											<li role="separator" class="divider"></li>
										</li>
										<li>
											<a href="#">Solteirão (88x188)</a>
											<li role="separator" class="divider"></li>
										</li>
										<li>
											<a href="#">Casal (138x188)</a>
											
										</li>
										
									</ul>
								</li>
								
							</ul>
							<form class="navbar-form navbar-left" hspace="right"role="search">
								<div class="form-group">
									<input type="text" placeholder="Pesquisar" class="form-control"size=70px;>
									<button type="submit" class="btn btn-default">
									Pesquisar
								</button>
								</div> 
								
							</form>
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href='index.php'><img src="cadastro.png" alt=”Descrição da imagem”  width=50px; height=50px;/></a>
								</li>
								<li>
									<a href='Indexcarrinho2.php'><img src="carrinho.png" alt=”Descrição da imagem”  width=50px;  height=50px;/></a>
								</li>
								<li>
									<a href='logout.php'><img src="sair.png" alt=”Descrição da imagem”  width=50px;  height=50px;/></a>
								</li>
							</ul>
						</div>				
					</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<ul id="imageGallery">
				  <li data-thumb="http://www.lojafavorita.com/images/produtos/protetor_colchao_felpudo_venetto1_20150805__g.jpg" data-src="http://www.lojafavorita.com/images/produtos/protetor_colchao_felpudo_venetto1_20150805__g.jpg">
					<img src="http://www.lojafavorita.com/images/produtos/protetor_colchao_felpudo_venetto1_20150805__g.jpg" width=1550px;  height=350px/>
				  </li>
				  <li data-thumb="https://c.mlcdn.com.br/1500x1500/capa-para-colchao-queen-size160x203cm-santista-boa-noite-211433800.jpg" data-src="https://c.mlcdn.com.br/1500x1500/capa-para-colchao-queen-size160x203cm-santista-boa-noite-211433800.jpg">
					<img src="https://c.mlcdn.com.br/1500x1500/capa-para-colchao-queen-size160x203cm-santista-boa-noite-211433800.jpg"width=1550px;  height=350px />
				  </li> 
				  <li data-thumb="http://www.mixlar.com.br/blog/wp-content/uploads/2014/12/colchao.jpg" data-src="http://www.mixlar.com.br/blog/wp-content/uploads/2014/12/colchao.jpg">
					<img src="http://www.mixlar.com.br/blog/wp-content/uploads/2014/12/colchao.jpg" width=1550px;  height=350px/>
				  </li>
				</ul>
			</div>
		</div>
		
				<div class="row">
					<div class="col-md-4">
						<h2>
							Cama box(casal)			 
						</h2>
							<li data-thumb="http://static.colombo.com.br/produtos/775473/775473_1450721317_HTML.jpg" data-src="http://static.colombo.com.br/produtos/775473/775473_1450721317_HTML.jpg">
							<img src="http://static.colombo.com.br/produtos/775473/775473_1450721317_HTML.jpg" width=400px;  height=200px/>
						<p>
						</p>
						<a class="btn btn-primary btn-large" href="#">Comprar</a>
					</div>
					
						<div class="col-md-4">
						<h2>
							Cama box(casal)				 
						</h2>
							<li data-thumb="http://darioeletromoveis.com.br/wp-content/uploads/2015/05/COLCHAO-BOX-SILVER-138X-C-BASE-BLACK-138-GAZIN.png" data-src="http://darioeletromoveis.com.br/wp-content/uploads/2015/05/COLCHAO-BOX-SILVER-138X-C-BASE-BLACK-138-GAZIN.png">
							<img src="http://darioeletromoveis.com.br/wp-content/uploads/2015/05/COLCHAO-BOX-SILVER-138X-C-BASE-BLACK-138-GAZIN.png" width=400px;  height=200px/>
						
						<p>
						</p>
						<a class="btn btn-primary btn-large" href="#">Comprar</a>
					</div>
					
					<div class="col-md-4">
						<h2>
							Cama box(casal)				 
						</h2>
							<li data-thumb="http://static.colombo.com.br/produtos/775476/775476_1450717465_HTML.jpg" data-src="http://static.colombo.com.br/produtos/775476/775476_1450717465_HTML.jpg">
							<img src="http://static.colombo.com.br/produtos/775476/775476_1450717465_HTML.jpg" width=400px;  height=200px/>
						<p>
						</p>
						<a class="btn btn-primary btn-large" href="#">Comprar</a>
					</div>
			
		</div>

	 	<div class="row">
			<div class="col-md-4">
				<p><b>WELEV SOLUTION</b></p>
				<p><b>CONTATO:</b>welev.solution@outlook.com</p>
				<p>PAULISTA,PERNAMBUCO</p>
			</div>
			<div class="col-md-4">
			    <p><b> DIRETORIA</b> </p>
				<p>EDUARDO HENRIQUE</p>
				<p>EDMOND JACOB</p>
				<p>LILIAN VALERIO</p>
				<p>VICTOR JOSÉ</p>
				<p>WENDEL SOUZA</p>
			</div>
			<div class="col-md-4">
				<p><a class "atendimento" href="#"> <b>ATENDIMENTO</b> </a></p>
				<p><a class "duvida" href="contate-nos.php"><b> FALE CONOSCO </b></a></p>
				<p><a class "sobre_nos" href="sobre_nos.php"> <b>SOBRE NÓS</b> </a></p>

			</div>
		</div>  
		
		</section>
		
		<script src="js/jquery-3.2.0.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/plugin/lightslider/lightslider.min.js"></script>
		<script src="js/plugin/lightslider/lightgallery.js"></script>
			<script>
			$(document).ready(function() {
				 $('#imageGallery').lightSlider({
					auto: true,
					thumbnail: false,
					width: '700px',
					height: '470px',
					item:1,
					loop:true,
					thumbItem:9,
					slideMargin:0,
					enableDrag: false,
					currentPagerPosition:'left',
					onSliderLoad: function(el) {
						el.lightGallery({
							selector: '#imageGallery .lslide'
						});
					}   
				}); 
			});
			</script>
	  </body>
	</html>
<?php
 //} 
 ?>