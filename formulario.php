<!DOCTYPE HTML>
<html>
	<head>
		<title>Mundo Kido</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Cabeçalho -->
					<header id="header" class="alt">
						<a href="index.html" class="logo"><strong>Forty</strong> <span>by HTML5 UP</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>


				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.html">Home</a></li>
							<li><a href="time.html">Nosso Time</a></li>
							<li><a href="sobre.html">Sobre Nós</a></li>
						</ul>
						<ul class="actions vertical">
							<li><a href="cadastro.html" class="button special fit">Cadastre-se</a></li>
							<li><a href="login.html" class="button fit">Login</a></li>
						</ul>
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Bem Vindo, Mundo Kido</h1>
							</header>
							<div class="content">
								<p>Nós somos um grupo de funcionários da Clínica Mundo Kido
									<br> Juntos formamos uma equipe dedicada a atender e medicar seus animais.</p>

								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Vamos Começar</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- Um - Conjunto de Quadrados da tela de Apresentação -->

          <section id="one">
						<div class="inner">
            <strong>Cadastro de aluno</strong>
              <br>
                <form action="cadastro.php" method="post">

	                  <br>
	                  Usuario: <br>
	                  <input type="text" name="usuario" id="usuario">

	                  <br>
	                  Nome: <br>
	                  <input type="text" name="nome_usuario" id="nome_usuario">

	                  <br>
	                  Endereço: <br>
	                  <input type="text" name="endereco_usuario" id="endereco_usuario">

                    <br>
                    E-mail: <br>
                    <input type="text" name="email_usuario" id="email_usuario">

                    <br>
                    Idade: <br>
                    <input type="text" name="idade_usuario" id="idade_usuario">

                    <br>
                    Senha: <br>
                    <input type="password" name="senha" id="password">

                    <br>


                    <input type="submit" value="Cadastrar" class="special"/>
										<input type="reset" value="Limpar">

                  </form>
								</div>
								</section>



				<!-- Contato -->
					<section id="contact">
						<div class="inner">
							<section>

								<!-- envio de e-mail -->
								<form method="post" action="#">
									<div class="field half first">
										<label for="name">Nome</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="email">E-mail</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Mensagem</label>
										<textarea name="message" id="message" rows="6"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Enviar Mensagem" class="special" /></li>
										<li><input type="reset" value="Limpar" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>E-mail</h3>
										<a >mundokido@hotmail.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Telefone</h3>
										<span>(XX) XXXX-XXXX</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Endereço</h3>
										<span>Araraquara - SP
											<br />Jd. Pinheiros
											<br />Luis de Osti Filho, XX</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="http://twitter.com/mundokido" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="http://fb.me/mundokido" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
