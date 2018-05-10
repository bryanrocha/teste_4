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

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Amigo[]|\Cake\Collection\CollectionInterface $amigo
 */
?>
<div class="container">
        
    <table class="table table-striped table-sm w-auto">
        <th>Nome</th>
        <th>Aniversário</th>
        <th>Cidade</th>
        <th>Telefone</th>
        <th></th>
        <th></th>           
        <?php foreach ($amigos as $amigo): ?>
                
                <tr>
                    <td><?= $amigo->nome ?></td>
                    <td><?= $amigo->aniversario ?></td>
                    <td><?= $amigo->cidade ?></td>
                    <td><?= $amigo->telefone ?></td>
                    <td>
                        <form >
                            <input type="hidden" name="idAmigo" value="id">
                            <input type="hidden" name="acesso" value="1">
                            <input type="submit" class="btn btn-primary btn-sm" value="Editar">
                        </form>
                    </td>
                    <td>
                        <form >
                            <input type="hidden" name="idAmigo" value="id">
                            <input type="submit" class="btn btn-info btn-sm" value="+ Info">
                        </form>
                    </td>
                </tr>
                
        <?php endforeach; ?>
        
    </table>
</div>

