<?php

declare(strict_types=1);

namespace Tavaan\Engine\Http\Cors\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Http\Cors\CorsMiddleware;
use Tavaan\Engine\Http\Cors\CorsMiddlewareServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور CorsMiddleware.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class CorsMiddlewareTest extends TestCase
{
    private CorsMiddleware $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new CorsMiddleware($config);
    }

    /**
     * T-01: Simple request با origin مجاز → headers
     */
    public function test_t01_simple_request__origin_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: origin غیرمجاز → بدون CORS header
     */
    public function test_t02_origin____cors_head(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: Preflight OPTIONS → 204 با headers
     */
    public function test_t03_preflight_options__204__head(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: wildcard `*.example.com`
     */
    public function test_t04_wildcard_examplecom(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: `*` + credentials → config error
     */
    public function test_t05_credentials__config_error(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: Vary: Origin حاضر
     */
    public function test_t06_vary_origin_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

}