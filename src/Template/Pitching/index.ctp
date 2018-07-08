<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pitching[]|\Cake\Collection\CollectionInterface $pitching
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pitching'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pitching index large-9 medium-8 columns content">
    <h3><?= __('Pitching') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('playerID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('yearID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stint') ?></th>
                <th scope="col"><?= $this->Paginator->sort('teamID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lgID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('W') ?></th>
                <th scope="col"><?= $this->Paginator->sort('L') ?></th>
                <th scope="col"><?= $this->Paginator->sort('G') ?></th>
                <th scope="col"><?= $this->Paginator->sort('GS') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CG') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SHO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SV') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IPouts') ?></th>
                <th scope="col"><?= $this->Paginator->sort('H') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ER') ?></th>
                <th scope="col"><?= $this->Paginator->sort('HR') ?></th>
                <th scope="col"><?= $this->Paginator->sort('BB') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('BAOpp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ERA') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IBB') ?></th>
                <th scope="col"><?= $this->Paginator->sort('WP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('HBP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('BK') ?></th>
                <th scope="col"><?= $this->Paginator->sort('BFP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('GF') ?></th>
                <th scope="col"><?= $this->Paginator->sort('R') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SH') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SF') ?></th>
                <th scope="col"><?= $this->Paginator->sort('GIDP') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pitching as $pitching): ?>
            <tr>
                <td><?= h($pitching->playerID) ?></td>
                <td><?= $this->Number->format($pitching->yearID) ?></td>
                <td><?= $this->Number->format($pitching->stint) ?></td>
                <td><?= h($pitching->teamID) ?></td>
                <td><?= h($pitching->lgID) ?></td>
                <td><?= $this->Number->format($pitching->W) ?></td>
                <td><?= $this->Number->format($pitching->L) ?></td>
                <td><?= $this->Number->format($pitching->G) ?></td>
                <td><?= $this->Number->format($pitching->GS) ?></td>
                <td><?= $this->Number->format($pitching->CG) ?></td>
                <td><?= $this->Number->format($pitching->SHO) ?></td>
                <td><?= $this->Number->format($pitching->SV) ?></td>
                <td><?= $this->Number->format($pitching->IPouts) ?></td>
                <td><?= $this->Number->format($pitching->H) ?></td>
                <td><?= $this->Number->format($pitching->ER) ?></td>
                <td><?= $this->Number->format($pitching->HR) ?></td>
                <td><?= $this->Number->format($pitching->BB) ?></td>
                <td><?= $this->Number->format($pitching->SO) ?></td>
                <td><?= h($pitching->BAOpp) ?></td>
                <td><?= $this->Number->format($pitching->ERA) ?></td>
                <td><?= h($pitching->IBB) ?></td>
                <td><?= h($pitching->WP) ?></td>
                <td><?= h($pitching->HBP) ?></td>
                <td><?= $this->Number->format($pitching->BK) ?></td>
                <td><?= h($pitching->BFP) ?></td>
                <td><?= h($pitching->GF) ?></td>
                <td><?= $this->Number->format($pitching->R) ?></td>
                <td><?= h($pitching->SH) ?></td>
                <td><?= h($pitching->SF) ?></td>
                <td><?= h($pitching->GIDP) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pitching->playerID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pitching->playerID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pitching->playerID], ['confirm' => __('Are you sure you want to delete # {0}?', $pitching->playerID)]) ?>
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
