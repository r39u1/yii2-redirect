<?php


namespace r39u1\redirect;


use r39u1\redirect\source\RedirectSourceInterface;
use yii\base\BootstrapInterface;

class Module extends \yii\base\Module implements BootstrapInterface
{
    public $urlSource;

    public function __construct($id, $parent = null, $config = [], RedirectSourceInterface $source)
    {
        $this->urlSource = $source;
        parent::__construct($id, $parent, $config);
    }

    public function bootstrap($app)
    {
        $currentUrl = $app->request->pathInfo;

        if ($this->urlSource->findUrl($currentUrl)) {
            $app->response->redirect($this->urlSource->getRedirectUrl(), $this->urlSource->getStatusCode())->send();
            $app->end();
        }
    }
}