<?php

/**
 * This is the model class for table "dot_tracker_epn2".
 *
 * The followings are the available columns in table 'dot_tracker_epn2':
 * @property integer $id
 * @property string $employer
 * @property string $current_address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property integer $is_enroll
 * @property string $requester_code
 * @property string $date
 * @property string $telephone
 * @property string $ext
 * @property string $contact_name
 * @property string $c11
 * @property string $c12
 * @property string $c13
 * @property string $c14
 * @property string $c21
 * @property string $c22
 * @property string $c23
 * @property string $c24
 * @property string $c31
 * @property string $c32
 * @property string $c33
 * @property string $c34
 * @property string $c41
 * @property string $c42
 * @property string $c43
 * @property string $c44
 * @property string $c51
 * @property string $c52
 * @property string $c53
 * @property string $c54
 * @property string $c61
 * @property string $c62
 * @property string $c63
 * @property string $c64
 * @property string $c71
 * @property string $c72
 * @property string $c73
 * @property string $c74
 * @property string $c81
 * @property string $c82
 * @property string $c83
 * @property string $c84
 * @property string $c91
 * @property string $c92
 * @property string $c93
 * @property string $c94
 * @property string $c101
 * @property string $c102
 * @property string $c103
 * @property string $c104
 * @property string $c111
 * @property string $c112
 * @property string $c113
 * @property string $c114
 * @property string $c121
 * @property string $c122
 * @property string $c123
 * @property string $c124
 * @property string $c131
 * @property string $c132
 * @property string $c133
 * @property string $c134
 * @property string $c141
 * @property string $c151
 * @property string $c152
 * @property string $c153
 * @property string $c154
 * @property string $c142
 * @property string $c143
 * @property string $c144
 * @property string $ext1
 * @property string $ext2
 * @property string $ext3
 * @property string $ext4
 * @property string $ext5
 * @property string $ext6
 * @property string $ext7
 * @property string $printed_name
 * @property string $sign
 * @property string $sign_date
 * @property string $created_by
 * @property string $creation_datetime
 */
class DotTrackerEpn2 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dot_tracker_epn2';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employer, current_address, city, state, zip, is_enroll, date, telephone, contact_name, created_by, creation_datetime,ext6, ext7', 'required'),
			array('is_enroll', 'numerical', 'integerOnly'=>true),
			array('requester_code, ext, c11, c12, c13, c14, c21, c22, c23, c24, c31, c32, c33, c34, c41, c42, c43, c44, c51, c52, c53, c54, c61, c62, c63, c64, c71, c72, c73, c74, c81, c82, c83, c84, c91, c92, c93, c94, c101, c102, c103, c104, c111, c112, c113, c114, c121, c122, c123, c124, c131, c132, c133, c134, c141, c151, c152, c153, c154, c142, c143, c144, ext1, ext2, ext3, ext4, ext5, ext6, ext7, printed_name, sign, sign_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, employer, current_address, city, state, zip, is_enroll, requester_code, date, telephone, ext, contact_name, c11, c12, c13, c14, c21, c22, c23, c24, c31, c32, c33, c34, c41, c42, c43, c44, c51, c52, c53, c54, c61, c62, c63, c64, c71, c72, c73, c74, c81, c82, c83, c84, c91, c92, c93, c94, c101, c102, c103, c104, c111, c112, c113, c114, c121, c122, c123, c124, c131, c132, c133, c134, c141, c151, c152, c153, c154, c142, c143, c144, ext1, ext2, ext3, ext4, ext5, ext6, ext7, printed_name, sign, sign_date, created_by, creation_datetime', 'safe', 'on'=>'search'),
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
			'employer' => 'Employer',
			'current_address' => 'Current Address',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
			'is_enroll' => 'Enrollment/Deletion Status',
			'requester_code' => 'Requester Code',
			'date' => 'Date',
			'telephone' => 'Telephone',
			'ext' => 'Ext',
			'contact_name' => 'Contact Name',
			'c11' => 'C11',
			'c12' => 'C12',
			'c13' => 'C13',
			'c14' => 'C14',
			'c21' => 'C21',
			'c22' => 'C22',
			'c23' => 'C23',
			'c24' => 'C24',
			'c31' => 'C31',
			'c32' => 'C32',
			'c33' => 'C33',
			'c34' => 'C34',
			'c41' => 'C41',
			'c42' => 'C42',
			'c43' => 'C43',
			'c44' => 'C44',
			'c51' => 'C51',
			'c52' => 'C52',
			'c53' => 'C53',
			'c54' => 'C54',
			'c61' => 'C61',
			'c62' => 'C62',
			'c63' => 'C63',
			'c64' => 'C64',
			'c71' => 'C71',
			'c72' => 'C72',
			'c73' => 'C73',
			'c74' => 'C74',
			'c81' => 'C81',
			'c82' => 'C82',
			'c83' => 'C83',
			'c84' => 'C84',
			'c91' => 'C91',
			'c92' => 'C92',
			'c93' => 'C93',
			'c94' => 'C94',
			'c101' => 'C101',
			'c102' => 'C102',
			'c103' => 'C103',
			'c104' => 'C104',
			'c111' => 'C111',
			'c112' => 'C112',
			'c113' => 'C113',
			'c114' => 'C114',
			'c121' => 'C121',
			'c122' => 'C122',
			'c123' => 'C123',
			'c124' => 'C124',
			'c131' => 'C131',
			'c132' => 'C132',
			'c133' => 'C133',
			'c134' => 'C134',
			'c141' => 'C141',
			'c151' => 'C151',
			'c152' => 'C152',
			'c153' => 'C153',
			'c154' => 'C154',
			'c142' => 'C142',
			'c143' => 'C143',
			'c144' => 'C144',
			'ext1' => 'Ext1',
			'ext2' => 'Ext2',
			'ext3' => 'Ext3',
			'ext4' => 'Ext4',
			'ext5' => 'Ext5',
			'ext6' => 'Email Address',
			'ext7' => 'Mobile',
			'printed_name' => 'Printed Name',
			'sign' => 'Sign',
			'sign_date' => 'Sign Date',
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
		$criteria->compare('employer',$this->employer,true);
		$criteria->compare('current_address',$this->current_address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('is_enroll',$this->is_enroll);
		$criteria->compare('requester_code',$this->requester_code,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('ext',$this->ext,true);
		$criteria->compare('contact_name',$this->contact_name,true);
		$criteria->compare('c11',$this->c11,true);
		$criteria->compare('c12',$this->c12,true);
		$criteria->compare('c13',$this->c13,true);
		$criteria->compare('c14',$this->c14,true);
		$criteria->compare('c21',$this->c21,true);
		$criteria->compare('c22',$this->c22,true);
		$criteria->compare('c23',$this->c23,true);
		$criteria->compare('c24',$this->c24,true);
		$criteria->compare('c31',$this->c31,true);
		$criteria->compare('c32',$this->c32,true);
		$criteria->compare('c33',$this->c33,true);
		$criteria->compare('c34',$this->c34,true);
		$criteria->compare('c41',$this->c41,true);
		$criteria->compare('c42',$this->c42,true);
		$criteria->compare('c43',$this->c43,true);
		$criteria->compare('c44',$this->c44,true);
		$criteria->compare('c51',$this->c51,true);
		$criteria->compare('c52',$this->c52,true);
		$criteria->compare('c53',$this->c53,true);
		$criteria->compare('c54',$this->c54,true);
		$criteria->compare('c61',$this->c61,true);
		$criteria->compare('c62',$this->c62,true);
		$criteria->compare('c63',$this->c63,true);
		$criteria->compare('c64',$this->c64,true);
		$criteria->compare('c71',$this->c71,true);
		$criteria->compare('c72',$this->c72,true);
		$criteria->compare('c73',$this->c73,true);
		$criteria->compare('c74',$this->c74,true);
		$criteria->compare('c81',$this->c81,true);
		$criteria->compare('c82',$this->c82,true);
		$criteria->compare('c83',$this->c83,true);
		$criteria->compare('c84',$this->c84,true);
		$criteria->compare('c91',$this->c91,true);
		$criteria->compare('c92',$this->c92,true);
		$criteria->compare('c93',$this->c93,true);
		$criteria->compare('c94',$this->c94,true);
		$criteria->compare('c101',$this->c101,true);
		$criteria->compare('c102',$this->c102,true);
		$criteria->compare('c103',$this->c103,true);
		$criteria->compare('c104',$this->c104,true);
		$criteria->compare('c111',$this->c111,true);
		$criteria->compare('c112',$this->c112,true);
		$criteria->compare('c113',$this->c113,true);
		$criteria->compare('c114',$this->c114,true);
		$criteria->compare('c121',$this->c121,true);
		$criteria->compare('c122',$this->c122,true);
		$criteria->compare('c123',$this->c123,true);
		$criteria->compare('c124',$this->c124,true);
		$criteria->compare('c131',$this->c131,true);
		$criteria->compare('c132',$this->c132,true);
		$criteria->compare('c133',$this->c133,true);
		$criteria->compare('c134',$this->c134,true);
		$criteria->compare('c141',$this->c141,true);
		$criteria->compare('c151',$this->c151,true);
		$criteria->compare('c152',$this->c152,true);
		$criteria->compare('c153',$this->c153,true);
		$criteria->compare('c154',$this->c154,true);
		$criteria->compare('c142',$this->c142,true);
		$criteria->compare('c143',$this->c143,true);
		$criteria->compare('c144',$this->c144,true);
		$criteria->compare('ext1',$this->ext1,true);
		$criteria->compare('ext2',$this->ext2,true);
		$criteria->compare('ext3',$this->ext3,true);
		$criteria->compare('ext4',$this->ext4,true);
		$criteria->compare('ext5',$this->ext5,true);
		$criteria->compare('ext6',$this->ext6,true);
		$criteria->compare('ext7',$this->ext7,true);
		$criteria->compare('printed_name',$this->printed_name,true);
		$criteria->compare('sign',$this->sign,true);
		$criteria->compare('sign_date',$this->sign_date,true);
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
	 * @return DotTrackerEpn2 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
