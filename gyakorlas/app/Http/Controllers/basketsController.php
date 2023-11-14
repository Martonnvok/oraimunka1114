<?php

namespace App\Http\Controllers;

use App\Models\baskets;
use Illuminate\Http\Request;

class basketsController extends Controller
{
    public function show ($user_id, $item_id)
    {
        $baskets = baskets::where('user_id', $user_id)->where('item_id', $item_id)->get();
        return $baskets[0];
    }

}
