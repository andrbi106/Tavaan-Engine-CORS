<?php

declare(strict_types=1);

namespace Tavaan\Engine\Http\Cors;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * CorsMiddleware — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Http\Cors\Contracts\CorsMiddlewareInterface
 */
final class CorsMiddleware implements Contracts\CorsMiddlewareInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function handle(/* ... */): mixed
    {
        // TODO: پیاده‌سازی handle مطابق مستندات (سند §3 API).
        return null;
    }
}