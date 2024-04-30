
<header id="header">
	<nav>
		<ul>
			<a href="#">
				<li>
					<img class="logo" src="{$teplateWebPath}img/logo.png" alt="logo">
				</li>
			</a>
			<li><a href="#">Каталог</a>
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
					<li><a href="#"><img class="profile" src="{$teplateWebPath}img/korzina.png"></a></li>
					<!-- <?php
					error_reporting(0);
					if (!$_SESSION['user']['name']) : ?>
						<li><a href="#"><img class="profile" src="../img/profile.png"></a>
							<ul>
								<li><a href="buyer/authorization.php">Войти</a></li>
								<li><a href="buyer/reg.php">Зарегистрироваться</a></li>
							</ul>
						</li>
					<? else : ?>
						<li><a>Привет, <?= $_SESSION['user']['name'] ?></a></li>
						<li>
							<a href="../models/logout.php">
								<img class="profile" src="../img/exit.png">
							</a>
						</li>
					<? endif ?> -->
					<li><a href="tel:+79999999999"><img class="profile" src="{$teplateWebPath}img/phone.png"></a></li>
				</ol>
			</li>
		</ul>
	</nav>
</header>

<body>
