<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Amigo[]|\Cake\Collection\CollectionInterface $amigo
 */
?>

<div class="container">
    
    <table class="table table-striped table-sm w-auto">
        
        <th><?= $this->Paginator->sort('nome') ?></th>
        <th><?= $this->Paginator->sort('aniversario', __('Aniversário')) ?></th>
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

    <?php
        $paginator = $this->Paginator->setTemplates([
            'first' => '<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</a></li>',
            'prevActive' => '<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</a></li>',
            'number' => '<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</a></li>',
            'current' => '<li class="page-item active"><a href="{{url}}" class="page-link">{{text}}</a></li>',
            'nextActive' => '<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</a></li>',
            'last' => '<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</a></li>'
        ]);
    ?>
        
    <ul class="pagination">
        
        <?= $this->Paginator->first('<<') ?>
        <?php 
            if($this->Paginator->hasPrev())
                echo $this->Paginator->prev('<'); 
        ?>
        <?= $this->Paginator->numbers() ?>
        <?php 
            if($this->Paginator->hasNext())
                echo $this->Paginator->next('>'); 
        ?>
        <?= $this->Paginator->last('>>') ?>

    </ul>


</div>
