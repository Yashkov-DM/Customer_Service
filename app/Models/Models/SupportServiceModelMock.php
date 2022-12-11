<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mockery;

class SupportServiceModelMock {

    public static $data_support_orders = [
        ['id' => 1, 'name' => 'Заявка25', 'content' => 'Проблемы с монитором Sony', 'customerid' => 8, 'deviceid' => 156, 'status' => 'awaiting',  'date_creation' => 1670789149],
        ['id' => 2, 'name' => 'Заявка26', 'content' => 'Помехи в наушниках JBL', 'customerid' => 8, 'deviceid' => 126, 'status' => 'accepted', 'date_creation' => 1665345949],
        ['id' => 3, 'name' => 'Заявка28', 'content' => 'Настройки телефона Xiaomi mi 10', 'customerid' => 3, 'deviceid' => 25, 'status' => 'accepted', 'date_creation' => 1668542749],
        ['id' => 4, 'name' => 'Заявка30', 'content' => 'Экран рябит монитор Sony', 'customerid' => 14, 'deviceid' => 156, 'status' => 'awaiting', 'date_creation' => 1668543549],
        ['id' => 5, 'name' => 'Заявка31', 'content' => 'Кофемашина не работает', 'customerid' => 9, 'deviceid' => 92, 'status' => 'completed', 'date_creation' => 1670270749],
    ];

    public static function all() {
        return self::$data_support_orders;
    }

    public static function find($id) {
        $record = array_search($id, array_column(self::$data_support_orders, 'id'));
        $record = $record ? (object) self::$data_support_orders[$record] : '';

        return $record;
    }

    public static function create($arg) {
        array_push(self::$data_support_orders, $arg);

        return self::$data_support_orders;
    }

    public static function update($arg) {
        $record = array_search($arg['id'], array_column(self::$data_support_orders, 'id'));
        if ($record)  {
            self::$data_support_orders[$record] = $arg;
        }

        return self::$data_support_orders[$record];
    }

    public static function delete($id) {
        $record = array_search($id, array_column(self::$data_support_orders, 'id'));
        if ($record) {
            unset(self::$data_support_orders[$record]);
        }
    }
}
