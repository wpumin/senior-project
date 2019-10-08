<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use LogicException;
use App\Helpers\GLO;

class CorsMiddleware
{

    public function handle($request, Closure $next)
    {   

        try {

            $headers = [
                'Access-Control-Allow-Origin' => '*',
                'Access-Control-Allow-Methods' => 'POST, GET, OPTIONS, PUT, DELETE',
                'Access-Control-Allow-Credentials' => 'true',
                'Access-Control-Max-Age' => '86400',
                'Access-Control-Allow-Headers' => 'Content-Type, Authorization, X-Requested-With'
            ];
    
            if ($request->isMethod('OPTIONS')) {
                throw new LogicException('10002');
            }
    
            $response = $next($request);
    
            foreach($headers as $key => $value) {
    
                $response->header($key, $value);
                
            }
            
        } catch (Exception $e) {

            $config = [                        
                'channel' => $request->header('appId'),
                'ip' => $request->header('X-Forwarded-For'),
                'api' => $request->header('operation'),
                'request' => $request->header('requestId'),
                'input' => $request->all()
            ];
            return response()->json(GLO::response($config, $e->getMessage()));

        }

        return $response;

    }
}
