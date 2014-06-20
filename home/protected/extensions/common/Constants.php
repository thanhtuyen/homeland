<?php
define('ROOT_PATH', str_replace('/protected', '', Yii::app()->basePath));


class Constants {
	public static $arrayIsPublic = array(	'0'=>'Công khai',
											'1'=>'Không công khai');
	public static $arrayFeature_flag = array(	'0'=>'Không đặt ở trang chủ',
												'2'=>'Trung tâm',
												'3'=>'Bên trái');
	public static $arrayPriority = array(	'1'=>'Một',
											'2'=>'Hai',
											'3'=>'Ba',
											'4'=>'Bốn');
	/*
	 * List module menu
	 */	 
	public static $listModule = array(
		'image_slide' 		=> array(	'title' => 'Quản lý Ảnh Trình Diễn', 
										'url' => array('/imageslide/admin'), 
										'header' => 'ẢNH TRÌNH DIỄN'),
		'news' 				=> array(	'title' => 'Quản lý Tin Tức', 
										'url' => array('/news/admin'), 
										'header' => 'TIN TỨC'),
		'detail_menu_image' => array(	'title' => 'Quản lý Chi Tiết Menu Hình Ảnh', 
										'url' => array('/detailmenuimage/admin'), 
										'header' => 'CHI TIẾT MENU HÌNH ẢNH'),
		'detail_menu' 		=> array(	'title' => 'Quản lý Chi Tiết Menu', 
										'url' => array('/detailmenu/admin'), 
										'header' => 'CHI TIẾT MENU'),
		'menu' 				=> array(	'title' => 'Quản lý Menu', 
										'url' => array('/menu/admin'), 
										'header' => 'MENU'),
		'user' 				=> array(	'title' => 'Quản lý User', 
										'url' => array('/user/admin'), 
										'header' => 'USER'),
		'link' 				=> array(	'title' => 'Quản lý Link', 
										'url' => array('/link/admin'), 
										'header' => 'LINK'),
	);
	
	/*
	 * List module menu
	 */	 
	public static $listTitleForm = array(
		'form_create' 	=> 'Tạo mới ###TITLE###', 		
		'form_update' 	=> 'Chỉnh sửa ###TITLE###', 
		'form_view' 	=> 'Chi tiết ###TITLE###', 		
	);

	/*
	 * Define message
	 */	
	public static $listMessage = array(
		'no_data' 			=> '###TITLE### không có dữ liệu',
		'max_length' 		=> '###TITLE### cho phép nhập tối đa ###NUMBER### ký tự',
		'required'			=> '###TITLE### không được phép rỗng',
		'unique'			=> '###TITLE### không được phép trùng',
		'numerical'			=> 'Nhập ký tự số',
		'wrongTypeImage'	=> 'Tải hình ảnh với định dạng jpg, gif, png',
		'wrongTypeFile'		=> 'Tải tập tin với định dạng doc, pdf, docx, xls',
		'tooLarge'			=> 'Tải tập tin không quá ###NUMBER###MB',
		'DuplicateMenu' 	=> 'Chỉ cho phép menu ###TITLE### có loại là menu đơn ,độ ưu tiên bằng ###NUMBER### và menu cha là Root.'
	);
	
	/*
	 * Define label button
	 */
	public static $listLabelButton = array(
		'search' 			=> 'Tìm kiếm',
		'create'			=> 'Tạo mới',
		'update'			=> 'Lưu',
		'reset'				=> 'Làm mới',
		'cancel'			=> 'Thoát',
		'choose_option'		=> 'Chọn loại menu!',
	);
	
	/*
	 * Define text required for form admin
	 */	
	public static $text_required = 'Trường có dấu <span class="required">*</span> là bắt buộc.';
	
	/*
	 * Define size required for upload image
	 */
	public static $text_require_image = 'Kích thước hình ảnh không vượt quá ###SIZE###px.';
	
	/*
	 * Define list priority of menu
	 * 
	 */
	public static $list_priority = array(	'1'	 	=> 'Trang chủ',
											'2' 	=> 'Tin tức',
											'3' 	=> 'Liên hệ',
											'4' 	=> 'Tuyển Dụng');
	
}
?>