<?php
// TODO: Добавить возможность выбора языка откуда парсить
/**
 * This is the model class for table "google_search_terms".
 *
 * The followings are the available columns in table 'google_search_terms':
 * @property integer $id
 * @property string $term
 *
 * The followings are the available model relations:
 * @property GoogleLinks[] $googleLinks
 * @property Users[] $users
 */
class GoogleSearchTerms extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GoogleSearchTerms the static model class
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
		return 'google_search_terms';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('term', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, term', 'safe', 'on'=>'search'),
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
			'googleLinks' => array(self::HAS_MANY, 'GoogleLinks', 'google_search_terms_id'),
			'users' => array(self::HAS_MANY, 'Users', 'google_search_terms_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'term' => 'Поисковой запрос Google',
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

		$criteria->compare('term',$this->term,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}