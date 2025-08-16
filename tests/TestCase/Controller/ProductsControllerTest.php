<?php

declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ProductsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ProductsController Test Case
 *
 * @link \App\Controller\ProductsController
 */
class ProductsControllerTest extends TestCase {

    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Products',
    ];

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
     * @link \App\Controller\ProductsController::index()
     */
    public function testIndex(): void {
        $this->get('/products');
        $this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     * @link \App\Controller\ProductsController::view()
     */
    public function testView(): void {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @link \App\Controller\ProductsController::add()
     */
    public function testAdd(): void {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @link \App\Controller\ProductsController::edit()
     */
    public function testEdit(): void {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @link \App\Controller\ProductsController::delete()
     */
    public function testDelete(): void {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
