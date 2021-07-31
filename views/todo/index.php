<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TodoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'To-do List Application';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="todo-index">
    <div class="logo">
    <?= Html::img('@web/uploads/bg1.png', ['alt'=>'some', 'class'=>'thing']);?>
    </div>

    <h1><center><?= Html::encode($this->title) ?></center></h1>
    <h4><center> Where to-do items are added/deleted and belong to categories </center></h4> 
    
    <!--<p>
        <= Html::a('Create Todo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- Render create form -->    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    
    
    <?php Pjax::begin(['id' => 'countries']) ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'category_id',
            'timestamp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

<?php Pjax::end() ?>
</div>
