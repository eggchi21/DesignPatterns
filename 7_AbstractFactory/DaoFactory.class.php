<?php
interface DaoFactory {
    public function createItemDao();
    public function createOrderDao();
}