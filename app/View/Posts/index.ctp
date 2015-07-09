<!-- File: /app/View/Posts/index.ctp -->
<?php
    echo $this->Html->link('English', array('language'=>'eng')); 
    echo ' | ';
    echo $this->Html->link('Vietnamese', array('language'=>'vie')); 
?> 
<h1>Blog posts</h1>
<p><?php echo $this->Html->link(__('Add Post'), array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th><?php echo __('Title');?></th>
        <th><?php echo __('Actions');?></th></th>
        <th><?php echo __('Created');?></th>
        <th><?php echo __('Slug');?></th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $post['Post']['title'],
                    array('action' => 'view', $post['Post']['id'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    __('Delete'),
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    __('Edit'), array('action' => 'edit', $post['Post']['id'])
                );
            ?>
        </td>
        <td>
            <?php echo $post['Post']['created']; ?>
        </td>
        <td>
            <?php echo $post['Post']['slug']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>