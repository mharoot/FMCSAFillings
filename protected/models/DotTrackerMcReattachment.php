<?php

/**
 * This is the model class for table "dot_tracker_mc_reattachment".
 *
 * The followings are the available columns in table 'dot_tracker_mc_reattachment':
 * @property integer $id
 * @property string $usdot
 * @property string $mc
 * @property string $legal_business_name
 * @property string $office_name
 * @property string $date
 * @property string $created_by
 * @property string $creation_datetime
 */
class DotTrackerMcReattachment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dot_tracker_mc_reattachment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usdot, mc, legal_business_name, office_name, date, created_by, creation_datetime', 'required'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, usdot, mc, legal_business_name, office_name, date, created_by, creation_datetime', 'safe', 'on'=>'search'),
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
			'usdot' => 'Usdot',
			'mc' => 'Mc',
			'legal_business_name' => 'Legal Business Name',
			'office_name' => 'Official Name',
			'date' => 'Date',
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
		$criteria->compare('mc',$this->mc,true);
		$criteria->compare('legal_business_name',$this->legal_business_name,true);
		$criteria->compare('office_name',$this->office_name,true);
		$criteria->compare('date',$this->date,true);
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
	 * @return DotTrackerMcReattachment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
