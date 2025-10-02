# دليل التثبيت / Installation Guide

## المتطلبات / Prerequisites

قبل البدء في تثبيت النظام، تأكد من توفر المتطلبات التالية:

Before starting the installation, ensure you have the following requirements:

- PHP >= 7.4 or PHP 8.x
- MySQL >= 5.7 or MariaDB >= 10.2
- Composer (for dependency management)
- Web Server (Apache or Nginx) - اختياري للتطوير / optional for development

## التثبيت / Installation

### الخطوة 1: استنساخ المستودع / Step 1: Clone Repository

```bash
git clone https://github.com/almashooq1/alawal2.git
cd alawal2
```

### الخطوة 2: تثبيت التبعيات / Step 2: Install Dependencies

```bash
composer install
```

### الخطوة 3: إعداد البيئة / Step 3: Configure Environment

انسخ ملف البيئة النموذجي وقم بتحريره:
Copy the example environment file and edit it:

```bash
cp .env.example .env
```

قم بتحرير ملف `.env` وأدخل بيانات قاعدة البيانات الخاصة بك:
Edit the `.env` file and enter your database credentials:

```env
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=alawal2_erp
DB_USERNAME=root
DB_PASSWORD=your_password_here
```

### الخطوة 4: إنشاء قاعدة البيانات / Step 4: Create Database

قم بإنشاء قاعدة البيانات باستخدام MySQL:
Create the database using MySQL:

```bash
mysql -u root -p -e "CREATE DATABASE alawal2_erp CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
```

أو يمكنك استخدام أي أداة إدارة قواعد بيانات مثل phpMyAdmin.

### الخطوة 5: تشغيل الترحيلات / Step 5: Run Migrations

قم بتشغيل الترحيلات لإنشاء الجداول:
Run migrations to create the tables:

```bash
php database/migrate.php
```

### الخطوة 6: التحقق من التثبيت / Step 6: Verify Installation

اختبر التثبيت بتشغيل الاختبارات:
Test the installation by running the tests:

```bash
php tests/test.php
```

يجب أن ترى: `All Tests Passed!`

## تشغيل النظام / Running the System

### خادم التطوير المدمج / Built-in Development Server

لتشغيل خادم PHP المدمج:
To run PHP's built-in server:

```bash
cd public
php -S localhost:8000
```

ثم افتح المتصفح على: / Then open your browser at:
```
http://localhost:8000
```

### Apache

إذا كنت تستخدم Apache، قم بتوجيه document root إلى مجلد `public`:
If using Apache, point the document root to the `public` folder:

```apache
<VirtualHost *:80>
    ServerName alawal2.local
    DocumentRoot /path/to/alawal2/public
    
    <Directory /path/to/alawal2/public>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

### Nginx

إعداد Nginx النموذجي:
Sample Nginx configuration:

```nginx
server {
    listen 80;
    server_name alawal2.local;
    root /path/to/alawal2/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

## اختبار API / Testing the API

بعد تشغيل الخادم، يمكنك اختبار API باستخدام curl:
After starting the server, test the API using curl:

```bash
# اختبار الصفحة الرئيسية / Test homepage
curl http://localhost:8000/

# اختبار نقطة نهاية الطلاب / Test students endpoint
curl http://localhost:8000/api/students
```

## استكشاف الأخطاء / Troubleshooting

### خطأ: لا يمكن الاتصال بقاعدة البيانات
### Error: Cannot connect to database

تأكد من:
- صحة بيانات الاعتماد في ملف `.env`
- تشغيل خادم MySQL
- وجود قاعدة البيانات

Check:
- Credentials in `.env` file are correct
- MySQL server is running
- Database exists

### خطأ: Composer not found

قم بتثبيت Composer من:
Install Composer from:
```
https://getcomposer.org/download/
```

### خطأ: PHP version

تأكد من أن إصدار PHP هو 7.4 أو أحدث:
Ensure PHP version is 7.4 or newer:

```bash
php -v
```

## البيانات التجريبية / Sample Data

لإضافة بيانات تجريبية للاختبار، يمكنك استخدام:
To add sample data for testing, you can use:

```sql
-- مثال لإضافة طالب / Example to add a student
INSERT INTO students (first_name, last_name, date_of_birth, gender, enrollment_date) 
VALUES ('أحمد', 'محمد', '2015-05-20', 'male', '2024-01-15');

-- مثال لإضافة موظف / Example to add an employee
INSERT INTO employees (employee_number, first_name, last_name, email, hire_date, position, department) 
VALUES ('EMP001', 'فاطمة', 'علي', 'fatima@example.com', '2024-01-01', 'Physical Therapist', 'therapy');
```

## الدعم / Support

إذا واجهت أي مشاكل، يرجى:
- فتح issue في GitHub
- مراجعة الوثائق في مجلد `docs/`
- التواصل مع فريق الدعم

If you encounter any issues, please:
- Open an issue on GitHub
- Review documentation in `docs/` folder
- Contact support team
