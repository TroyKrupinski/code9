<?php
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">';
echo '<script src = https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js></script>';
echo '<button onclick="history.back()">Go Back</button>';
echo '<h2>'.$news_item['title'].'</h2>';
echo $news_item['text'];