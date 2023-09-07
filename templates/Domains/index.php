<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Domain> $domains
 */
?>
<div class="domains index content">
    <?= $this->Html->link(__('New Domain'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Domains') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('tld') ?></th>
                    <th><?= $this->Paginator->sort('sld') ?></th>
                    <th><?= $this->Paginator->sort('registration_date') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('is_active') ?></th>
                    <th><?= $this->Paginator->sort('next_payment_due') ?></th>
                    <th><?= $this->Paginator->sort('billing_cycle') ?></th>
                    <th><?= $this->Paginator->sort('rate_charged') ?></th>
                    <th><?= $this->Paginator->sort('reseller_price') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($domains as $domain): ?>
                <tr>
                    <td><?= $this->Number->format($domain->id) ?></td>
                    <td><?= h($domain->tld) ?></td>
                    <td><?= h($domain->sld) ?></td>
                    <td><?= h($domain->registration_date) ?></td>
                    <td><?= $domain->has('user') ? $this->Html->link($domain->user->id, ['controller' => 'Users', 'action' => 'view', $domain->user->id]) : '' ?></td>
                    <td><?= $domain->is_active === null ? '' : $this->Number->format($domain->is_active) ?></td>
                    <td><?= h($domain->next_payment_due) ?></td>
                    <td><?= h($domain->billing_cycle) ?></td>
                    <td><?= $domain->rate_charged === null ? '' : $this->Number->format($domain->rate_charged) ?></td>
                    <td><?= $domain->reseller_price === null ? '' : $this->Number->format($domain->reseller_price) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $domain->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $domain->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $domain->id], ['confirm' => __('Are you sure you want to delete # {0}?', $domain->id)]) ?>
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
