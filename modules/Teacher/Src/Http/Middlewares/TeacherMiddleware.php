<?php
namespace Modules\Teacher\Src\Http\Middlewares;

use Illuminate\Http\Request;
use Closure;
class TeacherMiddleware {
    public  function  handle(Request $request, Closure $next) {
        echo 'middleware' . '<br>';

        return $next($request);
    }
}
