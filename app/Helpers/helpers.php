<?php
namespace App\Helpers;
use Illuminate\Support\Facades\DB;
class helpers{
static function  get_user_password($user_id)
   {
       $result=DB::table('og_users')->where('newu_id',$user_id)->pluck('id');
       $password=DB::table('og_users')->where('id',$result)->pluck('password');
       return $password[0];
   }

}
?>
