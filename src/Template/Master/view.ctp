<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Master $master
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Master'), ['action' => 'edit', $master->playerID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Master'), ['action' => 'delete', $master->playerID], ['confirm' => __('Are you sure you want to delete # {0}?', $master->playerID)]) ?> </li>
        <li><?= $this->Html->link(__('List Master'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Master'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="master view large-9 medium-8 columns content">
    <h3><?= h($master->playerID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('PlayerID') ?></th>
            <td><?= h($master->playerID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BirthCountry') ?></th>
            <td><?= h($master->birthCountry) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BirthState') ?></th>
            <td><?= h($master->birthState) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BirthCity') ?></th>
            <td><?= h($master->birthCity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DeathYear') ?></th>
            <td><?= h($master->deathYear) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DeathMonth') ?></th>
            <td><?= h($master->deathMonth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DeathDay') ?></th>
            <td><?= h($master->deathDay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DeathCountry') ?></th>
            <td><?= h($master->deathCountry) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DeathState') ?></th>
            <td><?= h($master->deathState) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DeathCity') ?></th>
            <td><?= h($master->deathCity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NameFirst') ?></th>
            <td><?= h($master->nameFirst) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NameLast') ?></th>
            <td><?= h($master->nameLast) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NameGiven') ?></th>
            <td><?= h($master->nameGiven) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bats') ?></th>
            <td><?= h($master->bats) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Throws') ?></th>
            <td><?= h($master->throws) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Debut') ?></th>
            <td><?= h($master->debut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FinalGame') ?></th>
            <td><?= h($master->finalGame) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RetroID') ?></th>
            <td><?= h($master->retroID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BbrefID') ?></th>
            <td><?= h($master->bbrefID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BirthYear') ?></th>
            <td><?= $this->Number->format($master->birthYear) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BirthMonth') ?></th>
            <td><?= $this->Number->format($master->birthMonth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BirthDay') ?></th>
            <td><?= $this->Number->format($master->birthDay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weight') ?></th>
            <td><?= $this->Number->format($master->weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Height') ?></th>
            <td><?= $this->Number->format($master->height) ?></td>
        </tr>
    </table>
</div>
