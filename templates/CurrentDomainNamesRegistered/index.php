<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\CurrentDomainNamesRegistered> $currentDomainNamesRegistered
 */
?>
<div class="currentDomainNamesRegistered index content">
    <?= $this->Html->link(__('New Current Domain Names Registered'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Current Domain Names Registered') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('domain_sld') ?></th>
                    <th><?= $this->Paginator->sort('domain_tld') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('date_registered') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($currentDomainNamesRegistered as $currentDomainNamesRegistered): ?>
                <tr>
                    <td><?= $this->Number->format($currentDomainNamesRegistered->id) ?></td>
                    <td><?= h($currentDomainNamesRegistered->domain_sld) ?></td>
                    <td><?= h($currentDomainNamesRegistered->domain_tld) ?></td>
                    <td><?= $currentDomainNamesRegistered->has('user') ? $this->Html->link($currentDomainNamesRegistered->user->id, ['controller' => 'Users', 'action' => 'view', $currentDomainNamesRegistered->user->id]) : '' ?></td>
                    <td><?= h($currentDomainNamesRegistered->date_registered) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $currentDomainNamesRegistered->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $currentDomainNamesRegistered->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $currentDomainNamesRegistered->id], ['confirm' => __('Are you sure you want to delete # {0}?', $currentDomainNamesRegistered->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
