<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SesionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SesionesTable Test Case
 */
class SesionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SesionesTable
     */
    public $Sesiones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sesiones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Sesiones') ? [] : ['className' => 'App\Model\Table\SesionesTable'];
        $this->Sesiones = TableRegistry::get('Sesiones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sesiones);

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
