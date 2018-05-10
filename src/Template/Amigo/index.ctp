<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Amigo[]|\Cake\Collection\CollectionInterface $amigo
 */
?>

<div class="container">
    
    <table class="table table-striped table-sm w-auto">
        
        <th><?= $this->Paginator->sort('nome') ?></th>
        <th><?= $this->Paginator->sort('aniversario') ?></th>
        <th><?= $this->Paginator->sort('cidade') ?></th>
        <th><?= $this->Paginator->sort('telefone') ?></th>
        <th></th>
        <th></th>

        <?php foreach ($amigo as $amigo): ?>

            <tr>
                
                <td><?= $amigo->nome ?></td>
                <td><?= $amigo->aniversario->format('d/m/Y') ?></td>
                <td><?= $amigo->cidade ?></td>
                <td><?= $amigo->telefone ?></td>
                <td><?= $this->Html->link(__('Editar'), ['action' => 'edit', $amigo->id], ['class' => 'btn btn-primary btn-sm']) ?></td>                
                <td><?= $this->Html->link(__('+ Info'), ['action' => 'view', $amigo->id], ['class' => 'btn btn-info btn-sm']) ?></td>

            </tr>

        <?php endforeach; ?>

    </table>

    <div class="paginator">
        
        <ul class="pagination">
            
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev(' < ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' > ') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>

        </ul>

    </div>

</div>
