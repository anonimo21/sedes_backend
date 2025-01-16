<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiKeyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $apiKey = $request->header('API-Key');
        $dataApiKey = env('API_KEY');
        if ($apiKey !== $dataApiKey) {
            return response()->json(['message' => 'No está autorizado para realizar esta accion'], Response::HTTP_UNAUTHORIZED);
        }
        return $next($request);
    }
}
