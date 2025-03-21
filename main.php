<?php

if ( file_exists( 'Catalog.php' ) ) {
	require_once( 'Catalog.php' );
}

$products = array(
	0 => array(
		'id'    => 'p-001',
		'name'  => 'Тестовый товар 1',
		'color' => 'Синий',
	),
	1 => array(
		'id'    => 'p-002',
		'name'  => 'Тестовый товар 2',
		'color' => 'Синий',
	),
	2 => array(
		'id'    => 'p-003',
		'name'  => 'Тестовый товар 3',
		'color' => 'Синий',
	),
	3 => array(
		'id'    => 'p-004',
		'name'  => 'Тестовый товар 4',
		'color' => 'Красный',
	),
	4 => array(
		'id'    => 'p-005',
		'name'  => 'Тестовый товар 5',
		'color' => 'Белый',
	),
	5 => array(
		'id'    => 'p-006',
		'name'  => 'Тестовый товар 6',
		'color' => 'Фиолетовый',
	),
	6 => array(
		'id'    => 'p-007',
		'name'  => 'Тестовый товар 7',
		'color' => 'Прозрачный',
	),
	7 => array(
		'id'    => 'p-008',
		'name'  => 'Тестовый товар 8',
		'color' => 'Оранжевый',
	),
);

$storage = array(
	0 => array(
		'product_id' => 'p-005',
		'count'      => 7,
		'price'      => 100,
		'currency'   => 'р.',
	),
	1 => array(
		'product_id' => 'p-003',
		'count'      => 0,
		'price'      => 150,
		'currency'   => 'р.',
	),
	2 => array(
		'product_id' => 'p-001',
		'count'      => 10,
		'price'      => 200,
		'currency'   => 'р.',
	),
	3 => array(
		'product_id' => 'p-002',
		'count'      => 5,
		'price'      => 345,
		'currency'   => 'р.',
	),
	4 => array(
		'product_id' => 'p-006',
		'count'      => 5,
		'price'      => null,
		'currency'   => 'р.',
	),
	5 => array(
		'product_id' => 'p-004',
		'count'      => 2,
		'price'      => 10,
		'currency'   => 'р.',
	),
	6 => array(
		'product_id' => 'p-007',
		'count'      => 6,
		'price'      => 900,
		'currency'   => 'р.',
	),
);


$obj_Catalog = new Catalog( $products, $storage );

# Данная задача состоит из двух подзадач:
# 1. Необходимо написать метод с помощью которого можно было получить один массив состоящий из элементов $products, которые дополненны
# данными из $storage. Основное условие - использовать оптимизированный подход и неиспользовать множественный цикл (цикл в цикле)!
# 2. Написать универсальный метод с помощью которого можно было бы получить отфильтрованный массив полученный после первого метода.
# Для этого используем механизм передачи параметров методу с помощью которых будет удобно производить процесс фильтрации. Если
# данный метод очень сложно реализовать, тогда можно попробовать реализовать метод фильтрации по цене и цвету.

// === ↓ code is here ============================================


$mergeProduts = $obj_Catalog->mergeFunc();

$filters = array(
	'color' => 'Синий',
	'price' => 200
);

$filterProducts = $obj_Catalog->universalFilter($mergeProduts, $filters);

echo "Сорт. товары";
print_r( $filterProducts );





// === ↑ code is here ============================================

