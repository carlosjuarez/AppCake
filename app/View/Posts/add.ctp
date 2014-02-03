<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Add Post</h1>
        <?php 
            echo $this->Form->create('Post');
            echo $this->Form->input('title');
            echo $this->Form->input('body',array('rows',3));
            echo $this->Form->end('Save Post');
        ?>
    </body>
</html>
