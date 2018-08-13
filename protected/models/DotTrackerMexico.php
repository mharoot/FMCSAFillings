<?php

/**
 * This is the model class for table "dot_tracker_mexico".
 *
 * The followings are the available columns in table 'dot_tracker_mexico':
 * @property integer $id
 * @property integer $usdot
 * @property string $ein
 * @property integer $no_of_axles
 * @property string $vin_no
 * @property string $vehicle_owned
 * @property string $truck_unit_no
 * @property string $title_state
 * @property string $make
 * @property string $model
 * @property string $year
 * @property string $license_plate
 * @property string $plate_state
 * @property string $type_of_fuel
 * @property string $unloaded_weight
 * @property string $ext1
 * @property string $ext2
 * @property string $ext3
 * @property string $ext4
 * @property string $ext5
 * @property string $ext6
 * @property string $ext7
 * @property string $created_by
 * @property string $creation_datetime
 */
class DotTrackerMexico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dot_tracker_mexico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usdot, ein, no_of_axles, vin_no, vehicle_owned, truck_unit_no, title_state, make, model, year, license_plate, plate_state, type_of_fuel, unloaded_weight, created_by, creation_datetime,ext1', 'required'),
			array('usdot, no_of_axles', 'numerical', 'integerOnly'=>true),
			array('ext1, ext2, ext3, ext4, ext5, ext6, ext7', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, usdot, ein, no_of_axles, vin_no, vehicle_owned, truck_unit_no, title_state, make, model, year, license_plate, plate_state, type_of_fuel, unloaded_weight, ext1, ext2, ext3, ext4, ext5, ext6, ext7, created_by, creation_datetime', 'safe', 'on'=>'search'),
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
			'usdot' => 'USDOT #',
			'ein' => 'EIN# / SSN',
			'no_of_axles' => 'No Of Axles',
			'vin_no' => 'VIN #',
			'vehicle_owned' => 'IS THE VEHICLE OWNED OR LEASED?',
			'truck_unit_no' => 'WHAT IS THE TRUCK UNIT #',
			'title_state' => 'TITLE STATE',
			'make' => 'Make',
			'model' => 'Model',
			'year' => 'Year',
			'license_plate' => 'License Plate #',
			'plate_state' => 'Plate State',
			'type_of_fuel' => 'Type Of Fuel',
			'unloaded_weight' => 'Unladen Weight',
			'ext1' => 'GROSS VEHICLES WEIGHT (GFW)',
			'ext2' => 'Ext2',
			'ext3' => 'Ext3',
			'ext4' => 'Ext4',
			'ext5' => 'Ext5',
			'ext6' => 'Ext6',
			'ext7' => 'Ext7',
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
		$criteria->compare('ein',$this->ein,true);
		$criteria->compare('no_of_axles',$this->no_of_axles);
		$criteria->compare('vin_no',$this->vin_no,true);
		$criteria->compare('vehicle_owned',$this->vehicle_owned,true);
		$criteria->compare('truck_unit_no',$this->truck_unit_no,true);
		$criteria->compare('title_state',$this->title_state,true);
		$criteria->compare('make',$this->make,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('license_plate',$this->license_plate,true);
		$criteria->compare('plate_state',$this->plate_state,true);
		$criteria->compare('type_of_fuel',$this->type_of_fuel,true);
		$criteria->compare('unloaded_weight',$this->unloaded_weight,true);
		$criteria->compare('ext1',$this->ext1,true);
		$criteria->compare('ext2',$this->ext2,true);
		$criteria->compare('ext3',$this->ext3,true);
		$criteria->compare('ext4',$this->ext4,true);
		$criteria->compare('ext5',$this->ext5,true);
		$criteria->compare('ext6',$this->ext6,true);
		$criteria->compare('ext7',$this->ext7,true);
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
	 * @return DotTrackerMexico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
