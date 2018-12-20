<?php

namespace liw\core\models;

use liw\components\Db;

class Form
{
    public static function entryCommentsToDB($id)
    {
        $db = Db::getConnection();

        if (isset($_POST['comm_text'])){
            $text = $_POST['comm_text'];
            $author = $_POST['author'];
            $result = $db->query("INSERT INTO `comments` (`id_com`, `id_to_what_post`, `author`, `text`, `date`)
                                            VALUES (NULL, '".$id."', '".$author."', '".$text."', CURRENT_TIMESTAMP);");

            $result2 = $db->query('SELECT number_of_comments FROM publication WHERE id_publ =' . $id);
            $num_comm = 0;
            while($row = $result2->fetch()) {
                $num_comm = $row['number_of_comments'];
            }

            $num_comm_future = $num_comm + 1;
            $result3 = $db->query("UPDATE `publication` SET `number_of_comments` = '".$num_comm_future."'
                                             WHERE `publication`.`id_publ` = $id;");

            //redirect на страницу поста после добавления коментария
            header('Location: '.$id);
        }

    }

    public static function entryPostToDB()
    {
        $db = Db::getConnection();

        if (isset($_POST["post_text"]) && isset($_POST["author"])){
            $date = date("Y-m-d H:i:s");
            $result = $db->query("INSERT INTO `publication` (`id_publ`, `name`, `text`, `author`, `date`, `number_of_comments`)
                                            VALUES (NULL, '".$_POST["theme"]."', '".$_POST["post_text"]."', '".$_POST["author"]."', '".$date."', '0');");

            //redirect на страницу поста после добавления Поста
            header('Location: /post/');
        }


    }
}