<?php

namespace ZnUser\Rbac\Symfony4\Admin\Controllers;

use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use ZnBundle\Dashboard\Domain\Enums\Rbac\DashboardPermissionEnum;
use ZnBundle\Log\Domain\Interfaces\Services\HistoryServiceInterface;
use ZnBundle\Notify\Domain\Interfaces\Services\ToastrServiceInterface;
use ZnBundle\User\Domain\Enums\Rbac\AppUserPermissionEnum;
use ZnCore\Base\Legacy\Yii\Helpers\Url;
use ZnLib\Web\Symfony4\MicroApp\BaseWebController;
use ZnLib\Web\Symfony4\MicroApp\BaseWebCrudController;
use ZnLib\Web\Symfony4\MicroApp\Interfaces\ControllerAccessInterface;
use ZnLib\Web\Widgets\BreadcrumbWidget;
use ZnUser\Rbac\Domain\Enums\Rbac\ExtraPermissionEnum;
use ZnUser\Rbac\Domain\Enums\Rbac\SystemRoleEnum;

class InfoController extends BaseWebController implements ControllerAccessInterface
{

    protected $viewsDir = __DIR__ . '/../views/info';
    protected $baseUri = '/rbac/info';

    /*public function __construct(
        ToastrServiceInterface $toastrService,
        FormFactoryInterface $formFactory,
        CsrfTokenManagerInterface $tokenManager,
        BreadcrumbWidget $breadcrumbWidget,
        HistoryServiceInterface $service
    )
    {
        $this->setService($service);
        $this->setToastrService($toastrService);
        $this->setFormFactory($formFactory);
        $this->setTokenManager($tokenManager);
        $this->setBreadcrumbWidget($breadcrumbWidget);

        $title = 'Log history';
        $this->getBreadcrumbWidget()->add($title, Url::to([$this->getBaseUri()]));
    }*/

    public function access(): array
    {
        return [
            'index' => [
                //ExtraPermissionEnum::ADMIN_ONLY,
                DashboardPermissionEnum::ALL
            ],
        ];
    }

    public function index(Request $request): Response
    {
        dd(34);
    }
}
