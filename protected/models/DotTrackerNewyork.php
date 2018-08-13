<?php

/**
 * This is the model class for table "dot_tracker_newyork".
 *
 * The followings are the available columns in table 'dot_tracker_newyork':
 * @property integer $id
 * @property integer $usdot
 * @property string $ein_no
 * @property string $owner_ssn
 * @property string $vehicle_type
 * @property integer $no_of_axles
 * @property string $g_weight
 * @property integer $vin_no
 * @property string $v_owned
 * @property string $truck_unit
 * @property string $title_state
 * @property string $make
 * @property string $model
 * @property string $year
 * @property string $license_plate
 * @property string $plate_state
 * @property string $fuel_type
 * @property string $unloaded_weight
 * @property string $ext1
 * @property string $ext2
 * @property string $ext3
 * @property string $ext4
 * @property string $ext5
 * @property string $ext6
 * @property string $created_by
 * @property string $creation_datetime
 */
class DotTrackerNewyork extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dot_tracker_newyork';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usdot, ein_no, owner_ssn, vehicle_type, no_of_axles, g_weight, vin_no, v_owned, truck_unit, title_state, make, model, year, license_plate, plate_state, fuel_type, unloaded_weight, created_by, creation_datetime', 'required'),
			array('usdot, no_of_axles', 'numerical', 'integerOnly'=>true),
			array('ext1, ext2, ext3, ext4, ext5, ext6, vin_no', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, usdot, ein_no, owner_ssn, vehicle_type, no_of_axles, g_weight, vin_no, v_owned, truck_unit, title_state, make, model, year, license_plate, plate_state, fuel_type, unloaded_weight, ext1, ext2, ext3, ext4, ext5, ext6, created_by, creation_datetime', 'safe', 'on'=>'search'),
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
			'id' => 'ACCOUNT #',
			'usdot' => 'USDOT #',
			'ein_no' => 'EIN# / SSN',
			'owner_ssn' => 'OWNER\'S SSN',
			'vehicle_type' => 'Vehicle Type',
			'no_of_axles' => 'No Of Axles',
			'g_weight' => 'Gross Vehicle Weight',
			'vin_no' => 'Vin No',
			'v_owned' => 'Vehicle Owned',
			'truck_unit' => 'Truck Unit',
			'title_state' => 'Title State',
			'make' => 'Make',
			'model' => 'Model',
			'year' => 'Year',
			'license_plate' => 'License Plate',
			'plate_state' => 'Plate State',
			'fuel_type' => 'Fuel Type',
			'unloaded_weight' => 'Unloaded Weight',
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
		$criteria->compare('usdot',$this->usdot);
		$criteria->compare('ein_no',$this->ein_no,true);
		$criteria->compare('owner_ssn',$this->owner_ssn,true);
		$criteria->compare('vehicle_type',$this->vehicle_type,true);
		$criteria->compare('no_of_axles',$this->no_of_axles);
		$criteria->compare('g_weight',$this->g_weight,true);
		$criteria->compare('vin_no',$this->vin_no);
		$criteria->compare('v_owned',$this->v_owned,true);
		$criteria->compare('truck_unit',$this->truck_unit,true);
		$criteria->compare('title_state',$this->title_state,true);
		$criteria->compare('make',$this->make,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('license_plate',$this->license_plate,true);
		$criteria->compare('plate_state',$this->plate_state,true);
		$criteria->compare('fuel_type',$this->fuel_type,true);
		$criteria->compare('unloaded_weight',$this->unloaded_weight,true);
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
	 * @return DotTrackerNewyork the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
