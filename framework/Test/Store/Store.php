<?php

namespace Test\Store;

class Store implements \Test\Store\ManagerInterface
{
    protected $_store;

    public function __construct($storeCode)
    {
        try {
            // Store names should be defined in config
            switch ($storeCode) {
                case 1:
                    $this->_store = 'Osijek store';
                    break;
                default:
                    throw new \Exception('Store with code ' . $storeCode . ' doesn\'t exist.');
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getStore()
    {
        return $this->_store;
    }
}