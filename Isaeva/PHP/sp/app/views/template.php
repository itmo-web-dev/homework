<!DOCTYPE html>
<html lang="ru">
<header>
    <title>Главная</title>
    <meta charset="utf-8"> 
<!--    <link rel="stylesheet" href="/app/views/style/Mystyle.css">-->
    <link rel="stylesheet" href="/app/views/style/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <link rel="stylesheet" href="/app/views/style/js/bootstrap.min.js">
    
</header>
<body>
<nav class="nav navbar-inverse" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="skroem">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Главная</a>
		</div>
	<div class="collapse navbar-collapse" id="skroem">
		
		
		<ul class="nav navbar-nav">
			<li><a href="/logout">Выйти</a></li>
			<li><a href="/login">Войти</a></li>
			<li><a href="/acc">Личный кабинет</a></li>
		</ul>
	</div>
	</div>
</nav>
	
	<?php include $contentView; ?>

	<script src='/js/comment.js'> </script>
	<script src="/js/auth.js"></script>
	<script src="/js/jquery-3.2.1.min.js"></script>
</body>
</html>