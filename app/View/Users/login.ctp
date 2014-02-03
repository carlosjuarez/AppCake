<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div class="users form">
            <?php echo $this->Session->flash('auth'); ?>
            <?php echo $this->Form->create('User'); ?>
            <fieldset>
                <legend>
                    <?php echo __('Please enter your username and password'); ?>
                </legend>
                <?php
                echo $this->Form->input('username');
                echo $this->Form->input('password');
                ?>
            </fieldset>
            <?php echo $this->Form->end(__('Login')); ?>
        </div>
    </body>
</html>


