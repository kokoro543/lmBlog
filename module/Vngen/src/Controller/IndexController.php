<?php
declare(strict_types=1);

namespace Vngen\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function editAction()
    {
        return new ViewModel();
    }

    public function edit02Action()
    {
        return false;
    }

    public function deleteAction()
    {
        echo "Delete Action";
        return false;
    }

}
