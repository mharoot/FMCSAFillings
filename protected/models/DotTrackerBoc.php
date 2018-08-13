<?php

/**
 * This is the model class for table "dot_tracker_boc".
 *
 * The followings are the available columns in table 'dot_tracker_boc':
 * @property integer $id
 * @property string $usdot
 * @property string $company_name
 * @property string $fname
 * @property string $lname
 * @property string $street
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $phone_no
 * @property string $fax
 * @property string $email
 * @property string $mobile
 * @property string $services
 * @property string $comments
 * @property string $ext1
 * @property integer $ext2
 * @property integer $ext3
 * @property string $created_by
 * @property string $creation_datetime
 */
class DotTrackerBoc extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dot_tracker_boc';
	}

	public static $arrService=array('1'=>'B0C-3 only - $30.00','2'=>'B0C-3 and letter of new authority on the day it is issued by the FMCSA - $55.00','3'=>' B0C-3 and letter of reinstatement of authority - $55.00','4'=>'B0C-3 and letter of reinstatement of authority - $55.00');
	public static $arrServiceP=array('1'=>'30','2'=>'55','3'=>'55','4'=>'55');
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usdot, company_name, fname, lname, street, phone_no, email, mobile, created_by, creation_datetime', 'required'),
			array('ext2, ext3', 'numerical', 'integerOnly'=>true),
			array('email', 'email'),
			array('city, state, zip, fax, comments, ext1,ext2, ext3,', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, usdot, company_name, fname, lname, street, city, state, zip, phone_no, fax, email, mobile, services, comments, ext1, ext2, ext3, created_by, creation_datetime', 'safe', 'on'=>'search'),
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
			'usdot' => 'USDOT# / MC# / FF#',
			'company_name' => 'Company Name',
			'fname' => 'First Name',
			'lname' => 'Last Name',
			'street' => 'Street',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
			'phone_no' => 'Phone No',
			'fax' => 'Fax',
			'email' => 'Email',
			'mobile' => 'Mobile',
			'services' => 'Services',
			'comments' => 'Comments',
			'ext1' => 'Street Address (Cont.)',
			'ext2' => 'Ext2',
			'ext3' => 'Ext3',
			'created_by' => 'Created By',
			'creation_datetime' => 'Creation Datetime',
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
		$criteria->compare('usdot',$this->usdot,true);
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('phone_no',$this->phone_no,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('services',$this->services,true);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('ext1',$this->ext1,true);
		$criteria->compare('ext2',$this->ext2);
		$criteria->compare('ext3',$this->ext3);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('creation_datetime',$this->creation_datetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DotTrackerBoc the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
