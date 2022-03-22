<?php 
/*------------------------
 here is the codes which explain the answers 
---------------------------*/

//	How to turn off CRSF protection for specific route in Laravel?
namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    protected $except = [
     // here's you can write the routes 
        'payment/*',
    ];
}

//  How to use custom table in Laravel Model?
Class User extends Eloquent {
    protected $table = "my_user_table";  
}
?>
