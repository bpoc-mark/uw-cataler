<?php if ($str[1] !== "") : ?>
	<div class="footer_top">
		<div class="container-fluid">
			<div class="row hover_nav">
				<div class="col">
					<div class="wrapper">
						<a class="hover_nav_link" href="/company/">企業情報</a>
						<span class="button_wrap"><span class="button"></span></span>
					</div>
				</div>
				<div class="col">
					<div class="wrapper">
						<a class="hover_nav_link" href="/technology/">研究開発</a>
						<span class="button_wrap"><span class="button"></span></span>
					</div>
				</div>
				<div class="col">
					<div class="wrapper">
						<a class="hover_nav_link" href="/product/">製品</a>
						<span class="button_wrap"><span class="button"></span></span>
					</div>
				</div>
				<div class="col">
					<div class="wrapper">
						<a class="hover_nav_link" href="/special/">特徴のある活動</a>
						<span class="button_wrap"><span class="button"></span></span>
					</div>
				</div>
				<div class="col">
					<div class="wrapper">
						<a class="hover_nav_link" href="/sus/">サステナビリティ</a>
						<span class="button_wrap"><span class="button"></span></span>
					</div>
				</div>
			</div>
			<div class="hover_nav_item">
				<ul id="hover_nav_container"></ul>
			</div>
			<div class="other_list">
				<ul>
					<li>
						<a class="hover_nav_link_other" href="/news/">新着情報</a>
					</li>
					<li>
						<a class="hover_nav_link_other" href="">用語集</a>
					</li>

					<li><a class="hover_nav_link_other" href="/recruit/">採用情報</a></li>
				</ul>
			</div>
		</div>
	</div>
<?php endif; ?>
<div class="footer_inner">
	<?php if ($str[1] == "") : ?>
		<div class="flex-container">
			<div class="nav-wrapper">
				<nav>
					<ul>
						<li>
							<strong><a href="/product/">製品･サービス</a></strong>
							<ol>
								<!--<li><a href="/product/about/">触媒とは</a></li>-->
								<li><a href="/product/gasoline/">ガソリン車用触媒</a></li>
								<li><a href="/product/diesel/">ディーゼル車用触媒</a></li>
								<li><a href="/product/motorcycle/">二輪車用触媒</a></li>
								<li><a href="/product/engine/">汎用エンジン用触媒</a></li>
								<li><a href="/product/carbon/">電動車両向け電池用炭素材料</a></li>
								<li><a href="/product/electro/">燃料電池車用電極触媒</a></li>
								<li><a href="/product/sheet/">機能性不織布シート</a></li>
								<li><a href="/product/flow/">フロー合成</a></li>
							</ol>
						</li>
						<li>
							<strong><a href="/company/">企業情報</a></strong>
							<ol>
								<li><a href="/company/top_message/">トップメッセージ</a></li>
								<li><a href="/company/philosophy/">理念体系</a></li>
								<li><a href="/company/company_info/">会社概要</a></li>
								<li><a href="/company/company_business/">事業概要</a></li>
								<li><a href="/company/officer/">役員</a></li>
								<li><a href="/company/chart/">組織</a></li>
								<li><a href="/company/location/">拠点</a></li>
								<li><a href="/company/history/">歴史</a></li>
								<li><a href="/company/award/">受賞歴</a></li>
								<li><a href="/company/brand/">キャタラーブランド</a></li>
							</ol>
						</li>
						<li>
							<strong><a href="/special/">特徴のある活動</a></strong>
							<ol>
								<li><a href="/special/bcm/">C-BCM</a></li>
								<li><a href="/special/ham/">C-HAM</a></li>
								<li><a href="/special/prs/">C-PRS</a></li>
								<li><a href="/special/qic/">C-QIC</a></li>
								<li><a href="/special/qc/">QCサークル活動</a></li>
								<li><a href="/special/tbp/">C-TBP</a></li>
								<li><a href="/special/top/">C-TOP</a></li>
								<li><a href="/special/cps/">G-CPS</a></li>
								<li><a href="/special/i2022/">i-Factory</a></li>
								<li><a href="/special/win/">C-WIN</a></li>
							</ol>
						</li>
						<li>
							<strong><a href="/technology/">研究開発</a></strong>
							<ol>
								<li><a href="#">研究開発戦略</a></li>
								<li><a href="#">知的財産戦略</a></li>
								<li><a href="#">キャタラーの技術力</a></li>
								<li><a href="#">研究開発拠点</a></li>
							</ol>
						</li>
						<li>
							<strong><a href="/sus/">サステナビリティ</a></strong>
							<ol>
								<li><a href="/sus/message/">CSR管掌メッセージ</a></li>
								<li><a href="/sus/SDGs/">マテリアリティとSDGs</a></li>
								<li><a href="/sus/csr/">CSR指針</a></li>
								<li><a href="/sus/environment/">環境指針</a></li>
								<li><a href="/sus/safety/">安全指針</a></li>
								<li><a href="/sus/quality/">品質指針</a></li>
								<li><a href="/sus/procurement/">調達指針</a></li>
								<li><a href="/sus/system/">CSR体制と取り組み</a></li>
								<!--<li><a href="/sus/materiality/">マテリアリティ(重要課題)</a></li>-->
								<li><a href="/sus/management/">環境経営</a></li>
								<li><a href="/sus/protection/">環境保全</a></li>
								<li><a href="/sus/safety_health/">労働安全衛生</a></li>
								<li><a href="/sus/compliance/">コンプライアンスマネジメント</a></li>
								<li><a href="/sus/risk/">リスクマネジメント</a></li>
								<li><a href="/sus/data/">非財務データ集</a></li>
								<li><a href="/sus/iso26000/">ISO26000対照表</a></li>
							</ol>
						</li>
					</ul>
				</nav>
			</div>
			<div class="sns-wrapper">
				<ul>
					<li><a href="https://www.facebook.com/cataler.official/?modal=admin_todo_tour" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></a></i></li>
					<li><a href="https://twitter.com/catalerofficial" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></a></i></li>
					<li><a href="https://www.instagram.com/cataler_official/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></a></i></li>
					<li><a href="https://www.youtube.com/channel/UCOzFJ6v4wfg6_0sgkRSB5qA" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></a></i></li>
				</ul>
			</div>
		</div>
	<?php endif; ?>

	<div class="copy">
		<div class="flex-container">

			<div class="copyright">
				<div class="logo"><a href="/"><img src="/images/common/logo.svg" alt="<?php echo SITE_NAME; ?>"></a></div>
				<div class="info">株式会社キャタラー　<br class="sp">〒437-1492 静岡県掛川市千浜7800<br class="sp"><span class="pc">/</span>電話：0537-72-3131（代表）</div>
				<small>Copyright &copy; CATALER CORPORATION. All Rights Reserved.</small>
			</div>

			<div class="link-area">
				<div class="global"><a href="/"><img class="in-svg" src="/images/common/global.svg" alt=""><span>日本語</span></a></div>
				<ul>
					<li><a href="/legal/">ご利用条件</a></li>
					<li><a href="/privacy/">個人情報の取り扱いについて</a></li>
					<li><a href="/social/">ソーシャルメディアポリシー</a></li>
					<li><a href="/sitemap/">サイトマップ</a></li>
				</ul>
			</div>
		</div>
	</div>

</div>
