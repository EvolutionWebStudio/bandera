<?php

/**
 * This is the model class for table "ad".
 *
 * The followings are the available columns in table 'ad':
 * @property integer $id
 * @property string $title
 * @property string $start_date
 * @property string $content
 * @property integer $is_active
 * @property string $latitude
 * @property string $longitude
 * @property string $address
 * @property integer $visits
 * @property integer $city_ptt
 * @property integer $options_id
 * @property string $price
 *
 * The followings are the available model relations:
 * @property Options $options
 * @property City $cityPtt
 * @property User[] $users
 */
class Ad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('city_ptt, title, address, price', 'required'),
			array('is_active, visits, city_ptt, options_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
			array('latitude, longitude, address, price', 'length', 'max'=>45),
			array('start_date, content', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, start_date, content, is_active, latitude, longitude, address, visits, city_ptt, options_id, price', 'safe', 'on'=>'search'),
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
			'options' => array(self::BELONGS_TO, 'Options', 'options_id'),
			'cityPtt' => array(self::BELONGS_TO, 'City', 'city_ptt'),
			'users' => array(self::MANY_MANY, 'User', 'user_has_oglas(oglas_id, user_id)'),
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
			'start_date' => 'Start Date',
			'content' => 'Content',
			'is_active' => 'Is Active',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
			'address' => 'Address',
			'visits' => 'Visits',
			'city_ptt' => 'City Ptt',
			'options_id' => 'Options',
			'price' => 'Price',
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
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('latitude',$this->latitude,true);
		$criteria->compare('longitude',$this->longitude,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('visits',$this->visits);
		$criteria->compare('city_ptt',$this->city_ptt);
		$criteria->compare('options_id',$this->options_id);
		$criteria->compare('price',$this->price,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
