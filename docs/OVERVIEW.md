# نظرة عامة على النظام / System Overview

## هيكل النظام / System Architecture

```
نظام الأول لإدارة مراكز التأهيل
Alawal ERP System for Rehabilitation Centers
│
├── إدارة الطلاب / Student Management
│   ├── التسجيل والقبول / Registration & Admission
│   ├── البيانات الشخصية / Personal Information
│   ├── معلومات ولي الأمر / Guardian Information
│   └── السجل الطبي / Medical Records
│
├── إدارة الجلسات / Session Management
│   ├── الجدولة / Scheduling
│   ├── أنواع الجلسات / Session Types
│   │   ├── علاج طبيعي / Physical Therapy
│   │   ├── علاج وظيفي / Occupational Therapy
│   │   ├── علاج نطق / Speech Therapy
│   │   ├── علاج سلوكي / Behavioral Therapy
│   │   └── تعليمي / Educational
│   ├── تتبع الحضور / Attendance Tracking
│   └── ملاحظات التقدم / Progress Notes
│
├── التقييمات / Assessments
│   ├── أنواع التقييمات / Assessment Types
│   │   ├── أولي / Initial
│   │   ├── تقدم / Progress
│   │   ├── نهائي / Final
│   │   └── دوري / Periodic
│   ├── مجالات التقييم / Assessment Categories
│   │   ├── جسدي / Physical
│   │   ├── معرفي / Cognitive
│   │   ├── اجتماعي / Social
│   │   ├── عاطفي / Emotional
│   │   ├── تواصل / Communication
│   │   └── رعاية ذاتية / Self-care
│   └── التقارير / Reports
│
├── الموارد البشرية / Human Resources
│   ├── إدارة الموظفين / Employee Management
│   ├── الأقسام / Departments
│   │   ├── علاج / Therapy
│   │   ├── تعليم / Education
│   │   ├── إدارة / Administration
│   │   ├── مالية / Finance
│   │   └── دعم / Support
│   ├── المعالجون / Therapists
│   └── السجلات الوظيفية / Employment Records
│
└── الإدارة المالية / Financial Management
    ├── الإيرادات / Income
    │   ├── رسوم الجلسات / Session Fees
    │   ├── رسوم التسجيل / Registration Fees
    │   └── دخل آخر / Other Income
    ├── المصروفات / Expenses
    │   ├── الرواتب / Salaries
    │   ├── المعدات / Equipment
    │   ├── الصيانة / Maintenance
    │   └── مصاريف أخرى / Other Expenses
    └── التقارير المالية / Financial Reports
```

## المكونات الرئيسية / Main Components

### 1. نماذج البيانات / Data Models
- **Student** - نموذج الطالب
- **Session** - نموذج الجلسة
- **Assessment** - نموذج التقييم
- **Employee** - نموذج الموظف
- **FinancialTransaction** - نموذج المعاملة المالية

### 2. المتحكمات / Controllers
- **StudentController** - متحكم الطلاب
- **SessionController** - متحكم الجلسات
- **AssessmentController** - متحكم التقييمات
- **EmployeeController** - متحكم الموظفين
- **FinancialController** - متحكم المالية

### 3. قاعدة البيانات / Database
- **students** - جدول الطلاب
- **sessions** - جدول الجلسات
- **assessments** - جدول التقييمات
- **employees** - جدول الموظفين
- **financial_transactions** - جدول المعاملات المالية

## التدفق العام / General Workflow

### سير عمل الطالب / Student Workflow
```
1. التسجيل / Registration
   ↓
2. التقييم الأولي / Initial Assessment
   ↓
3. وضع خطة العلاج / Treatment Plan
   ↓
4. جدولة الجلسات / Schedule Sessions
   ↓
5. تنفيذ الجلسات / Execute Sessions
   ↓
6. تقييمات دورية / Periodic Assessments
   ↓
7. تحديث خطة العلاج / Update Treatment Plan
   ↓
8. التقييم النهائي / Final Assessment
```

### سير عمل الجلسة / Session Workflow
```
1. جدولة الجلسة / Schedule Session
   ↓
2. تأكيد الحضور / Confirm Attendance
   ↓
3. تنفيذ الجلسة / Execute Session
   ↓
4. تسجيل الملاحظات / Record Notes
   ↓
5. تحديث حالة الجلسة / Update Session Status
```

### سير عمل التقييم / Assessment Workflow
```
1. تحديد نوع التقييم / Determine Assessment Type
   ↓
2. إجراء التقييم / Conduct Assessment
   ↓
3. تسجيل النتائج / Record Results
   ↓
4. تحليل الأداء / Analyze Performance
   ↓
5. وضع التوصيات / Make Recommendations
   ↓
6. تحديد الأهداف / Set Goals
```

## الميزات الرئيسية / Key Features

### إدارة الطلاب / Student Management
✓ تسجيل شامل للبيانات الشخصية
✓ إدارة معلومات أولياء الأمور
✓ تتبع حالة الطالب
✓ السجلات الطبية

### إدارة الجلسات / Session Management
✓ جدولة مرنة
✓ أنواع جلسات متعددة
✓ تتبع الحضور
✓ ملاحظات تقدم مفصلة

### التقييمات / Assessments
✓ تقييمات شاملة
✓ مجالات متعددة
✓ تقارير تقدم
✓ تتبع الأهداف

### الموارد البشرية / Human Resources
✓ إدارة كاملة للموظفين
✓ أقسام متعددة
✓ تتبع المؤهلات
✓ سجلات التوظيف

### الإدارة المالية / Financial Management
✓ تتبع الإيرادات والمصروفات
✓ طرق دفع متعددة
✓ تصنيف المعاملات
✓ تقارير مالية

## الأمن والخصوصية / Security & Privacy

- جميع البيانات مخزنة بشكل آمن في قاعدة البيانات
- استخدام ترميز UTF-8 لدعم اللغة العربية
- حقول timestamp تلقائية لتتبع التغييرات
- علاقات قاعدة البيانات محمية بقيود المفاتيح الأجنبية

## التوسع المستقبلي / Future Enhancements

### المرحلة القادمة / Next Phase
- [ ] نظام المصادقة والتفويض
- [ ] لوحة تحكم تفاعلية
- [ ] تقارير متقدمة مع رسوم بيانية
- [ ] إشعارات آلية للمواعيد
- [ ] نظام رسائل بين المعالجين وأولياء الأمور
- [ ] تطبيق موبايل
- [ ] نظام إدارة المخزون للمعدات
- [ ] نظام الفواتير والمدفوعات الإلكترونية

### ميزات متقدمة / Advanced Features
- [ ] تحليلات ذكاء اصطناعي للتقدم
- [ ] توصيات علاجية مدعومة بالذكاء الاصطناعي
- [ ] تكامل مع الأنظمة الطبية
- [ ] نظام إدارة الحالات المعقدة
- [ ] تقارير إحصائية شاملة
