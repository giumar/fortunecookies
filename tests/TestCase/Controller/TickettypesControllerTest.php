<?php

namespace App\Test\TestCase\Controller;

use App\Controller\TickettypesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TickettypesController Test Case
 */
class TickettypesControllerTest extends IntegrationTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Tickettypes'
    ];

    public function setUp(): void {
        parent::setUp();

        $this->session([
            'Auth' => [
                'User' => [
                    'id' => 1,
                    'username' => 'admin',
                ]
            ]
        ]);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void {
        unset($this->session);

        parent::tearDown();
    }

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex() {
        $this->get('/admin/tickettypes');
        $this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView() {
        // $this->get('/admin/tickettypes/view/1');
        // $this->assertResponseOk();
        // $this->assertResponseContains('<title>Admin\Tickettypes</title>');
        // $this->assertResponseContains('Lorem ipsum dolor sit amet');
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd() {
        $this->markTestIncomplete('Not implemented yet.');
        /*
        
        $this->enableCsrfToken();
        $this->enableSecurityToken();

        $data = [
            'name' => 'New Ticketype'
        ];

        $this->post('/admin/tickettypes/add', $data);

        $this->assertResponseSuccess();
         * 
         */
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit() {

        // $this->enableCsrfToken();
        // $this->enableSecurityToken();
        // $this->get('/admin/tickettypes/edit/1');
        // $this->assertResponseOk();
        // $this->assertResponseContains('<title>Admin\Tickettypes</title>');
        // $this->assertResponseContains('Lorem ipsum dolor sit amet');
        // $data = [
        // 'name' => 'Again Lorem ipsum dolor sit amet'
        // ];
        // $this->post('/admin/tickettypes/edit/1', $data);
        // $this->assertResponseSuccess();
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete() {
        $this->enableCsrfToken();
        $this->enableSecurityToken();

        $this->delete('/admin/tickettypes/delete/1');
        $this->assertRedirect();
    }

}
