<?php

namespace liw\core\models;
use liw\components\Db;

class Post
{
    /*
     * Return single post by id
     * @param integer id
     */
    public static function getPostItemById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM publication WHERE id_publ =' . $id);
            $result->setFetchMode(\PDO::FETCH_ASSOC);
            $postItem = $result->fetch();

            return $postItem;
        }
    }

    /*
     * Return comment by id
     * @param integer id
     */
    public static function getCommentById($id)
    {
        $id = intval($id);

        if ($id) {
            $commentItem = [];
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM comments WHERE id_to_what_post =' . $id);

            $i = 0;
            while($row = $result->fetch()) {
                //$commentItem[$i]['id_to_what_post'] = $row['id_to_what_post'];
                $commentItem[$i]['date'] = $row['date'];
                $commentItem[$i]['text'] = $row['text'];
                $commentItem[$i]['author'] = $row['author'];
                $i++;
            }

            return $commentItem;
        }
    }

    /*
     * Returns an array of popular post items
     */
    public static function getPostPopularList()
    {
        $db = Db::getConnection();
        $PostPopularList = [];

        $result = $db->query('SELECT id_publ, name, text, author, date, number_of_comments 
                                        FROM publication ORDER BY number_of_comments DESC LIMIT 5');

        $i = 0;
        while($row = $result->fetch()) {
            $PostPopularList[$i]['id_publ'] = $row['id_publ'];
            $PostPopularList[$i]['name'] = $row['name'];
            $PostPopularList[$i]['date'] = $row['date'];
            $PostPopularList[$i]['text'] = $row['text'];
            $PostPopularList[$i]['author'] = $row['author'];
            $PostPopularList[$i]['number_of_comments'] = $row['number_of_comments'];
            $i++;
        }

        return $PostPopularList;
    }

    /*
     * Returns an array of last post items
     */
    public static function getPostLastList()
    {
        $db = Db::getConnection();
        $PostLastList = [];

        $result = $db->query('SELECT id_publ, name, text, author, date, number_of_comments 
                                        FROM publication ORDER BY date DESC LIMIT 5');

        $i = 0;
        while($row = $result->fetch()) {
            $PostLastList[$i]['id_publ'] = $row['id_publ'];
            $PostLastList[$i]['name'] = $row['name'];
            $PostLastList[$i]['date'] = $row['date'];
            $PostLastList[$i]['text'] = $row['text'];
            $PostLastList[$i]['author'] = $row['author'];
            $PostLastList[$i]['number_of_comments'] = $row['number_of_comments'];
            $i++;
        }

        return $PostLastList;
    }
}