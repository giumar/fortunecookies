<?php

namespace App\Test\TestCase\Controller;

use Cake\Core\Configure;
use App\Controller\DashboardController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\OperationsController Test Case
 */
class DashboardControllerTest extends TestCase {

    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected array $fixtures = [];

    public function setUp(): void {
        parent::setUp();

        $this->session([
            'Auth' => [
                'id' => 1,
                'username' => 'admin',
                'email' => 'info@example.com'
            ]
        ]);
    }

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndexUnauthenticaded(): void {
        $this->session(['Auth' => null]);

        $this->get('/dashboard');
        $this->assertRedirect();
        $this->assertRedirectContains('/admin/users/login');

        $this->get('/');
        $this->assertRedirect();
        $this->assertRedirectContains('/admin/users/login');
    }

    public function testIndexAuthenticaded() {
        
        $this->get('/dashboard');
        $this->assertResponseOk();
        
    }

    public function testMetroUILoadedFromWebroot() {

        //In produzione
        //
        Configure::write('debug', false);
        $this->get('/');
        $this->assertResponseOk();
        $this->assertResponseContains('href="/metroui/metro.css"');
        $this->assertResponseContains('href="/metroui/icons.css"');
        $this->assertResponseContains('src="/metroui/metro.js"');

        //In sviluppo
        //
        Configure::write('debug', true);
        $this->get('/');
        $this->assertResponseOk();
        $this->assertResponseContains('href="/metroui/metro.css"');
        $this->assertResponseContains('href="/metroui/icons.css"');
        $this->assertResponseContains('src="/metroui/metro.js"');
    }
}
