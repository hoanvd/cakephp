<?php
class Post extends AppModel {
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
    public $actsAs = array(
        'Sluggable.Sluggable' => array(
            'field'     => 'title',  
            'slug'      => 'slug',  
            'lowercase' => true,    
            'separator' => '-',     
            'overwrite' => false    
        )
    );
    public function isOwnedBy($post, $user) {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
    }
}