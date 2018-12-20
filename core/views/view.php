
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN">
<head>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title><?php echo $postItem['name'] ?></title>
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="/assets/style.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>

<div id="wrapper">
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
                    <div class="post">
                        <h2 class="title"><a href='/post/<?php echo $postItem['id_publ']; ?>'><?php echo $postItem['name']; ?></a>
                        </h2>
                        <p class="meta">Автор <?php echo $postItem['author']; ?>
                            дата публикации: <?php echo $postItem['date']; ?>
                            &nbsp;&bull;&nbsp; <a href='/post/' class="permalink">Вернуться на главную</a></p>
                        <div class="entry">
                            <div class="post_text">
                                <p><?php echo $postItem['text']; ?></p>
                            </div>
                        </div>
                        <div class="comments">
                            <h4>Коментарии</h4>
                            <?php foreach ($commentItem as $commentItems): ?>
                                <p><?php echo $commentItems['author'] . " :: " . $commentItems['date']; ?></p>

                                <p><?php echo $commentItems['text']; ?></p>
                            <?php endforeach; ?>
                        </div>
                        <div class="form">
                            <h3>Добавить коментарий</h3>
                            <form action="" method="post">
                                <textarea required  name="comm_text" id="comm_text" cols="80" rows="8"></textarea><br>
                                <input required name="author" type="text" placeholder="Ваше ник">
                                <input type="submit" value="Отправить">
                            </form>
                        </div>
                    </div>
                    <p><a href='/post/' class="permalink">Вернуться на главную</a></p>
                    <div style="clear: both;">&nbsp;</div>

                </div>
                <!-- end #content -->
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
    </div>
    <!-- end #page -->
</div>
<div id="footer">

</div>
<!-- end #footer -->
</body>
</html>