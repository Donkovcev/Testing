<?php

/**
 * This is the model class for table "google_links".
 *
 * The followings are the available columns in table 'google_links':
 * @property integer $id
 * @property string $link
 * @property integer $google_search_terms_id
 *
 * The followings are the available model relations:
 * @property GoogleSearchTerms $googleSearchTerms
 */
class GoogleLinks extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GoogleLinks the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'google_links';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('link, google_search_terms_id', 'required'),
			array('google_search_terms_id', 'numerical', 'integerOnly'=>true),
			array('link', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, link, google_search_terms_id', 'safe', 'on'=>'search'),
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
			'googleSearchTerms' => array(self::BELONGS_TO, 'GoogleSearchTerms', 'google_search_terms_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'link' => 'Ссылка',
			'google_search_terms_id' => 'Поисковой запрос Google',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		$criteria->compare('link',$this->link,true);
		$criteria->compare('google_search_terms_id',$this->google_search_terms_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}