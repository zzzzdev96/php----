# استخدم صورة PHP-FPM الرسمية (الفرع 8.2 هو الأحدث نسبياً ومناسب)
FROM php:8.2-fpm

# تعيين دليل العمل داخل الحاوية. هذا هو المكان الذي ستوضع فيه ملفات تطبيقك.
WORKDIR /var/www/html

# تثبيت التبعيات على مستوى نظام التشغيل (Debian/Ubuntu) الضرورية لملحقات PHP.
# apt-get update لتحديث قائمة الحزم المتاحة.
# apt-get install -y --no-install-recommends لتثبيت الحزم المطلوبة.
# libcurl4-openssl-dev: ضروري لملحق curl.
# libonig-dev: ضروري لملحق mbstring (موصى به لمعالجة النصوص).
# libxml2-dev: ضروري لملحق xml (موصى به إذا كان تطبيقك يتعامل مع XML).
# zip unzip: أدوات شائعة قد تكون مفيدة.
# rm -rf /var/lib/apt/lists/* لتنظيف ذاكرة التخزين المؤقت للحزم وتقليل حجم الصورة.
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        libcurl4-openssl-dev \
        libonig-dev \
        libxml2-dev \
        zip \
        unzip \
    && rm -rf /var/lib/apt/lists/*

# نسخ جميع ملفات مشروعك من المستودع الحالي إلى دليل العمل داخل الحاوية.
COPY . /var/www/html

# تثبيت ملحقات PHP الضرورية باستخدام docker-php-ext-install.
# الآن بعد أن تم تثبيت libcurl4-openssl-dev، يجب أن يعمل curl.
# أضفت mbstring و xml لأنه تم تثبيت تبعياتهم أعلاه، وهي مفيدة بشكل عام.
RUN docker-php-ext-install curl mysqli pdo pdo_mysql mbstring xml

# إذا كنت تستخدم Composer لإدارة تبعيات PHP، أزل التعليق عن الأسطر التالية.
# (لا يبدو أن كودك الحالي يستخدم Composer بشكل مباشر، لكنها ممارسة جيدة لمشاريع PHP)
# COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
# RUN composer install --no-dev --optimize-autoloader

# تعريض المنفذ 9000، وهو المنفذ الافتراضي الذي يستمع عليه PHP-FPM.
EXPOSE 9000

# الأمر الذي سيتم تشغيله عند بدء تشغيل الحاوية. هذا يبدأ خدمة PHP-FPM.
CMD ["php-fpm"]
