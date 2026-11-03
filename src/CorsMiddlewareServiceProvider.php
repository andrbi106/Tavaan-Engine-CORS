<?php

declare(strict_types=1);

namespace Tavaan\Engine\Http\Cors;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Http\Cors\Contracts\CorsMiddlewareInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * CorsMiddlewareServiceProvider — ثبت سرویس‌های موتور CorsMiddleware.
 */
final class CorsMiddlewareServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(CorsMiddlewareInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new CorsMiddleware($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            CorsMiddlewareInterface::class,
        ];
    }
}