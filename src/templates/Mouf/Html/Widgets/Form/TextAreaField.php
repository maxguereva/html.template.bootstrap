<div class="form-group <?php echo $object->getTextarea()->getName() ?>">
    <?php
	    /* @var $object Mouf\Html\Widgets\Form\TextAreaField */
	    $object->getLabel()->addClass('col-lg-4');
	    $object->getLabel()->addClass('control-label');
	    if($required) {
	    	$object->getLabel()->addText('<span class="text-danger">*</span>');
	    }
	    $object->getLabel()->toHtml();
    ?>
    <div class="col-lg-8">
    	<?php
    		$object->getTextarea()->addClass('form-control');
    		if($object->isRequired()) {
    			$object->getTextarea()->setRequired('required');
    		}
    		$object->getTextarea()->toHtml();
    		if($object->getHelpText()) {
				?>
				<span class="help-block"><?php $object->getHelpText()->toHtml() ?></span>
				<?php 
			}
    	?>
	</div>
</div>
    
    
