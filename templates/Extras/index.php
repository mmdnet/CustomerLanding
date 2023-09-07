<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Extra> $extras
 */
?>
<div class="extras index content">
    <?= $this->Html->link(__('New Extra'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Extras') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('icon_img_path') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($extras as $extra): ?>
                <tr>
                    <td><?= $this->Number->format($extra->id) ?></td>
                    <td><?= h($extra->title) ?></td>
                    <td><?= h($extra->description) ?></td>
                    <td><?= h($extra->icon_img_path) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $extra->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $extra->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $extra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extra->id)]) ?>
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
