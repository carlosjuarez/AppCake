<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Posts</title>
    </head>
    <body>
        <h1>Blog Posts</h1>
        <?php 
            echo $this->Html->link('Add Post',array('controller'=>'posts','action'=>'add'));
        ?>
        <table>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Action</th>
                <th>Created</th>
            </tr>
            <?php foreach($posts as $post): ?>
            <tr>
                <td>
                    <?php echo $post['Post']['id']; ?>
                </td>
                <td>
                    <?php echo $this->Html->link(
                            $post['Post']['title'],
                            array('action'=>'view',$post['Post']['id'])
                            );
                    ?>
                </td>
                <td>
                    <?php
                        echo $this->Form->postLink(
                            'Borrar',
                            array('action'=> 'delete', $post['Post']['id']),
                            array('confirm'=>'Estas seguro?')    
                            );
                    ?>
                    |
                    <?php
                        echo $this->Html->link(
                            'Edit',
                            array('action'=>'edit',$post['Post']['id'])    
                            );
                    ?>
                </td>
                <td>
                    <?php echo $post['Post']['created']; ?>
                </td>
            </tr>
            <?php endforeach; ?>
                
        </table>
    </body>
</html>
