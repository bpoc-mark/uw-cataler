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
  <meta property="og:type" content="article" /> <!-- 下層では「article」にしてください -->
  <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
  <meta property="og:url" content="<?php echo CANONICAL ?>" />

  <title><?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="News">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <div class="container">
        <ul class="news_ul">
          <li class="news_li">
            <a href="">
              <span class="date">2020.12.08</span>
              <span class="img_wrap"><img src="https://placehold.jp/80x65.png" alt="ダミー画像"></span>
              <span class="title">ダミーテキストダミーテキストダミーテキストダミーテキスト</span>
            </a>
          </li>
          <li class="news_li">
            <a href="">
              <span class="date">2020.12.08</span>
              <span class="img_wrap"><img src="https://placehold.jp/80x65.png" alt="ダミー画像"></span>
              <span class="title">ダミーテキストダミーテキストダミーテキストダミーテキスト</span>
            </a>
          </li>
          <li class="news_li">
            <a href="">
              <span class="date">2020.12.08</span>
              <span class="img_wrap"><img src="https://placehold.jp/80x65.png" alt="ダミー画像"></span>
              <span class="title">ダミーテキストダミーテキストダミーテキストダミーテキスト</span>
            </a>
          </li>
        </ul>

        <!-- Wordpress -->
        <div class="page_navigation">
          <div class="wp-pagenavi">
            <a class="previouspostslink" href="#" rel="prev">PREV</a>
            <a class="page smaller" href="#">1</a>
            <span class="current">2</span>
            <a class="page larger" href="#">3</a>
            <a class="nextpostslink" href="#" rel="next">NEXT</a>
          </div>
        </div>

        <!-- Movable Type -->
        <div class="page_navigation">
          <ul>
            <li><span class="current_page">1</span></li>
            <li><a href="#" class="link_page">2</a></li>
            <li><a href="#" class="link_page">3</a></li>
          </ul>
        </div>
      </div>
    </main>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
    </footer>
  </div><!-- //AllBox -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
