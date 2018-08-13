<?php

/**
 * This is the model class for table "dot_tracker_epn1".
 *
 * The followings are the available columns in table 'dot_tracker_epn1':
 * @property integer $id
 * @property string $company_name
 * @property string $dba
 * @property string $attention
 * @property string $email_address
 * @property string $telephone
 * @property string $mailing_address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $acc_person
 * @property string $acc_email_address
 * @property string $acc_telephone
 * @property string $acc_street_address
 * @property string $acc_city
 * @property string $acc_state
 * @property string $acc_zip
 * @property string $billing_person
 * @property string $billing_telephone
 * @property string $billing_attention
 * @property string $billing_telephone2
 * @property string $billing_address
 * @property string $billing_city
 * @property string $billing_state
 * @property string $billing_zip
 * @property string $licensing_name
 * @property string $licensing_title
 * @property string $licensing_dl_nmber
 * @property string $licensing_state
 * @property string $licensing_expiration
 * @property string $licensing_email
 * @property string $licensing_federal_employer
 * @property string $purpose_enrollment
 * @property integer $all_employee_mandate
 * @property integer $issued_requester_code
 * @property string $issued_requester_code_a
 * @property string $issued_requester_code_b
 * @property string $sign_link
 * @property string $extra
 * @property string $creation_datetime
 * @property string $created_by
 * @property string $telephone_ext
 * @property string $acc_telephone_ext
 * @property string $billing_telephone_ext
 * @property string $billing_telephone2_ext
 */
class DotTrackerEpn1 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dot_tracker_epn1';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('company_name, attention, email_address, telephone, mailing_address, city, state, zip, acc_person, acc_email_address, acc_telephone, acc_street_address, acc_city, acc_state, acc_zip, billing_person, billing_attention, billing_address, billing_city, billing_state, billing_zip, licensing_name, licensing_title, licensing_dl_nmber, licensing_state, licensing_expiration, licensing_email, licensing_federal_employer, purpose_enrollment, all_employee_mandate, issued_requester_code, creation_datetime, created_by', 'required'),
			array('all_employee_mandate, issued_requester_code', 'numerical', 'integerOnly'=>true),
			array('dba, billing_telephone, billing_telephone2, issued_requester_code_a, issued_requester_code_b, sign_link, extra, telephone_ext, acc_telephone_ext, billing_telephone_ext, billing_telephone2_ext', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, company_name, dba, attention, email_address, telephone, mailing_address, city, state, zip, acc_person, acc_email_address, acc_telephone, acc_street_address, acc_city, acc_state, acc_zip, billing_person, billing_telephone, billing_attention, billing_telephone2, billing_address, billing_city, billing_state, billing_zip, licensing_name, licensing_title, licensing_dl_nmber, licensing_state, licensing_expiration, licensing_email, licensing_federal_employer, purpose_enrollment, all_employee_mandate, issued_requester_code, issued_requester_code_a, issued_requester_code_b, sign_link, extra, creation_datetime, created_by, telephone_ext, acc_telephone_ext, billing_telephone_ext, billing_telephone2_ext', 'safe', 'on'=>'search'),
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
            'company_name' => 'COMPANY NAME',
            'dba' => 'DBA',
            'attention' => 'ATTENTION',
            'email_address' => 'EMAIL ADDRESS',
            'telephone' => 'TELEPHONE NUMBER',
            'mailing_address' => 'MAILING ADDRESS',
            'city' => 'CITY',
            'state' => 'STATE',
            'zip' => 'ZIP',
            'acc_person' => 'ACCOUNT CONTACT PERSON',
            'acc_email_address' => 'EMAIL ADDRESS',
            'acc_telephone' => 'TELEPHONE NUMBER',
            'acc_street_address' => 'STREET ADDRESS',
            'acc_city' => 'CITY',
            'acc_state' => 'STATE',
            'acc_zip' => 'ZIP',
            'billing_person' => 'BILLING ACCONT CONTACT PERSON',
            'billing_telephone' => 'TELEPHONE NUMBER',
            'billing_attention' => 'ATTENTION',
            'billing_telephone2' => 'TELEPHONE NUMBER',
            'billing_address' => 'BILLING ADDRESS',
            'billing_city' => 'CITY',
            'billing_state' => 'STATE',
            'billing_zip' => 'ZIP CODE',
            'licensing_name' => 'NAME(LAST,FIRST,MI)',
            'licensing_title' => 'TITLE',
            'licensing_dl_nmber' => 'DL/ID NUMBER',
            'licensing_state' => 'STATE ISSUED',
            'licensing_expiration' => 'EXPIRATION DATE',
            'licensing_email' => 'EMAIL ADDRESS',
            'licensing_federal_employer' => 'FEDERAL EMPLOYER IDENTIFICATION NUMBER',
            'purpose_enrollment' => 'STATE YOUR PURPOSE FOR ENROLLMENT (Be Specific)',
            'all_employee_mandate' => 'ARE ALL OF YOUR EMPLOYEES MANDATED TO BE ENROLLED IN THE PULL NOTICE PROGRAM PURSUANT TO VEHICLE CODE SECTION 1808.1(b)?',
            'issued_requester_code' => 'HAS YOUR COMPANY PREVIOUSLY BEEN ISSUED A REQUESTER CODE?',
            'issued_requester_code_a' => 'Company name(s) in which Requester Code(s) issued:',
            'issued_requester_code_b' => 'Requester Code(s) previously issued:',
            'sign_link' => 'Sign Link',
            'extra' => 'Extra',
            'creation_datetime' => 'Created  on',
            'created_by' => 'Created By',
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
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('dba',$this->dba,true);
		$criteria->compare('attention',$this->attention,true);
		$criteria->compare('email_address',$this->email_address,true);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('mailing_address',$this->mailing_address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('acc_person',$this->acc_person,true);
		$criteria->compare('acc_email_address',$this->acc_email_address,true);
		$criteria->compare('acc_telephone',$this->acc_telephone,true);
		$criteria->compare('acc_street_address',$this->acc_street_address,true);
		$criteria->compare('acc_city',$this->acc_city,true);
		$criteria->compare('acc_state',$this->acc_state,true);
		$criteria->compare('acc_zip',$this->acc_zip,true);
		$criteria->compare('billing_person',$this->billing_person,true);
		$criteria->compare('billing_telephone',$this->billing_telephone,true);
		$criteria->compare('billing_attention',$this->billing_attention,true);
		$criteria->compare('billing_telephone2',$this->billing_telephone2,true);
		$criteria->compare('billing_address',$this->billing_address,true);
		$criteria->compare('billing_city',$this->billing_city,true);
		$criteria->compare('billing_state',$this->billing_state,true);
		$criteria->compare('billing_zip',$this->billing_zip,true);
		$criteria->compare('licensing_name',$this->licensing_name,true);
		$criteria->compare('licensing_title',$this->licensing_title,true);
		$criteria->compare('licensing_dl_nmber',$this->licensing_dl_nmber,true);
		$criteria->compare('licensing_state',$this->licensing_state,true);
		$criteria->compare('licensing_expiration',$this->licensing_expiration,true);
		$criteria->compare('licensing_email',$this->licensing_email,true);
		$criteria->compare('licensing_federal_employer',$this->licensing_federal_employer,true);
		$criteria->compare('purpose_enrollment',$this->purpose_enrollment,true);
		$criteria->compare('all_employee_mandate',$this->all_employee_mandate);
		$criteria->compare('issued_requester_code',$this->issued_requester_code);
		$criteria->compare('issued_requester_code_a',$this->issued_requester_code_a,true);
		$criteria->compare('issued_requester_code_b',$this->issued_requester_code_b,true);
		$criteria->compare('sign_link',$this->sign_link,true);
		$criteria->compare('extra',$this->extra,true);
		$criteria->compare('creation_datetime',$this->creation_datetime,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('telephone_ext',$this->telephone_ext,true);
		$criteria->compare('acc_telephone_ext',$this->acc_telephone_ext,true);
		$criteria->compare('billing_telephone_ext',$this->billing_telephone_ext,true);
		$criteria->compare('billing_telephone2_ext',$this->billing_telephone2_ext,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DotTrackerEpn1 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
