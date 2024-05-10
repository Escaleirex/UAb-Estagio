<?php

// Gets
$routes->get('InventarioEquipamentos/index', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::index', ['as'=> 'equipamentos-index']);
$routes->get('InventarioEquipamentos/list', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::list', ['as'=> 'equipamentos-list']);
$routes->get('InventarioEquipamentos/getItemById/(:num)', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::getItemById/$1', ['as'=> 'equipamentos-getitembyid']);

// Posts
$routes->post('InventarioEquipamentos/submitForm', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::submitForm', ['as'=> 'equipamentos-submitform']);
$routes->post('InventarioEquipamentos/updateItemForm', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::updateItemForm', ['as'=> 'equipamentos-updateitemform']);
$routes->post('InventarioEquipamentos/deleteForm', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::deleteForm', ['as'=> 'equipamentos-deleteform']);