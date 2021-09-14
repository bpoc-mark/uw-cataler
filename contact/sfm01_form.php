<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/tag_manager.php"); ?>
	<meta charset="UTF-8" />
	<meta name="robots" content="index,follow">
	<link rel="canonical" href="<?php echo CANONICAL ?>">
	<meta name="keywords" content="<?php echo KEY_WORD ?>">
	<meta name="description" content="<?php echo DESCRIPTION ?>">
	<meta property="og:title" content="<?php echo SITE_NAME ?>">
	<meta property="og:description" content="<?php echo DESCRIPTION ?>" />
	<meta property="og:url" content="<?php echo CANONICAL ?>" />

	<title>お問い合わせ | <?php echo SITE_NAME ?></title>

	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Competitive">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
	<div id="AllBox">
		<header>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
		</header>

		<main id="Contact" class="sfm1">



			<section class="form-sec">
				<div class="form_wrap container">
					<p>必要項目を入力し、個人情報保護方針をご確認の上、入力内容の確認ボタンを押してください。</p>


					<form method="post" name="sfm-form" id="sfm-form" action="./">
						<table>
							<tr>
								<th>お名前<span class="need">〈必須〉</span></th>
								<td><input type="text" name="name_s" value="" title="" placeholder="例）山田 太郎"></td>
							</tr>

							<tr>
								<th>メールアドレス<span class="need">〈必須〉</span></th>
								<td><input type="text" name="email_s" value="" title="" placeholder="例）mail@example.com"></td>
							</tr>

							<tr class="address">
								<th>ご住所<span class="need">〈必須〉</span></th>
								<td>
									<span class="zip-wrap">
										<input class="zip" type="text" name="zip_s" size="10" maxlength="8" placeholder="例）123-0004">
									</span>
									<input class="ad_btn" type="button" value="住所自動入力"><br>
									<input class="text02" type="text" name="address_s" size="60" placeholder="例）静岡県浜松市南区下江町413">
								</td>
							</tr>


							<tr>
								<th>チェックボックス <span class="need">〈必須〉</span></th>
								<td>
									<div class="checkbox">
										<input type="hidden" name="check_s" />
										<ul class="check-list type">
											<li>
												<input class="checkbox_item" type="checkbox" name="check_s[]" value="チェック1" id="type01" />&nbsp;
												<label for="type01">チェック1</label>
											</li>
											<li>
												<input class="checkbox_item" type="checkbox" name="check_s[]" value="チェック2" id="type02" />&nbsp;
												<label for="type02">チェック2</label>
											</li>
											<li>
												<input class="checkbox_item" type="checkbox" name="check_s[]" value="チェック3" id="type03" />&nbsp;
												<label for="type03">チェック3</label>
											</li>
										</ul>
									</div>
								</td>
							</tr>


							<tr>
								<th>ラジオボタン <span class="need">〈必須〉</span></th>
								<td>
									<div class="checkbox">
										<input type="hidden" name="radio_s" />
										<ul class="check-list type">
											<li>
												<input class="checkbox_item" type="radio" name="radio_s[]" value="ラジオボタン1" id="radio01" />&nbsp;
												<label for="radio01">ラジオボタン1</label>
											</li>
											<li>
												<input class="checkbox_item" type="radio" name="radio_s[]" value="ラジオボタン2" id="radio02" />&nbsp;
												<label for="radio02">ラジオボタン2</label>
											</li>
											<li>
												<input class="checkbox_item" type="radio" name="radio_s[]" value="ラジオボタン3" id="radio03" />&nbsp;
												<label for="radio03">ラジオボタン3</label>
											</li>
										</ul>
									</div>
								</td>
							</tr>

							<tr>
								<th>セレクトボックス<span class="need">〈必須〉</span></th>
								<td>
									<div class="select-box">
										<select name="select_s" required value="" title="">
											<option name="select_s[]" value="" disabled="disabled" selected hidden>選択してください</option>
											<option name=" select_s[]" value="セレクト1">セレクト1</option>
											<option name="select_s[]" value="セレクト2">セレクト2</option>
											<option name="select_s[]" value="セレクト3">セレクト3</option>
										</select>
									</div>
								</td>
							</tr>

							<tr>
								<th>お問合せ内容<span class="need">〈必須〉</span></th>
								<td><textarea name="message_s" title=""></textarea></td>
							</tr>

						</table>

						<div class="overscroll">
							<ul>
								<li>
									<strong>個人情報保護方針</strong>
									<p>
										株式会社〇〇（以下当社）が運営するWebサイトは、お客様に商品やサービスをご提供するにあたり、<br class="sp">
										個人情報を取得・保有・利用しております。<br>
										当社はお客様の個人情報保護の重要性を深く認識し、個人情報を保護、適切に取り扱う為に、<br class="sp">
										このページにて方針を明らかにしております。
									</p>
								</li>
								<li>
									<strong>ご提供いただくお客様の個人情報について</strong>
									<p>
										当社は、お客様のご要望により当社の商品やサービスをお客様にご提供する為、<br class="sp">
										および当社の商品やサービスに関する情報をお客様にご提供する為、<br class="sp">
										お客様のお名前・住所・生年月日・性別・電話番号・電子メールアドレスといった個人情報を、お客様よりご提供いただきます。
										また当社は、これら以外の個人情報をお伺いする場合がございますが、この場合は一部の必須項目を除き、<br class="sp">
										お客様ご自身の選択で情報提供いただくものとしております。
									</p>
								</li>
								<li>
									<strong>個人情報の利用目的について</strong>
									<p>ご提供いただいた個人情報は、当社が以下の目的で利用するものとします。</p>
									<ol>
										<li>
											１. 当社にて取り扱う商品やサービス、各種イベント、キャンペーンなどの開催について、<br class="sp">
											郵便・電話・電子メールなどの方法によりご案内すること。
										</li>
										<li>２. 商品の発送やプレゼントなどに関するご連絡について、郵便・電話・電子メールなどの方法によりご案内すること。</li>
									</ol>
								</li>
								<li>
									<strong>個人情報の第三者への開示について</strong>
									<p>
										当社は、情報処理・発送等業務委託先を除き、正当な理由のない限り事前にお客様のご承諾を得ることなく、<br class="sp">
										お客様の個人情報を第三者に開示しません。<br>
										ただし、人命や人権を保護するために緊急を要する場合、または司法機関、警察等の公共機関による法令に基づく要請に協力する場合、その他法令に従う場合には、お客様のご承諾を得ることなく情報開示することがあります。
									</p>
								</li>
								<li>
									<strong>法令などの遵守について</strong>
									<p>当社は、お客様の個人情報の取り扱いに関係する日本の法令、その他の規範を遵守します。</p>
								</li>
								<li>
									<strong>安全管理措置について</strong>
									<p>当社は、お客様の個人情報について適切な安全措置を講ずることにより、漏洩・改竄・紛失などの危険防止に努めます。</p>
								</li>
								<li>
									<strong>お客様の責任について</strong>
									<p>
										当Webサイトは、他のWebサイトへリンクを設定していることがありますが、<br class="sp">
										リンク先サイトでの個人情報の取り扱いについては、当該リンク先サイトにてご自身でご確認ください。<br>
										当Webサイトのご利用は、お客様の責任において行われるものとします。
									</p>
								</li>
								<li>
									<strong>継続的な改善について</strong>
									<p>
										当社は、個人情報の取り扱いに関して定期的な監査を行い、常に継続的改善に努めます。<br>
										また当社は、この内容について適宜見直しを行い、改訂することがあります。<br>
										改訂については本ページにてお知らせいたします。
									</p>
								</li>
							</ul>
						</div>

						<div class="agree_area">
							<input type="checkbox" name="agree" id="checkAgree">
							<label for="checkAgree" class="checkAgree">同意します</label>
						</div>

						<div class="submit_area">
							<span>
								<input id="checkSubmit" type="submit" value="入力内容を確認" class="pushbtn" />
							</span>
						</div><!-- submit_area -->


						<input type="hidden" name="mailToNum" value="0" />
						<input type="hidden" name="mode" value="CONFIRM" />
					</form>
				</div>
			</section>
		</main>

		<footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer>
	</div><!-- //AllBox -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
	<script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
	<script src="/js/jquery.validate.min.js"></script>
	<script>
		// 同意ボタンのチェックがされているか
		const checkbox = document.querySelector('#checkAgree');
		const submitButton = document.querySelector('#checkSubmit');

		let changeDisabled = function() {
			if (checkbox.checked) {
				submitButton.disabled = "";
				submitButton.style.opacity = 1;
				submitButton.parentNode.style.pointerEvents = "auto";
			} else {
				submitButton.disabled = "disabled";
				submitButton.style.opacity = 0.4;
				submitButton.parentNode.style.pointerEvents = "none";
			}
		}
		checkbox.addEventListener("change", changeDisabled);
		window.onload = changeDisabled;
		//


		(function() {
			//標準エラーメッセージの変更
			$.extend($.validator.messages, {
				email_s: '*正しいメールアドレスの形式で入力して下さい',
				required: '*入力必須です',
			});

			//追加ルールの定義
			var methods = {
				email: function(value, element) {
					return this.optional(element) || /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/.test(value);
				},
			};

			//メソッドの追加
			$.each(methods, function(key) {
				$.validator.addMethod(key, this);
			});

			//入力項目の検証ルール定義
			var rules = {
				name_s: {
					required: true
				},
				email_s: {
					email: true,
					required: true,
				},
				'check_s[]': {
					required: true,
				},
				'radio_s[]': {
					required: true,
				},
				zip_s: {
					required: true
				},
				select_s: {
					required: true
				},
				address_s: {
					required: true,
				},
				message_s: {
					required: true,
				}
			};

			//入力項目ごとのエラーメッセージ定義
			var messages = {
				name_s: {
					required: "*名前を入力してください"
				},
				email_s: {
					email: "正しいメールアドレスを入力してください"
				},
				check_s: {
					required: "チェックボックスを選択してください"
				}
			};

			$(function() {
				$('#sfm-form').validate({
					errorElement: "span",

					rules: rules,
					messages: messages,

					//エラーメッセージ出力箇所調整
					errorPlacement: function(error, element) {
						if (element.is(':radio')) {
							error.appendTo(element.parent());
						} else if (element.attr("name") == "zip_s") {
							error.insertAfter(".ad_btn");
						} else if (element.attr("name") == "select_s") {
							error.insertAfter(".select-box");
						} else if (element.attr("name") == "check_s[]") {
							error.insertAfter(".checkbox");
						} else {
							error.insertAfter(element);
						}
					},
					focusInvalid: false,
					invalidHandler: function(form, validator) {
						if (!validator.numberOfInvalids())
							return;

						//　エラーのある箇所へのスクロール
						$('html, body').animate({
							scrollTop: $(validator.errorList[0].element).offset().top - 100
						}, 300);
					}

				});
			});

		})();

		$(function() {
			$('.ad_btn').click(function() {
				AjaxZip3.zip2addr('zip_s', '', 'address_s', 'address_s');
			});
		});
	</script>
</body>

</html>
