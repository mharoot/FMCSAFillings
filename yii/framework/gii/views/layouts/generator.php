<?php //$this->beginContent('gii.views.layouts.main'); ?>
<?php $this->beginContent('//layouts/gii'); ?>
<div class="container row">
	<div class="span-4 col-md-2">
		<div id="sidebar">
		<?php $this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Generators',
		)); ?>
			<ul>
				<?php foreach($this->module->controllerMap as $name=>$config): ?>
				<li><?php echo CHtml::link(ucwords(CHtml::encode($name).' generator'),array($name.'/index'));?></li>
				<?php endforeach; ?>
			</ul>
		<?php $this->endWidget(); ?>
		</div><!-- sidebar -->
	</div>
	<div class="span-16 col-md-10">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<!-- div class="span-4 last col-md-2">
		&nbsp;
	</div -->
</div>
<?php $this->endContent(); ?>
