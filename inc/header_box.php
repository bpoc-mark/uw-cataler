<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner">
	<div class="head_top">
		<div class="left_nav">
			<ul>
				<li>
					<a href=""><img src="/images/common/img_1.svg" alt=""></a>
				</li>
				<li>
					<a href=""><img src="/images/common/img_2.svg" alt=""></a>
				</li>
				<li>
					<a href=""><img src="/images/common/img_3.svg" alt=""></a>
				</li>
			</ul>
		</div>
		<div class="right_nav">
			<a href="">
				<img src="/images/common/globe_icon.svg" alt="">
				<span>日本語</span>
			</a>
		</div>
	</div>

	<!-- <div class="head_bottom">
		<div class="left_nav">
			<?php
			if ($str[1] == "") {
				echo '<h1 class="logo"><a href="/"><img src="/images/common/head_logo.svg" alt=""></a></h1>';
			} else {
				echo '<p class="logo"><a href="/"><img src="/images/common/head_logo.svg" alt=""></a></p>';
			}
			?>
		</div>

		<nav class="mid_nav">
			<ul>
				<li><a href="/" <?php if ($str[1] == "") {
					echo ' class="here"';
				} ?>>ニュース</a></li>
				<li><a href="/" <?php if ($str[1] == "") {
					echo ' class="here"';
				} ?>>製品</a></li>
				<li><a href="/" <?php if ($str[1] == "") {
					echo ' class="here"';
				} ?>>企業情報</a></li>
				<li><a href="/" <?php if ($str[1] == "") {
					echo ' class="here"';
				} ?>>特別な活動</a></li>
				<li><a href="/" <?php if ($str[1] == "") {
					echo ' class="here"';
				} ?>>研究開発</a></li>
				<li><a href="/" <?php if ($str[1] == "") {
					echo ' class="here"';
				} ?>>サステナビリティ</a></li>
				<li><a href="/" <?php if ($str[1] == "") {
					echo ' class="here"';
				} ?>>採用情報</a></li>
			</ul>
		</nav>

		<nav class=right_nav">
			<ul>
				<li><a href="/" <?php if ($str[1] == "") {
					echo ' class="here"';
				} ?>><img src="/images/common/book_icon.svg" alt=""> 用語集</a></li>
				<li><a href="/" <?php if ($str[1] == "") {
					echo ' class="here"';
				} ?>><img src="/images/common/mail_icon.svg" alt=""></a></li>
				<li><a href="/" <?php if ($str[1] == "") {
					echo ' class="here"';
				} ?>><img src="/images/common/search_icon.svg" alt=""></a></li>
			</ul>
		</nav>
	</div> -->
	

</div>
