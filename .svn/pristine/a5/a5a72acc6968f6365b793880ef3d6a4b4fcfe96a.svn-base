<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SiteModel;

/**
 * SiteSearch represents the model behind the search form about `common\models\SiteModel`.
 */
class SiteSearch extends SiteModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['sitename', 'mechanism', 'province', 'city', 'discription', 'cnurl', 'enurl', 'weibo', 'email'], 'safe'],
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
        $query = SiteModel::find();

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
            'id' => $this->id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'sitename', $this->sitename])
            ->andFilterWhere(['like', 'mechanism', $this->mechanism])
            ->andFilterWhere(['like', 'province', $this->province])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'discription', $this->discription])
            ->andFilterWhere(['like', 'cnurl', $this->cnurl])
            ->andFilterWhere(['like', 'enurl', $this->enurl])
            ->andFilterWhere(['like', 'weibo', $this->weibo])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
