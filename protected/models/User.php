<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $name_surname
 * @property string $registration_date
 * @property string $last_activity
 * @property integer $premium
 * @property string $avatar
 * @property integer $city_ptt
 * @property string $email
 * @property string $phone
 *
 * The followings are the available model relations:
 * @property City $cityPtt
 * @property Ad[] $ads
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('city_ptt', 'required'),
			array('premium, city_ptt', 'numerical', 'integerOnly'=>true),
			array('username, password', 'length', 'max'=>120),
			array('name_surname', 'length', 'max'=>180),
			array('avatar, email', 'length', 'max'=>255),
			array('phone', 'length', 'max'=>45),
			array('registration_date, last_activity', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, name_surname, registration_date, last_activity, premium, avatar, city_ptt, email, phone', 'safe', 'on'=>'search'),
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
			'cityPtt' => array(self::BELONGS_TO, 'City', 'city_ptt'),
			'ads' => array(self::MANY_MANY, 'Ad', 'user_has_oglas(user_id, oglas_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Korisničko ime',
			'password' => 'Lozinka',
			'name_surname' => 'Ime i prezime',
			'registration_date' => 'Registration Date',
			'last_activity' => 'Last Activity',
			'premium' => 'Premium',
			'avatar' => 'Avatar',
			'city_ptt' => 'Mjesto stanovanja',
			'email' => 'Email',
			'phone' => 'Telefon',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('name_surname',$this->name_surname,true);
		$criteria->compare('registration_date',$this->registration_date,true);
		$criteria->compare('last_activity',$this->last_activity,true);
		$criteria->compare('premium',$this->premium);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('city_ptt',$this->city_ptt);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
