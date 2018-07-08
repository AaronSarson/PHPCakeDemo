<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Master[]|\Cake\Collection\CollectionInterface $master
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Master'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="master index large-9 medium-8 columns content">
    <h3><?= __('Master') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('playerID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthYear') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthMonth') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthDay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthCountry') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthState') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthCity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deathYear') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deathMonth') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deathDay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deathCountry') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deathState') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deathCity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nameFirst') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nameLast') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nameGiven') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('height') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bats') ?></th>
                <th scope="col"><?= $this->Paginator->sort('throws') ?></th>
                <th scope="col"><?= $this->Paginator->sort('debut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('finalGame') ?></th>
                <th scope="col"><?= $this->Paginator->sort('retroID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bbrefID') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($master as $master): ?>
            <tr>
                <td><?= h($master->playerID) ?></td>
                <td><?= $this->Number->format($master->birthYear) ?></td>
                <td><?= $this->Number->format($master->birthMonth) ?></td>
                <td><?= $this->Number->format($master->birthDay) ?></td>
                <td><?= h($master->birthCountry) ?></td>
                <td><?= h($master->birthState) ?></td>
                <td><?= h($master->birthCity) ?></td>
                <td><?= h($master->deathYear) ?></td>
                <td><?= h($master->deathMonth) ?></td>
                <td><?= h($master->deathDay) ?></td>
                <td><?= h($master->deathCountry) ?></td>
                <td><?= h($master->deathState) ?></td>
                <td><?= h($master->deathCity) ?></td>
                <td><?= h($master->nameFirst) ?></td>
                <td><?= h($master->nameLast) ?></td>
                <td><?= h($master->nameGiven) ?></td>
                <td><?= $this->Number->format($master->weight) ?></td>
                <td><?= $this->Number->format($master->height) ?></td>
                <td><?= h($master->bats) ?></td>
                <td><?= h($master->throws) ?></td>
                <td><?= h($master->debut) ?></td>
                <td><?= h($master->finalGame) ?></td>
                <td><?= h($master->retroID) ?></td>
                <td><?= h($master->bbrefID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $master->playerID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $master->playerID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $master->playerID], ['confirm' => __('Are you sure you want to delete # {0}?', $master->playerID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
