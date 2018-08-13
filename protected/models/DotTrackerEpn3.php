<?php

/**
 * This is the model class for table "dot_tracker_epn3".
 *
 * The followings are the available columns in table 'dot_tracker_epn3':
 * @property integer $id
 * @property string $requester
 * @property string $day
 * @property string $month
 * @property string $year
 * @property string $party
 * @property string $company_name
 * @property string $dmv_sign
 * @property string $mailing_address
 * @property string $auth_sign
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $auth_name
 * @property string $ext1
 * @property string $ext2
 * @property string $ext3
 * @property string $ext4
 * @property string $created_by
 * @property string $creation_datetime
 */
class DotTrackerEpn3 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dot_tracker_epn3';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('day, month, year, party, company_name, mailing_address, city, state, zip, auth_name, created_by, creation_datetime', 'required'),
			array('requester, dmv_sign, ext1, ext2, ext3, ext4', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, requester, day, month, year, party, company_name, dmv_sign, mailing_address, auth_sign, city, state, zip, auth_name, ext1, ext2, ext3, ext4, created_by, creation_datetime', 'safe', 'on'=>'search'),
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
			'requester' => 'Requester',
			'day' => 'Day',
			'month' => 'Month',
			'year' => 'Year',
			'party' => 'Party',
			'company_name' => 'Company Name',
			'dmv_sign' => 'Dmv Sign',
			'mailing_address' => 'Mailing Address',
			'auth_sign' => 'Authorized  Sign',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
			'auth_name' => 'Authorized Name',
			'ext1' => 'Ext1',
			'ext2' => 'Ext2',
			'ext3' => 'Ext3',
			'ext4' => 'Ext4',
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
		$criteria->compare('requester',$this->requester,true);
		$criteria->compare('day',$this->day,true);
		$criteria->compare('month',$this->month,true);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('party',$this->party,true);
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('dmv_sign',$this->dmv_sign,true);
		$criteria->compare('mailing_address',$this->mailing_address,true);
		$criteria->compare('auth_sign',$this->auth_sign,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('auth_name',$this->auth_name,true);
		$criteria->compare('ext1',$this->ext1,true);
		$criteria->compare('ext2',$this->ext2,true);
		$criteria->compare('ext3',$this->ext3,true);
		$criteria->compare('ext4',$this->ext4,true);
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
	 * @return DotTrackerEpn3 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
