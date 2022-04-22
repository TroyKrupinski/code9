<script src = "assets/js/main.js"></script>
<link href="assets/css/news.css" rel="stylesheet">

<link href="assets/css/bootstrap3.3.7.css" rel="stylesheet">

<h2><?php echo $title; ?></h2>

<?php foreach ($news as $news_item): ?>

        <h3><?php echo $news_item['title']; ?></h3>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        <p><a href="<?= '/news/'.$news_item['slug'] ?>">View article</a></p>

<?php endforeach; ?>