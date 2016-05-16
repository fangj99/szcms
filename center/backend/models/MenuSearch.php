<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Menu;

/**
 * MenuSearch represents the model behind the search form about `backend\models\Menu`.
 */
class MenuSearch extends Menu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'sort_id', 'parent_id', 'create_at', 'update_at'], 'integer'],
            [['title', 'icon', 'route', 'url', 'target', 'ajax', 'show', 'remark'], 'safe'],
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
        $query = Menu::find();

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
            'sort_id' => $this->sort_id,
            'parent_id' => $this->parent_id,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'icon', $this->icon])
            ->andFilterWhere(['like', 'route', $this->route])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'target', $this->target])
            ->andFilterWhere(['like', 'ajax', $this->ajax])
            ->andFilterWhere(['like', 'show', $this->show])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
