<?php

/**
 * This is the model class for table "dot_tracker_user".
 *
 * The followings are the available columns in table 'dot_tracker_user':
 * @property integer $id
 * @property string $fname
 * @property string $lname
 * @property string $extra
 * @property string $phone
 * @property string $username
 * @property string $email
 * @property integer $active
 * @property string $creationdatetime
 * @property string $last_updated
 * @property string $password
 * @property integer $role
 */
class DotTrackerUser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	public $s_password;
    public static $arrUserRoles=array('1'=>'Administrator','2'=>'User');
    public static $arrActivationStatus=array('1'=>'Active','0'=>'Not Active');

    public function tableName()
	{
		return 'dot_tracker_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fname, username, email, active, creationdatetime, password, role ,s_password', 'required'),
			array(' email,username', 'unique'),
            array('creationdatetime','default',
                'value'=>new CDbExpression('NOW()'),
                'setOnEmpty'=>true,'on'=>'insert'),
			array('active, role', 'numerical', 'integerOnly'=>true),
			array('lname, extra, phone, last_updated,stime, etime', 'safe'),
            array('s_password', 'compare', 'compareAttribute'=>'password' , 'on'=>'insert,update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fname, lname, extra, phone, username, email, active, creationdatetime, last_updated, password, role,stime,etime', 'safe', 'on'=>'search'),
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
			'fname' => 'First Name',
			'lname' => 'Last Name',
			'extra' => 'User Notes',
			'phone' => 'Phone Number',
			'username' => 'Username',
			'email' => 'Email ID',
			'active' => 'Activation Status',
			'creationdatetime' => 'Created On',
			'last_updated' => 'Last Updated',
			'password' => 'Password',
			'role' => 'User Role',
			's_password' => 'Repeat Password',
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
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('extra',$this->extra,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('creationdatetime',$this->creationdatetime,true);
		$criteria->compare('last_updated',$this->last_updated,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('role',$this->role);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DotTrackerUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
