<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CurrentDomainNamesRegistered $currentDomainNamesRegistered
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $currentDomainNamesRegistered->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $currentDomainNamesRegistered->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Current Domain Names Registered'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="currentDomainNamesRegistered form content">
            <?= $this->Form->create($currentDomainNamesRegistered) ?>
            <fieldset>
                <legend><?= __('Edit Current Domain Names Registered') ?></legend>
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
