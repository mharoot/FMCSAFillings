<?php
/* @var $this AutomatedTemplateController */
/* @var $model DotTrackerEmailtemp */

$this->breadcrumbs=array(
	'Automated Email Templates'=>array('index'),
	'Manage',
);

/*$this->menu=array(
	array('label'=>'List DotTrackerEmailtemp', 'url'=>array('index')),
	array('label'=>'Create DotTrackerEmailtemp', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dot-tracker-emailtemp-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Automated Email Templates</h1>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php /*echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); */?>
<div class="search-form" style="display:none">
<?php /*$this->renderPartial('_search',array(
	'model'=>$model,
)); */?>
</div>--><!-- search-form -->
<a class="btn btn-info" href="<?php echo Yii::app()->createUrl('automatedTemplate/create');?>" style="float:right;"> <i class="fa fa-plus"></i> Create Automated Email Template</a><br><br>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dot-tracker-emailtemp-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
      	array(
      	  'name'=>'id',
           'value'=>function($data)
           {
            echo FilingGenerics::showAemailId($data->id);
           }



        ),
      	array(
		        'name'=>'type',
                 'header'=>'NAME(Slug)',
                  'value'=>function($data)
                  {
                     $txt=strtolower(str_replace(' ','-',$data->type));
                     echo $data->type.'( '.$txt.' )';
                  }
        ),
		array(
		        'name'=>'emaildata',
                'type'=>'raw',
                'filter'=>'',
                'header'=>'Automated Email View',
                'value'=>function($data)
                {
                    echo '<div class="email-text">'.$data->emaildata.'</div>';
                }

        ),
		//'emaildata',
		//'created_by',
        array(
            'name'=>'created_by',
            'header'=>'Created By',
            'value'=>function($data)
            {
               echo FilingGenerics::getUserName($data->created_by).'( '.$data->created_by.' )';
            }
        ),
        array(
            'name'=>'creationdate_time',
            'header'=>'Created On',
            'value'=>function($data)
            {
                echo FilingGenerics::showDate($data->creationdate_time);
            }
        ),
	//	'creationdate_time',

		array(
			'class'=>'CButtonColumn',
            'template'=>'{update}',
		),
	),
)); ?>

<style>
    .email-text
    {
        max-height: 300px;
        overflow: scroll;
        background: #fff;padding:20px;
    }
</style>

<script>

    $(document).ready(function(){
        $('#dot-tracker-emailtemp-grid td').on('dblclick',function()
        {
            console.log(this);
            var url=$(this).parent().find('.button-column .update').attr('href');
            if(typeof url !== 'undefined')
                window.location= url;
        });
    });
</script>
