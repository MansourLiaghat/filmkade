# 🎬 فیلمکده – پلتفرم پیشرفته اشتراک‌گذاری فیلم با Laravel

[![Build Status](https://img.shields.io/badge/build-passing-brightgreen)](https://github.com/MansourLiaghat/filmkade)  
[![License](https://img.shields.io/badge/license-MIT-blue)](LICENSE)  
[![Version](https://img.shields.io/badge/version-1.0.0-blue)](https://github.com/MansourLiaghat/filmkade/releases)

> 📌 **توجه:**  
> این پروژه در حال حاضر در مرحله توسعه فعال قرار دارد و نسخه نهایی هنوز منتشر نشده است.

فیلمکده یک پروژه‌ی متن‌باز قدرتمند در حوزه اشتراک‌گذاری ویدئو است که با استفاده از فریم‌ورک محبوب **Laravel** طراحی و پیاده‌سازی شده است. این پلتفرم امکانات متنوعی همچون بارگذاری فیلم، تعامل کاربران، نظردهی، فیلتر و مرتب‌سازی محتوا و سیستم لایک را در اختیار کاربران قرار می‌دهد.

## 📚 فهرست مطالب

- [ویژگی‌ها](#-ویژگیها)
- [پیش‌نیازها](#-پیشنیازها)
- [نصب و راه‌اندازی](#-نصب-و-راهاندازی)
- [نحوه استفاده](#-نحوه-استفاده)
- [ساختار پروژه](#-ساختار-پروژه)
- [ملاحظات امنیتی](#-ملاحظات-امنیتی)
- [مجوز](#-مجوز)
- [اطلاعات تماس](#-اطلاعات-تماس)
- [تشکر و قدردانی](#-تشکر-و-قدردانی)

## ✨ ویژگی‌ها

- بارگذاری ویدئو توسط کاربران  
- مشاهده‌ی لیست ویدیوها  
- سیستم احراز هویت کاربران  
- طراحی واکنش‌گرا با Tailwind CSS  
- ساختار ماژولار و قابل توسعه  
- امکان ثبت نظر زیر هر ویدئو  
- امکان فیلتر کردن ویدئوها بر اساس دسته‌بندی  
- سیستم لایک و تعامل کاربران با محتوا  

## ⚙️ پیش‌نیازها

- PHP نسخه 8.0 یا بالاتر  
- Composer  
- MySQL یا PostgreSQL  
- Node.js و NPM  
- Laravel نسخه 9 یا بالاتر

## 🚀 نصب و راه‌اندازی

```bash
git clone https://github.com/MansourLiaghat/filmkade.git
cd filmkade

composer install

cp .env.example .env
php artisan key:generate

# تنظیم دیتابیس در فایل .env

php artisan migrate

npm install
npm run dev

php artisan serve
```

## 🧪 نحوه استفاده

- ثبت‌نام و ورود کاربران  
- بارگذاری ویدیو  
- مشاهده ویدیوها  
- تعامل با محتوا از طریق نظرات و لایک  
- فیلتر کردن ویدیوها بر اساس دسته  

## 📁 ساختار پروژه

```
filmkade/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── .env.example
├── artisan
├── composer.json
├── package.json
└── README.md
```

## 🔐 ملاحظات امنیتی

- اعتبارسنجی فرم‌ها و داده‌های ورودی  
- جلوگیری از حملات XSS و SQL Injection  
- محدود کردن نوع فایل‌های بارگذاری‌شده  
- استفاده از احراز هویت Laravel برای امنیت صفحات  

## 📄 مجوز

پروژه تحت مجوز متن‌باز **MIT** منتشر شده است.

## 📬 اطلاعات تماس

- GitHub: [MansourLiaghat](https://github.com/MansourLiaghat)

## 🙏 تشکر و قدردانی

از استاد گرامی، **مهندس مهرداد سامی** [@MSaami](https://github.com/MSaami)  
به‌خاطر راهنمایی‌ها و حمایت‌های علمی‌شان در مسیر توسعه این پروژه، صمیمانه سپاسگزارم.
