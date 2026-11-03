<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Cors Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور cors — همهٔ کلیدهای مستندشده در `docs/03-engines/cors.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/cors.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('CORS_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('CORS_PREFIX', 'cors:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('CORS_LOG_CHANNEL', 'cors'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];