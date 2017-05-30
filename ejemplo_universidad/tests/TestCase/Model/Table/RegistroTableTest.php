<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegistroTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegistroTable Test Case
 */
class RegistroTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RegistroTable
     */
    public $Registro;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.registro',
        'app.login',
        'app.registros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Registro') ? [] : ['className' => 'App\Model\Table\RegistroTable'];
        $this->Registro = TableRegistry::get('Registro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Registro);

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
