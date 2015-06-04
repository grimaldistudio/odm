<?php

/**
 * This is the model class for table "ds_anagrafica".
 *
 * The followings are the available columns in table 'ds_anagrafica':
 * @property string $CODICE
 * @property string $ID_PA_ATTIVA
 * @property integer $STATO
 * @property integer $EVIDE
 * @property string $TITOLO
 * @property string $AREA
 * @property string $SOTTOAREA
 * @property string $TIPO_AGG
 * @property string $D_CRE
 * @property string $DESCRIZIONE
 * @property string $LICENZA
 * @property string $PROPRIETARIO
 * @property integer $LEG_APP
 * @property string $LEG_UT
 * @property string $LEG_D
 * @property string $LTAG
 * @property string $TAB
 * @property string $IMG_DETT
 * @property string $D_AGG
 */
class DsAnagrafica extends CActiveRecord
{
    public $totalDatasetInTheCategories;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ds_anagrafica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_PA_ATTIVA', 'required'),
			array('STATO, EVIDE, LEG_APP', 'numerical', 'integerOnly'=>true),
			array('ID_PA_ATTIVA, TIPO_AGG, LICENZA', 'length', 'max'=>20),
			array('TITOLO', 'length', 'max'=>80),
			array('AREA', 'length', 'max'=>70),
			array('SOTTOAREA, LEG_UT, TAB', 'length', 'max'=>50),
			array('PROPRIETARIO', 'length', 'max'=>45),
			array('D_CRE, DESCRIZIONE, LEG_D, LTAG, IMG_DETT, D_AGG', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CODICE, ID_PA_ATTIVA, STATO, EVIDE, TITOLO, AREA, SOTTOAREA, TIPO_AGG, D_CRE, DESCRIZIONE, LICENZA, PROPRIETARIO, LEG_APP, LEG_UT, LEG_D, LTAG, TAB, IMG_DETT, D_AGG', 'safe', 'on'=>'search'),
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
			'STATO' => 'Stato',
			'EVIDE' => 'Evide',
			'TITOLO' => 'Titolo',
			'AREA' => 'Area',
			'SOTTOAREA' => 'Sottoarea',
			'TIPO_AGG' => 'Tipo Agg',
			'D_CRE' => 'D Cre',
			'DESCRIZIONE' => 'Descrizione',
			'LICENZA' => 'Licenza',
			'PROPRIETARIO' => 'Proprietario',
			'LEG_APP' => 'Leg App',
			'LEG_UT' => 'Leg Ut',
			'LEG_D' => 'Leg D',
			'LTAG' => 'Ltag',
			'TAB' => 'Tab',
			'IMG_DETT' => 'Img Dett',
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
		$criteria->compare('STATO',$this->STATO);
		$criteria->compare('EVIDE',$this->EVIDE);
		$criteria->compare('TITOLO',$this->TITOLO,true);
		$criteria->compare('AREA',$this->AREA,true);
		$criteria->compare('SOTTOAREA',$this->SOTTOAREA,true);
		$criteria->compare('TIPO_AGG',$this->TIPO_AGG,true);
		$criteria->compare('D_CRE',$this->D_CRE,true);
		$criteria->compare('DESCRIZIONE',$this->DESCRIZIONE,true);
		$criteria->compare('LICENZA',$this->LICENZA,true);
		$criteria->compare('PROPRIETARIO',$this->PROPRIETARIO,true);
		$criteria->compare('LEG_APP',$this->LEG_APP);
		$criteria->compare('LEG_UT',$this->LEG_UT,true);
		$criteria->compare('LEG_D',$this->LEG_D,true);
		$criteria->compare('LTAG',$this->LTAG,true);
		$criteria->compare('TAB',$this->TAB,true);
		$criteria->compare('IMG_DETT',$this->IMG_DETT,true);
		$criteria->compare('D_AGG',$this->D_AGG,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DsAnagrafica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
