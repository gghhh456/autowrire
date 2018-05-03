<?php


namespace AppBundle\Twig;

use AppBundle\Service\MyAppServiceInterface;

/**
 * The AppBundleExtension class
 */
class AppBundleExtension extends \Twig_Extension
{
    /**
     * @var MyAppServiceInterface
     */
    private $appService;

    public function __construct(MyAppServiceInterface $appService){

        $this->appService = $appService;
    }


    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'appbundle';
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('new_text', [$this, 'getText'])];
    }

    public function getText($text){

        return $this->appService->getText( $text);
    }
}