<?php
    $title = "Math";
    $description = "";
    $path = '../';
    $style = "article";
?>
<!DOCTYPE html>
<html lang="ja">
<?php require $path . 'components/head.php'; ?>
<body>
<?php require $path . 'components/header.php'; ?>
<?php require $_GET['title'] . '.html'; ?>
<?php require $path . 'components/footer.php'; ?>
</body>
</html>