<?php

$routes->get('InventarioEquipamentos/index', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::index');
$routes->get('InventarioEquipamentos/list', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::list');
$routes->get('InventarioEquipamentos/register', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::register');
$routes->post('InventarioEquipamentos/submitForm', '\Modules\InventarioEquipamentos\Controllers\InventarioEquipamentos::submitForm');