<?php defined('_JEXEC') or die;

function modChrome_slider($module, &$params, &$attribs) {
	echo JHtml::_('sliders.panel',JText::_($module->title),'module'.$module->id);
	echo $module->content;
}

function modChrome_galerijastyle($module, &$params, &$attribs) { ?>
	<div class="modulewrapper">
        <div class="moduletable <?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
                <h3><?php echo JText::_( $module->title ); ?></h3>
                <div class="modulcontent"><?php echo $module->content; ?></div>
        </div>
	</div><?php
}

?>