<?php
// phpinfo();
    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27016");

    // 插入数据
    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->insert(['x' => 1, 'name'=>'菜鸟教程', 'url' => 'http://www.runoob.com']);
    $bulk->insert(['x' => 2, 'name'=>'Google', 'url' => 'http://www.google.com']);
    $bulk->insert(['x' => 3, 'name'=>'taobao', 'url' => 'http://www.taobao.com']);
    $manager->executeBulkWrite('test.sites', $bulk);
?>