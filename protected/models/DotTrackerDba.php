<?php

/**
 * This is the model class for table "dot_tracker_dba".
 *
 * The followings are the available columns in table 'dot_tracker_dba':
 * @property integer $id
 * @property string $dba
 * @property string $b_address
 * @property string $b_add_address
 * @property string $b_city
 * @property string $b_state
 * @property string $b_zip
 * @property string $b_county
 * @property string $v_country
 * @property string $article_incorp
 * @property string $m_address
 * @property string $m_add_address
 * @property string $m_city
 * @property string $m_state
 * @property string $m_zip
 * @property string $m_country
 * @property string $full_name
 * @property string $s_address
 * @property string $s_add_address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $country
 * @property string $state_of_org
 * @property string $r_full_name
 * @property string $sign_name
 * @property string $sign_title
 * @property string $s_email
 * @property string $s_phone
 * @property string $business_conducted
 * @property string $date_reg
 * @property string $ext1
 * @property string $ext2
 * @property string $ext3
 * @property string $ext4
 * @property string $ext5
 * @property string $ext6
 * @property string $created_by
 * @property string $creation_datetime
 */
class DotTrackerDba extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dot_tracker_dba';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dba, b_address,  b_city, b_state, b_zip, b_county, v_country, full_name, city, state, zip, country, r_full_name, sign_title, s_email, s_phone, business_conducted, date_reg, created_by, creation_datetime', 'required'),
			array('b_add_address,article_incorp, m_address, m_add_address, m_city, m_state, m_zip, m_country, s_address, s_add_address, state_of_org, sign_name, ext1, ext2, ext3, ext4, ext5, ext6', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, dba, b_address, b_add_address, b_city, b_state, b_zip, b_county, v_country, article_incorp, m_address, m_add_address, m_city, m_state, m_zip, m_country, full_name, s_address, s_add_address, city, state, zip, country, state_of_org, r_full_name, sign_name, sign_title, s_email, s_phone, business_conducted, date_reg, ext1, ext2, ext3, ext4, ext5, ext6, created_by, creation_datetime', 'safe', 'on'=>'search'),
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
			'dba' => 'Desired Fictitious Business Name ',
			'b_address' => 'Business Address',
			'b_add_address' => 'Business Additional Address',
			'b_city' => 'Business City',
			'b_state' => 'Business State',
			'b_zip' => 'Business Zip',
			'b_county' => 'Business County',
			'v_country' => 'Business Country',
			'article_incorp' => 'Article Incorp',
			'm_address' => 'Mailing Address',
			'm_add_address' => 'Mailing Additional Address',
			'm_city' => 'Mailing City',
			'm_state' => 'Mailing State',
			'm_zip' => 'Mailing Zip',
			'm_country' => 'Mailing Country',
			'full_name' => 'Full Name',
			's_address' => 'Street Address',
			's_add_address' => 'Street Additional Address',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
			'country' => 'Country',
			'state_of_org' => 'State Of Org',
			'r_full_name' => 'Full Name/Corp Name/LLC Name',
			'sign_name' => 'Signatory`s Name',
			'sign_title' => 'Signatory`s Title',
			's_email' => 'Email',
			's_phone' => 'Phone',
			'business_conducted' => 'Business Conducted By',
			'date_reg' => 'Date registrant commenced to transact business under the fictitious business name or names listed above',
			'ext1' => 'Ext1',
			'ext2' => 'Ext2',
			'ext3' => 'Ext3',
			'ext4' => 'Ext4',
			'ext5' => 'Ext5',
			'ext6' => 'Ext6',
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
		$criteria->compare('dba',$this->dba,true);
		$criteria->compare('b_address',$this->b_address,true);
		$criteria->compare('b_add_address',$this->b_add_address,true);
		$criteria->compare('b_city',$this->b_city,true);
		$criteria->compare('b_state',$this->b_state,true);
		$criteria->compare('b_zip',$this->b_zip,true);
		$criteria->compare('b_county',$this->b_county,true);
		$criteria->compare('v_country',$this->v_country,true);
		$criteria->compare('article_incorp',$this->article_incorp,true);
		$criteria->compare('m_address',$this->m_address,true);
		$criteria->compare('m_add_address',$this->m_add_address,true);
		$criteria->compare('m_city',$this->m_city,true);
		$criteria->compare('m_state',$this->m_state,true);
		$criteria->compare('m_zip',$this->m_zip,true);
		$criteria->compare('m_country',$this->m_country,true);
		$criteria->compare('full_name',$this->full_name,true);
		$criteria->compare('s_address',$this->s_address,true);
		$criteria->compare('s_add_address',$this->s_add_address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('state_of_org',$this->state_of_org,true);
		$criteria->compare('r_full_name',$this->r_full_name,true);
		$criteria->compare('sign_name',$this->sign_name,true);
		$criteria->compare('sign_title',$this->sign_title,true);
		$criteria->compare('s_email',$this->s_email,true);
		$criteria->compare('s_phone',$this->s_phone,true);
		$criteria->compare('business_conducted',$this->business_conducted,true);
		$criteria->compare('date_reg',$this->date_reg,true);
		$criteria->compare('ext1',$this->ext1,true);
		$criteria->compare('ext2',$this->ext2,true);
		$criteria->compare('ext3',$this->ext3,true);
		$criteria->compare('ext4',$this->ext4,true);
		$criteria->compare('ext5',$this->ext5,true);
		$criteria->compare('ext6',$this->ext6,true);
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
	 * @return DotTrackerDba the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
