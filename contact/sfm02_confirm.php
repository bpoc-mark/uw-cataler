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

    <main id="Contact" class="sfm2">

      <section class="form-sec">
        <div class="form_wrap container">
          <p>
            入力内容を確認の上、間違いがなければ送信ボタンを押してメッセージをご送信ください。
          </p>
          <form method="post" name="sfm-form" id="sfm-form" action="./">

            <table>

              <tr>
                <th>■お名前<span class="need">必須</span></th>
                <td>
                  <p><?php echo $sfm_html->name; ?></p>
                </td>
              </tr>

              <tr>
                <th>■メールアドレス<span class="need">必須</span></th>
                <td>
                  <p><?php echo $sfm_html->email; ?></p>
                </td>
              </tr>

              <tr>
                <th>■ご住所<span class="need">必須</span></th>
                <td>
                  <p>〒<?php echo $sfm_html->zip; ?></p>
                  <p><?php echo $sfm_html->address; ?></p>
                </td>
              </tr>

              <tr>
                <th>■チェックボックス <span class="need">必須</span></th>
                <td>
                  <p><?php echo $sfm_html->check; ?></p>
                </td>
              </tr>

              <tr>
                <th>■セレクトボックス<span class="need">〈必須〉</span></th>
                <td>
                  <p><?php echo $sfm_html->select; ?></p>
                </td>
              </tr>

              <tr>
                <th>■お問い合わせ内容</th>
                <td>
                  <p><?php echo $sfm_html->message; ?></p>
                </td>
              </tr>

            </table>

            <div class="submit_area">
              <?php echo $sfm_submit; ?>
            </div><!-- submit_area -->

          </form>
        </div>
      </section>
    </main>


    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
    </footer>
  </div><!-- //AllBox -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
