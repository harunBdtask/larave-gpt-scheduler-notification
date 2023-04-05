# larave-gpt-scheduler-notification

### Installation
```
OPENAI_API_KEY="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"
OPENAI_ORGANIZATION=

composer install / composer update
php artisan key:generate

php artisan make:command MyCommand
php artisan schedule:work
php artisan schedule:run

php artisan notifications:table
php artisan migrate
php artisan make:notification TestNotification

php artisan config:cache
php artisan config:clear

php artisan serve


```