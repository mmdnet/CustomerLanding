<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Domain $domain
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Domains'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="domains form content">
            <?= $this->Form->create($domain) ?>
            <fieldset>
                <legend><?= __('Add Domain') ?></legend>
                <?php
                    echo $this->Form->control('tld');
                    echo $this->Form->control('sld');
                    echo $this->Form->control('registration_date');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('is_active');
                    echo $this->Form->control('next_payment_due');
                    echo $this->Form->control('billing_cycle');
                    echo $this->Form->control('rate_charged');
                    echo $this->Form->control('reseller_price');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
