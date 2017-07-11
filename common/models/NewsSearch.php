<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\News;

/**
 * NewsSearch represents the model behind the search form about `common\models\News`.
 */
class NewsSearch extends News
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'price', 'price2', 'starttime', 'jiaofangtime', 'lvhua', 'cateid', 'createtime'], 'integer'],
            [['title', 'name', 'dizhi', 'dizhizuobiao', 'wuyetype', 'huxing', 'fangtype', 'jiaotong', 'kaifashang', 'shoulouchu', 'tell', 'img', 'description', 'chanpintype', 'xiangmustatus', 'tese', 'indexleft', 'indexright', 'tag'], 'safe'],
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
        $query = News::find();

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
            'price' => $this->price,
            'price2' => $this->price2,
            'starttime' => $this->starttime,
            'jiaofangtime' => $this->jiaofangtime,
            'lvhua' => $this->lvhua,
            'cateid' => $this->cateid,
            'createtime' => $this->createtime,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'dizhi', $this->dizhi])
            ->andFilterWhere(['like', 'dizhizuobiao', $this->dizhizuobiao])
            ->andFilterWhere(['like', 'wuyetype', $this->wuyetype])
            ->andFilterWhere(['like', 'huxing', $this->huxing])
            ->andFilterWhere(['like', 'fangtype', $this->fangtype])
            ->andFilterWhere(['like', 'jiaotong', $this->jiaotong])
            ->andFilterWhere(['like', 'kaifashang', $this->kaifashang])
            ->andFilterWhere(['like', 'shoulouchu', $this->shoulouchu])
            ->andFilterWhere(['like', 'tell', $this->tell])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'chanpintype', $this->chanpintype])
            ->andFilterWhere(['like', 'xiangmustatus', $this->xiangmustatus])
            ->andFilterWhere(['like', 'tese', $this->tese])
            ->andFilterWhere(['like', 'indexleft', $this->indexleft])
            ->andFilterWhere(['like', 'indexright', $this->indexright])
            ->andFilterWhere(['like', 'tag', $this->tag]);

        return $dataProvider;
    }
}
