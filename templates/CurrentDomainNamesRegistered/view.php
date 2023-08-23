<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CurrentDomainNamesRegistered $currentDomainNamesRegistered
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Current Domain Names Registered'), ['action' => 'edit', $currentDomainNamesRegistered->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Current Domain Names Registered'), ['action' => 'delete', $currentDomainNamesRegistered->id], ['confirm' => __('Are you sure you want to delete # {0}?', $currentDomainNamesRegistered->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Current Domain Names Registered'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Current Domain Names Registered'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="currentDomainNamesRegistered view content">
            <h3><?= h($currentDomainNamesRegistered->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Domain Sld') ?></th>
                    <td><?= h($currentDomainNamesRegistered->domain_sld) ?></td>
                </tr>
                <tr>
                    <th><?= __('Domain Tld') ?></th>
                    <td><?= h($currentDomainNamesRegistered->domain_tld) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $currentDomainNamesRegistered->has('user') ? $this->Html->link($currentDomainNamesRegistered->user->id, ['controller' => 'Users', 'action' => 'view', $currentDomainNamesRegistered->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Registered') ?></th>
                    <td><?= h($currentDomainNamesRegistered->date_registered) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($currentDomainNamesRegistered->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
