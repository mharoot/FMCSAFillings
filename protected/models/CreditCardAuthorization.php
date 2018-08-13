<?php

/**
 * This is the model class for table "dot_tracker_authorizationForm".
 *
 * The followings are the available columns in table 'dot_tracker_authorizationForm':
 * @property integer $id
 * @property string $cc_name
 * @property string $cc_type
 * @property string $cc_number
 * @property string $cc_expdate
 * @property string $cc_seccode
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zipcode
 * @property string $phone
 * @property string $email
 * @property string $fax
 * @property string $auth_name
 * @property string $auth_company
 * @property string $auth_phoneno
 * @property string $auth_email
 * @property string $auth_drivlicense
 * @property string $auth_relationuser
 * @property string $auth_charges
 * @property string $auth_amount
 * @property string $date_of_charge
 * @property string $ccholder_name
 * @property string $sign_link
 * @property string $date
 * @property string $creation_datetime
 * @property string $last_updated
 * @property string $created_by
 */
class CreditCardAuthorization extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dot_tracker_authorizationForm';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('auth_phoneno, auth_email,created_by,order_id', 'required'),
			array('pay_log,pay_status,cc_name, cc_type, cc_number, cc_expdate, cc_seccode, city, state, zipcode,address, auth_name, auth_company, auth_phoneno, auth_email, auth_drivlicense, auth_charges, auth_amount, date_of_charge, creation_datetime,created_by', 'safe'),
			array('auth_email','email'),
			array('auth_method,cc_seccode,auth_phoneno','numerical','integerOnly'=>true,),
            array('phone,email,order_id','safe'),
            // The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pay_log,pay_status,auth_method,id, cc_name, cc_type, cc_number, cc_expdate, cc_seccode, address, city, state, zipcode, phone, email, fax, auth_name, auth_company, auth_phoneno, auth_email, auth_drivlicense, auth_relationuser, auth_charges, auth_amount, date_of_charge, ccholder_name, sign_link, date, creation_datetime, last_updated, created_by,address,email,order_id', 'safe', 'on'=>'search'),
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
			'cc_name' => 'NAME ON CREDIT CARD',
			'cc_type' => 'TYPE OF CREDIT CARD',
			'cc_number' => 'CARD NUMBER',
			'cc_expdate' => 'EXPIRATION DATE',
			'cc_seccode' => 'SECURTY CODE',
			'address' => 'STREET ADDRESS',
			'city' => 'CITY',
			'state' => 'STATE',
			'zipcode' => 'ZIP CODE',
			'phone' => 'PHONE',
			'email' => 'EMAIL',
			'fax' => 'FAX NUMBER',
			'auth_name' => 'NAME',
			'auth_company' => 'COMPANY',
			'auth_phoneno' => 'MOBILE NUMBER',
			'auth_email' => 'EMAIL ADDRESS',
			'auth_drivlicense' => 'DRIVER’S LICENSE NUMBER',
			'auth_relationuser' => 'RELATION TO OWNER',
			'auth_charges' => 'TYPE OF CHARGES',
			'auth_amount' => 'AUTHORIZED AMOUNT',
			'date_of_charge' => 'DATE OF CHARGE',
			'ccholder_name' => 'CARDHOLDER NAME',
			'sign_link' => 'SIGNATURE',
			'date' => 'DATE',
			'creation_datetime' => 'Created On',
			'last_updated' => 'Last Updated',
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
        $userRole=FilingGenerics::getuserRole(Yii::app()->user->id);

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('cc_name',$this->cc_name,true);
		$criteria->compare('cc_type',$this->cc_type,true);
		$criteria->compare('cc_number',$this->cc_number,true);
		$criteria->compare('cc_expdate',$this->cc_expdate,true);
		$criteria->compare('cc_seccode',$this->cc_seccode,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zipcode',$this->zipcode,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('auth_name',$this->auth_name,true);
		$criteria->compare('auth_company',$this->auth_company,true);
		$criteria->compare('auth_phoneno',$this->auth_phoneno,true);
		$criteria->compare('auth_email',$this->auth_email,true);
		$criteria->compare('auth_drivlicense',$this->auth_drivlicense,true);
		$criteria->compare('auth_relationuser',$this->auth_relationuser,true);
		$criteria->compare('auth_charges',$this->auth_charges,true);
		$criteria->compare('auth_amount',$this->auth_amount,true);
		$criteria->compare('date_of_charge',$this->date_of_charge,true);
		$criteria->compare('ccholder_name',$this->ccholder_name,true);
		$criteria->compare('sign_link',$this->sign_link,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('creation_datetime',$this->creation_datetime,true);
		$criteria->compare('last_updated',$this->last_updated,true);
		if($userRole==LoginForm::$allowedRole) {
            $criteria->compare('created_by',$this->created_by,true);
        }
        else{
            $criteria->compare('created_by',Yii::app()->user->id,true);
        }

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'Pagination' => array (
                'PageSize' => 50//edit your number items per page here
              ),
            'sort'=>array(
                'defaultOrder'=>'id DESC',
            ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CreditCardAuthorization the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
