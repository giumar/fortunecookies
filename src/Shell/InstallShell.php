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
        $this->out('FortuneCookies installation');
		$this->hr();
        $this->out('This procedure will output a file called app_local.php');
        $this->out('to store Security Salt and Database connection information');
		
		// Salt
		$this->hr();
		$this->out('Configure Security Salt');
		$this->out('A Security Salt is a random string used to encrypt sensitive data inside this app.');
		$salt = $this->in('Type a string:');
		Configure::write('Security.salt', $salt);
		// Database\Connection
		// Admin account
		// Mail
		
		if(!Configure::read('Security.salt'))
		{
			$salt = $this->in('Salt:');
		}

		Configure::write('debug', false);
		Configure::write('Datasources.default.className', 'Cake\Database\Connection');
		Configure::write('Datasources.default.driver', 'Cake\Database\Driver\Mysql');
		Configure::write('Datasources.default.persistent', false);
		Configure::write('Datasources.default.host', 'localhost');
		Configure::write('Datasources.default.username', 'root');
		Configure::write('Datasources.default.password', 'semaphoredb');
		Configure::write('Datasources.default.database', 'fc_test');
		Configure::write('Datasources.default.encoding', 'utf8');
		Configure::write('Datasources.default.timezone', 'UTC');
		Configure::write('Datasources.default.flags', []);
		Configure::write('Datasources.default.cacheMetadata', true);
		Configure::write('Datasources.default.log', false);
		Configure::write('Datasources.default.quoteIdentifiers', false);
		Configure::write('Datasources.default.url', env('DATABASE_URL', null));
		$file = new File('config/app_local.php', false);
		if(!$file->exists()) {
			if($ris = Configure::dump('app_local', 'default')) {
				$this->out("Wrote config file app_local.php");
			}
		}
		$file->close();
    }
}