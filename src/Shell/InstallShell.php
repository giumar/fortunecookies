<?php
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Cake\Core\Configure;
use Cake\Core\Configure\Engine\PhpConfig;

class InstallShell extends Shell
{
    public function main()
    {
        $this->out('Hello world.');
		/*
		if(!Configure::read('Security.salt'))
		{
			$salt = $this->in('Salt:');
			Configure::write('Security.salt', $salt);
		}
		*/
		Configure::write('debug', true);
		Configure::write('Security.salt', '1234567890987654321');
		Configure::write('Datasources.default.className', 'Cake\Database\Connection');
		Configure::write('Datasources.default.driver', 'Cake\Database\Driver\Mysql');
		Configure::write('Datasources.default.persistent', false);
		Configure::write('Datasources.default.host', 'localhost');
		Configure::write('Datasources.default.username', 'root');
		Configure::write('Datasources.default.password', 'semaphoredb');
		Configure::write('Datasources.default.database', 'fc_test');
		Configure::write('Datasources.default.encoding', 'uf8');
		Configure::write('Datasources.default.timezone', 'UTC');
		Configure::write('Datasources.default.flags', []);
		Configure::write('Datasources.default.cacheMetadata', true);
		Configure::write('Datasources.default.log', false);
		Configure::write('Datasources.default.quoteIdentifiers', false);
		Configure::write('Datasources.default.url', env('DATABASE_URL', null));
		
		$this->out(Configure::dump('app', 'default'));
		
    }
}