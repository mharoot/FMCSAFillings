<?php

/**
 * This is the model class for table "dot_tracker_corporationform".
 *
 * The followings are the available columns in table 'dot_tracker_corporationform':
 * @property integer $id
 * @property string $name
 * @property string $street
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $m_street
 * @property string $m_city
 * @property string $m_state
 * @property string $m_zip
 * @property string $ca_fname
 * @property string $ca_mname
 * @property string $ca_lname
 * @property integer $ca_suffix
 * @property string $ag_street
 * @property string $ag_city
 * @property string $ag_state
 * @property string $ag_zip
 * @property integer $shares
 * @property string $creation_datetime
 * @property string $last_updated
 */
class DotTrackerCorporationform extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dot_tracker_corporationform';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, street, city, state, zip, , shares, creation_datetime,phone,mobile,sign_name', 'required'),
			array('shares', 'numerical', 'integerOnly'=>true),
			array('phone', 'email'),
			array('ca_fname, ca_lname, ag_street, ag_city, ag_state, ag_zip','check4ab'),
			array('c3filed','check3ab'),

			array('m_street, m_city, m_state, m_zip,phone,mobile,sign_name,ext1,ext2,ca_mname,ca_suffix,ca_fname, ca_lname, ag_street, ag_city, ag_state, ag_zip,c3filed', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, street, city, state, zip, m_street, m_city, m_state, m_zip, ca_fname, ca_mname, ca_lname, ca_suffix, ag_street, ag_city, ag_state, ag_zip, shares, creation_datetime, last_updated', 'safe', 'on'=>'search'),
		);
	}

	/**    c3filed
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	public function check3ab()
    {
        if(!$this->hasErrors())
        {
            if((!empty($this->ca_fname) && !empty($this->c3filed)) || (empty($this->ca_fname) && empty($this->c3filed)))
            {
                $this->addError('c3filed','You need to provide either Individual OR Corporation Details.(Enter only 3a,b or 3c)');
            }

        }
    }

    public function check4ab()
    {
        if(!$this->hasErrors())
        {


            if(!empty($this->ca_fname) && !empty($this->c3filed))
            {
                $this->addError('ca_fname','You need to provide either Individual OR Corporation Details.(Enter only 3a,b or 3c)');
            }
            else{
                if(!empty($this->ca_fname))
                {
                   if(empty($this->ca_lname))
                   {
                       $this->addError('ca_fname','Please enter last name');
                   }
                    if(empty($this->ag_street))
                    {
                        $this->addError('ca_fname','Please enter Street Address');
                    }

                    if(empty($this->ag_city))
                    {
                        $this->addError('ca_fname','Please enter city');
                    }

                    if(empty($this->ag_state))
                    {
                        $this->addError('ca_fname','Please enter state name');
                    }

                    if(empty($this->zip))
                    {
                        $this->addError('ca_fname','Please enter zip');
                    }


                }
            }


        }
    }

	/**  ALTER TABLE `dot_tracker_corporationform` ADD `3cfiled` TEXT NOT NULL AFTER `ag_zip`;
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name of the corporation ',
			'street' => 'Initial Street Address of Corporation',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip Code',
			'm_street' => 'Initial Mailing Address of Corporation',
			'm_city' => 'City',
			'm_state' => 'State',
			'm_zip' => 'Zip Code',
			'ca_fname' => 'California Agent First Name',
			'ca_mname' => 'Middle Name',
			'ca_lname' => 'last Name',
			'ca_suffix' => 'Suffix',
			'ag_street' => 'Street Address ',
			'ag_city' => 'City',
			'ag_state' => 'State',
			'ag_zip' => 'Zip Code',
			'mobile' => 'Mobile',
			'phone' => 'Email',
			'sign_name' => 'Incorporator Name',
			'shares' => 'Total Number of Shares',
			'creation_datetime' => 'Created on',
			'last_updated' => 'Last Updated on',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('m_street',$this->m_street,true);
		$criteria->compare('m_city',$this->m_city,true);
		$criteria->compare('m_state',$this->m_state,true);
		$criteria->compare('m_zip',$this->m_zip,true);
		$criteria->compare('ca_fname',$this->ca_fname,true);
		$criteria->compare('ca_mname',$this->ca_mname,true);
		$criteria->compare('ca_lname',$this->ca_lname,true);
		$criteria->compare('ca_suffix',$this->ca_suffix);
		$criteria->compare('ag_street',$this->ag_street,true);
		$criteria->compare('ag_city',$this->ag_city,true);
		$criteria->compare('ag_state',$this->ag_state,true);
		$criteria->compare('ag_zip',$this->ag_zip,true);
		$criteria->compare('shares',$this->shares);
		$criteria->compare('creation_datetime',$this->creation_datetime,true);
		$criteria->compare('last_updated',$this->last_updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DotTrackerCorporationform the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
