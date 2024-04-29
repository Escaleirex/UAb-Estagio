<?php

// Gets
$routes->get('InventarioEquipamentos/index', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::index');
$routes->get('InventarioEquipamentos/list', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::list');
$routes->get('InventarioEquipamentos/getItemById/(:num)', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::getItemById/$1');

// Posts
$routes->post('InventarioEquipamentos/submitForm', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::submitForm');
$routes->post('InventarioEquipamentos/updateItemForm', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::updateItemForm');