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
              <div class="card mb-4 shadow-sm">
              <div class="card-header">
                <h4 class="my-0 fw-normal"><?=$news['title']?></h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled mt-3 mb-4">
                  <li><?=$news['short_content']?></li>
                  <li><?=$news['content']?></li>
                  <li><?=$news['date']?></li>
                </ul>
                <a href="/news"><button type="button" class="w-100 btn btn-lg btn-outline-primary">Назад</button></a>
              </div>
            </div>
            </div>
    </body>
</html>
