<?php
/**
 * Description of Post
 * Class Model that works with posts table in mysql
 * @author carlos
 */
class Post extends AppModel {
    public $name = 'Post';
    
    public $validate = array(
      'title' => array(
          'rule' => 'notEmpty'
      ),
      'body' => array(
          'rule' => 'notEmpty'
      )  
    );
}

?>