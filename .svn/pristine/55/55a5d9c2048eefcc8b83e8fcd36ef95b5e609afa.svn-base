<script>
    $('.close').click(function () {
        $('#close').hide("slow", function() {
            alert( "Animation complete." );
        });
    });
</script>
<script type="text/css">
    .alert.alert-war {
        color: #468847;
    //background-color: #dff0d8;
    //border-color: #d6e9c6;
        }
</script>
<?php
    $this->breadcrumbs=array(
        'Ph Drugs',
    );

    Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('ph-drug-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>


<?php
    $this->menu=array(
        array('label'=>'Add Drug', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
        array('label'=>'List Drugs', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'),'active'=>true, 'linkOptions'=>array()),
        array('label'=>'List Orders', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('PhOrder/index'), 'linkOptions'=>array()),
        array('label'=>'List Distributors', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('PhDistributor/index'), 'linkOptions'=>array()),
    );
?>


<?php
    strtotime("now")."</br>";
    $dat = strtotime("now +2 month");
    //echo date("Y-m-d", $dat);
    //echo date("Y-m-d",'1388530800');
    //echo date("Y-m-d",'1396648800 	');

    $data = PhStock::model()->findAll('exp_data < :exp_data and stat = :stat',array(':exp_data'=>$dat,':stat'=>1));
    $count1 = count($data);

    $dataTM = PhStock::model()->findAll('instore_quantity <= min_quantity and stat = :stat',array(':stat'=>1));
    $count2 = count($dataTM);


    if($data != null || $dataTM != null)
    {
        Yii::app()->user->setFlash('error','Alert');
    }
?>

<?php if(Yii::app()->user->hasFlash('error')):?>
    <?php
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
        'id'=>'mydialog1',
        // additional javascript options for the dialog plugin
        'options'=>array(
            'width'=>'10%',
            'height'=>'400',
            'title'=>'<b style="color: #CC0000">Alert !</b>',
            'autoOpen'=>true,
//            'position'=>array('my'=>'right top','at'=>'right bottom'),
            'position'=>array(1500,65),
            //'modal'=>true,
            'resizable'=>true,
            'overlay'=>array(
                'class'=>'danger',
                'opacity'=>'3.5'
            ),
//            'buttons' => array(
//                array('text'=>'Close','click'=> 'js:function(){$(this).dialog("close");}'),
            //array('text'=>'Cancel','click'=> 'js:function(){$(this).dialog("close");}'),
//            ),
        ),
        'htmlOptions'=>array('style'=>'color:red;')
    ));

    if($data != null)
    {
        echo '<b style="color: #CC0000">FOLLOWING DRUGS ARE GOING TO EXPIRE SOON:</b><br>';
        echo "<ol>";
        for($i=0; $i<$count1; $i++)
        {
            echo "<li>".$data[$i]->SKU.'</li>';
        };
        echo "</ol><hr>";
    }

    if($dataTM != null)
    {
        echo '<b style="color: #CC0000">FOLLOWING DRUGS ARE OUT OF STOCK:</b><br>';
        echo "<ol>";
        for($i=0; $i<$count2; $i++)
        {
            echo "<li>".$dataTM[$i]->SKU."</li>";
        }
        echo "</ol><hr>";
    }

    $this->endWidget('zii.widgets.jui.CJuiDialog');

    ?>
<?php endif; ?>

    <?php $this->renderPartial('_search',array(
        'model'=>$model,
    )); ?>

<div>
    <?php $this->widget('bootstrap.widgets.TbGridView',array(
        'id'=>'ph-drug-grid',
        'dataProvider'=>$model->search(),
        'type'=>'bordered condensed',
        'template'=>'{summary}{pager}{items}{pager}',
        'rowCssClassExpression'=>'($data->getRelated("drugPH")->instore_quantity == "0")?"alert alert-error":""',
        'columns'=>array(
            //'drug_id',
            //'stock_id',
            'SKU',
            'drug_cat',
            'drug_root',
            'brand_name',
            'generic_name',
            'unit_value',
            'unit_measurement',
            //'unit_price',
            //'stat',
            array(
                'header'=>'<a href="#">Min. Qty. </a>',
                'value'=>'$data->getRelated("drugPH")->min_quantity',
                'type'=>'raw',
            ),
            array(
                'header'=>'<a href="#">Mfg. Date</a>',
                'value'=>'date("Y-m-d", $data->getRelated("drugPH")->mfd_data)',
                'type'=>'raw',
            ),
            array(
                'header'=>'<a href="#">Exp. Date</a>',
                'value'=>'date("Y-m-d", $data->getRelated("drugPH")->exp_data)',
                'type'=>'raw',
            ),
            array(
                'header'=>'<a href="#">Remaining Qty. </a>',
                'value'=>'$data->getRelated("drugPH")->instore_quantity',
                'type'=>'raw',
            ),

            array(
                'header'=>'<a>Actions</a>',
                'class'=>'bootstrap.widgets.TbButtonColumn',
                'template' => '{dispose}',
                'buttons' => array(
                    /*'view' => array(
                        'label'=> 'View',
                        'options'=>array(
                            'class'=>'btn btn-small view'
                        )
                    ),*/
                    /*'update' => array(
                        'label'=> 'Update',
                        'options'=>array(
                            'class'=>'btn btn-small update'
                        )
                    ),*/
                    /*'delete' => array(
                        'label'=> 'Delete',
                        'options'=>array(
                            'class'=>'btn btn-small delete'
                        )
                    ),*/
                    'dispose' => array(
                        'label'=>'Dispose',
                        'url'=>'Yii::app()->controller->createUrl("PhDispose/create",array("id"=>$data->stock_id))',
                        'options'=>array(
                            'class'=>'btn btn-small',
                            'onclick'=>'return confirm("Are you sure, you want to dispose this drug?")'
                        ),
                        //'click'=>'return confirm("Are you sure to dispose this drug?")'
                    )
                ),
                'htmlOptions'=>array('nowrap'=>'nowrap'),
            )
        ),
    )); ?>
</div>

<!--<script>

    $(document).ready(function() {
        $("#dialog").dialog();
    });

</script>

<style>


    .window {
        position:absolute;
        left:0;
        top:0;
        width:300px !important;
        min-height:160px !important;
        z-index:9999;
        padding:20px;
        border:10px #404040 solid;
        -moz-box-shadow:0px 0px 3px #000;
        -webkit-box-shadow:0px 0px 3px #000;
        box-shadow:0px 0px 15px #000;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
    }
    .event_viewbx
    {
        margin:0px;
        padding:20px;
        position:relative;
        /*background:url(images/grid_noise.png) repeat;*/
    }

    .txt_bx{ margin:0px; padding:5px 0px; width:440px;}
    .txt_bx span
    {
        color: #666666;
        font-size: 14px;
        font-weight: bold;
        letter-spacing: 0.001em;
        padding:0px 5px;
    }
    .ui-corner-all a
    {
        position:absolute;
        top:8px;
        right:0px;
        z-index:10000;
        color:#ed827c;
        font-size:12px;


    }
    /*.ui-corner-all a{text-indent:-999px !important; background:url(images/evnt_close.png) no-repeat !important;*/
        /*width:12px; height:12px;}*/



</style>

<div id="dialog" class="window">
    <div class="event_viewbx">
        <div class="e_closebttn"></div>
        <div class="txt_bx">
            <span>Time:</span><span><?php /*echo time();*/?></span>
        </div>
        <div class="txt_bx">
            <span>Data:</span><span><?php /*echo "hello";*/?></span>
        </div>
        <div class="txt_bx">
            <span>Description:</span><span>I'm in a dialog</span>
        </div>

    </div>
</div>-->