@echo off
setlocal
where php >nul 2>nul || (echo PHP was not found in PATH.& pause & exit /b 1)
where composer >nul 2>nul || (echo Composer was not found in PATH.& pause & exit /b 1)
if not exist .env copy .env.example .env
call composer install
if errorlevel 1 (echo Composer install failed.& pause & exit /b 1)
php artisan key:generate
if errorlevel 1 (echo Key generation failed.& pause & exit /b 1)
echo.
echo Setup complete. Run: php artisan serve
pause
