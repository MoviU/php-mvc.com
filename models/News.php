<?php
    class News {

        /*
        * Returns a single news item with specified id
        * @param ineger id
        */
        public static function getNewsItemById ($id) {
            $id = intval($id);
            // Запрос к БД
            // Робота с данными
            if ($id) {
                $db = DB::getConnection();
                $result = $db->query('SELECT * FROM `News` WHERE `id` = '.$id.';');
                $row = $result->fetch_assoc();
                $db->close();
                return $row;
            }
        }

        /*
        * Returns an array of news items
        */
        public static function getNewsList () {
            // Запрос к БД
            $db = DB::getConnection();
            // Робота с данными
            $newsList = array();
            $result = $db->query('SELECT `id`, `title`, `date`, `short_content` '
            . 'FROM `News` '
            . 'ORDER BY `date` DESC '
            . 'LIMIT 10;');
            $i = 0;
            while($row = $result->fetch_assoc() ) {
                $newsList[$i]['id'] = $row['id'];
                $newsList[$i]['title'] = $row['title'];
                $newsList[$i]['date'] = $row['date'];
                $newsList[$i]['short_content'] = $row['short_content'];
                $i++;
            }
            $db->close();
            return $newsList;
        }

    }
