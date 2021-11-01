<?php
/**
 * إعدادات ووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'test1' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * تغيير هذه العبارات إلى عبارات فريدة مختلفة!
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 * يمكنك تغيير هذه في أي وقت لإلغاء جميع ملفات تعريف الارتباط الموجودة. سيؤدي هذا إلى إجبار جميع المستخدمين على تسجيل الدخول مرة أخرى.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BhF5GIRLaa2;}=d^W4bYkwsN{]0zj$#55*x_Iw6PTe)nde7-l2`/`]O}dt$h,Vn5' );
define( 'SECURE_AUTH_KEY',  '#utZGd=P ZH60KyUjFuR3x%<|g}Fe$2>>_<Z)/a7bM=/jI5_0q}k[~xh+&]p9R/_' );
define( 'LOGGED_IN_KEY',    'd&TTZQqE; }sgut4diQSd$_Ywfr8fqy~e0yu>F*TUpIh)!3)ss9m{j uc=cxLzo/' );
define( 'NONCE_KEY',        '?+,4Z?_gOu(@Whl_WY:7-g}~$iwO6?`H,t+sca}0%EuTeC }@sA]B4T9M0A>:2DL' );
define( 'AUTH_SALT',        '_pM;em4O>-h~<YQvH0h_pY4Ho1jGp*LwdBkRBc;TKSB-|amJhutGbC94#Q(RX/aB' );
define( 'SECURE_AUTH_SALT', 'S2GavSe/Bfb@bl.fy?V._*mgRO o.pNDfd`AA}u ]?%HT+]Tw &RyyL1eEXQL%zx' );
define( 'LOGGED_IN_SALT',   'Mw]E|uSW;<FwY~)T#QX<1Iqk-5)G(9D1X>K;Ll-|xx 5s`hET[f-kYm^hVL@A(x+' );
define( 'NONCE_SALT',       'jwkNDF./p{R%Phox5d%_U-dKXurj3rmYeX|FeA#<I}cTDMbijK9yGg_@{,[WzF*G' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once ABSPATH . 'wp-settings.php';
