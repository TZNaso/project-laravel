<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class homeModel extends Model
{
    public function getList()
    {
        $teste = DB::select("select * from cliente");

        error_log(json_encode($teste));
    }
}
