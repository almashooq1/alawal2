# دليل البدء السريع / Quick Start Guide

## نبذة مختصرة / Brief Overview

نظام الأول هو نظام ERP شامل لإدارة مراكز تأهيل ذوي الإعاقة.

Alawal is a comprehensive ERP system for managing disability rehabilitation centers.

## البدء السريع / Quick Start

### 1. التثبيت السريع / Quick Installation

```bash
# Clone repository
git clone https://github.com/almashooq1/alawal2.git
cd alawal2

# Install dependencies
composer install

# Configure environment
cp .env.example .env
# Edit .env with your database credentials

# Create database and run migrations
mysql -u root -p -e "CREATE DATABASE alawal2_erp CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
php database/migrate.php

# Run tests
php tests/test.php

# Start development server
cd public && php -S localhost:8000
```

### 2. الوصول إلى النظام / Access the System

افتح المتصفح على: / Open browser at:
```
http://localhost:8000
```

## الوحدات الرئيسية / Main Modules

### 1️⃣ إدارة الطلاب / Student Management
```
POST /api/students - إنشاء طالب جديد / Create new student
GET  /api/students - عرض جميع الطلاب / List all students
GET  /api/students/:id - عرض طالب محدد / Get specific student
```

### 2️⃣ إدارة الجلسات / Session Management
```
POST /api/sessions - إنشاء جلسة جديدة / Create new session
GET  /api/sessions/student/:id - جلسات الطالب / Student's sessions
GET  /api/sessions/therapist/:id - جلسات المعالج / Therapist's sessions
```

### 3️⃣ التقييمات / Assessments
```
POST /api/assessments - إنشاء تقييم / Create assessment
GET  /api/assessments/student/:id - تقييمات الطالب / Student's assessments
GET  /api/assessments/progress/:id - تقرير التقدم / Progress report
```

### 4️⃣ الموارد البشرية / Human Resources
```
POST /api/employees - إضافة موظف / Add employee
GET  /api/employees/department/:dept - موظفو القسم / Department employees
GET  /api/employees/therapists - المعالجون / Therapists
```

### 5️⃣ المالية / Financial
```
POST /api/financial/transactions - إضافة معاملة / Add transaction
GET  /api/financial/summary - الملخص المالي / Financial summary
GET  /api/financial/transactions/type/:type - حسب النوع / By type
```

## مثال عملي / Practical Example

### إضافة طالب جديد / Adding a New Student

```bash
curl -X POST http://localhost:8000/api/students \
  -H "Content-Type: application/json" \
  -d '{
    "first_name": "أحمد",
    "last_name": "محمد",
    "date_of_birth": "2015-05-20",
    "gender": "male",
    "disability_type": "autism",
    "guardian_name": "محمد أحمد",
    "guardian_phone": "+966501234567",
    "enrollment_date": "2024-01-15"
  }'
```

### جدولة جلسة / Scheduling a Session

```bash
curl -X POST http://localhost:8000/api/sessions \
  -H "Content-Type: application/json" \
  -d '{
    "student_id": 1,
    "therapist_id": 1,
    "session_type": "physical",
    "session_date": "2024-01-20",
    "start_time": "10:00:00",
    "end_time": "11:00:00",
    "duration_minutes": 60
  }'
```

### إضافة تقييم / Adding an Assessment

```bash
curl -X POST http://localhost:8000/api/assessments \
  -H "Content-Type: application/json" \
  -d '{
    "student_id": 1,
    "assessor_id": 1,
    "assessment_type": "progress",
    "assessment_date": "2024-01-25",
    "category": "physical",
    "score": 85,
    "max_score": 100,
    "performance_level": "meeting"
  }'
```

## هيكل المشروع / Project Structure

```
alawal2/
├── app/                    # تطبيق / Application code
│   ├── Controllers/        # متحكمات / Controllers
│   └── Models/            # نماذج / Models
├── config/                # إعدادات / Configuration
├── database/              # قاعدة البيانات / Database
│   ├── migrate.php        # تشغيل الترحيلات / Migration runner
│   └── migrations/        # ملفات الترحيل / Migration files
├── docs/                  # توثيق / Documentation
├── public/                # مجلد عام / Public folder
├── routes/                # المسارات / Routes
└── tests/                 # اختبارات / Tests
```

## الخطوات التالية / Next Steps

1. **قراءة التوثيق الكامل / Read Full Documentation**
   - [README.md](../README.md) - نظرة عامة / Overview
   - [docs/INSTALLATION.md](INSTALLATION.md) - دليل التثبيت / Installation guide
   - [docs/API.md](API.md) - توثيق API / API documentation
   - [docs/OVERVIEW.md](OVERVIEW.md) - نظرة شاملة / System overview

2. **تخصيص النظام / Customize the System**
   - تعديل ملفات الإعدادات في `config/`
   - إضافة وحدات جديدة حسب الحاجة

3. **التطوير / Development**
   - إضافة ميزات جديدة
   - تحسين الواجهة
   - إضافة المصادقة والتفويض

4. **النشر / Deployment**
   - إعداد خادم الإنتاج
   - تأمين النظام
   - إعداد النسخ الاحتياطية

## الدعم / Support

- 📧 فتح issue على GitHub / Open an issue on GitHub
- 📚 مراجعة التوثيق / Review documentation
- 🤝 المساهمة في المشروع / Contribute to the project

## الترخيص / License

MIT License - انظر ملف [LICENSE](../LICENSE)

---

🌟 شكراً لاستخدامك نظام الأول! / Thank you for using Alawal System!
