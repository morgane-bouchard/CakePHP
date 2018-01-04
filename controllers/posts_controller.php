<?php
class PostsController extends AppController {
    var $name = 'Posts';
    
    var $validate = array(
        'title' => array(
            'rule' => array('minLength', 1)
        ),
        'body' => array(
            'rule' => array('minLength', 1)
        )
    );

    //affiche tous les posts
    function index() {
        $this->set('posts', $this->Post->find('all'));
    }
    //affiche les détails d'un post
    function view($id = null) {
        $this->Post->id = $id;
        $this->set('post', $this->Post->read());
    }
    //affiche le formulaire d'ajout
    function add() {
        if (!empty($this->data)) {
            if ($this->Post->save($this->data)) {
                $this->flash('Votre post a été sauvegardé.','/posts');
            }
        }
    }
    //supprime un post
    function delete($id) {
	    $this->Post->delete($id);
	    $this->flash('Le post avec l\'id: '.$id.' a été supprimé.', '/posts');
	}

	function edit($id = null) {
	    if (empty($this->data)) {
	        $this->Post->id = $id;
	        $this->data = $this->Post->read();
	    } else {
	        if ($this->Post->save($this->data['Post'])) {
	            $this->flash('Votre post a été mis à jour.','/posts');
	        }
	    }
	}
}
?>