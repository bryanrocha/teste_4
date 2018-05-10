<?php
use Migrations\AbstractMigration;

class AlterAmigo extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('Amigo');

        $this->execute('update Amigo set login_id=27 where id=6');

        // $table->addForeignKey('login_id', 'Login', 'id', ['delete'=> 'SET_NULL', 'update'=> 'NO_ACTION']);
        // $table->update();
        
    }
}
