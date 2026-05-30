# HALIL CELL – Employee Attendance System

A modern web-based employee attendance system for **HALIL CELL** mobile phone store.  
Built with PHP, MySQL, Bootstrap 5, and vanilla JavaScript.

---

## ✨ Features

### Employee Features
- 🔐 Login & Registration
- 📸 Photo attendance upload with live preview
- 🌍 GPS location detection (browser geolocation + OpenStreetMap)
- ⏰ Auto date/time recording
- 📅 Attendance history with pagination
- 🗓️ Leave/holiday request + status tracking
- 📊 Monthly attendance report with progress charts

### Admin Features
- 📊 Real-time dashboard (total employees, today's attendance, pending leave, monthly stats)
- 👥 Employee management (view, edit, delete)
- 📋 All attendance records with employee/date filters
- ✅ Leave request approval/rejection
- 📈 Monthly reports with attendance percentage + drill-down

---

## 🛠️ Tech Stack

| Layer    | Technology            |
|----------|-----------------------|
| Frontend | HTML5, CSS3, Bootstrap 5.3, JavaScript (ES6) |
| Backend  | PHP 8.1+ (Native PHP) |
| Database | MySQL 5.7+ / MariaDB  |
| Icons    | Bootstrap Icons 1.11  |
| Fonts    | Google Fonts – Inter  |

---

## 📁 Project Structure

```
absenn/
├── assets/
│   ├── css/style.css           # Global styles
│   └── js/script.js            # JavaScript
├── auth/
│   ├── login.php               # Login page
│   ├── register.php            # Employee registration
│   └── logout.php              # Session logout
├── admin/
│   ├── dashboard.php           # Admin dashboard
│   ├── employees.php           # Employee management
│   ├── attendance.php          # All attendance records
│   ├── leave_requests.php      # Leave approval
│   └── reports.php             # Attendance reports
├── user/
│   ├── dashboard.php           # Employee dashboard
│   ├── attendance.php          # Submit attendance
│   ├── history.php             # Attendance history
│   ├── leave.php               # Leave requests
│   └── reports.php             # Monthly reports
├── config/
│   ├── database.php            # DB connection + helpers
│   └── layout.php              # Shared layout helpers
├── database/
│   └── absensi_halilcell.sql   # Database schema + dummy data
├── uploads/
│   └── attendance/             # Attendance photos
└── index.php                   # Root redirect
```

---

## ⚙️ Installation Guide

### Requirements
- XAMPP / Laragon / Wampserver (PHP 8.0+, MySQL 5.7+)
- Web browser (Chrome, Firefox, Edge)

### Step 1 – Import Database
1. Open **phpMyAdmin** → `http://localhost/phpmyadmin`
2. Click **New** → create database `absensi_halilcell`
3. Click **Import** → select `database/absensi_halilcell.sql`
4. Click **Go**

### Step 2 – Configure Project
Open `config/database.php` and update if needed:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');         // Your MySQL password
define('DB_NAME', 'absensi_halilcell');
define('BASE_URL', 'http://localhost/absenn');
```

### Step 3 – Place Project Files
- **XAMPP**: Copy project folder to `C:/xampp/htdocs/absenn/`
- **Laragon**: Copy to `C:/laragon/www/absenn/`

### Step 4 – Set Upload Folder Permissions
The `uploads/attendance/` folder must be writable.  
On Windows with XAMPP/Laragon, this is usually automatic.

### Step 5 – Run the System
Open your browser and go to:
```
http://localhost/absenn
```

---

## 🔑 Demo Accounts

All demo accounts use password: **`password`**

| Role     | Email                    | Password  |
|----------|--------------------------|-----------|
| Admin    | admin@halilcell.com      | password  |
| Employee | budi@halilcell.com       | password  |
| Employee | siti@halilcell.com       | password  |
| Employee | ahmad@halilcell.com      | password  |
| Employee | dewi@halilcell.com       | password  |

---

## 📌 Important Notes

- Attendance can only be submitted **once per day** per employee.
- Leave requests cannot have duplicate dates for the same employee.
- Photos are stored in `uploads/attendance/` on the server.
- Location is detected via browser GPS + OpenStreetMap Nominatim API.
- All passwords are hashed using PHP `password_hash()` (bcrypt).

---

## 📄 License

This project is created for **HALIL CELL** internal use.

---

*Built with ❤️ for HALIL CELL – Sistem Absensi Karyawan Digital*
