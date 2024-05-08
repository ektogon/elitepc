<html>

<head>

	<title>{$pageTitle}</title>
	<link rel="stylesheet" href="{$teplateWebPath}css/main.css" type="text/css" />
</head>

<header id="header">
	<nav>
		<ul>
			<a href="/">
				<img class="logo" src="{$teplateWebPath}img/logo.png" alt="logo">
			</a>
			<li><a href="/list/">Каталог</a>
				<ul>
					{foreach $rsCategories as $item}
					<li><a>{$item['name']}</a>
						<ul>
							{if isset($item['children'])}
							{foreach $item['children'] as $itemChild}
							<li><a href="/category/{$itemChild['id']}/">{$itemChild['name']}</a></li>
							{/foreach}
							{/if}
						</ul>
					</li>
					{/foreach}
				</ul>
			</li>
			<li><a href="#">Конфигуратор</a></li>
			<li><a href="#">Услуги</a></li>
			<li>
				<ol>
					<li>
						<a href="/cart/"><img class="profile" src="{$teplateWebPath}img/korzina.png"></a>
						<div id="cartCntItems">

							{if $cartCntItems > 0}
							<p>{$cartCntItems}</p>
							{else}
							{/if}
						</div>
					</li>
					{if !$_SESSION['user']['name']}
					<li><a href="#"><img class="profile" src="{$teplateWebPath}/img/profile.png"></a>
						<ul>
							<li><a onclick="show('auth','block')">Войти</a></li>
							<li><a onclick="show('reg','block')">Зарегистрироваться</a></li>
						</ul>
					</li>
					{else}
					<li>
						<a href="/user/">Привет,
							{$_SESSION['user']['name']}
						</a>
					</li>
					<li>
						<a href="/user/logout/">
							<img class="profile" src="{$teplateWebPath}/img/exit.png">
						</a>
					</li>
					{/if}
					<li><a href="tel:+79999999999"><img class="profile" src="{$teplateWebPath}img/phone.png"></a></li>
				</ol>
			</li>
		</ul>
	</nav>
</header>

<body>
	<div id="gray" onclick="show('0','none')"></div>
	<div id="reg">
		<form>
			<label>Имя</label>
			<input type="text" name="name" placeholder="Введите Имя">
			<label>Логин</label>
			<input type="text" name="login" placeholder="Введите логин">
			<label>Почта</label>
			<input type="email" name="email" placeholder="Введите адрес почты">
			<label>Пароль</label>
			<input type="password" name="pwd1" placeholder="Введите пароль">
			<label>Подтверждение пароля</label>
			<input type="password" name="pwd2" placeholder="Подтвердите пароль">
			<button type="submit" id="register-btn">Зарегистрироваться</button>
			<p>
				У вас уже есть аккаунт? - <a onclick="show('auth','block')">авторизируйтесь</a>!
			</p>
			<p class="msg none"></p>

		</form>
	</div>
	<div id="auth">
		<form>
			<label>Логин</label>
			<input type="text" name="loginn" placeholder="Введите свой логин">
			<label>Пароль</label>
			<input type="password" name="password" placeholder="Введите пароль">
			<button type="submit" id="login-btn">Войти</button>
			<p>
				У вас нет аккаунта? - <a onclick="show('reg','block')">зарегистрируйтесь</a>!
			</p>
			<p class="msg none"></p>
		</form>
	</div>