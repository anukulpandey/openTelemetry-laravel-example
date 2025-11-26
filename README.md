# SigNoz Laravel Sample App

📘 **Official Laravel Instrumentation Guide:**
[https://signoz.io/docs/instrumentation/opentelemetry-laravel/](https://signoz.io/docs/instrumentation/opentelemetry-laravel/)

This repository demonstrates how to run a Laravel application already configured with **OpenTelemetry Automatic Instrumentation** and send traces to **SigNoz Cloud**.

---

## Step 1. Clone the repository

```sh
git clone https://github.com/signoz/openTelemetry-laravel-example
cd openTelemetry-laravel-example
```

---

## Step 2. Install dependencies

```sh
composer install
```

---

## Step 3. Copy environment variables

```sh
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate              
```
---

## Step 4. Run the app with OpenTelemetry instrumentation

```sh
env OTEL_PHP_AUTOLOAD_ENABLED=true \
    OTEL_SERVICE_NAME=<service_name> \
    OTEL_TRACES_EXPORTER=otlp \
    OTEL_EXPORTER_OTLP_PROTOCOL=http/protobuf \
    OTEL_EXPORTER_OTLP_ENDPOINT=ingest.<region>.signoz.cloud:443 \
    OTEL_EXPORTER_OTLP_HEADERS=signoz-ingestion-key=<your-ingestion-key> \
    OTEL_PROPAGATORS=baggage,tracecontext \
    php -S localhost:8080 -t public public/index.php
```

### Replace:

* `<service_name>` → name of your service
* `<region>` → your SigNoz Cloud region (example: `us`, `in`)
* `<your-ingestion-key>` → your SigNoz ingestion key
