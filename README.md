# SigNoz Laravel Sample App

Step 1. Clone the repository

```
git clone https://github.com/UnCool-0x/signoz-laravel-sample-app
```

Step 2. Run the app

```
composer install
env OTEL_PHP_AUTOLOAD_ENABLED=true \
    OTEL_SERVICE_NAME=<service_name> \
    OTEL_TRACES_EXPORTER=otlp \
    OTEL_EXPORTER_OTLP_PROTOCOL=http/protobuf \
    OTEL_EXPORTER_OTLP_ENDPOINT=ingest.<region>.signoz.cloud:443 \
    OTEL_EXPORTER_OTLP_HEADERS=signoz-ingestion-key=<your-ingestion-key> \
    OTEL_PROPAGATORS=baggage,tracecontext \
    php -S localhost:8080 -t public public/index.php

```
