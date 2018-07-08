<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pitching $pitching
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pitching'), ['action' => 'edit', $pitching->playerID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pitching'), ['action' => 'delete', $pitching->playerID], ['confirm' => __('Are you sure you want to delete # {0}?', $pitching->playerID)]) ?> </li>
        <li><?= $this->Html->link(__('List Pitching'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pitching'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pitching view large-9 medium-8 columns content">
    <h3><?= h($pitching->playerID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('PlayerID') ?></th>
            <td><?= h($pitching->playerID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TeamID') ?></th>
            <td><?= h($pitching->teamID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LgID') ?></th>
            <td><?= h($pitching->lgID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BAOpp') ?></th>
            <td><?= h($pitching->BAOpp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IBB') ?></th>
            <td><?= h($pitching->IBB) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('WP') ?></th>
            <td><?= h($pitching->WP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('HBP') ?></th>
            <td><?= h($pitching->HBP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BFP') ?></th>
            <td><?= h($pitching->BFP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('GF') ?></th>
            <td><?= h($pitching->GF) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SH') ?></th>
            <td><?= h($pitching->SH) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SF') ?></th>
            <td><?= h($pitching->SF) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('GIDP') ?></th>
            <td><?= h($pitching->GIDP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('YearID') ?></th>
            <td><?= $this->Number->format($pitching->yearID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stint') ?></th>
            <td><?= $this->Number->format($pitching->stint) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('W') ?></th>
            <td><?= $this->Number->format($pitching->W) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('L') ?></th>
            <td><?= $this->Number->format($pitching->L) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('G') ?></th>
            <td><?= $this->Number->format($pitching->G) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('GS') ?></th>
            <td><?= $this->Number->format($pitching->GS) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CG') ?></th>
            <td><?= $this->Number->format($pitching->CG) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SHO') ?></th>
            <td><?= $this->Number->format($pitching->SHO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SV') ?></th>
            <td><?= $this->Number->format($pitching->SV) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IPouts') ?></th>
            <td><?= $this->Number->format($pitching->IPouts) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('H') ?></th>
            <td><?= $this->Number->format($pitching->H) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ER') ?></th>
            <td><?= $this->Number->format($pitching->ER) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('HR') ?></th>
            <td><?= $this->Number->format($pitching->HR) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BB') ?></th>
            <td><?= $this->Number->format($pitching->BB) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SO') ?></th>
            <td><?= $this->Number->format($pitching->SO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ERA') ?></th>
            <td><?= $this->Number->format($pitching->ERA) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BK') ?></th>
            <td><?= $this->Number->format($pitching->BK) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('R') ?></th>
            <td><?= $this->Number->format($pitching->R) ?></td>
        </tr>
    </table>
</div>
