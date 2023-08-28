<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Keyword> $keywords
 */
?>
<div class="keywords index content">
    <?= $this->Html->link(__('New Keyword'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Keywords') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('division_id') ?></th>
                    <th><?= $this->Paginator->sort('keyword_list') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($keywords as $keyword): ?>
                <tr>
                    <td><?= $this->Number->format($keyword->id) ?></td>
                    <td><?= $keyword->division_id === null ? '' : $this->Number->format($keyword->division_id) ?></td>
                    <td><?= h($keyword->keyword_list) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $keyword->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $keyword->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $keyword->id], ['confirm' => __('Are you sure you want to delete # {0}?', $keyword->id)]) ?>
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
