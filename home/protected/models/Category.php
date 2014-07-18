<?php

/**
 * This is the model class for table "category".
 *
 * The followings are the available columns in table 'category':
 * @property integer $id
 * @property string $name
 * @property string $tieude
 * @property integer $priority
 * @property integer $parent_id
 * @property integer $del_flag
 * @property integer $menu_type
 * @property integer $create_user
 * @property integer $updated_user
 * @property integer $create_date
 * @property integer $updated_date
 */
class Category extends CActiveRecord
{
  const NATURES_MENU = 1;
  const FOOD_MENU = 2;
  const CULTURE_MENU = 3;
  const ECONOMY_MENU = 4;
  const HISTORICAL_MENU = 5;
  const PEOPLE_MENU = 6;
  const TRAVEL_MENU = 7;
  const SPECIALITES_MENU = 8;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, tieude, priority, create_user, create_date', 'required'),
			array('priority, parent_id, del_flag, create_user, updated_user, create_date, updated_date', 'numerical', 'integerOnly'=>true),
			array('name, tieude', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, tieude, priority, parent_id, del_flag, create_user, updated_user, create_date, updated_date', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
    return array(
      'parent' => array(self::BELONGS_TO, 'Category', 'parent_id'),
      'menu_child'=> array(self::HAS_MANY, 'Category', 'parent_id', 'order'=> 'id ASC'),

    );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Title',
			'tieude' => 'Tiêu đề',
			'priority' => 'Độ ưu tiên',
			'parent_id' => 'Parent',
			'del_flag' => 'Del Flag',
			'create_user' => 'Create User',
			'updated_user' => 'Updated User',
			'create_date' => 'Create Date',
			'updated_date' => 'Updated Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('tieude',$this->tieude,true);
		$criteria->compare('priority',$this->priority);
		$criteria->compare('parent_id',$this->parent_id);
    $criteria->addCondition("del_flag = 0");
		$criteria->compare('create_user',$this->create_user);
		$criteria->compare('updated_user',$this->updated_user);
		$criteria->compare('create_date',$this->create_date);
		$criteria->compare('updated_date',$this->updated_date);
		$criteria->compare('category_id',$this->category_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Category the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
  public static function findMenu($parent_id = 0){

      $categories = self::model()->findAllByAttributes(array('parent_id' => $parent_id,
        'del_flag' => 0), array("order" => "priority ASC"));
    return $categories;
  }
  /*
   *
   * listCategory
   *
   */
  public static function listCategory($id = 0, $flag=false){

    $categories = self::findMenu($id);

    if ($categories == null){
      // $cate = self::model()->findByPk($id);
      // return array($cate->id => '--'.$cate->name);
    }
    $trees = array();
    if($flag){
      foreach ($categories as $category){
        $trees = $trees + array($category->id => $category->name) + self::listCategory($category->id);
      }
    } else {
      foreach ($categories as $category){
        $trees = $trees + array($category->id => $category->name);
      }
    }

    foreach ($trees as $key => $value){
      $trees[$key] = '--'.$value;
    }

    return $trees;
  }

  public static function findTreeMenu($id = 0){
    $categories = self::findMenu($id);
    if ($categories == null)
      return;
    $tree = array();
    if ($id == 0) {
      $class = 'icon-minus-sign';
    }
    else {
      $class = 'icon-leaf';
    }
    foreach ($categories as $category){
      if ($category['menu_type']==1) {
        $url = "../natures/admin";
      }
      else if ($category['menu_type']==2) {
        $url = "../food/admin";
      }
      else if ($category['menu_type']==3) {
        $url = "../culture/admin";
      }
      else if ($category['menu_type']==4) {
        $url = "../travel/admin";
      }
      else if ($category['menu_type']==5) {
        $url = "../historical/admin";
      }else if ($category['menu_type']==6) {
        $url = "../people/admin";
      }else if ($category['menu_type']==7) {
        $url = "../travel/admin";
      }else {
        $url = "../specialties/admin";
      }
      $tree[] = array(
        'text' => '<span><i class="'.$class.'"></i> <b>'.CHtml::link(CHtml::encode($category['tieude']),
          array('update', 'id'=>$category['id'])).'</b></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-default"
          href="'.$url.'?category_id='.$category['id'].'"><i class="icon-list-alt"></i>Nội dung</a>&nbsp;&nbsp;&nbsp;
          <a class="btn btn-danger btn-confirm delete" href="'.Yii::app()->createUrl("category/delete",array("id"=>$category["id"])).'"><i class="icon-trash"></i>Xóa</a> ',
        'children' => self::findTreeMenu($category->attributes['id'], $category->attributes['menu_type'])
      );
    }
    return $tree;
  }

  public function getListMenuType()
  {
    return array(
      self:: NATURES_MENU => 'Thiên Nhiên',
      self:: FOOD_MENU => 'Thức ăn',
      self:: CULTURE_MENU => 'Văn Hóa',
      self:: ECONOMY_MENU => 'Kinh Tế',
      self:: HISTORICAL_MENU => 'Lịch Sử',
      self:: PEOPLE_MENU => 'Con Người',
      self:: TRAVEL_MENU => 'Tour',
      self:: SPECIALITES_MENU => 'Đặc Sản'
    );
  }
  /**
   * @return string the URL that shows the detail of the post
   */
  public function getUrl( )
  {
    $name = "thanh-tuyen";
   // $name= vn_str_filter($name);
    return Yii::app()->createAbsoluteUrl('Natures/news', array(
      'id'=> 12,
      'name'=>$name,
    ));
  }


}
