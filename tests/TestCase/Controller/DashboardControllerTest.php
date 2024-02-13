<?php

namespace App\Test\TestCase\Controller;

use Cake\Core\Configure;
use App\Controller\DashboardController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\OperationsController Test Case
 */
class DashboardControllerTest extends IntegrationTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [];

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
     * Test index method
     *
     * @return void
     */
    public function testIndexUnauthenticaded() {
        $this->session(['Auth' => null]);
        $this->get('/dashboard');
        
        $this->assertRedirect();
        $this->assertRedirectContains('/admin/users/login');
    }

    public function testIndexAuthenticaded() {
        $this->get('/dashboard');

        $this->assertResponseOk();
    }
    
    public function testBootstrapLoadedFromWebroot() {
        
        Configure::write('debug', true);
        $this->get('/');
        $this->assertResponseContains('bootstrap.css');
        $this->assertResponseContains('bootstrap.bundle.js');
        Configure::write('debug', false);
        $this->get('/');
        $this->assertResponseContains('bootstrap.min.css');
        $this->assertResponseContains('bootstrap.bundle.min.js');
        
    }

}
