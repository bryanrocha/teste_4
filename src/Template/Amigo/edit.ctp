<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Amigo $amigo
 */
?>
<div class="container">

    <?= $this->Form->create($amigo) ?>

    <fieldset>
        <legend><?= __('Editar Contato') ?></legend>
        <?php
            echo $this->Form->control('aniversario', ['empty' => true, 'label' => 'Aniversário', 'class' => 'form-control my-2']);
            echo $this->Form->control('nome', ['class' => 'form-control my-2']);
            echo $this->Form->control('cidade', ['class' => 'form-control my-2']);
            echo $this->Form->control('facebook', ['class' => 'form-control my-2']);
            echo $this->Form->control('instagram', ['class' => 'form-control my-2']);
            echo $this->Form->control('twitter', ['class' => 'form-control my-2']);
            echo $this->Form->control('telefone', ['class' => 'form-control my-2']);
        ?>
    </fieldset>
    <?= $this->Form->Submit( __('Salvar'), ['class' => 'btn btn-primary my-2'] ) ?>
    <?= $this->Form->end() ?>

</div>
