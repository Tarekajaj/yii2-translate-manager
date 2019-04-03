<?php
/**
 * @author Lajos Molnár <lajax.m@gmail.com>
 *
 * @since 1.3
 */

use lajax\translatemanager\models\Language;
use yii\helpers\Html;
use yii\widgets\DetailView;
use common\widgets\dashboard\PanelBox;

/* @var $this yii\web\View */
/* @var $model Language */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('language', 'Languages'), 'url' => ['list']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="language-view col-sm-6">
  
  <div class="row">
    <div class="col-md-12">
      <?php
      $panel = PanelBox::begin([
                  'title' => $this->title,
                  'icon' => 'table',
                  'color' => PanelBox::COLOR_GRAY
      ]);
      ?>  
    <p>
        <?= Html::a(Yii::t('language', 'Update'), ['update', 'id' => $model->language_id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a(Yii::t('language', 'Delete'), ['delete', 'id' => $model->language_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('language', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'language_id',
            'language',
            'country',
            'name',
            'name_ascii',
            [
                'label' => Yii::t('language', 'Status'),
                'value' => $model->getStatusName(),
            ],
            [
                'label' => Yii::t('language', 'Translation status'),
                'value' => $model->getGridStatistic() . '%',
            ],
        ],
    ])
    ?>

      <?php PanelBox::end() ?>            
    </div>
  </div>
</div>