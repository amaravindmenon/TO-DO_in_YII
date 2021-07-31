<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use nex\datepicker\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Todo */
/* @var $form yii\widgets\ActiveForm */
$this->registerJs(
    '$("document").ready(function(){ 
         $("#new_country").on("pjax:end", function() {
             $.pjax.reload({container:"#countries"});  //Reload GridView
         });
     });'
 );

?>

<div class="todo-form">

<?php yii\widgets\Pjax::begin(['id' => 'new_country']) ?>
<?php $form = ActiveForm::begin(['options' => ['data-pjax' => true ]]); ?>
    
    <?= $form->field($model, 'category_id')->dropDownList(
            ['mobile' => 'Mobile', 'personal' => 'personal', 'office' => 'office']
    ); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <!--
    <= $form->field($model, 'category_id')->textInput(['maxlength' => true]) ?>
    -->
    
    <?= $form->field($model, 'timestamp')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?php yii\widgets\Pjax::end() ?>

</div>
