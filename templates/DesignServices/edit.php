<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DesignService $designService
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $designService->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $designService->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Design Services'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="designServices form content">
            <?= $this->Form->create($designService) ?>
            <fieldset>
                <legend><?= __('Edit Design Service') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('title');
                    echo $this->Form->control('description');
                    echo $this->Form->control('icon_img');
                    echo $this->Form->control('is_active');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
