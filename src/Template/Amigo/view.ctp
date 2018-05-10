<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Amigo $amigo
 */
?>

<div class="container">
    
    <div class="card col-sm-6">
        
        <h3 class="card-header">Detalhes do Contato</h3>

        <div class="card-body">
            
            <div class="row">
                
                <div class="col col-sm-6">
                    Nome
                </div>

                <div class="col col-sm-6">
                    <?= $amigo->nome ?>
                </div>

            </div>

            <div class="row">
                
                <div class="col col-sm-6">
                    Aniversário
                </div>

                <div class="col col-sm-6">
                    <?= $amigo->aniversario->format('d/m/Y') ?>
                </div>

            </div>

            <div class="row">
                
                <div class="col col-sm-6">
                    Cidade
                </div>

                <div class="col col-sm-6">
                    <?= $amigo->cidade ?>
                </div>

            </div>

            <div class="row">
                
                <div class="col col-sm-6">
                    Facebook
                </div>

                <div class="col col-sm-6">
                    <?php if (!empty( $amigo->facebook )): ?>
                        <?= $this->Html->link( $amigo->facebook, 'http://www.facebook.com/' . $amigo->facebook ) ?>
                    <?php endif ?>
                </div>

            </div>

            <div class="row">
                
                <div class="col col-sm-6">
                    Twitter
                </div>

                <div class="col col-sm-6">
                    <?php if (!empty( $amigo->twitter )): ?>
                        <?= $this->Html->link( $amigo->twitter, 'http://www.twitter.com/' . $amigo->twitter ) ?>
                    <?php endif ?>
                </div>

            </div>

            <div class="row">
                
                <div class="col col-sm-6">
                    Instagram
                </div>

                <div class="col col-sm-6">
                    <?php if (!empty( $amigo->instagram )): ?>
                        <?= $this->Html->link( $amigo->instagram, 'http://www.instagram.com/' . $amigo->instagram ) ?>
                    <?php endif ?>
                </div>

            </div>

            <div class="row">
                
                <div class="col col-sm-6">
                    Telefone
                </div>

                <div class="col col-sm-6">
                    <?= $amigo->telefone ?>
                </div>

            </div>

        </div>

        <div class="col">
            <div class="row row-divider"></div>
            <div class="row">
                <?= $this->Html->link( __('Voltar'), ['action' => 'index'], ['class' => 'btn btn-link'] ) ?>
            </div>              
        </div>

    </div>

</div>

