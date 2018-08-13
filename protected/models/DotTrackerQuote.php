<?php

/**
 * This is the model class for table "dot_tracker_quote".
 *
 * The followings are the available columns in table 'dot_tracker_quote':
 * @property integer $id
 * @property string $shipper
 * @property string $email
 * @property string $address
 * @property string $fname
 * @property string $lname
 * @property string $phone
 * @property string $city
 * @property string $mobile
 * @property string $state
 * @property string $company
 * @property integer $fax
 * @property integer $zip
 * @property string $arrdata
 * @property integer $totpayment
 * @property string $creationdate
 * @property string $last_update
 * @property string $created_by
 */
class DotTrackerQuote extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	public static $enumStatus=array('followup'=>'1','hold'=>'2','quote'=>'3','archived'=>'4');
	public static $arrStatus=array('1'=>'Need to Follow Up','2'=>'On Hold','3'=>'Quoted','4'=>'Cancelled');

    public $shipper_notes;

	public function tableName()
	{
		return 'dot_tracker_quote';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array(' shipper, fname, lname, arrdata, totpayment, created_by,status', 'required'),
			array('email', 'email'),
			array('id, fax, zip,status,mobile,mailCount,smsCount', 'numerical', 'integerOnly'=>true),
			array('shipper, email, created_by', 'length', 'max'=>255),
			array('address, phone, city, mobile, state, zip,company,discounted_price', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('discounted_price,mailCount,smsCount,id, shipper, email, address, fname, lname, phone, city, mobile, state, company, fax, zip, arrdata, totpayment, creationdate, last_update, created_by, status', 'safe', 'on'=>'search'),
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
			'id' => 'Quote Id',
			'shipper' => 'Legal Business Name',
			'email' => 'Email',
			'address' => 'Address',
			'fname' => 'First Name',
			'lname' => 'Last Name',
			'phone' => 'Phone Number',
			'city' => 'City',
			'mobile' => 'Mobile Number',
			'state' => 'State',
			'company' => 'Doing Business as Name',
			'fax' => 'Fax',
			'zip' => 'Zip',
			//'arrdata' => 'arrdata',
			'totpayment' => 'Total Quote Amount',
			'creationdate' => 'Quote Generated',
			'last_update' => 'Last Updated',
			'created_by' => 'Added By',
			'status' => 'Status',
			'mailCount' => 'Mail Count',
			'smsCount' => 'SMS Count',
			'discounted_price' => 'Discounted Price',
			'arrdata' => 'Service Type',
            'agent_name'=>'Process Agent Name',
            'agent_phone'=>'Process Agent Phone'
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
	public function search($type)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
        $userRole=FilingGenerics::getuserRole(Yii::app()->user->id);

		$criteria->compare('id',$this->id);
		$criteria->compare('shipper',$this->shipper,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('fax',$this->fax);
		$criteria->compare('zip',$this->zip);
		$criteria->compare('arrdata',$this->arrdata,true);
		$criteria->compare('totpayment',$this->totpayment);
		$criteria->compare('creationdate',$this->creationdate,true);
		$criteria->compare('last_update',$this->last_update,true);
		$criteria->compare('status',$type,true);
        if($userRole==LoginForm::$allowedRole) {
            $criteria->compare('created_by',$this->created_by,true);
        }
        else{
            $criteria->compare('created_by',Yii::app()->user->id,true);
        }

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort'=>array(
                'defaultOrder'=>'id DESC',
            ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DotTrackerQuote the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
