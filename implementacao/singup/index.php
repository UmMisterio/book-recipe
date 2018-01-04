<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Book Recipe</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body class="background">
	<ul id="usersList"></ul>

	<!-- Header -->

	<a href="#" class="hover"><img src="image/back-login_hover.png" class="control"></a>

	<a href="#" class="not_a_member">Já tem conta?</a>

	<a href="#"><button class="button">Login</button></a>

	<!-- Acess -->

	<img src="image/logo-orange.png" class="logo">

	<hr class="firts">

	<!-- Sing Up -->

	<p class="text_name">Nome</p>

	<input type="text" name="nick" placeholder="zézinho" class="name">

	<div class="container_email">
		<p class="text_email">Email</p>
		<input type="text" name="Email" id="nameInput" placeholder="exemplo@gmail.com" class="email" autofocus required>
	</div>

	<hr>

	<div class="container_password">
		<p class="text_password">Senha</p>

		<input type="password" id="passwordInput" name="senha" placeholder="********" class="senha">
	</div>

	<button class="submit" id="send">Singup</button>

	<hr>

	<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="../core/app.firebase.js"></script>
    <script src="../core/real-time-database.js"></script>
</body>
