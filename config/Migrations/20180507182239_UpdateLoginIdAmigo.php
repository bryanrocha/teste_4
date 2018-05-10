<?php
use Migrations\AbstractMigration;

class UpdateLoginIdAmigo extends AbstractMigration
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
        
        for ($i=22; $i <= 24 ; $i++) { 
            # code...
            $this->execute('update Amigo set login_id=27 where id=' . $i);
        }
    }
}
