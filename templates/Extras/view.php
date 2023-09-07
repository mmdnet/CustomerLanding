<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Extra $extra
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Extra'), ['action' => 'edit', $extra->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Extra'), ['action' => 'delete', $extra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extra->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Extras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Extra'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="extras view content">
            <h3><?= h($extra->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($extra->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($extra->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Icon Img Path') ?></th>
                    <td><?= h($extra->icon_img_path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($extra->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
