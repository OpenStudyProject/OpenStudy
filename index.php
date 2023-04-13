<?php
    $title = "最新のコンテンツ";
    $description = "";
    $path = './';
    $isHome = true;
    $style = "article_index"
?>
<?php
    $articles = json_decode(mb_convert_encoding(file_get_contents($path . 'json/articles.json'), 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN'), true)
?>
<!DOCTYPE html>
<html lang="ja">
<?php require $path . 'components/head.php'; ?>
<body>
<?php require $path . 'components/header.php'; ?>
<main>
    <div class="wrapper">
        <div class="container">
            <h1>最新のコンテンツ</h1>
            <?php
                foreach ($articles as $a) {
                    echo "<a href=" . $path . "articles?title=" . $a["url"] . " class=\"article\">";
                        echo "<h2>" . $a["title"] . "</h2>";
                        echo "<p>" . $a["createDate"] . "</p>";
                    echo "</a>";
                }
            ?>
        </div>
    </div>
</main>
<?php require $path . 'components/footer.php'; ?>
</body>
</html>