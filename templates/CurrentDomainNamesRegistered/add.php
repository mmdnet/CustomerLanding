<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CurrentDomainNamesRegistered $currentDomainNamesRegistered
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Current Domain Names Registered'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="currentDomainNamesRegistered form content">
            <?= $this->Form->create($currentDomainNamesRegistered) ?>
            <fieldset>
                <legend><?= __('Add Current Domain Names Registered') ?></legend>
                <?php
                    echo $this->Form->control('domain_sld');
                    echo $this->Form->control('domain_tld');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('date_registered');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
