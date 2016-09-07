<?php
use yii\helpers\Html;
?>

<?php
$this->title = 'Welcome: '.$model->resultInfo->fullname;
?>
<div class="user-default-index">
    <div class="box box-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-black" style="background-image: url('<?= $model->resultInfo->cover; ?>');">
            <h3 class="widget-user-username"><?= $model->resultInfo->fullname; ?></h3>
            <h5 class="widget-user-desc"><?= implode(', ', $model->resultInfo->roles); ?></h5>
        </div>
        <div class="widget-user-image">
            <img class="img-circle" src="<?= $model->resultInfo->avatar; ?>" alt="User Avatar">
        </div>
        <div class="box-footer">
            <div class="row">
                <div class="col-sm-12">
                    <div class="description-block">
                        <h1><?= $model->resultInfo->fullname; ?></h1>
                        <h3 class="text-muted"><?= implode(', ', $model->resultInfo->roles); ?></h3>
                        <?= Html::a('<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit profile', ['settings/profile'], ['class'=>'btn btn-primary']); ?>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </div>
</div>
