<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner">
	<div class="head_top">
		<div class="left_nav">
			<ul>
				<li>
					<a href=""><img src="/images/common/new_head/img_1.svg" alt=""></a>
				</li>
				<li>
					<a href=""><img src="/images/common/new_head/img_2.svg" alt=""></a>
				</li>
				<li>
					<a href=""><img src="/images/common/new_head/img_3.svg" alt=""></a>
				</li>
			</ul>
		</div>
		<div class="right_nav">
			<a href="javascript:void(0)" class="btn_lang">
				<img src="/images/common/new_head/globe_icon.svg" alt="">
				<span>日本語</span>
			</a>
		</div>
	</div>

	<div class="head_bottom">
		<div class="left_nav">
			<?php
			if ($str[1] == "") {
				echo '<h1 class="logo"><a href="/"><img src="/images/common/new_head/head_logo.svg" alt=""></a></h1>';
			} else {
				echo '<p class="logo"><a href="/"><img src="/images/common/new_head/head_logo.svg" alt=""></a></p>';
			}
			?>
		</div>

		<nav class="mid_nav">
			<ul>
				<li class="active"><a href="/" <?php if ($str[1] == "") {
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
			<div class="menu">
				<span class="line line-t"></span>
				<span class="line line-m"></span>
				<span class="line line-b"></span>
				<p></p>
			</div>
		</nav>

		<nav class="right_nav">
			<ul>
				<li><a href="/" <?php if ($str[1] == "") {
					echo ' class="here"';
				} ?>><img src="/images/common/new_head/book_icon.svg" alt=""> 用語集</a></li>
				<li><a href="/" <?php if ($str[1] == "") {
					echo ' class="here"';
				} ?>><img src="/images/common/new_head/mail_icon.svg" alt=""></a></li>
				<li><a href="javascript:void(0)" class="btn_search" <?php if ($str[1] == "") {
					echo ' class="here"';
				} ?>><img src="/images/common/new_head/search_icon.svg" alt=""></a></li>
			</ul>
		</nav>
	</div>
</div>

<div class="sp_menu_cont">
	<div class="overlay"></div>
	<div class="wrapper">
		<div class="input_search">
			<input type="text" class="btn_search" placeholder="何をお探しですか？">
			<img src="/images/common/new_head/search_icon.svg" alt="">
		</div>
		<ul class="sp_menu">
			<li>
				<a href="">製品･サービス</a>
			</li>
			<li>
				<a href="">企業情報</a>
			</li>
			<li>
				<a href="">特別な活動</a>
			</li>
			<li>
				<a href="">研究開発</a>
			</li>
			<li>
				<a href="">サステナビリティ</a>
			</li>
		</ul>
		<a href="javascript:void(0)" class="btn_lang">
			<img src="/images/common/new_head/globe_icon.svg" alt="">
			<span>日本語</span>
		</a>
		<ul class="sp_menu2">
			<li>
				<a href="">ご利用条件</a>
			</li>
			<li>
				<a href="">プライバシーポリシー</a>
			</li>
			<li>
				<a href="">ソーシャルメディアポリシー</a>
			</li>
			<li>
				<a href="">サイトマップ</a>
			</li>
		</ul>
		<ul class="sp_icon">
			<li>
				<a href="">
					<img src="/images/common/new_head/fb_icon.png" alt="">
				</a>
			</li>
			<li>
				<a href="">
					<img src="/images/common/new_head/twitter_icon.png" alt="">
				</a>
			</li>
			<li>
				<a href="">
					<img src="/images/common/new_head/ig_icon.png" alt="">
				</a>
			</li>
			<li>
				<a href="">
					<img src="/images/common/new_head/youtube_icon.png" alt="">
				</a>
			</li>
		</ul>
	</div>
</div>

<div class="language_layer">
	<div class="overlay"></div>
	<div class="wrapper">
		<div class="lang_cont">
			<p><img src="/images/common/new_head/globe_icon.svg" alt=""> 言語を選択してください。</p>
			<div class="lang_close">
				<img src="/images/common/new_head/lang/close.png" alt="">
			</div>
			<div class="lang_list">
				<li>
					<a href="" data-val="en">
						<img src="/images/common/new_head/lang/en.png" alt="">
						英語
					</a>
				</li>
				<li>
					<a href="" data-val="jp">
						<img src="/images/common/new_head/lang/jp.png" alt="">
						日本語
					</a>
				</li>
				<li>
					<a href="" data-val="ch">
						<img src="/images/common/new_head/lang/ch.png" alt="">
						中国語
					</a>
				</li>
				<li>
					<a href="" data-val="de">
						<img src="/images/common/new_head/lang/de.png" alt="">
						ドイツ語
					</a>
				</li>
				<li>
					<a href="" data-val="fr">
						<img src="/images/common/new_head/lang/fr.png" alt="">
						フランス語
					</a>
				</li>
			</div>
		</div>
	</div>
</div>

<div class="search_layer">
	<div class="overlay"></div>
	<div class="wrapper">
		<div class="search_cont">
			<div class="search_input">
				<img src="/images/common/new_head/search_icon.svg" alt="">
				<input type="text" id="searchbox">
				<div class="arrow_search">
				<img src="/images/common/new_head/arrow_search.png" alt="">
				</div>
			</div>
			<div class="lang_close">
				<img src="/images/common/new_head/lang/close.png" alt="">
			</div>
			<ul class="search_list">
				<li>
					<a href="">
						候補が表示されます。1
					</a>
				</li>
				<li>
					<a href="">
						候補が表示されます。2
					</a>
				</li>
				<li>
					<a href="">
						候補が表示されます。3
					</a>
				</li>
				<li>
					<a href="">
						候補が表示されます。4
					</a>
				</li>
				<li>
					<a href="">
						候補が表示されます。1
					</a>
				</li>
				<li>
					<a href="">
						候補が表示されます。2
					</a>
				</li>
				<li>
					<a href="">
						候補が表示されます。3
					</a>
				</li>
				<li>
					<a href="">
						候補が表示されます。4
					</a>
				</li>
				
			</ul>
		</div>
	</div>
</div>
