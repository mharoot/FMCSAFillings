<?php

/**
 * This is the model class for table "dot_tracker_oregaon".
 *
 * The followings are the available columns in table 'dot_tracker_oregaon':
 * @property integer $id
 * @property integer $usdot
 * @property string $o_full_name
 * @property string $d_full_name
 * @property string $cargo
 * @property string $highway
 * @property string $date_entering
 * @property string $loading
 * @property string $year
 * @property string $make
 * @property string $model
 * @property string $license_plate
 * @property string $vin_no
 * @property string $unit_no
 * @property string $odometer
 * @property string $vehicle_owned
 * @property string $miles
 * @property string $apportioned
 * @property string $ext1
 * @property string $ext2
 * @property string $ext3
 * @property string $ext4
 * @property string $ext5
 * @property string $ext6
 * @property string $ext7
 * @property string $ext8
 * @property string $ext9
 * @property string $ext10
 * @property string $created_by
 * @property string $creation_datetime
 */
class DotTrackerOregaon extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dot_tracker_oregaon';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array(' usdot, o_full_name, d_full_name, cargo, highway, date_entering, loading, year, make, model, license_plate, vin_no, unit_no, odometer, vehicle_owned, miles, apportioned, created_by, creation_datetime,ext1,ext2,ext3,ext4, ext5', 'required'),
			array('id, usdot', 'numerical', 'integerOnly'=>true),
			array('ext1, ext2, ext3, ext4, ext5, ext6, ext7, ext8, ext9, ext10', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, usdot, o_full_name, d_full_name, cargo, highway, date_entering, loading, year, make, model, license_plate, vin_no, unit_no, odometer, vehicle_owned, miles, apportioned, ext1, ext2, ext3, ext4, ext5, ext6, ext7, ext8, ext9, ext10, created_by, creation_datetime', 'safe', 'on'=>'search'),
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
			'usdot' => 'USDOT # ',
			'o_full_name' => 'OWNER\'S FULL NAME',
			'd_full_name' => 'DRIVER\'S FULL NAME',
			'cargo' => 'Cargo',
			'highway' => 'WHAT HIGHWAY / INTERSTATE ARE YOU ENTERING AND EXISTING FROM?',
			'date_entering' => 'Date Entering',
			'loading' => 'LOADING OR PASSING THROUGH',
			'year' => 'Year',
			'make' => 'Make',
			'model' => 'Model',
			'license_plate' => 'License Plate',
			'vin_no' => 'Vin No',
			'unit_no' => 'Unit No',
			'odometer' => 'Odometer',
			'vehicle_owned' => 'IS VEHICLE OWNED OR LEASED?',
			'miles' => 'HOW MANY MILES ARE YOU SET UP FOR BY IRP TO ENTER EACH STATE?',
			'apportioned' => 'WHAT IS THE # APPORTIONED FOR STATE OREGON?',
			'ext1' => 'EIN# / TAX ID#',
			'ext2' => 'STATE LICENSE PLATE IS ISSUED?',
			'ext3' => 'IS LICENSE PLATE APPORTIONED FOR ISSUED STATE ONLY OR OTHER STATES AS WELL ON REGISTRATION?',
			'ext4' => 'Date Exiting',
			'ext5' => 'WHAT HIGHWAY / INTERSTATE ARE YOU EXITING FROM?',
			'ext6' => 'Ext6',
			'ext7' => 'Ext7',
			'ext8' => 'Ext8',
			'ext9' => 'Ext9',
			'ext10' => 'Ext10',
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
		$criteria->compare('o_full_name',$this->o_full_name,true);
		$criteria->compare('d_full_name',$this->d_full_name,true);
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('highway',$this->highway,true);
		$criteria->compare('date_entering',$this->date_entering,true);
		$criteria->compare('loading',$this->loading,true);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('make',$this->make,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('license_plate',$this->license_plate,true);
		$criteria->compare('vin_no',$this->vin_no,true);
		$criteria->compare('unit_no',$this->unit_no,true);
		$criteria->compare('odometer',$this->odometer,true);
		$criteria->compare('vehicle_owned',$this->vehicle_owned,true);
		$criteria->compare('miles',$this->miles,true);
		$criteria->compare('apportioned',$this->apportioned,true);
		$criteria->compare('ext1',$this->ext1,true);
		$criteria->compare('ext2',$this->ext2,true);
		$criteria->compare('ext3',$this->ext3,true);
		$criteria->compare('ext4',$this->ext4,true);
		$criteria->compare('ext5',$this->ext5,true);
		$criteria->compare('ext6',$this->ext6,true);
		$criteria->compare('ext7',$this->ext7,true);
		$criteria->compare('ext8',$this->ext8,true);
		$criteria->compare('ext9',$this->ext9,true);
		$criteria->compare('ext10',$this->ext10,true);
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
	 * @return DotTrackerOregaon the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
