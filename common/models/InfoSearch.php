<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Info;

/**
 * InfoSearch represents the model behind the search form about `common\models\Info`.
 */
class InfoSearch extends Info
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cateid', 'price', 'shouyi', 'shoufu', 'zhangfu', 'zujin', 'createtime'], 'integer'],
            [['title', 'dizhi', 'guige', 'tese', 'indeximg', 'content', 'desc', 'banner'], 'safe'],
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
        $query = Info::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'cateid' => $this->cateid,
            'price' => $this->price,
            'shouyi' => $this->shouyi,
            'shoufu' => $this->shoufu,
            'zhangfu' => $this->zhangfu,
            'zujin' => $this->zujin,
            'createtime' => $this->createtime,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'dizhi', $this->dizhi])
            ->andFilterWhere(['like', 'guige', $this->guige])
            ->andFilterWhere(['like', 'tese', $this->tese])
            ->andFilterWhere(['like', 'indeximg', $this->indeximg])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'desc', $this->desc])
            ->andFilterWhere(['like', 'banner', $this->banner]);

        return $dataProvider;
    }
}
