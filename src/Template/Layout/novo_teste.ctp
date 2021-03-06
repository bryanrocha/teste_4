<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Teste de aplicação';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    
    <?= $this->element('head') ?>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="#">Meus Contatos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Menu
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?= $this->Html->link(__('Novo Contato'), ['controller' => 'Amigo', 'action' => 'add'], ['class' => 'dropdown-item']) ?>
                        <?= $this->Html->link(__('Listar Contatos'), ['controller' => 'Amigo', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                    </div>
                </li>
                <li class="nav-item active">                    
                    <?= $this->Html->link(__('Sair ('.$this->request->getSession()->read('Auth.User.username').')'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link']) ?>
                </li>
            </ul>
        </div>

    </nav>
    <?= $this->Flash->render() ?>
    
    <?= $this->fetch('content') ?>    
    
    <?= $this->element('footer') ?>
    
</body>
</html>
