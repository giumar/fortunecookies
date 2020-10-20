<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dashboard Controller
 *
 */
class DashboardController extends AppController
{

    public function initialize() : void
    {
        parent::initialize();

        $this->Auth->allow(['index']);
    }

    public function index()
    {
    }
}
