<?php
require_once 'OrderDao.class.php';
require_once 'Order.class.php';

class MockOrderDao implements OrderDao
{
    public function findById($order_id)
    {
        $order = new Order('999');
        $order->addItem(new Item('99', 'ダミー商品'));
        $order->addItem(new Item('99', 'ダミー商品'));
        $order->addItem(new Item('98', 'テスト商品'));

        return $order;
    }
}