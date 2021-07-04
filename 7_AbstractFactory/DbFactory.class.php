<?php
require_once 'DaoFactory.class.php';
require_once 'DbItemDao.class.php';
require_once 'DbOrderDao.class.php';

class DbFactory implements DaoFactory
{
    public function createItemDao()
    {
        return new DbItemDao();
    }
    public function createOrderDao()
    {
        return new DbOrderDao($this->createItemDao());
    }
}