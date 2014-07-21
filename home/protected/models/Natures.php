<?php

/**
 * This is the model class for table "natures".
 *
 * The followings are the available columns in table 'natures':
 * @property integer $id
 * @property string $title
 * @property string $tieude
 * @property string $content
 * @property string $noidung
 * @property integer $is_public
 * @property integer $category_id
 * @property integer $del_flag
 * @property integer $feature_flag
 * @property integer $create_user
 * @property integer $updated_user
 * @property integer $create_date
 * @property integer $updated_date
 * @property string $image
 * @property string $video
 * @property string $file
 */
class Natures extends CActiveRecord
{
  const image_url = '/uploadfile/natures/images/';
  const file_url = '/uploadfile/natures/file/';
  const video_url = '/uploadfile/natures/video/';
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'natures';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, tieude, content, noidung, create_user, create_date', 'required'),
			array('is_public, category_id, del_flag, feature_flag, create_user, updated_user, create_date, updated_date', 'numerical', 'integerOnly'=>true),
//			array('image, video, file', 'length', 'max'=>256),
			// The following rule is used by search().
      array('image','file',
        //'types'=>'jpg, jpeg, png, gif',
        'mimeTypes'=>array('image/gif', 'image/jpeg', 'image/jpg', 'image/png'),
        'maxSize'=>1024*1024*2, // 2MB
        'wrongMimeType'=>getMessage('wrongTypeImage'),
        'tooLarge'=>getMessage('tooLarge','',array('number'=>2)),
        'message'=>getMessage('required', $this->getAttributeLabel('image')),
        'allowEmpty' => false,
        'on'=> 'create',
      ),
      array('file', 'file',
        //'types'=>'doc, pdf, docx',
        'mimeTypes'=>array('application/pdf','application/xls', 'application/msword', 'text/plain', 'application/vnd.ms-excel', 'application/vnd.oasis.opendocument.text', 'application/vnd.oasis.opendocument.spreadsheet'),
        'maxSize'=>1024*1024*10,
        'wrongMimeType'=>getMessage('wrongTypeFile'),
        'tooLarge'=>getMessage('tooLarge','',array('number'=>10)),
        'maxFiles' => 5,
        'allowEmpty'=>true ),
      array('video', 'file', 'types' => 'flv,mov,mp4, mp3',
//        'maxSize'=>1024*1024*10,
        'allowEmpty'=>true),
			// @todo Please remove those attributes that should not be searched.
			array('id, title, tieude, content, noidung, is_public, category_id, del_flag, feature_flag, create_user, updated_user, create_date, updated_date, image, video, file', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'tieude' => 'Tieude',
			'content' => 'Content',
			'noidung' => 'Noidung',
			'is_public' => 'Is Public',
			'category_id' => 'Category',
			'del_flag' => 'Del Flag',
			'feature_flag' => 'Feature Flag',
			'create_user' => 'Create User',
			'updated_user' => 'Updated User',
			'create_date' => 'Create Date',
			'updated_date' => 'Updated Date',
			'image' => 'Image',
			'video' => 'Video',
			'file' => 'File',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('tieude',$this->tieude,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('noidung',$this->noidung,true);
		$criteria->compare('is_public',$this->is_public);
		$criteria->compare('category_id',$this->category_id);
    $criteria->addCondition("del_flag = 0");
		$criteria->compare('feature_flag',$this->feature_flag);
		$criteria->compare('create_user',$this->create_user);
		$criteria->compare('updated_user',$this->updated_user);
		$criteria->compare('create_date',$this->create_date);
		$criteria->compare('updated_date',$this->updated_date);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('video',$this->video,true);
		$criteria->compare('file',$this->file,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Natures the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function getUrl()
    {
        return Yii::app()->createAbsoluteUrl('natures/news', array(
        'slug'=>$this->slug
      ));
    }

}
