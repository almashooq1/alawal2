# API Documentation
# توثيق واجهة برمجة التطبيقات

## نظرة عامة / Overview

This document provides detailed information about the Alawal ERP System API endpoints.

هذا المستند يوفر معلومات مفصلة حول نقاط نهاية واجهة برمجة التطبيقات لنظام الأول.

## Authentication / المصادقة

Currently, the API does not require authentication. In production, you should implement proper authentication mechanisms.

حالياً، الواجهة البرمجية لا تتطلب مصادقة. في الإنتاج، يجب تطبيق آليات المصادقة المناسبة.

## Response Format / صيغة الاستجابة

All API responses follow this format:

```json
{
    "success": true,
    "message": "Operation completed successfully",
    "data": { ... }
}
```

## Error Handling / معالجة الأخطاء

Error responses:

```json
{
    "success": false,
    "message": "Error description",
    "errors": { ... }
}
```

## Endpoints Details / تفاصيل النقاط النهائية

### Students Module / وحدة الطلاب

#### Create Student / إنشاء طالب
```
POST /api/students
```

Request Body:
```json
{
    "first_name": "أحمد",
    "last_name": "محمد",
    "date_of_birth": "2015-05-20",
    "gender": "male",
    "disability_type": "autism",
    "guardian_name": "محمد أحمد",
    "guardian_phone": "+966501234567",
    "guardian_email": "guardian@example.com",
    "address": "الرياض، المملكة العربية السعودية",
    "enrollment_date": "2024-01-15",
    "medical_notes": "ملاحظات طبية"
}
```

### Sessions Module / وحدة الجلسات

#### Create Session / إنشاء جلسة
```
POST /api/sessions
```

Request Body:
```json
{
    "student_id": 1,
    "therapist_id": 1,
    "session_type": "physical",
    "session_date": "2024-01-20",
    "start_time": "10:00:00",
    "end_time": "11:00:00",
    "duration_minutes": 60,
    "notes": "جلسة علاج طبيعي"
}
```

### Assessments Module / وحدة التقييمات

#### Create Assessment / إنشاء تقييم
```
POST /api/assessments
```

Request Body:
```json
{
    "student_id": 1,
    "assessor_id": 1,
    "assessment_type": "progress",
    "assessment_date": "2024-01-25",
    "category": "physical",
    "score": 85,
    "max_score": 100,
    "performance_level": "meeting",
    "strengths": "تحسن ملحوظ في الحركة",
    "areas_for_improvement": "يحتاج لمزيد من التدريب",
    "recommendations": "الاستمرار في الجلسات",
    "goals": "تحسين التوازن"
}
```

### Employees Module / وحدة الموظفين

#### Create Employee / إنشاء موظف
```
POST /api/employees
```

Request Body:
```json
{
    "employee_number": "EMP001",
    "first_name": "فاطمة",
    "last_name": "علي",
    "email": "fatima.ali@example.com",
    "phone": "+966501234567",
    "hire_date": "2024-01-01",
    "position": "Physical Therapist",
    "department": "therapy",
    "specialization": "Pediatric Therapy",
    "qualification": "Bachelor in Physical Therapy",
    "salary": 8000.00
}
```

### Financial Module / وحدة المالية

#### Create Transaction / إنشاء معاملة مالية
```
POST /api/financial/transactions
```

Request Body:
```json
{
    "transaction_number": "TXN001",
    "transaction_type": "income",
    "category": "Therapy Fees",
    "amount": 500.00,
    "transaction_date": "2024-01-20",
    "payment_method": "cash",
    "reference_type": "student",
    "reference_id": 1,
    "description": "رسوم جلسة علاج طبيعي"
}
```

## Data Types / أنواع البيانات

### Enums / القيم المحددة

#### Gender / الجنس
- `male` - ذكر
- `female` - أنثى

#### Student Status / حالة الطالب
- `active` - نشط
- `inactive` - غير نشط
- `graduated` - متخرج

#### Session Type / نوع الجلسة
- `physical` - علاج طبيعي
- `occupational` - علاج وظيفي
- `speech` - علاج نطق
- `behavioral` - علاج سلوكي
- `educational` - تعليمي

#### Session Status / حالة الجلسة
- `scheduled` - مجدولة
- `completed` - مكتملة
- `cancelled` - ملغاة
- `no_show` - لم يحضر

#### Assessment Type / نوع التقييم
- `initial` - أولي
- `progress` - تقدم
- `final` - نهائي
- `periodic` - دوري

#### Performance Level / مستوى الأداء
- `below_expectation` - أقل من المتوقع
- `approaching` - يقترب من المتوقع
- `meeting` - يحقق المتوقع
- `exceeding` - يتجاوز المتوقع

#### Department / القسم
- `therapy` - علاج
- `education` - تعليم
- `administration` - إدارة
- `finance` - مالية
- `support` - دعم

#### Transaction Type / نوع المعاملة
- `income` - إيرادات
- `expense` - مصروفات

#### Payment Method / طريقة الدفع
- `cash` - نقداً
- `bank_transfer` - تحويل بنكي
- `credit_card` - بطاقة ائتمان
- `check` - شيك
