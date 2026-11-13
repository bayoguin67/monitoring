# Monitoring — Student Project Monitoring System

React/Vite frontend + PHP 8/MySQL backend for XAMPP. Root folder must be named `monitoring`.

## Setup
1. Extract `monitoring` into `C:\xampp\htdocs\monitoring` (Windows) or your Apache `htdocs` directory.
2. Start **Apache** and **MySQL** in XAMPP.
3. Open `http://localhost/phpmyadmin`, import `database/student_project_monitoring.sql`.
4. Edit `backend/config.php` if your MySQL credentials differ from root / empty password.
5. In a terminal, run `php backend/seed.php` from the `monitoring` directory to create demo users (use the XAMPP PHP executable if PHP is not on PATH).
6. Run `cd frontend`, then `npm install`, then `npm run dev`.
7. Visit `http://localhost:5173`. React proxies `/api` to `http://localhost/monitoring/backend`.

## Demo accounts (development only)
- admin / admin123
- teacher / teacher123
- student / student123

## Landing page
The public home page at `/` introduces the platform, shows features and workflow, and includes a login button. The demo dashboard on the landing page is illustrative, not live data.

## Features
- Admin creates teacher and student accounts and enables/disables accounts.
- Admin/teacher creates projects and assigns students. There is no seven-student limit; the seven developers are the team building the software, not a feature of the app.
- Teachers update status and progress and provide feedback; students upload documents.
- Students see project status, feedback, files, assigned students and activity; dashboard refreshes every 15 seconds.
- Notification inbox, activity logs in database, role-based authorization, PDO prepared statements, CSRF protection, hashed passwords.

## Limitations / next steps
This is a functional **local development starter**, not a production-certified deployment. It has not been tested against a live XAMPP/MySQL instance here. Change demo passwords and implement password-reset workflows, additional reports, login rate limiting, enhanced upload MIME inspection, full edit/delete interfaces, accessible keyboard testing and comprehensive integration tests before production use. For Apache deployment, ensure `.htaccess` is enabled and mod_rewrite is available. The backend can also be tested with `php -S localhost:8000 -t backend backend/router.php` if you adjust Vite proxy target accordingly.
