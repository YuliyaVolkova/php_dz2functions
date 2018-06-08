<?php
/**
 * @param array $arr
 * @param bool $concat
 * @return string
 */
function task1(array $arr, bool $concat = false)
{
    for ($i = 0; $i < count($arr); $i++) {
        echo '<p>',  $arr[$i], '</p>';
    }
    if ($concat) {
        return implode(' ', $arr);
    }
}

/**
 * @param string $operator
 */
function  task2(string $operator)
{
    for ($i = 0; $i < func_num_args(); $i++) {
        $param = func_get_arg($i);
        $type = gettype($param);
        if ($i === 0) {
            if($type !== 'string')
                return 'Не указан оператор для вычислений';
        } else {
            if ($type === 'integer' | $type === 'double') {
                $array[] = $param;
            }
        }
    }
    if (empty($array)) {
        return 'В функцию не переданы числа для вычислений';
    } elseif (count($array) === 1) {
        return $array[0];
    }
    $result = array_shift($array);
    foreach ($array as $value) {
        switch ($operator) {
            case '+':
                $result += $value;
                break;
            case '-':
                $result -= $value;
                break;
            case '/':
                $result /= $value;
                break;
            case '*':
                $result *= $value;
                break;
            case '%':
                $result %= $value;
                break;
            case '**':
                $result = $result ** $value;
                break;
            default:
                return 'Не корректно указан оператор для вычислений';
        }
    }
    return $result;
}

/**
 * @param int $rows
 * @param int $cols
 */
//задание 3
function task3(int $rows, int $cols)
{
    if (gettype($rows)!== 'integer' | gettype($cols)!== 'integer' | $rows < 1 || $cols < 1) {
        echo 'Некорректно указаны размеры таблицы умножения';
        return;
    } else {
        echo "<table class='table'>";
        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $cols; $j++) {
                $item = $i * $j;
                echo "<td>", $item, "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

/**
 * @param string $timestamp
 * @return string
 */
//задание 4
function task4(string $timestamp = '24.02.2016 00:00:00') :string
{
    $currentDate = date('d.m.y h:i');
    echo '<p>', 'Сегодня ', $currentDate, '</p>';

    list($date, $time) = explode(' ', $timestamp);
    list($day, $month, $year) = explode('.', $date);
    list($hours, $minutes, $seconds) = explode(':', $time);

    echo '<p>', 'Unix timestamp время, соответствующее ', $timestamp, ': ',
        mktime($hours, $minutes, $seconds, $month, $day, $year), '</p>';
    echo '<p>', 'День недели, соответствующий ', $timestamp, ': ',
    date('l', mktime($hours, $minutes, $seconds, $month, $day, $year)), '</p>';
    return $currentDate;
}

/**
 * @param string $str
 * @param string $search
 * @return string
 */
//задание 5
function task5(string $str, string $search) :string
{
   if (func_num_args() < 3) {
        return str_replace($search, '', $str);
    } elseif (func_get_arg(2)) {
        return str_replace($search, func_get_arg(2), $str);
    }
    return func_num_args();
}

/**
 * @param string $filename
 */
//задание 6
function task6(string $filename = 'test.txt')
{
    // пункт 1 задачи
    $file = fopen('test.txt', 'w');
    fwrite($file, 'Hello again!');
    fclose($file);

    // пункт 2 задачи
    $file = fopen($filename, 'r');
    readfile($filename);
    fclose($file);
}
