<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Models\SupportServiceModelMock;
use Illuminate\Http\Request;
use  App\Models\Models\SupportServiceModel;

class SupportServiceController extends Controller {

    // Получаем все запросы в тех.поддержку
    public function support_orders() {
        $orders = SupportServiceModelMock::all();

        return response()->json($orders, 200);
    }

    // Получаем запрос в тех.поддержку по id
    public function support_order($id) {
        $order = SupportServiceModelMock::find($id);
        $order = $order ?: 'No order with id=' . $id;

        return response()->json($order, 200);
    }

    // Создаём запрос в тех.поддержку
    public function support_order_create(Request $req) {
        $order = SupportServiceModelMock::create($req->all());

        return response()->json($order, 201);
    }

    // Меняем статус запроса
    public function support_order_update(Request $req) {
        $id = $req->all('id')['id'];

        $order = SupportServiceModelMock::find($id);
        if (!$order) {
            return response()->json('No order with id=' . $id, 404);
        }
        $order = SupportServiceModelMock::update($req->all());
//        $order = $order ? SupportServiceModelMock::update($req->all()) : 'No order with id=' . $id;

        return response()->json($order, 201);
    }

    // Удаляем выполненную заявку
    public function support_order_delete($id, SupportServiceModelMock $support) {
        $order = $support->find($id);
        if ($order && $order->status == 'completed') {
            $support->delete($id);
            $message = 'deleted successfully';
        } else {
            $message = 'No suitable for deletion order with id=' . $id;
        }

        return response()->json($message, 200);
    }
}
