<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1><?php echo h($post['Post']['title']); ?></h1>
        <p><small>Created: <?php echo $post['Post']['created'] ?></small></p>
        <p><?php echo h($post['Post']['body']);?></p>
    </body>
</html>
