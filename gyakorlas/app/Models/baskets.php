<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class baskets extends Model
{
    use HasFactory;

    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('item_id', '=', $this->getAttribute('item_id'))
            ->where('user_id', '=', $this->getAttribute('id'));


        return $query;
    }

}
