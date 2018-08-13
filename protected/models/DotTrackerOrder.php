<?php

/**
 * This is the model class for table "dot_tracker_order".
 *
 * The followings are the available columns in table 'dot_tracker_order':
 * @property integer $id
 * @property integer $quote_id
 * @property string $form_details
 * @property string $extrafields
 * @property string $created_by
 * @property string $creation_datetime
 * @property integer $status
 */
class DotTrackerOrder extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dot_tracker_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('quote_id, form_details, created_by, creation_datetime', 'required'),
			array('quote_id, status', 'numerical', 'integerOnly'=>true),
			array('extrafields', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, quote_id, form_details, extrafields, created_by, creation_datetime, status', 'safe', 'on'=>'search'),
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
			'quote_id' => 'Quote',
			'form_details' => 'Form Details',
			'extrafields' => 'Extrafields',
			'created_by' => 'Created By',
			'creation_datetime' => 'Creation Datetime',
			'status' => 'Status',
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
        $userRole=FilingGenerics::getuserRole(Yii::app()->user->id);
		$criteria->compare('id',$this->id);
		$criteria->compare('quote_id',$this->quote_id);
		$criteria->compare('form_details',$this->form_details,true);
		$criteria->compare('extrafields',$this->extrafields,true);
        if($userRole==LoginForm::$allowedRole) {
            $criteria->compare('created_by',$this->created_by,true);
        }
        else{
            $criteria->compare('created_by',Yii::app()->user->id,true);
        }
		$criteria->compare('creation_datetime',$this->creation_datetime,true);
		$criteria->compare('status',$this->status);

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
	 * @return DotTrackerOrder the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
