<?php

/**
 * This is the model class for table "options".
 *
 * The followings are the available columns in table 'options':
 * @property integer $id
 * @property string $type
 * @property string $heating
 * @property integer $beds
 * @property string $kitchen
 * @property string $entery
 * @property string $bathroom
 * @property string $floor
 * @property integer $tv
 * @property integer $internet
 * @property integer $phone
 * @property integer $balcony
 * @property integer $air_conditioning
 *
 * The followings are the available model relations:
 * @property Ad[] $ads
 */
class Options extends CActiveRecord
{
    const TYPE_SOBA = 'Soba';
    const TYPE_STAN = 'Stan';
    const TYPE_STANUKUCI = 'Stan u kuci';
    const HEATING_STRUJA = 'Struja';
    const HEATING_CENTRALNO = 'Centralno grijanje';
    const BEDS_JEDAN = 1;
    const BEDS_DVA = 2;
    const BEDS_TRI = 3;
    const BEDS_CETRI = 4;
    const KITCHEN_ZAJEDNICKA = 'Zajednicka';
    const KITCHEN_ZASEBNA = 'Zasebna';
    const ENTERY_ZASEBAN = 'Zaseban';
    const ENTERY_ZAJEDNICKI = 'Zajednicki';
    const BATHROOM_ZASEBAN = 'Zaseban';
    const BATHROOM_ZAJEDNICKI = 'Zajednicki';
    const FLOOR_PRIZEMLJE = 'Prizemlje';
    const FLOOR_PRVI = 'Prvi sprat';
    const FLOOR_DRUGI = 'Drugi sprat';
    const FLOOR_TRECI = 'Treci i veci';
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'options';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('beds, tv, internet, phone, balcony, air_conditioning', 'numerical', 'integerOnly'=>true),
			array('type, heating, kitchen, entery, bathroom', 'length', 'max'=>90),
			array('floor', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, type, heating, beds, kitchen, entery, bathroom, floor, tv, internet, phone, balcony, air_conditioning', 'safe', 'on'=>'search'),
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
			'ads' => array(self::HAS_MANY, 'Ad', 'options_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'type' => 'Type',
			'heating' => 'Heating',
			'beds' => 'Beds',
			'kitchen' => 'Kitchen',
			'entery' => 'Entery',
			'bathroom' => 'Bathroom',
			'floor' => 'Floor',
			'tv' => 'Tv',
			'internet' => 'Internet',
			'phone' => 'Phone',
			'balcony' => 'Balcony',
			'air_conditioning' => 'Air Conditioning',
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
		$criteria->compare('type',$this->type,true);
		$criteria->compare('heating',$this->heating,true);
		$criteria->compare('beds',$this->beds);
		$criteria->compare('kitchen',$this->kitchen,true);
		$criteria->compare('entery',$this->entery,true);
		$criteria->compare('bathroom',$this->bathroom,true);
		$criteria->compare('floor',$this->floor,true);
		$criteria->compare('tv',$this->tv);
		$criteria->compare('internet',$this->internet);
		$criteria->compare('phone',$this->phone);
		$criteria->compare('balcony',$this->balcony);
		$criteria->compare('air_conditioning',$this->air_conditioning);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Options the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
