<?php 

namespace App\Services;

use Illuminate\Support\Facades\Log;

class CommonService {
    static function sleep($sec) {
        Log::info("job working");
        return sleep($sec);
    }
}