<h1>Editer le Post</h1>
<?php
    echo $form->create('Post', array('action' => 'edit'));
    echo $form->hidden('id');
    echo $form->input('title');
    echo $form->input('body', array('rows' => '3'));
    echo $form->end('Sauvegarder le Post');
?>