<?php
// Задача 1: Создание простого массива
echo "<h3>Задача 1: Создание простого массива</h3>";
$friends = ["Иван", "Мария", "Алексей", "Ольга"];
foreach ($friends as $friend) {
    echo $friend . "<br>";
}

echo "<br>";

// Задача 2: Индексы массива
echo "<h3>Задача 2: Индексы массива</h3>";
$numbers = [3, 8, 15, 23, 42];
echo "Элемент с индексом 2: " . $numbers[2] . "<br>";

echo "<br>";

// Задача 3: Ассоциативный массив
echo "<h3>Задача 3: Ассоциативный массив</h3>";
$friend_info = [
    "name" => "Иван",
    "age" => 25,
    "city" => "Москва"
];
echo "Имя: " . $friend_info["name"] . "<br>";
echo "Возраст: " . $friend_info["age"] . "<br>";

echo "<br>";

// Задача 4: Массивы с циклами
echo "<h3>Задача 4: Массивы с циклами</h3>";
$numbers = [5, 12, 8, 20, 7];
foreach ($numbers as $number) {
    if ($number > 10) {
        echo $number . "<br>";
    }
}

echo "<br>";

// Задача 5: Работа с массивами функций
echo "<h3>Задача 5: Работа с массивами функций</h3>";
$numbers = [5, 12, 8, 20, 7];
echo "Сумма чисел: " . array_sum($numbers) . "<br>";

echo "<br>";

// Задача 6: Учет товаров в магазине
echo "<h3>Задача 6: Учет товаров в магазине</h3>";
$products = [
    ["name" => "Товар 1", "price" => 100, "quantity" => 10],
    ["name" => "Товар 2", "price" => 200, "quantity" => 5],
    ["name" => "Товар 3", "price" => 150, "quantity" => 8],
    ["name" => "Товар 4", "price" => 300, "quantity" => 3],
    ["name" => "Товар 5", "price" => 250, "quantity" => 6],
];

function listProducts($products) {
    foreach ($products as $product) {
        echo $product['name'] . " - " . $product['price'] . " руб.<br>";
    }
}

function addProduct(&$products, $name, $price, $quantity) {
    $products[] = ["name" => $name, "price" => $price, "quantity" => $quantity];
}

function updateProductQuantity(&$products, $name, $newQuantity) {
    foreach ($products as &$product) {
        if ($product['name'] === $name) {
            $product['quantity'] = $newQuantity;
        }
    }
}

listProducts($products);
addProduct($products, "Товар 6", 180, 7);
updateProductQuantity($products, "Товар 2", 10);

echo "<br><strong>Обновленный список товаров:</strong><br>";
listProducts($products);

echo "<br>";

// Задача 7: Расчет среднего балла студентов
echo "<h3>Задача 7: Расчет среднего балла студентов</h3>";
$students = [
    ["name" => "Иван", "grades" => [4, 5, 5, 3]],
    ["name" => "Мария", "grades" => [5, 5, 4, 4]],
    ["name" => "Алексей", "grades" => [3, 4, 4, 2]],
];

function calculateAverageGrade($grades) {
    return array_sum($grades) / count($grades);
}

function listStudentAverages($students) {
    foreach ($students as $student) {
        $average = calculateAverageGrade($student["grades"]);
        echo $student["name"] . " - Средний балл: " . $average . "<br>";
    }
}

function getBestStudent($students) {
    $bestStudent = null;
    $highestAverage = 0;
    foreach ($students as $student) {
        $average = calculateAverageGrade($student["grades"]);
        if ($average > $highestAverage) {
            $highestAverage = $average;
            $bestStudent = $student["name"];
        }
    }
    return $bestStudent;
}

listStudentAverages($students);
echo "<br>Лучший студент: " . getBestStudent($students) . "<br>";

echo "<br>";

// Задача 8: Поиск дубликатов в массиве
echo "<h3>Задача 8: Поиск дубликатов в массиве</h3>";
$numbers = [5, 12, 8, 5, 20, 12, 7];

function findDuplicates($array) {
    $seen = [];
    $duplicates = [];
    foreach ($array as $value) {
        if (in_array($value, $seen)) {
            if (!in_array($value, $duplicates)) {
                $duplicates[] = $value;
            }
        } else {
            $seen[] = $value;
        }
    }
    return $duplicates;
}

$duplicates = findDuplicates($numbers);
echo "Дубликаты: " . implode(", ", $duplicates) . "<br>";

echo "<br>";

// Задача 9: Объединение и сортировка массивов
echo "<h3>Задача 9: Объединение и сортировка массивов</h3>";
$array1 = [3, 6, 1, 8];
$array2 = [7, 2, 9, 4];

function mergeAndSort($array1, $array2) {
    $merged = array_merge($array1, $array2);
    sort($merged);
    return $merged;
}

$sortedArray = mergeAndSort($array1, $array2);
echo "Объединенный и отсортированный массив: " . implode(", ", $sortedArray) . "<br>";

echo "<br>";

// Задача 10: Фильтрация массива
echo "<h3>Задача 10: Фильтрация массива</h3>";
$numbers = [3, 6, 7, 8, 10, 12, 15];

function filterEvenNumbers($array) {
    return array_filter($array, fn($number) => $number % 2 === 0);
}

$evenNumbers = filterEvenNumbers($numbers);
echo "Четные числа: " . implode(", ", $evenNumbers) . "<br>";

?>
