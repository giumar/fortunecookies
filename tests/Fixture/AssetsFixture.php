<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AssetsFixture
 */
class AssetsFixture extends TestFixture
{
    
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'created' => '2021-11-05 12:47:11',
                'modified' => '2021-11-05 12:47:11',
            ],
        ];
        parent::init();
    }
}
