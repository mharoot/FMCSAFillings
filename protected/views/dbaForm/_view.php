<?php
/* @var $this DbaFormController */
/* @var $data DotTrackerDba */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dba')); ?>:</b>
	<?php echo CHtml::encode($data->dba); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('b_address')); ?>:</b>
	<?php echo CHtml::encode($data->b_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('b_add_address')); ?>:</b>
	<?php echo CHtml::encode($data->b_add_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('b_city')); ?>:</b>
	<?php echo CHtml::encode($data->b_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('b_state')); ?>:</b>
	<?php echo CHtml::encode($data->b_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('b_zip')); ?>:</b>
	<?php echo CHtml::encode($data->b_zip); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('b_county')); ?>:</b>
	<?php echo CHtml::encode($data->b_county); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_country')); ?>:</b>
	<?php echo CHtml::encode($data->v_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('article_incorp')); ?>:</b>
	<?php echo CHtml::encode($data->article_incorp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_address')); ?>:</b>
	<?php echo CHtml::encode($data->m_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_add_address')); ?>:</b>
	<?php echo CHtml::encode($data->m_add_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_city')); ?>:</b>
	<?php echo CHtml::encode($data->m_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_state')); ?>:</b>
	<?php echo CHtml::encode($data->m_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_zip')); ?>:</b>
	<?php echo CHtml::encode($data->m_zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_country')); ?>:</b>
	<?php echo CHtml::encode($data->m_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('full_name')); ?>:</b>
	<?php echo CHtml::encode($data->full_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_address')); ?>:</b>
	<?php echo CHtml::encode($data->s_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_add_address')); ?>:</b>
	<?php echo CHtml::encode($data->s_add_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zip')); ?>:</b>
	<?php echo CHtml::encode($data->zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state_of_org')); ?>:</b>
	<?php echo CHtml::encode($data->state_of_org); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('r_full_name')); ?>:</b>
	<?php echo CHtml::encode($data->r_full_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sign_name')); ?>:</b>
	<?php echo CHtml::encode($data->sign_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sign_title')); ?>:</b>
	<?php echo CHtml::encode($data->sign_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_email')); ?>:</b>
	<?php echo CHtml::encode($data->s_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_phone')); ?>:</b>
	<?php echo CHtml::encode($data->s_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('business_conducted')); ?>:</b>
	<?php echo CHtml::encode($data->business_conducted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_reg')); ?>:</b>
	<?php echo CHtml::encode($data->date_reg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext1')); ?>:</b>
	<?php echo CHtml::encode($data->ext1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext2')); ?>:</b>
	<?php echo CHtml::encode($data->ext2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext3')); ?>:</b>
	<?php echo CHtml::encode($data->ext3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext4')); ?>:</b>
	<?php echo CHtml::encode($data->ext4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext5')); ?>:</b>
	<?php echo CHtml::encode($data->ext5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext6')); ?>:</b>
	<?php echo CHtml::encode($data->ext6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->creation_datetime); ?>
	<br />

	*/ ?>

</div>