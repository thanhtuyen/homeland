<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class HomeController extends CController
{
  /**
   * @var string the default layout for the controller view. Defaults to '//layouts/column1',
   * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
   */
  public $layout='//layouts/column1';
  /**
   * @var array context menu items. This property will be assigned to {@link CMenu::items}.
   */
  public $menu=array();
  /**
   * @var array the breadcrumbs of the current page. The value of this property will
   * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
   * for more details on how to specify this property.
   */
  public $breadcrumbs=array();
  public function __construct($id,$module=null){
    parent::__construct($id,$module);
    // If there is a post-request, redirect the application to the provided url of the selected language
    if(isset($_POST['language'])) {
      $lang = $_POST['language'];
      $MultilangReturnUrl = $_POST[$lang];
      $this->redirect($MultilangReturnUrl);
    }
    // Set the application language if provided by GET, session or cookie
    if(isset($_GET['language'])) {
      Yii::app()->language = $_GET['language'];
      Yii::app()->user->setState('language', $_GET['language']);
      $cookie = new CHttpCookie('language', $_GET['language']);
      $cookie->expire = time() + (60*60*24*365); // (1 year)
      Yii::app()->request->cookies['language'] = $cookie;
    }
    else if (Yii::app()->user->hasState('language'))
      Yii::app()->language = Yii::app()->user->getState('language');
    else if(isset(Yii::app()->request->cookies['language']))
      Yii::app()->language = Yii::app()->request->cookies['language']->value;

  }
  public function createMultilanguageReturnUrl($lang='vi'){
    if (count($_GET)>0){
      $arr = $_GET; 
      $arr['language']= $lang;
    } else {  
      $arr = array('language'=>$lang);
    } 
    return $this->createUrl('', $arr);
  }
  /*
  * FRONT
  */
  /*
   * Get list parent menu
   */
  public function getListParentMenuSortPriority ($parent_id = 0) {
  	if($parent_id != '0')
	    $menu_list = Category::model()->findAll(array(
	      'condition' => 'parent_id = :parent_id AND del_flag = :del_flag AND priority != :priority',
	      'order' => 'priority ASC, create_date DESC',
	      'params' => array(':parent_id' => $parent_id,
	        ':del_flag' => 0,
	        ':priority' => 0)
	    ));
	else 
		$menu_list = Category::model()->findAll(array(
	      'condition' => 'parent_id = :parent_id AND del_flag = :del_flag AND priority != :priority',
	      'order' => 'priority ASC, create_date ASC',
	      'params' => array(':parent_id' => $parent_id,
	        ':del_flag' => 0,
	        ':priority' => 0)
	    ));

    return $menu_list;
  }


  public function getListMenuByMenuType( $parent_id, $menu_type)
  {
    $sub_menu_list = Category::model()->findAll(array(
      'condition' => 'del_flag = :del_flag AND  parent_id = :parent_id AND menu_type = :menu_type',
      'order' => 'create_date DESC',
      'params' => array(':menu_type' => $menu_type,
        ':del_flag' => 0,
        ':parent_id' =>  $parent_id,
      )
    ));

    return $sub_menu_list;
  }
}