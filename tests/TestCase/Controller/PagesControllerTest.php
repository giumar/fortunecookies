<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         1.2.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Test\TestCase\Controller;

use App\Controller\PagesController;
use Cake\Core\App;
use Cake\Core\Configure;
use Cake\Network\Request;
use Cake\Network\Response;
use Cake\TestSuite\IntegrationTestCase;
use Cake\View\Exception\MissingTemplateException;

/**
 * PagesControllerTest class
 */
class PagesControllerTest extends IntegrationTestCase
{
    public function testDisplayEmptyUnauthenticated()
    {
        $this->get('/pages/');
		$this->assertRedirect(['prefix'=>'admin', 'controller' => 'Users', 'action' => 'login']);
    }
	public function testDisplayEmptyAuthenticated()
    {
        $this->session([
			'Auth' => [
				'User' => [
					'id' => 1,
					'username' => 'admin',
				]
			]
		]);
		
		$this->get('/pages/');
		$this->assertRedirect(['prefix'=> false, 'controller' => 'Dashboard', 'action' => 'index']);
    }
	
	
	/**
     * testMultipleGet method
     *
     * @return void
     */
    public function testMultipleGetUnauthenticated()
    {
        $this->get('/pages/home.ctp');
		$this->assertRedirect(['prefix'=>'admin', 'controller' => 'Users', 'action' => 'login']);
        $this->get('/pages/home.ctp');
		$this->assertRedirect(['prefix'=>'admin', 'controller' => 'Users', 'action' => 'login']);
    }

	public function testMultipleGetAuthenticated()
	{
		$this->session([
			'Auth' => [
				'User' => [
					'id' => 1,
					'username' => 'admin',
				]
			]
		]);
		$this->get('/pages/home');
        $this->assertResponseOk();
		$this->get('/pages/home');
        $this->assertResponseOk();
	}
	
    /**
     * testDisplay method
     *
     * @return void
     */
    public function testDisplayUnauthenticated()
    {
        $this->get('/pages/home');
		$this->assertRedirect(['prefix'=>'admin', 'controller' => 'Users', 'action' => 'login']);
    }

	public function testDisplayAuthenticated()
    {
        $this->session([
			'Auth' => [
				'User' => [
					'id' => 1,
					'username' => 'admin',
				]
			]
		]);
		$this->get('/pages/home');
        $this->assertResponseOk();
        $this->assertResponseContains('CakePHP');
        $this->assertResponseContains('<html>');
    }
	
	public function testMissingTemplateUnauthenticated()
    {
		Configure::write('debug', false);
        $this->get('/pages/not_existing');
		$this->assertRedirect(['prefix'=>'admin', 'controller' => 'Users', 'action' => 'login']);
    }
	
    /**
     * Test that missing template renders 404 page in production
     *
     * @return void
     */
    public function testMissingTemplateAuthenticated()
    {
        $this->session([
			'Auth' => [
				'User' => [
					'id' => 1,
					'username' => 'admin',
				]
			]
		]);
		
		Configure::write('debug', false);
        $this->get('/pages/not_existing');
        $this->assertResponseError();
        $this->assertResponseContains('Error');
    }

    /**
     * Test that missing template in debug mode renders missing_template error page
     *
     * @return void
     */
    public function testMissingTemplateInDebugAuthenticated()
    {
        $this->session([
			'Auth' => [
				'User' => [
					'id' => 1,
					'username' => 'admin',
				]
			]
		]);
		
		Configure::write('debug', true);
        $this->get('/pages/not_existing');
        $this->assertResponseFailure();
        $this->assertResponseContains('Missing Template');
        $this->assertResponseContains('Stacktrace');
        $this->assertResponseContains('not_existing.ctp');
    }
	
	public function testMissingTemplateInDebugUnauthenticated()
    {
        Configure::write('debug', true);
        $this->get('/pages/not_existing');
		$this->assertRedirect(['prefix'=>'admin', 'controller' => 'Users', 'action' => 'login']);
    }

    /**
     * Test directory traversal protection
     *
     * @return void
     */
    public function testDirectoryTraversalProtectionUnauthenticated()
    {
        $this->get('/pages/../Layout/ajax');
		$this->assertRedirect(['prefix'=>'admin', 'controller' => 'Users', 'action' => 'login']);
    }
	
	public function testDirectoryTraversalProtectionAuthenticated()
    {
        $this->session([
			'Auth' => [
				'User' => [
					'id' => 1,
					'username' => 'admin',
				]
			]
		]);
		
		$this->get('/pages/../Layout/ajax');
        $this->assertResponseCode(403);
        $this->assertResponseContains('Forbidden');		
    }
}
