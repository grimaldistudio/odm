<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property string $CODICE
 * @property string $ID_PA_ATTIVA
 * @property string $TITOLO
 * @property string $INTRO
 * @property string $DOCUM
 * @property string $D_AGG
 */
class News extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_PA_ATTIVA, D_AGG', 'required'),
			array('CODICE, ID_PA_ATTIVA', 'length', 'max'=>20),
			array('TITOLO', 'length', 'max'=>150),
			array('INTRO', 'length', 'max'=>250),
			array('DOCUM', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CODICE, ID_PA_ATTIVA, TITOLO, INTRO, DOCUM, D_AGG', 'safe', 'on'=>'search'),
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
			'CODICE' => 'Codice',
			'ID_PA_ATTIVA' => 'Id Pa Attiva',
			'TITOLO' => 'Titolo',
			'INTRO' => 'Intro',
			'DOCUM' => 'Docum',
			'D_AGG' => 'D Agg',
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

		$criteria->compare('CODICE',$this->CODICE,true);
		$criteria->compare('ID_PA_ATTIVA',$this->ID_PA_ATTIVA,true);
		$criteria->compare('TITOLO',$this->TITOLO,true);
		$criteria->compare('INTRO',$this->INTRO,true);
		$criteria->compare('DOCUM',$this->DOCUM,true);
		$criteria->compare('D_AGG',$this->D_AGG,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return News the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
