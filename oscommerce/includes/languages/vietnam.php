<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Examples:
// on RedHat try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
@setlocale(LC_TIME, 'en_US.ISO_8859-1');

define('DATE_FORMAT_SHORT', '%m/%d/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'm/d/Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('JQUERY_DATEPICKER_I18N_CODE', ''); // leave empty for en_US; see http://jqueryui.com/demos/datepicker/#localization
define('JQUERY_DATEPICKER_FORMAT', 'mm/dd/yy'); // see http://docs.jquery.com/UI/Datepicker/formatDate

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'VND');

// Global entries for the <html> tag
define('HTML_PARAMS', 'dir="ltr" lang="en"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// page title
define('TITLE', STORE_NAME);

// header text in includes/header.php
define('HEADER_TITLE_CREATE_ACCOUNT', 'Tạo tài khoản');
define('HEADER_TITLE_MY_ACCOUNT', 'Tài khoản của tôi');
define('HEADER_TITLE_CART_CONTENTS', 'Giỏ hàng');
define('HEADER_TITLE_CHECKOUT', 'Thanh toán');
define('HEADER_TITLE_TOP', 'Top');
define('HEADER_TITLE_CATALOG', 'Catalog');
define('HEADER_TITLE_LOGOFF', 'Đăng xuất');
define('HEADER_TITLE_LOGIN', 'Đăng nhập');

// footer text in includes/footer.php
define('FOOTER_TEXT_REQUESTS_SINCE', 'yêu cầu từ');

// text for gender
define('MALE', 'Nam');
define('FEMALE', 'Nữ');
define('MALE_ADDRESS', 'Ông');
define('FEMALE_ADDRESS', 'Bà');

// text for date of birth example
define('DOB_FORMAT_STRING', 'ngày/tháng/năm');

// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', 'Thông tin giao hàng');
define('CHECKOUT_BAR_PAYMENT', 'Thông tin thanh toán');
define('CHECKOUT_BAR_CONFIRMATION', 'Xác nhận');
define('CHECKOUT_BAR_FINISHED', 'Hoàn thành!');

// pull down default text
define('PULL_DOWN_DEFAULT', 'Vui lòng chọn');
define('TYPE_BELOW', 'Nhập vào bên dưới');

// javascript messages
define('JS_ERROR', 'Có lỗi xảy ra trong quá trình xử lí thông tin.\n\n Vui lòng kiểm tra lại các lỗi sau:\n\n');

define('JS_REVIEW_TEXT', '*\'Review Text\' phải có ít nhất ' . REVIEW_TEXT_MIN_LENGTH . ' kí tự.\n');
define('JS_REVIEW_RATING', '* Bạn phải đánh giá sản phẩm mới có thể nhận xét.\n');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Vui lòng chọn hình thức thanh toán cho đơn hàng.\n');

define('JS_ERROR_SUBMITTED', 'Mãu đã được gửi đi. Vui lòng nhấn OK và chờ trong chốc lát.');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Vui lòng chọn hình thức thanh toán cho đơn hàng.');

define('CATEGORY_COMPANY', 'Thông tin công ty');
define('CATEGORY_PERSONAL', 'Thông tin cá nhân');
define('CATEGORY_ADDRESS', 'Địa chỉ của bạn');
define('CATEGORY_CONTACT', 'Thông tin liên lạc của bạn');
define('CATEGORY_OPTIONS', 'Tùy chọn');
define('CATEGORY_PASSWORD', 'Mật khẩu của bạn');

define('ENTRY_COMPANY', 'Tên công ty:');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Giới tính:');
define('ENTRY_GENDER_ERROR', 'Vui lòng chọn giới tính.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Họ của bạn:');
define('ENTRY_FIRST_NAME_ERROR', 'Họ của bạn phải chứa ít nhất' . ENTRY_FIRST_NAME_MIN_LENGTH . ' kí tự.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Tên của bạn:');
define('ENTRY_LAST_NAME_ERROR', 'Tên của bạn phảu chứa ít nhất' . ENTRY_LAST_NAME_MIN_LENGTH . ' kí tự.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Ngày sinh:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Ngày sinh của bạn phải theo định dạng: ngày/tháng/năm. (ví dụ: 05/21/1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (ví dụ: 05/21/1970)');
define('ENTRY_EMAIL_ADDRESS', 'E-mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'E-mail của bạn phải chứa ít nhất' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' kí t.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'E-mail của bạn có vẻ như không hợp lệ- vui lòng kiểm tra lại.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'E-mail của bạn đã có trong hệ thống- vui lòng đăng nhập với e-mail này hoặc tạo tài khoản với một địa chỉ email khác.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS', 'Địa chỉ:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Địa chỉ của bạn phải chứa ít nhất' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' kí tự.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', 'Ngoại ô:');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Mã vùng:');
define('ENTRY_POST_CODE_ERROR', 'Mã vùng của bạn phải chứa ít nhất ' . ENTRY_POSTCODE_MIN_LENGTH . ' kí tự.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', 'Thành phố:');
define('ENTRY_CITY_ERROR', 'Thành phố của bạn phải chứa ít nhất' . ENTRY_CITY_MIN_LENGTH . ' kí tự.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', 'Quận/Huyện:');
define('ENTRY_STATE_ERROR', 'Quận/Huyện của bạn phải chứa ít nhất' . ENTRY_STATE_MIN_LENGTH . ' kí tự.');
define('ENTRY_STATE_ERROR_SELECT', 'Vui lòng lựa chọn.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY', 'Quốc gia:');
define('ENTRY_COUNTRY_ERROR', 'Bạn phải chọn quốc gia từ danh sách.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'Số điện thoại:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Số điện thoại của bạn phải chứa ít nhất' . ENTRY_TELEPHONE_MIN_LENGTH . ' kí tự.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Số Fax:');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Tin mới:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'Đăng kí');
define('ENTRY_NEWSLETTER_NO', 'Hủy đăng kí');
define('ENTRY_PASSWORD', 'Mật khẩu:');
define('ENTRY_PASSWORD_ERROR', 'Mật khẩu của bạn phải chứa ít nhất' . ENTRY_PASSWORD_MIN_LENGTH . ' kí tự.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Mật khẩu xác nhận phải giống với mật khẩu bạn vừa nhập.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION', 'Xác nhận mật khẩu:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Mật khẩu hiện tại:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Mật khẩu của bạn phải chứa ít nhất' . ENTRY_PASSWORD_MIN_LENGTH . ' kí tự.');
define('ENTRY_PASSWORD_NEW', 'Mật khẩu mới:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Mật khẩu mới của bạn phải chứa ít nhất' . ENTRY_PASSWORD_MIN_LENGTH . ' kí tự.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Mật khẩu xác nhận phải giống với mật khẩu bạn vừa nhập.');
define('PASSWORD_HIDDEN', '--HIDDEN--');

define('FORM_REQUIRED_INFORMATION', '* Thông tin bắt buộc');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Trang kết quả:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Hiển thị <strong>%d</strong> đến <strong>%d</strong> (trên tổng số <strong>%d</strong> sản phẩm)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Hiển thị <strong>%d</strong> đến <strong>%d</strong> (trên tổng số <strong>%d</strong> đơn hàng)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Hiển thị <strong>%d</strong> đến <strong>%d</strong> (trên tổng số <strong>%d</strong> đánh giá)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Hiển thị <strong>%d</strong> đến <strong>%d</strong> (trên tổng số <strong>%d</strong> sản phẩm mới)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Hiển thị <strong>%d</strong> đến <strong>%d</strong> (trên tổng số <strong>%d</strong> sản phẩm đặc biệt)');

define('PREVNEXT_TITLE_FIRST_PAGE', 'Trang đầu tiên');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Trang trước');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Trang tiếp theo');
define('PREVNEXT_TITLE_LAST_PAGE', 'Trang cuối');
define('PREVNEXT_TITLE_PAGE_NO', 'Trang %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Trước đó %d trang');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Tiếp theo of %d trang');
define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;FIRST');
define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Prev]');
define('PREVNEXT_BUTTON_NEXT', '[Next&nbsp;&gt;&gt;]');
define('PREVNEXT_BUTTON_LAST', 'LAST&gt;&gt;');

define('IMAGE_BUTTON_ADD_ADDRESS', 'Thêm địa chỉ');
define('IMAGE_BUTTON_ADDRESS_BOOK', 'Sổ địa chỉ');
define('IMAGE_BUTTON_BACK', 'Trở về');
define('IMAGE_BUTTON_BUY_NOW', 'Mua');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Đổi địa chỉ');
define('IMAGE_BUTTON_CHECKOUT', 'Thanh toán');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Xác nhận đơn hàng');
define('IMAGE_BUTTON_CONTINUE', 'Tiếp tục');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Tiếp tục mua hàng');
define('IMAGE_BUTTON_DELETE', 'Xóa');
define('IMAGE_BUTTON_EDIT_ACCOUNT', 'Sửa tải khoản');
define('IMAGE_BUTTON_HISTORY', 'Lịch sử đơn hàng');
define('IMAGE_BUTTON_LOGIN', 'Đăng nhập');
define('IMAGE_BUTTON_IN_CART', 'Thêm vào giỏ hàng');
define('IMAGE_BUTTON_NOTIFICATIONS', 'Thông báo');
define('IMAGE_BUTTON_QUICK_FIND', 'Tìm kiếm nhanh');
define('IMAGE_BUTTON_REMOVE_NOTIFICATIONS', 'Gỡ bỏ thông báo');
define('IMAGE_BUTTON_REVIEWS', 'Đánh giá');
define('IMAGE_BUTTON_SEARCH', 'Tìm kiếm');
define('IMAGE_BUTTON_SHIPPING_OPTIONS', 'Tùy chọn giao hàng');
define('IMAGE_BUTTON_TELL_A_FRIEND', 'Nói cho bạn bè');
define('IMAGE_BUTTON_UPDATE', 'Cập nhật');
define('IMAGE_BUTTON_UPDATE_CART', 'Cập nhật giỏ hàng');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Viết đánh giá');

define('SMALL_IMAGE_BUTTON_DELETE', 'Xóa');
define('SMALL_IMAGE_BUTTON_EDIT', 'Sửa');
define('SMALL_IMAGE_BUTTON_VIEW', 'Xem');

define('ICON_ARROW_RIGHT', 'thêm');
define('ICON_CART', 'Trong giỏ');
define('ICON_ERROR', 'Lỗi');
define('ICON_SUCCESS', 'Thành công');
define('ICON_WARNING', 'Cảnh báo');

define('TEXT_GREETING_PERSONAL', 'Chào mừng trở lại <span class="greetUser">%s!</span> Bạn có muốn xem <a href="%s"><u>những sản phẩm mới nào</u></a> đang có sẵn để mua?');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>Nếu không phải %s, làm ơn <a href="%s"><u>đăng nhập</u></a> với thông tin tài khoản của bạn.</small>');
define('TEXT_GREETING_GUEST', 'Chào mừng <span class="greetUser">Khách!</span> Bạn có muốn <a href="%s"><u>đăng nhập</u></a>? Hay bạn muốn <a href="%s"><u>tạo một tài khoản</u></a>?');

define('TEXT_SORT_PRODUCTS', 'Sắp xếp sản phẩm ');
define('TEXT_DESCENDINGLY', 'giảm dần');
define('TEXT_ASCENDINGLY', 'tăng dần');
define('TEXT_BY', ' bởi ');

define('TEXT_REVIEW_BY', 'bởi %s');
define('TEXT_REVIEW_WORD_COUNT', '%s từ');
define('TEXT_REVIEW_RATING', 'Đánh giá: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Ngày thêm vào: %s');
define('TEXT_NO_REVIEWS', 'Hiện tại không có đánh giá sản phẩm nào.');

define('TEXT_NO_NEW_PRODUCTS', 'Hiện tại không có sản phẩm nào.');

define('TEXT_UNKNOWN_TAX_RATE', 'Không rõ mức thuế');

define('TEXT_REQUIRED', '<span class="errorText">Yêu cầu</span>');

define('ERROR_TEP_MAIL', '<font face="Verdana, Arial" size="2" color="#ff0000"><strong><small>TEP ERROR:</small> Cannot send the email through the specified SMTP server. Please check your php.ini setting and correct the SMTP server if necessary.</strong></font>');

define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Hạn thẻ của quý khách không hợp lệ. Vui lòng kiểm tra và thử lại.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Số thẻ của quý khách không hợp lệ. Vui lòng kiểm tra và thử lại.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Bốn số đầu tiên quý khách vừa nhập là: %s. Nếu các con số đều đúng, chúng tôi không chấp nhận loại thẻ này. Nếu sai, vui lòng thử lại.');

define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="' . tep_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a><br />Powered by <a href="http://www.oscommerce.com" target="_blank">osCommerce</a>');
?>
