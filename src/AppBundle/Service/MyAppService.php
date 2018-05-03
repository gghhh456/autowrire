<?php

namespace AppBundle\Service;


class MyAppService implements MyAppServiceInterface
{

    /**
     * @var MyServiceConfigInterface $config
     */
    private $config;

    public function __construct(MyServiceConfigInterface $config){

        $this->config = $config;
    }

    public function getText($text)
    {

        return $this->config->loadKey(). $text;
    }
}