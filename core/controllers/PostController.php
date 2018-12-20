<?php

//namespace liw\core\controllers;
use liw\core\models\Post;

class PostController
{

    public function actionIndex()
    {
        $postPopularList = [];
        $postPopularList = Post::getPostPopularList();

        $postLastList = [];
        $postLastList = Post::getPostLastList();

        \liw\core\models\Form::entryPostToDB();
        require_once ('core/views/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id){
            $postItem = Post::getPostItemById($id);
            $commentItem = Post::getCommentById($id);
            \liw\core\models\Form::entryCommentsToDB($id);

            require_once ('core/views/view.php');
        }
        return true;
    }
}