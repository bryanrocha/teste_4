<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AmigoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AmigoTable Test Case
 */
class AmigoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AmigoTable
     */
    public $Amigo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.amigo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Amigo') ? [] : ['className' => AmigoTable::class];
        $this->Amigo = TableRegistry::get('Amigo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Amigo);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
