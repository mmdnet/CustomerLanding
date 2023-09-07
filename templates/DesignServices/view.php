<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DesignService $designService
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Design Service'), ['action' => 'edit', $designService->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Design Service'), ['action' => 'delete', $designService->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designService->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Design Services'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Design Service'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="designServices view content">
            <h3><?= h($designService->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($designService->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($designService->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($designService->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Icon Img') ?></th>
                    <td><?= h($designService->icon_img) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($designService->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Active') ?></th>
                    <td><?= $this->Number->format($designService->is_active) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
