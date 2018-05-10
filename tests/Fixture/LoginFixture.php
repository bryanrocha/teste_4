<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LoginFixture
 *
 */
class LoginFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'login';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'senha' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_mysql500_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'usuario' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_mysql500_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'UK_ildc8x1mrl8rumks7su91l6o8' => ['type' => 'unique', 'columns' => ['usuario'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_mysql500_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'senha' => 'Lorem ipsum dolor sit amet',
                'usuario' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
