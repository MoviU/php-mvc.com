<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>News</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <div class="col">
            <?php foreach ($newsList as $newsItem): ?>
              <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="my-0 fw-normal"><?=$newsItem['title']?></h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                  <li><?=$newsItem['short_content']?></li>
                  <li><?=$newsItem['date']?></li>
                </ul>
                <a href="/news/<?=$newsItem['id']?>">
                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Читать: <?=$newsItem['title']?></button></a>
              </div>
            </div>
            <?php endforeach; ?>
            </div>
    </body>
</html>
