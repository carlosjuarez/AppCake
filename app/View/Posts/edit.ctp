<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Editar Post</title>
    </head>
    <body>
        <h1>Editar Post</h1>
        <?php
            echo $this->Form->create('Post');
            echo $this->Form->input('title');
            echo $this->Form->input('body', array('rows'=>3));
            echo $this->Form->input('id',array('type','hidden'));
            echo $this->Form->end('Guardar Post');
        ?>
    </body>
</html>
