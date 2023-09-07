<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Domain $domain
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Domain'), ['action' => 'edit', $domain->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Domain'), ['action' => 'delete', $domain->id], ['confirm' => __('Are you sure you want to delete # {0}?', $domain->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Domains'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Domain'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="domains view content">
            <h3><?= h($domain->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tld') ?></th>
                    <td><?= h($domain->tld) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sld') ?></th>
                    <td><?= h($domain->sld) ?></td>
                </tr>
                <tr>
                    <th><?= __('Registration Date') ?></th>
                    <td><?= h($domain->registration_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $domain->has('user') ? $this->Html->link($domain->user->id, ['controller' => 'Users', 'action' => 'view', $domain->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Next Payment Due') ?></th>
                    <td><?= h($domain->next_payment_due) ?></td>
                </tr>
                <tr>
                    <th><?= __('Billing Cycle') ?></th>
                    <td><?= h($domain->billing_cycle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($domain->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Active') ?></th>
                    <td><?= $domain->is_active === null ? '' : $this->Number->format($domain->is_active) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rate Charged') ?></th>
                    <td><?= $domain->rate_charged === null ? '' : $this->Number->format($domain->rate_charged) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reseller Price') ?></th>
                    <td><?= $domain->reseller_price === null ? '' : $this->Number->format($domain->reseller_price) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
