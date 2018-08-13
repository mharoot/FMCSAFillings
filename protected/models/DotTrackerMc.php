<?php

/**
 * This is the model class for table "dot_tracker_mc".
 *
 * The followings are the available columns in table 'dot_tracker_mc':
 * @property integer $id
 * @property integer $authority_c
 * @property string $authority_no
 * @property string $legal_business_name
 * @property string $doing_business_as
 * @property string $p_street
 * @property string $p_state
 * @property string $p_city
 * @property string $p_zip
 * @property integer $p_telephone
 * @property integer $p_fax
 * @property string $m_street
 * @property string $m_city
 * @property string $m_state
 * @property string $m_zip
 * @property integer $m_telephone
 * @property integer $m_fax
 * @property string $r_name
 * @property string $r_title
 * @property string $r_street
 * @property string $r_state
 * @property string $r_zip
 * @property string $r_telephone
 * @property string $r_fax
 * @property integer $dot_number
 * @property integer $form_of_business_c
 * @property string $form_of_business
 * @property string $type_of_auth
 * @property string $p_29a
 * @property integer $p_29b
 * @property integer $p_30
 * @property integer $p_31
 * @property string $affl_cont
 * @property string $affl_file
 * @property integer $p_33
 * @property integer $p_34
 * @property integer $p_35
 * @property integer $p_36_check
 * @property string $p_36_file
 * @property integer $p_37
 * @property string $p_38_name
 * @property string $sign_link
 * @property string $title
 * @property string $date
 * @property integer $no_of_checkboxes
 * @property integer $payment_method
 * @property integer $cc_type
 * @property integer $cc_number
 * @property string $cc_date
 * @property string $cc_name
 * @property integer $payment_amount
 * @property string $street
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $sign_link1
 * @property string $date1
 * @property string $extra1
 * @property integer $extra2
 * @property integer $extra3
 * @property integer $extra4
 * @property integer $extra5
 * @property integer $extra6
 * @property string $creationdate_time
 * @property string $last_update
 * @property string $created_by
 */
class DotTrackerMc extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dot_tracker_mc';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array(' authority_c, authority_no, legal_business_name, p_street, p_state, p_city, p_zip, p_telephone, p_fax, m_street, m_city, m_state, m_zip, m_telephone, m_fax, r_name, r_title, r_street, r_state,r_city, r_zip, r_telephone, r_fax, form_of_business_c, form_of_business, type_of_auth, p_29a, p_29b, p_30, p_31, affl_cont, affl_file, p_33, p_34, p_35, p_36_check, p_36_file, p_37, p_38_name, sign_link, title, date, no_of_checkboxes, payment_method, cc_type, cc_number, cc_date, cc_name, payment_amount, street, city, state, zip, sign_link1, date1, created_by', 'required'),
			array('id, authority_c, p_telephone, p_fax, m_telephone, m_fax, dot_number, form_of_business_c, p_29b, p_30, p_31, p_33, p_34, p_35, p_36_check, p_37, no_of_checkboxes, payment_method, cc_type, cc_number, payment_amount, extra2, extra3, extra4, extra5, extra6', 'numerical', 'integerOnly'=>true),
			array('doing_business_as,extra1, creationdate_time, last_update', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, authority_c, authority_no, legal_business_name, doing_business_as, p_street, p_state, p_city, p_zip, p_telephone, p_fax, m_street, m_city, m_state, m_zip, m_telephone, m_fax, r_name, r_city,r_title, r_street, r_state, r_zip, r_telephone, r_fax, dot_number, form_of_business_c, form_of_business, type_of_auth, p_29a, p_29b, p_30, p_31, affl_cont, affl_file, p_33, p_34, p_35, p_36_check, p_36_file, p_37, p_38_name, sign_link, title, date, no_of_checkboxes, payment_method, cc_type, cc_number, cc_date, cc_name, payment_amount, street, city, state, zip, sign_link1, date1, extra1, extra2, extra3, extra4, extra5, extra6, creationdate_time, last_update, created_by', 'safe', 'on'=>'search'),
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
			'authority_c' => 'Authority C',
			'authority_no' => 'Authority No',
			'legal_business_name' => 'Legal Business Name',
			'doing_business_as' => 'Doing Business As',
			'p_street' => 'Street',
			'p_state' => 'State',
			'p_city' => 'City',
			'p_zip' => 'Zip',
			'p_telephone' => 'Telephone',
			'p_fax' => 'Fax',
			'm_street' => 'M Street',
			'm_city' => 'M City',
			'm_state' => 'M State',
			'm_zip' => 'M Zip',
			'm_telephone' => 'M Telephone',
			'm_fax' => 'M Fax',
			'r_name' => 'R Name',
			'r_title' => 'R Title',
			'r_street' => 'R Street',
			'r_state' => 'R State',
			'r_zip' => 'R Zip',
			'r_telephone' => 'R Telephone',
			'r_fax' => 'R Fax',
			'dot_number' => 'Dot Number',
			'form_of_business_c' => 'Form Of Business C',
			'form_of_business' => 'Form Of Business',
			'type_of_auth' => 'Type Of Auth',
			'p_29a' => 'P 29a',
			'p_29b' => 'P 29b',
			'p_30' => 'P 30',
			'p_31' => 'P 31',
			'affl_cont' => 'Affl Cont',
			'affl_file' => 'Affl File',
			'p_33' => 'P 33',
			'p_34' => 'P 34',
			'p_35' => 'P 35',
			'p_36_check' => 'P 36 Check',
			'p_36_file' => 'P 36 File',
			'p_37' => 'P 37',
			'p_38_name' => 'P 38 Name',
			'sign_link' => 'Sign Link',
			'title' => 'Title',
			'date' => 'Date',
			'no_of_checkboxes' => 'No Of Checkboxes',
			'payment_method' => 'Payment Method',
			'cc_type' => 'Cc Type',
			'cc_number' => 'Cc Number',
			'cc_date' => 'Cc Date',
			'cc_name' => 'Cc Name',
			'payment_amount' => 'Payment Amount',
			'street' => 'Street',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
			'sign_link1' => 'Sign Link1',
			'date1' => 'Date1',
			'extra1' => 'Extra1',
			'extra2' => 'Extra2',
			'extra3' => 'Extra3',
			'extra4' => 'Extra4',
			'extra5' => 'Extra5',
			'extra6' => 'Extra6',
			'creationdate_time' => 'Created on',
			'last_update' => 'Last Update',
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
		$criteria->compare('authority_c',$this->authority_c);
		$criteria->compare('authority_no',$this->authority_no,true);
		$criteria->compare('legal_business_name',$this->legal_business_name,true);
		$criteria->compare('doing_business_as',$this->doing_business_as,true);
		$criteria->compare('p_street',$this->p_street,true);
		$criteria->compare('p_state',$this->p_state,true);
		$criteria->compare('p_city',$this->p_city,true);
		$criteria->compare('p_zip',$this->p_zip,true);
		$criteria->compare('p_telephone',$this->p_telephone);
		$criteria->compare('p_fax',$this->p_fax);
		$criteria->compare('m_street',$this->m_street,true);
		$criteria->compare('m_city',$this->m_city,true);
		$criteria->compare('m_state',$this->m_state,true);
		$criteria->compare('m_zip',$this->m_zip,true);
		$criteria->compare('m_telephone',$this->m_telephone);
		$criteria->compare('m_fax',$this->m_fax);
		$criteria->compare('r_name',$this->r_name,true);
		$criteria->compare('r_title',$this->r_title,true);
		$criteria->compare('r_street',$this->r_street,true);
		$criteria->compare('r_state',$this->r_state,true);
		$criteria->compare('r_zip',$this->r_zip,true);
		$criteria->compare('r_telephone',$this->r_telephone,true);
		$criteria->compare('r_fax',$this->r_fax,true);
		$criteria->compare('dot_number',$this->dot_number);
		$criteria->compare('form_of_business_c',$this->form_of_business_c);
		$criteria->compare('form_of_business',$this->form_of_business,true);
		$criteria->compare('type_of_auth',$this->type_of_auth,true);
		$criteria->compare('p_29a',$this->p_29a,true);
		$criteria->compare('p_29b',$this->p_29b);
		$criteria->compare('p_30',$this->p_30);
		$criteria->compare('p_31',$this->p_31);
		$criteria->compare('affl_cont',$this->affl_cont,true);
		$criteria->compare('affl_file',$this->affl_file,true);
		$criteria->compare('p_33',$this->p_33);
		$criteria->compare('p_34',$this->p_34);
		$criteria->compare('p_35',$this->p_35);
		$criteria->compare('p_36_check',$this->p_36_check);
		$criteria->compare('p_36_file',$this->p_36_file,true);
		$criteria->compare('p_37',$this->p_37);
		$criteria->compare('p_38_name',$this->p_38_name,true);
		$criteria->compare('sign_link',$this->sign_link,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('no_of_checkboxes',$this->no_of_checkboxes);
		$criteria->compare('payment_method',$this->payment_method);
		$criteria->compare('cc_type',$this->cc_type);
		$criteria->compare('cc_number',$this->cc_number);
		$criteria->compare('cc_date',$this->cc_date,true);
		$criteria->compare('cc_name',$this->cc_name,true);
		$criteria->compare('payment_amount',$this->payment_amount);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('sign_link1',$this->sign_link1,true);
		$criteria->compare('date1',$this->date1,true);
		$criteria->compare('extra1',$this->extra1,true);
		$criteria->compare('extra2',$this->extra2);
		$criteria->compare('extra3',$this->extra3);
		$criteria->compare('extra4',$this->extra4);
		$criteria->compare('extra5',$this->extra5);
		$criteria->compare('extra6',$this->extra6);
		$criteria->compare('creationdate_time',$this->creationdate_time,true);
		$criteria->compare('last_update',$this->last_update,true);
		$criteria->compare('created_by',$this->created_by,true);

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
	 * @return DotTrackerMc the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
