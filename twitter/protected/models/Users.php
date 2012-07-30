<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $name
 * @property string $link
 * @property integer $google_search_terms_id
 *
 * The followings are the available model relations:
 * @property Tweets[] $tweets
 * @property GoogleSearchTerms $googleSearchTerms
 */
class Users extends CActiveRecord
{
	public $googleSearchTerms_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
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
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, link, google_search_terms_id', 'required'),
			array('google_search_terms_id', 'numerical', 'integerOnly'=>true),
			array('name, link', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, link, googleSearchTerms_search', 'safe', 'on'=>'search'),
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
			'tweets' => array(self::HAS_MANY, 'Tweets', 'users_id'),
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
			'name' => 'Имя',
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
		$criteria->with = array('googleSearchTerms');

		$criteria->compare('name',$this->name,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('googleSearchTerms.term',$this->googleSearchTerms_search, true);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort' => array(
				'attributes' => array(
					'googleSearchTerms_search' => array(
						'asc' => 'googleSearchTerms.term',
						'desc' => 'googleSearchTerms.term DESC',
					),
					'*',
				),
			),
		));
	}


        protected function afterSave()
        {
            Yii::app()->controller->redirect(array('users/index'));
                return true;
        }
}