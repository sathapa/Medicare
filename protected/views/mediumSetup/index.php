<?php
    /* @var $this MediumSetupController */

    $this->breadcrumbs=array(
        'Medium Setup',
    );
?>

<?php
    $this->menu=array(
        array('label'=>'Medication Setup', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('index'),'active'=>true, 'linkOptions'=>array()),
//        array('label'=>'List Drugs', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'),'active'=>true, 'linkOptions'=>array()),
//        array('label'=>'List Orders', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('PhOrder/index'), 'linkOptions'=>array()),
//        array('label'=>'List Distributors', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('PhDistributor/index'), 'linkOptions'=>array()),
    );
?>

<!--<h1><?php /*echo $this->id . '/' . $this->action->id; */?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php /*echo __FILE__; */?></tt>.
</p>-->
<div class="span-15">
    <div class="span4 pull-left well"><b>DOSE</b><?php echo CHtml::linkButton('Add&nbsp;New',array('submit'=>array('createDose'),'class'=>'pull-right btn btn-small btn-info')); ?>
        <?php $this->widget('bootstrap.widgets.TbGridView',array(
            'id'=>'dose-grid',
            'dataProvider'=>$Dose->search(),
            'type'=>'bordered condensed',
            'template'=>'{items}{pager}',
            //'rowCssClassExpression'=>'($data->getRelated("drugPH")->instore_quantity == "0")?"alert alert-error":""',
            'columns'=>array(
                'sn',
                'title',
                array(
                    //'header'=>"CHtml::link('hell')<input type='button' value='Add New' class='btn btn-small btn-info'></a>",
                    'header'=>'<a>Actions</a>',
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => '{update} {delete}',
                    'buttons' => array(
                        'update' => array(
                            'label'=> 'Update',
                            'options'=>array(
                                'class'=>'btn btn-small update'
                            )
                        ),
                        'delete' => array(
                            'label'=> 'Delete',
                            'options'=>array(
                                'class'=>'btn btn-small delete'
                            )
                        ),
                    ),
                    'htmlOptions'=>array('nowrap'=>'nowrap'),
                )
            ),
        )); ?>
    </div>
    <div class="span4 pull-right well"><b>FORM</b><?php echo CHtml::linkButton('Add&nbsp;New',array('submit'=>array('createForm'),'class'=>'pull-right btn btn-small btn-info')); ?>
        <?php $this->widget('bootstrap.widgets.TbGridView',array(
            'id'=>'form-grid',
            'dataProvider'=>$Form->search(),
            'type'=>'bordered condensed',
            'template'=>'{items}{pager}',
            //'rowCssClassExpression'=>'($data->getRelated("drugPH")->instore_quantity == "0")?"alert alert-error":""',
            'columns'=>array(
                'sn',
                'title',
                array(
                    'header'=>'<a>Actions</a>',
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => '{update} {delete}',
                    'buttons' => array(
                        'update' => array(
                            'label'=> 'Update',
                            'options'=>array(
                                'class'=>'btn btn-small update'
                            )
                        ),
                        'delete' => array(
                            'label'=> 'Delete',
                            'options'=>array(
                                'class'=>'btn btn-small delete'
                            )
                        ),
                    ),
                    'htmlOptions'=>array('nowrap'=>'nowrap'),
                )
            ),
        )); ?>
    </div>
</div>
<div class="span-15">
    <div class="span4 pull-left well"><b>FREQUENCY</b><?php echo CHtml::linkButton('Add&nbsp;New',array('submit'=>array('createFrequency'),'class'=>' pull-right btn btn-small btn-info')); ?>
        <?php $this->widget('bootstrap.widgets.TbGridView',array(
            'id'=>'frequency-grid',
            'dataProvider'=>$Frequency->search(),
            'type'=>'bordered condensed',
            'template'=>'{items}{pager}',
            //'rowCssClassExpression'=>'($data->getRelated("drugPH")->instore_quantity == "0")?"alert alert-error":""',
            'columns'=>array(
                'sn',
                'title',
                array(
                    'header'=>'<a>Actions</a>',
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => '{update} {delete}',
                    'buttons' => array(
                        'update' => array(
                            'label'=> 'Update',
                            'options'=>array(
                                'class'=>'btn btn-small update'
                            )
                        ),
                        'delete' => array(
                            'label'=> 'Delete',
                            'options'=>array(
                                'class'=>'btn btn-small delete'
                            )
                        ),
                    ),
                    'htmlOptions'=>array('nowrap'=>'nowrap'),
                )
            ),
        )); ?>
    </div>
    <div class="span4 pull-right well"><b>ROUTE</b><?php echo CHtml::linkButton('Add&nbsp;New',array('submit'=>array('createRoute'),'class'=>'pull-right btn btn-small btn-info')); ?>
        <?php $this->widget('bootstrap.widgets.TbGridView',array(
            'id'=>'route-grid',
            'dataProvider'=>$Route->search(),
            'type'=>'bordered condensed',
            'template'=>'{items}{pager}',
            //'rowCssClassExpression'=>'($data->getRelated("drugPH")->instore_quantity == "0")?"alert alert-error":""',
            'columns'=>array(
                'sn',
                'title',
                array(
                    'header'=>'<a>Actions</a>',
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => '{update} {delete}',
                    'buttons' => array(
                        'update' => array(
                            'label'=> 'Update',
                            'options'=>array(
                                'class'=>'btn btn-small update'
                            )
                        ),
                        'delete' => array(
                            'label'=> 'Delete',
                            'options'=>array(
                                'class'=>'btn btn-small delete'
                            )
                        ),
                    ),
                    'htmlOptions'=>array('nowrap'=>'nowrap'),
                )
            ),
        )); ?>
    </div>
</div>
<div class="span-15">
    <div class="span4 pull-left well"><b>MEDICATION TYPE</b><?php echo CHtml::linkButton('Add&nbsp;New',array('submit'=>array('createType'),'class'=>'pull-right btn btn-small btn-info')); ?>
        <?php $this->widget('bootstrap.widgets.TbGridView',array(
            'id'=>'type-grid',
            'dataProvider'=>$Type->search(),
            'type'=>'bordered condensed',
            'template'=>'{items}{pager}',
            //'rowCssClassExpression'=>'($data->getRelated("drugPH")->instore_quantity == "0")?"alert alert-error":""',
            'columns'=>array(
                'sn',
                'title',
                array(
                    'header'=>'<a>Actions</a>',
                    'class'=>'bootstrap.widgets.TbButtonColumn',
                    'template' => '{update} {delete}',
                    'buttons' => array(
                        'update' => array(
                            'label'=> 'Update',
                            'options'=>array(
                                'class'=>'btn btn-small update'
                            )
                        ),
                        'delete' => array(
                            'label'=> 'Delete',
                            'options'=>array(
                                'class'=>'btn btn-small delete'
                            )
                        ),
                    ),
                    'htmlOptions'=>array('nowrap'=>'nowrap'),
                )
            ),
        )); ?>
    </div>
</div>
