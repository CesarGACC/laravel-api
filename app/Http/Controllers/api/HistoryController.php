<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;
class HistoryController extends Controller
{
    //
    public function show($id)
    {
        //
        $history = History::where('id_product',$id)->get();
        return $history->toJson();
    }

}
