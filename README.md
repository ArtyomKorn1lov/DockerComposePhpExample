# Docker compose php-apache

## Общий список команд:
1. Первичная сборка приложения:
    - `docker compose build --no-cache`
    - `docker compose up -d --remove-orphans`
2. Остановить контейнеры:
    - `docker compose stop`
3. Запуск контейнеров:
    - `docker compose start`
4. Логи контейнеров:
    - `docker compose ps`
5. Пересобрать приложение:
    - `docker compose stop`
    - `docker compose pull`
    - `docker compose rm --force app`
    - `docker compose build --no-cache`
    - `docker compose up -d --force-recreate`
6. Удалить образы и контейнеры:
    - `docker compose down -v`
    - `docker compose down`