<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\City;

/**
 * CitySearch represents the model behind the search form about `common\models\City`.
 */
class CitySearch extends City
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['PARENT_ID', 'CODE', 'NAME', 'REGION_LEVEL', 'NAME_EN', 'LONGITUDE', 'LATITUDE', 'IS_STANDARD', 'COMMENTS', 'CREATOR_ID', 'CREATE_DATE', 'UPDATER_ID', 'UPDATE_DATE', 'STATUS'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = City::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ID' => $this->ID,
        ]);

        $query->andFilterWhere(['like', 'PARENT_ID', $this->PARENT_ID])
            ->andFilterWhere(['like', 'CODE', $this->CODE])
            ->andFilterWhere(['like', 'NAME', $this->NAME])
            ->andFilterWhere(['like', 'REGION_LEVEL', $this->REGION_LEVEL])
            ->andFilterWhere(['like', 'NAME_EN', $this->NAME_EN])
            ->andFilterWhere(['like', 'LONGITUDE', $this->LONGITUDE])
            ->andFilterWhere(['like', 'LATITUDE', $this->LATITUDE])
            ->andFilterWhere(['like', 'IS_STANDARD', $this->IS_STANDARD])
            ->andFilterWhere(['like', 'COMMENTS', $this->COMMENTS])
            ->andFilterWhere(['like', 'CREATOR_ID', $this->CREATOR_ID])
            ->andFilterWhere(['like', 'CREATE_DATE', $this->CREATE_DATE])
            ->andFilterWhere(['like', 'UPDATER_ID', $this->UPDATER_ID])
            ->andFilterWhere(['like', 'UPDATE_DATE', $this->UPDATE_DATE])
            ->andFilterWhere(['like', 'STATUS', $this->STATUS]);

        return $dataProvider;
    }
}
