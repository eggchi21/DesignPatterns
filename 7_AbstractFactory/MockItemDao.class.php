<?php
require_once 'ItemDao.class.php';
require_once 'Item.class.php';

class MockItemDao implements ItemDao
{
    public function findById($item_id)
    {
        $item = new Item('99', 'ダミー商品');
        return $item;
    }
}