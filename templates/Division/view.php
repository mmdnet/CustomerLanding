<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Division $division
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Division'), ['action' => 'edit', $division->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Division'), ['action' => 'delete', $division->id], ['confirm' => __('Are you sure you want to delete # {0}?', $division->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Division'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Division'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="division view content">
            <h3><?= h($division->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($division->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Purpose') ?></th>
                    <td><?= h($division->purpose) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($division->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Active') ?></th>
                    <td><?= $division->is_active === null ? '' : $this->Number->format($division->is_active) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Keywords') ?></h4>
                <?php if (!empty($division->keywords)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Division Id') ?></th>
                            <th><?= __('Keyword List') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($division->keywords as $keywords) : ?>
                        <tr>
                            <td><?= h($keywords->id) ?></td>
                            <td><?= h($keywords->division_id) ?></td>
                            <td><?= h($keywords->keyword_list) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Keywords', 'action' => 'view', $keywords->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Keywords', 'action' => 'edit', $keywords->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Keywords', 'action' => 'delete', $keywords->id], ['confirm' => __('Are you sure you want to delete # {0}?', $keywords->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
