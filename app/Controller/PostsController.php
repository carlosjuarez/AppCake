<?php
class PostsController extends AppController {
    public $helpers = array('HTML','form');
    
    public $components = array('Session');
    
    public function index(){
        $this->set('posts', $this->Post->find('all'));
    }
    
    public function view($id = null){
        if(!$id){
          throw new NotFoundException(__('Invalid Post'));  
        }
        $post = $this->Post->findById($id);
        if(!$post){
            throw  new NotFoundException(__('Invalid Post'));
        }
        $this->set('post',$post);
    }
    
    public function add(){
        if($this->request->is('post')){
            $this->Post->create();
            $this->request->data['Post']['user_id'] = $this->Auth->user('id');
            if($this->Post->save($this->request->data)){
                $this->Session->setFlash('Your post has been saved');
                $this->redirect(array('action'=>'index'));
            }
            $this->Session->setFlash('Your post cannot be added');
        }
    }
    
    public function isAuthorized() {
        if($this->action === 'add'){
            return true;
        }
        if(in_array($this->action, array('edit','delete'))){
            $postId = $this->request->parameter['pass'][0];
            if($this->Post->isOwnedBy($postId, $user['id'])){
                return true;
            }
        }
        return parent::isAuthorized($user);
    }


    public function edit($id = null){
        if(!$id){
            throw new NotFoundException('Post no encontrado');
        }
        
        $post = $this->Post->findById($id);
        if(!$post){
            throw new NotFoundException('Post no encontrado');
        }
        
        if($this->request->is(array('post','put'))){
            $this->Post->id = $id;
            if($this->Post->save($this->request->data)){
                $this->Session->setFlash("Se ha actualizado");
                return $this->redirect(array('action'=>'index'));
            }
            $this->Session->setFlash("No se pudo actualizar el post");
        }
        
        if(!$this->request->data){
            $this->request->data = $post;
        }
        
    }
    
    public function delete($id){
        if($this->request->is('get')){
            throw new MethodNotAllowedException();
        }
        
        if($this->Post->delete($id)){
            $this->Session->setFlash(__("El post con numero de id: %s ha sido borrado", h($id)));
            return $this->redirect(array('action'=>'index'));
        }
    }
    
}
?>