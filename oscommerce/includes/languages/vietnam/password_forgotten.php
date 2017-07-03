<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2012 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Đăng nhập');
define('NAVBAR_TITLE_2', 'Quên mật khẩu');

define('HEADING_TITLE', 'Tôi đã quên mật khẩu của tôi');

define('TEXT_MAIN', 'Nếu bạn đã quên mất mật khậu của bạn, điền địa chỉ e-mail vào phía dưới và chúng tôi sẽ gửi cho bạn hướng dẫn làm thế nào để đổi mật khẩu của bạn một cách an toàn.');

define('TEXT_PASSWORD_RESET_INITIATED', 'Vui lòng kiểm tra e-mail để được hướng dẫn chi tiết về hướng dẫn thay đổi mật khẩu của bạn. Trong hướng dẫn chứa liên kết chỉ tồn tại trong 24h hoặc mật khẩu của bạn được cập nhật.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Lỗi: Địa chỉ E-mail không tồn tại, vui lòng thử lại.');

define('EMAIL_PASSWORD_RESET_SUBJECT', STORE_NAME . ' - Mật khẩu mới');
define('EMAIL_PASSWORD_RESET_BODY', 'Mật khẩu mới đã được yêu cầu cho tài khoản của bạn tại ' . STORE_NAME . '.' . "\n\n" . 'Vui lòng nhấp vào liên kết này để đảm bảo an toàn cho việc thay đổi mật khẩu:' . "\n\n" . '%s' . "\n\n" . 'Liên kết này sẽ tự động hủy sau 24h hoặc sau khi mật khẩu của bạn được cập nhật.' . "\n\n" . 'Để được giúp đỡ bởi dịch vụ trực tuyến, vui lòng email đến chủ cửa hàng: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");

define('ERROR_ACTION_RECORDER', 'Lỗi: Liên kết để đặt lại mật khẩu đã được gửi. Vui lòng thử lại trong %s phút.');
?>