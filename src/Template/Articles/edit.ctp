<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li>
            <?php if ($this->getRequest()->getSession()->read('Auth.User.role') == 'author') { ?>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $article->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]
            )?>
            <?php } ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($article) ?>
    <fieldset>
        <legend><?= __('Edit Article') ?></legend>
        <?php
            if ($this->getRequest()->getSession()->read('Auth.User.role') == 'author') {
                echo $this->Form->control('title');
                echo $this->Form->control('body');
                echo $this->Form->control('tags');
            }
        if ($this->getRequest()->getSession()->read('Auth.User.role') == 'editor') {
            echo $this->Form->control('published');
        }
            /*echo $this->Form->control('user_id');*/
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
