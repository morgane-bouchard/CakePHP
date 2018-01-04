<h1>Les posts du Blog</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

    <!-- C'est ici que nous bouclons sur le tableau $posts afin d'afficher les informations des posts -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $html->link($post['Post']['title'],"/posts/view/".$post['Post']['id']); ?>
        </td>
        <td>
            <?php echo $html->link('Supprimer', "/posts/delete/{$post['Post']['id']}", null, 'Etes-vous sûr ?' )?>
            <?php echo $html->link('Editer', '/posts/edit/'.$post['Post']['id']);?>
        </td>
        <td>
            <?php echo $post['Post']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php echo $html->link("add", "/posts/add/") ?>
</table>