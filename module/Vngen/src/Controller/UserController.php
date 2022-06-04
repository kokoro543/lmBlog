<?php
declare(strict_types=1);


namespace Vngen\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Laminas\View\View;

class UserController extends AbstractActionController
{
    public function loginAction()
    {
        $request = $this->getRequest();

        if ($request->isGet()) {
            $actionName = $this->params()->fromRoute('action','abc');
            $id = $this->params()->fromRoute('id',0);
            echo $actionName . '<br/>';
            echo $id . '<br/>';
        }else {
            $name = $this->params()->fromPost('name', 'Hoang Dang');
            echo $name . '<br/>';
        }

        echo "Login Action - UserController";
        return false;
    }

    public function loginTestAction()
    {
        $checkMethod = $this->getRequest();

        if ($checkMethod->isGet()) {

            $action = $this->params()->fromRoute('action', 'abc');
            $id = $this->params()->fromRoute('id', 0);

        } else {

            $action = 'index';
            $id = -1;

        }

        if ($id <= 0) {

            $this->getResponse()->setStatusCode(404);
            return;

        }

        /*return new ViewModel(
            [
                'action' => $action,
                'id' => $id
            ]
        );*/

        $view = new ViewModel([
            'action' => $action,
            'id' => $id
        ]);
        $view->setTemplate('vngen/index/login-test');

        return $view;

    }

    public function logoutAction()
    {
        echo "Logout Action - UserController";
        return false;
    }
}
