<?php

declare(strict_types=1);

namespace Form\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class FormElementController extends AbstractActionController
{
    public function indexAction()
    {

        return new ViewModel();
    }

    public function editAction()
    {
        echo 1212;
        return false;
    }
}
