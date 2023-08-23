<?php

namespace App\Http\Controllers;

// // use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Good;

class GoodsController extends Controller
{
    public function indexgoods() {
        $goods_array = [];
        foreach(Good::all() as $good) {
            $goods_array[] = $good->name;
        }
        return view('goods.goods', ['names'=>$goods_array]);
    }
}
