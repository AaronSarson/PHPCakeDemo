<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pitching $pitching
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pitching->playerID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pitching->playerID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pitching'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pitching form large-9 medium-8 columns content">
    <?= $this->Form->create($pitching) ?>
    <fieldset>
        <legend><?= __('Edit Pitching') ?></legend>
        <?php
            echo $this->Form->control('teamID');
            echo $this->Form->control('lgID');
            echo $this->Form->control('W');
            echo $this->Form->control('L');
            echo $this->Form->control('G');
            echo $this->Form->control('GS');
            echo $this->Form->control('CG');
            echo $this->Form->control('SHO');
            echo $this->Form->control('SV');
            echo $this->Form->control('IPouts');
            echo $this->Form->control('H');
            echo $this->Form->control('ER');
            echo $this->Form->control('HR');
            echo $this->Form->control('BB');
            echo $this->Form->control('SO');
            echo $this->Form->control('BAOpp');
            echo $this->Form->control('ERA');
            echo $this->Form->control('IBB');
            echo $this->Form->control('WP');
            echo $this->Form->control('HBP');
            echo $this->Form->control('BK');
            echo $this->Form->control('BFP');
            echo $this->Form->control('GF');
            echo $this->Form->control('R');
            echo $this->Form->control('SH');
            echo $this->Form->control('SF');
            echo $this->Form->control('GIDP');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
