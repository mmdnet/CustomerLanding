<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Extra $extra
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $extra->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $extra->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Extras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="extras form content">
            <?= $this->Form->create($extra) ?>
            <fieldset>
                <legend><?= __('Edit Extra') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('description');
                    echo $this->Form->control('icon_img_path');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
