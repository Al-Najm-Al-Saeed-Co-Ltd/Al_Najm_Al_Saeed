@echo off
echo Starting development servers...
echo.

REM Start npm run dev in a new window
start "Vite Dev Server" cmd /k "npm run dev"

REM Wait a moment for the first server to start
timeout /t 2 /nobreak >nul

REM Start php artisan serve in a new window
start "Laravel Server" cmd /k "php artisan serve"

echo.
echo Both development servers are starting...
echo - Vite dev server will be available at http://localhost:5173
echo - Laravel server will be available at http://localhost:8000
echo.
echo Press any key to exit this window...
pause >nul
