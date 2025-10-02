# نظام الأول لإدارة مراكز التأهيل
# Alawal ERP System

نظام ERP شامل لإدارة مراكز تأهيل ذوي الإعاقة، يشمل إدارة الطلاب، الجلسات، التقييمات، الموارد البشرية، والمالية

Comprehensive ERP system for managing disability rehabilitation centers, including student management, sessions, assessments, human resources, and financial management.

## الميزات الرئيسية / Main Features

### 1. إدارة الطلاب / Student Management
- تسجيل الطلاب وإدارة بياناتهم
- متابعة حالة الطلاب (نشط، غير نشط، متخرج)
- حفظ البيانات الطبية والملاحظات
- معلومات أولياء الأمور

### 2. إدارة الجلسات / Session Management
- جدولة الجلسات العلاجية
- أنواع متعددة من الجلسات (علاج طبيعي، وظيفي، نطق، سلوكي، تعليمي)
- تتبع الحضور والغياب
- تسجيل ملاحظات التقدم

### 3. التقييمات / Assessments
- تقييمات متعددة الأنواع (أولي، تقدم، نهائي، دوري)
- فئات متنوعة (جسدي، معرفي، اجتماعي، عاطفي، تواصل، رعاية ذاتية)
- تتبع مستوى الأداء
- توثيق نقاط القوة ومجالات التحسين
- التوصيات والأهداف

### 4. الموارد البشرية / Human Resources
- إدارة الموظفين والمعالجين
- الأقسام المختلفة (علاج، تعليم، إدارة، مالية، دعم)
- التخصصات والمؤهلات
- حالة التوظيف
- معلومات الاتصال في حالات الطوارئ

### 5. الإدارة المالية / Financial Management
- إدارة الإيرادات والمصروفات
- طرق الدفع المتعددة
- فئات المعاملات
- ربط المعاملات بالطلاب أو الموظفين
- تقارير مالية شاملة

## التثبيت / Installation

### المتطلبات / Requirements
- PHP >= 7.4
- MySQL >= 5.7
- Composer

### خطوات التثبيت / Installation Steps

1. استنساخ المستودع / Clone the repository:
```bash
git clone https://github.com/almashooq1/alawal2.git
cd alawal2
```

2. تثبيت التبعيات / Install dependencies:
```bash
composer install
```

3. إنشاء قاعدة البيانات / Create database:
```bash
mysql -u root -p -e "CREATE DATABASE alawal2_erp CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
```

4. تشغيل الترحيلات / Run migrations:
```bash
php database/migrate.php
```

5. تكوين البيئة / Configure environment:
```bash
cp .env.example .env
# Edit .env file with your database credentials
```

## الهيكل / Structure

```
alawal2/
├── app/
│   ├── Controllers/        # متحكمات التطبيق
│   │   ├── StudentController.php
│   │   ├── SessionController.php
│   │   ├── AssessmentController.php
│   │   ├── EmployeeController.php
│   │   └── FinancialController.php
│   └── Models/            # نماذج البيانات
│       ├── Student.php
│       ├── Session.php
│       ├── Assessment.php
│       ├── Employee.php
│       └── FinancialTransaction.php
├── config/                # ملفات الإعدادات
│   ├── app.php
│   └── database.php
├── database/
│   └── migrations/        # ترحيلات قاعدة البيانات
├── public/                # المجلد العام
│   └── index.php
└── routes/                # مسارات API
    └── api.php
```

## واجهة برمجة التطبيقات / API Endpoints

### Students - الطلاب
- `GET /api/students` - Get all students
- `GET /api/students/:id` - Get single student
- `POST /api/students` - Create new student
- `PUT /api/students/:id` - Update student
- `DELETE /api/students/:id` - Delete student
- `GET /api/students/status/:status` - Get students by status

### Sessions - الجلسات
- `GET /api/sessions` - Get all sessions
- `GET /api/sessions/student/:studentId` - Get student sessions
- `GET /api/sessions/therapist/:therapistId` - Get therapist sessions
- `POST /api/sessions` - Create new session
- `PUT /api/sessions/:id/status` - Update session status

### Assessments - التقييمات
- `GET /api/assessments` - Get all assessments
- `GET /api/assessments/student/:studentId` - Get student assessments
- `POST /api/assessments` - Create new assessment
- `GET /api/assessments/type/:type` - Get assessments by type
- `GET /api/assessments/progress/:studentId` - Get student progress report

### Employees - الموظفين
- `GET /api/employees` - Get all employees
- `GET /api/employees/department/:department` - Get employees by department
- `POST /api/employees` - Create new employee
- `PUT /api/employees/:id/status` - Update employee status
- `GET /api/employees/therapists` - Get all therapists

### Financial - المالية
- `GET /api/financial/transactions` - Get all transactions
- `GET /api/financial/transactions/type/:type` - Get transactions by type
- `POST /api/financial/transactions` - Create new transaction
- `GET /api/financial/summary` - Get financial summary
- `GET /api/financial/transactions/date-range` - Get transactions by date range
- `GET /api/financial/transactions/category/:category` - Get transactions by category

## قاعدة البيانات / Database Schema

### Tables - الجداول

#### students - جدول الطلاب
Contains student information including personal details, disability type, guardian information, and medical notes.

#### sessions - جدول الجلسات
Manages therapy and educational sessions including type, schedule, attendance, and progress notes.

#### assessments - جدول التقييمات
Tracks student assessments across various categories with scores, performance levels, and recommendations.

#### employees - جدول الموظفين
Employee records including therapists, administrators, and support staff with their qualifications and contact information.

#### financial_transactions - جدول المعاملات المالية
Financial records for income and expenses with categories, payment methods, and status tracking.

## المساهمة / Contributing

نرحب بالمساهمات! يرجى فتح issue أو pull request.

Contributions are welcome! Please open an issue or pull request.

## الترخيص / License

MIT License

## الدعم / Support

للدعم والاستفسارات، يرجى فتح issue في المستودع.

For support and inquiries, please open an issue in the repository.
