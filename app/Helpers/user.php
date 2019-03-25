<?php
//app/Helpers/Envato/User.php
namespace App\Helpers;
 
use Illuminate\Support\Facades\DB;
 
class User {
    /**
     * @param int $user_id User-id
     * 
     * @return string
     */
    public static function toUpperCase($string) {
        $string = strtoupper($string);
         
        return $string;
    }
}