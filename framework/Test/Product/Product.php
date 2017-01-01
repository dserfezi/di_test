<?php

namespace Test\Product;

class Product
{
    protected $_storeManager;

    public function __construct(
        \Test\Store\ManagerInterface $storeManager
    )
    {
        $this->_storeManager = $storeManager;
    }

    public function getStoreManager()
    {
        return $this->_storeManager;
    }
}