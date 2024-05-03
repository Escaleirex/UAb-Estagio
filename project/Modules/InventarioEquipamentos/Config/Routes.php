<?php

// Gets
$routes->get('InventarioEquipamentos/index', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::index');
$routes->get('InventarioEquipamentos/list', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::list');

// Posts
$routes->post('InventarioEquipamentos/submitForm', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::submitForm');
$routes->post('InventarioEquipamentos/updateItemForm', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::updateItemForm');

// API
$routes->get('api/IE/getItemById/(:num)', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::getItemById/$1');
$routes->get('api/IE/getData', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::getData');