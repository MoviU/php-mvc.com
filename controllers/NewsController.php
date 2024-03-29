<?php
    include_once (ROOT."/models/News.php");

    class NewsController {

        public function actionIndex () {
            $newsList = News::getNewsList();
            require_once (ROOT.'/views/news/index.php');
            return true;
        }

        public function actionView ($id) {
            $id = intval($id);
            $news = News::getNewsItemById($id);
            require_once (ROOT.'/views/news/view.php');
            return true;
        }
    }
