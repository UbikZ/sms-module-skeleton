<?php

namespace App\Module\App\Controller;

use SMS\Core\Controller\AbstractController;

/**
 * Class IndexController
 */
class IndexController extends AbstractController
{
    /**
     *
     */
    public function indexAction()
    {
        return $this->render();
    }
}
