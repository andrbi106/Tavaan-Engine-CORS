# Tavaan Engine — CORS

> **مدیریت CORS** — موتور CORS در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.cors` |
| نام | `CORS` |
| عنوان فارسی | مدیریت CORS |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Http\Cors` |
| نوع | `engine` |

## کلاس‌های اصلی

- `src/Cors.php`

## Service Providerها

- `Tavaan\Engine\Http\Cors\CorsServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `http`
- `config`

## پیکربندی

- فایل پیکربندی: `config/cors.php`
- کلید: `cors`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-CORS.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-CORS`** (این مخزن) | موتور CORS |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
