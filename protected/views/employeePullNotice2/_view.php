<?php
/* @var $this EmployeePullNotice2Controller */
/* @var $data DotTrackerEpn2 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employer')); ?>:</b>
	<?php echo CHtml::encode($data->employer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('current_address')); ?>:</b>
	<?php echo CHtml::encode($data->current_address); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_enroll')); ?>:</b>
	<?php echo CHtml::encode($data->is_enroll); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('requester_code')); ?>:</b>
	<?php echo CHtml::encode($data->requester_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telephone')); ?>:</b>
	<?php echo CHtml::encode($data->telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext')); ?>:</b>
	<?php echo CHtml::encode($data->ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_name')); ?>:</b>
	<?php echo CHtml::encode($data->contact_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c11')); ?>:</b>
	<?php echo CHtml::encode($data->c11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c12')); ?>:</b>
	<?php echo CHtml::encode($data->c12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c13')); ?>:</b>
	<?php echo CHtml::encode($data->c13); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c14')); ?>:</b>
	<?php echo CHtml::encode($data->c14); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c21')); ?>:</b>
	<?php echo CHtml::encode($data->c21); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c22')); ?>:</b>
	<?php echo CHtml::encode($data->c22); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c23')); ?>:</b>
	<?php echo CHtml::encode($data->c23); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c24')); ?>:</b>
	<?php echo CHtml::encode($data->c24); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c31')); ?>:</b>
	<?php echo CHtml::encode($data->c31); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c32')); ?>:</b>
	<?php echo CHtml::encode($data->c32); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c33')); ?>:</b>
	<?php echo CHtml::encode($data->c33); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c34')); ?>:</b>
	<?php echo CHtml::encode($data->c34); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c41')); ?>:</b>
	<?php echo CHtml::encode($data->c41); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c42')); ?>:</b>
	<?php echo CHtml::encode($data->c42); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c43')); ?>:</b>
	<?php echo CHtml::encode($data->c43); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c44')); ?>:</b>
	<?php echo CHtml::encode($data->c44); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c51')); ?>:</b>
	<?php echo CHtml::encode($data->c51); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c52')); ?>:</b>
	<?php echo CHtml::encode($data->c52); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c53')); ?>:</b>
	<?php echo CHtml::encode($data->c53); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c54')); ?>:</b>
	<?php echo CHtml::encode($data->c54); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c61')); ?>:</b>
	<?php echo CHtml::encode($data->c61); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c62')); ?>:</b>
	<?php echo CHtml::encode($data->c62); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c63')); ?>:</b>
	<?php echo CHtml::encode($data->c63); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c64')); ?>:</b>
	<?php echo CHtml::encode($data->c64); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c71')); ?>:</b>
	<?php echo CHtml::encode($data->c71); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c72')); ?>:</b>
	<?php echo CHtml::encode($data->c72); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c73')); ?>:</b>
	<?php echo CHtml::encode($data->c73); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c74')); ?>:</b>
	<?php echo CHtml::encode($data->c74); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c81')); ?>:</b>
	<?php echo CHtml::encode($data->c81); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c82')); ?>:</b>
	<?php echo CHtml::encode($data->c82); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c83')); ?>:</b>
	<?php echo CHtml::encode($data->c83); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c84')); ?>:</b>
	<?php echo CHtml::encode($data->c84); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c91')); ?>:</b>
	<?php echo CHtml::encode($data->c91); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c92')); ?>:</b>
	<?php echo CHtml::encode($data->c92); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c93')); ?>:</b>
	<?php echo CHtml::encode($data->c93); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c94')); ?>:</b>
	<?php echo CHtml::encode($data->c94); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c101')); ?>:</b>
	<?php echo CHtml::encode($data->c101); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c102')); ?>:</b>
	<?php echo CHtml::encode($data->c102); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c103')); ?>:</b>
	<?php echo CHtml::encode($data->c103); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c104')); ?>:</b>
	<?php echo CHtml::encode($data->c104); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c111')); ?>:</b>
	<?php echo CHtml::encode($data->c111); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c112')); ?>:</b>
	<?php echo CHtml::encode($data->c112); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c113')); ?>:</b>
	<?php echo CHtml::encode($data->c113); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c114')); ?>:</b>
	<?php echo CHtml::encode($data->c114); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c121')); ?>:</b>
	<?php echo CHtml::encode($data->c121); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c122')); ?>:</b>
	<?php echo CHtml::encode($data->c122); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c123')); ?>:</b>
	<?php echo CHtml::encode($data->c123); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c124')); ?>:</b>
	<?php echo CHtml::encode($data->c124); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c131')); ?>:</b>
	<?php echo CHtml::encode($data->c131); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c132')); ?>:</b>
	<?php echo CHtml::encode($data->c132); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c133')); ?>:</b>
	<?php echo CHtml::encode($data->c133); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c134')); ?>:</b>
	<?php echo CHtml::encode($data->c134); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c141')); ?>:</b>
	<?php echo CHtml::encode($data->c141); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c151')); ?>:</b>
	<?php echo CHtml::encode($data->c151); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c152')); ?>:</b>
	<?php echo CHtml::encode($data->c152); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c153')); ?>:</b>
	<?php echo CHtml::encode($data->c153); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c154')); ?>:</b>
	<?php echo CHtml::encode($data->c154); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c142')); ?>:</b>
	<?php echo CHtml::encode($data->c142); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c143')); ?>:</b>
	<?php echo CHtml::encode($data->c143); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c144')); ?>:</b>
	<?php echo CHtml::encode($data->c144); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('ext7')); ?>:</b>
	<?php echo CHtml::encode($data->ext7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('printed_name')); ?>:</b>
	<?php echo CHtml::encode($data->printed_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sign')); ?>:</b>
	<?php echo CHtml::encode($data->sign); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sign_date')); ?>:</b>
	<?php echo CHtml::encode($data->sign_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->creation_datetime); ?>
	<br />

	*/ ?>

</div>