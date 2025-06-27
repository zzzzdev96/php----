# استخدم صورة PHP-FPM base
FROM php:8.2-fpm-alpine

# قم بتثبيت Nginx (خادم الويب)
RUN apk add --no-cache nginx

# انسخ ملفات التطبيق إلى مجلد Nginx الافتراضي
COPY . /var/www/html

# قم بإنشاء ملف إعدادات Nginx
COPY nginx.conf /etc/nginx/conf.d/default.conf

# تعرض المنفذ 80 (الذي سيستمع إليه Nginx)
EXPOSE 80

# ابدأ تشغيل PHP-FPM و Nginx
CMD php-fpm && nginx -g "daemon off;"