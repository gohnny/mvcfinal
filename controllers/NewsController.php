<?php

require_once  ROOT . '/models/News.php';

class NewsController {

    public function actionView($id) {
        if ($id) {
            $newsItem = News::getNewsItemById($id);
            echo '<pre>';
            print_r($newsItem);
            echo '<pre>';
            return TRUE;
        }
    }
        public function actionIndex() {
            $newsList = array();
            $newsList = News::getNewsList();

            echo '<pre>';
            print_r($newsList);
            echo '<pre>';
            return TRUE;
        }

    }


