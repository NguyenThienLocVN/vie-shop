<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'vie-shop' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H4l_/VyOkDpGeApfJ}dJXX3wGfT6KMiyMLA8HAq`7;KT>8qk/7(h}6w(`lYcm-yJ' );
define( 'SECURE_AUTH_KEY',  'TFPH~(1noAw|,`bd3*q](db#]HRm1+bl<KF9I9Rn`}S.mMw4_VcF~/V9V_zo/[cI' );
define( 'LOGGED_IN_KEY',    '*cL>TjGggf/>/.Jsb&_XJH+?%SR8QYgd_H0CY8!S|qz]8H.r8w.=`*>8saw9[?Dd' );
define( 'NONCE_KEY',        '~TLPkbRvbL_s2pzmr:&MVA9TvTt;>sw/T]s!-/:V_^6q]:*5wIo8m,)>Vjh4)Ti/' );
define( 'AUTH_SALT',        '!Y~N;MCV_X<x2`O]O@r|6xB5I.._t5taY9OH,RfB:7,V^t^4D&tY_,e?PTqxKrAK' );
define( 'SECURE_AUTH_SALT', '$MgPQ|Mp^0Y<&sXZ!-}.<eFg/))= O+nk-L)b`)%@k?J7`w)&+6#y1.mIO2rt/TQ' );
define( 'LOGGED_IN_SALT',   'oLtH`hNS07*ZziJ.9}:zGM<&yx,-U)V<F*#:l:TFu$QDG9bc~I$0V7AWOi-u4])B' );
define( 'NONCE_SALT',       '|3G5UZm-fh!LKOz{-xGJ:LEU[YR3ns#N;.B9iK`yjp;E_S#]av%*Mq*]Ua5rxbnV' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
