<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Division $division
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Division'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="division form content">
            <?= $this->Form->create($division) ?>
            <fieldset>
                <legend><?= __('Add Division') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('purpose');
                    echo $this->Form->control('is_active');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
