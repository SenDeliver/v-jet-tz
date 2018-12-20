<!DOCTYPE html>
<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Главная</title>
    <link href="/assets/style.css" rel="stylesheet" type="text/css" media="screen" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/assets/script.js"></script>
</head>
<body>
<div id="wrapper">
    <div class="menu">
        <span id="login">Login</span>
        <span id="sing_up">Sing up</span>
    </div>
    <div id="header-wrapper">
        <div id="header">
            <div id="logo">
                <p>by Denys Selivanov special for v-jet</p>
            </div>
        </div>
    </div>
    <!-- end #header -->
    <div id="page">
        <div id="page-bgtop">
            <div id="page-bgbtm">
                <div id="content">
                    <h2>Популярные записи</h2> <span id="add_post">Добавить запись</span>
                    <?php foreach ($postPopularList as $postPopularItem):?>
                        <div class="post">
                            <h2 class="title"><a href='/post/<?php echo $postPopularItem['id_publ'] ;?>'><?php echo $postPopularItem['name'];?></a></h2>
                            <p class="meta">Автор <em><?php echo $postPopularItem['author'];?></em> Дата добавления: <?php echo $postPopularItem['date'];?>
                                Число коментариев: <?php echo $postPopularItem['number_of_comments'];?>
                                &nbsp;&bull;&nbsp; <a href='/post/<?php echo $postPopularItem['id_publ'] ;?>' class="permalink"> Полная запись</a></p>
                            <div class="entry">
                                <p><?php echo mb_strimwidth($postPopularItem['text'], 0, 103, "...") ;?></p>
                            </div>
                        </div>
                    <?php endforeach;?>
                    <div style="clear: both;">&nbsp;</div>
                    <hr>
                    <h2>Последние записи</h2>
                    <?php foreach ($postLastList as $postLastListItem):?>
                        <div class="post">
                            <h2 class="title"><a href='/post/<?php echo $postLastListItem['id_publ'] ;?>'><?php echo $postLastListItem['name'];?></a></h2>
                            <p class="meta">Автор <em><?php echo $postLastListItem['author'];?></em> Дата добавления: <?php echo $postLastListItem['date'];?>
                                Число коментариев: <?php echo $postLastListItem['number_of_comments'];?>
                                &nbsp;&bull;&nbsp; <a href='/post/<?php echo $postLastListItem['id_publ'] ;?>' class="permalink"> Полная запись</a></p>
                            <div class="entry">
                                <p><?php echo mb_strimwidth($postLastListItem['text'], 0, 103, "...");?></p>
                            </div>
                        </div>
                    <?php endforeach;?>
                    <div style="clear: both;">&nbsp;</div>
                </div>
                <!-- end #content -->
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
    </div>
        <div id="modal_form">
            <form action="" method="post">
                <input required name="theme" type="text" placeholder="Тема"><br><br>
                <textarea required placeholder="Текст поста"  name="post_text" id="post_text" cols="80" rows="10"></textarea><br><br>
                <input required name="author" type="text" placeholder="Ваш ник">
                <input type="submit" value="Отправить">
            </form>
            <span id="modal_close">X</span>
        </div>
        <div id="overlay"></div>
    <div id="modal_form_log">
        <form action="" method="post">
            <input required placeholder="email" type="email"><br><br>
            <input required placeholder="password" type="password"><br><br>
            <input type="submit" value="Login">
        </form>
        <span id="modal_close">X</span>
    </div>
    <div id="overlay"></div>
    <!-- end #page -->
</div>
<div id="footer">

</div>
<!-- end #footer -->
</body>
</html>
