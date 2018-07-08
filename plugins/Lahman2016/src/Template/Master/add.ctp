<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $master
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Master'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="master form large-9 medium-8 columns content">
    <?= $this->Form->create($master) ?>
    <fieldset>
        <legend><?= __('Add Master') ?></legend>
        <?php
            echo $this->Form->control('birthYear');
            echo $this->Form->control('birthMonth');
            echo $this->Form->control('birthDay');
            echo $this->Form->control('birthCountry');
            echo $this->Form->control('birthState');
            echo $this->Form->control('birthCity');
            echo $this->Form->control('deathYear');
            echo $this->Form->control('deathMonth');
            echo $this->Form->control('deathDay');
            echo $this->Form->control('deathCountry');
            echo $this->Form->control('deathState');
            echo $this->Form->control('deathCity');
            echo $this->Form->control('nameFirst');
            echo $this->Form->control('nameLast');
            echo $this->Form->control('nameGiven');
            echo $this->Form->control('weight');
            echo $this->Form->control('height');
            echo $this->Form->control('bats');
            echo $this->Form->control('throws');
            echo $this->Form->control('debut');
            echo $this->Form->control('finalGame');
            echo $this->Form->control('retroID');
            echo $this->Form->control('bbrefID');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
