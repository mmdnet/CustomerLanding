<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Keyword $keyword
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Keyword'), ['action' => 'edit', $keyword->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Keyword'), ['action' => 'delete', $keyword->id], ['confirm' => __('Are you sure you want to delete # {0}?', $keyword->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Keywords'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Keyword'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="keywords view content">
            <h3><?= h($keyword->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Keyword List') ?></th>
                    <td><?= h($keyword->keyword_list) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($keyword->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Division Id') ?></th>
                    <td><?= $keyword->division_id === null ? '' : $this->Number->format($keyword->division_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
