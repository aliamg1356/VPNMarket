<p align="center">
  <a href="https://github.com/arvinvahed/VPNMarket">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<h1 align="center">VPNMarket - مدیریت حرفه‌ای کاربران VPN</h1>

<p align="center">
یک راه‌حل قدرتمند و متن-باز برای مدیریت کاربران و اشتراک‌های VPN، ساخته شده با عشق بر پایه فریم‌ورک لاراول و پنل ادمین فوق‌العاده زیبای فیلامنت.
</p>

<p align="center">
<a href="https://github.com/arvinvahed/VPNMarket/actions"><img src="https://github.com/arvinvahed/VPNMarket/workflows/CI/badge.svg" alt="Build Status"></a>
<a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/license-MIT-blue.svg" alt="License"></a>
</p>

---

## ✨ درباره پروژه VPNMarket

**VPNMarket** یک ابزار حرفه‌ای برای مدیریت کاربران و اشتراک‌های VPN است.  
این پروژه با هدف **سادگی، قدرت و زیبایی** طراحی شده و فرآیند مدیریت کاربران و سرویس‌های VPN را از یک کار پیچیده به یک تجربه لذت‌بخش تبدیل می‌کند.  

با VPNMarket می‌توانید:
- کاربران خود را به راحتی ایجاد، ویرایش یا حذف کنید.
- حجم و تاریخ انقضای اشتراک‌ها را مدیریت کنید.
- از داشبورد هوشمند برای مشاهده آمار کلی سرورها و کاربران استفاده کنید.
- یک پنل مدیریت مدرن، زیبا و واکنش‌گرا داشته باشید.

### تکنولوژی‌های استفاده شده
- **فریم‌ورک اصلی:** [Laravel 12](https://laravel.com)
- **پنل مدیریت:** [Filament 3](https://filamentphp.com)
- **زبان برنامه‌نویسی:** PHP 8.2+
- **وب سرور:** Nginx
- **پایگاه داده:** MySQL

---

## 🚀 ویژگی‌های کلیدی

- **مدیریت کامل کاربران:** ایجاد، ویرایش، حذف و مشاهده کاربران.
- **مدیریت اشتراک‌ها:** تخصیص حجم و تاریخ انقضا برای هر کاربر.
- **داشبورد هوشمند:** مشاهده آمار کلی سرور و کاربران در یک نگاه.
- **رابط کاربری مدرن:** پنل مدیریت زیبا و واکنش‌گرا با فیلامنت.
- **نصب جادویی:** راه‌اندازی کامل پروژه روی سرور فقط با یک دستور.
- **مقیاس‌پذیری بالا:** توسعه یافته بر پایه لاراول برای پشتیبانی از تعداد بالای کاربران.
- **امنیت بالا:** تنظیمات استاندارد امنیتی لاراول و Nginx برای حفاظت از داده‌ها.

---

## ⚙️ نصب آسان (فقط با یک دستور!)

### پیش‌نیازها
1. یک سرور تمیز با سیستم‌عامل **Ubuntu 22.04**.
2. یک دامنه یا زیردامنه که به IP سرور شما متصل شده باشد.
3. دسترسی به سرور از طریق SSH با کاربر `root` یا کاربری که دسترسی `sudo` دارد.

### دستور نصب
از طریق SSH به سرور متصل شوید و دستور زیر را اجرا کنید:

```bash
wget -O install.sh https://raw.githubusercontent.com/arvinvahed/VPNMarket/main/install.sh && sudo bash install.sh
