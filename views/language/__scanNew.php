<?php
/**
 * @author Lajos Molnár <lajax.m@gmail.com>
 *
 * @since 1.4
 */

/* @var $this \yii\web\View */
/* @var $newDataProvider \yii\data\ArrayDataProvider */

use yii\grid\GridView;
use common\widgets\dashboard\PanelBox;

?>

<?php if ($newDataProvider->totalCount > 0) : ?>

  <div class="row">
    <div class="col-md-12">
      <?php
      $panel = PanelBox::begin([
                  'title' => $this->title,
                  'icon' => 'table',
                  'color' => PanelBox::COLOR_GRAY
      ]);
      ?>  
    <?=

    GridView::widget([
        'id' => 'added-source',
        'dataProvider' => $newDataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'category',
            'message',
        ],
    ]);

    ?>

      <?php PanelBox::end() ?>            
    </div>
  </div>
<?php endif ?>
