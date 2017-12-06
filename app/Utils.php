<?php
/**
 * Created by PhpStorm.
 * User: wilson mani
 * Date: 30-11-2017
 * Time: 19:00
 */

namespace App;





use App\Cart\Facades\Cart;
use Closure;
use function GuzzleHttp\Psr7\str;
use Hamcrest\Util;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class Utils{

    public static function MongoDB(){
        return DB::connection('mongodb');
    }


}