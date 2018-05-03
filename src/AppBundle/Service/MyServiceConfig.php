<?php


namespace AppBundle\Service;


class MyServiceConfig implements MyServiceConfigInterface
{

    /**
     * @var  string
     */
    private $key;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function loadKey()
    {
        return $this->key;
    }
}