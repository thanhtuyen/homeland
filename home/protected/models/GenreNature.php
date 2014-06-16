<?php

/**
 * This is the model class for table "genre_nature".
 *
 * The followings are the available columns in table 'genre_nature':
 * @property integer $id
 * @property string $name
 * @property string $tieude
 * @property integer $priority
 * @property integer $del_flag
 * @property integer $create_user
 * @property integer $updated_user
 * @property integer $create_date
 * @property integer $updated_date
 */
class GenreNature extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'genre_nature';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, tieude, priority, create_user, updated_user, create_date, updated_date', 'required'),
			array('priority, del_flag, create_user, updated_user, create_date, updated_date', 'numerical', 'integerOnly'=>true),
			array('name, tieude', 'length', 'max'=>256),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, tieude, priority, del_flag, create_user, updated_user, create_date, updated_date', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'tieude' => 'Tieude',
			'priority' => 'Priority',
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
		$criteria->compare('del_flag',$this->del_flag);
		$criteria->compare('create_user',$this->create_user);
		$criteria->compare('updated_user',$this->updated_user);
		$criteria->compare('create_date',$this->create_date);
		$criteria->compare('updated_date',$this->updated_date);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GenreNature the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
