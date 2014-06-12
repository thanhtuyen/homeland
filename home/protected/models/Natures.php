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
 * @property integer $genre_nature_id
 */
class Natures extends CActiveRecord
{
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
			array('title, tieude, content, noidung, genre_nature_id', 'required'),
			array('genre_nature_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, tieude, content, noidung, genre_nature_id', 'safe', 'on'=>'search'),
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
			'genre_nature_id' => 'Genre Nature',
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
		$criteria->compare('genre_nature_id',$this->genre_nature_id);

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
}
