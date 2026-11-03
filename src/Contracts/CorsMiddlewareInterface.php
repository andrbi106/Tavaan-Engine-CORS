<?php

declare(strict_types=1);

namespace Tavaan\Engine\Http\Cors\Contracts;

/**
 * قرارداد CorsMiddleware.
 *
 * @see \Tavaan\Engine\Http\Cors\CorsMiddleware
 * @api 1.0
 */
interface CorsMiddlewareInterface
{
    /**
     * متد handle.
     *
     * @return mixed
     */
    public function handle(/* ... */): mixed;
}