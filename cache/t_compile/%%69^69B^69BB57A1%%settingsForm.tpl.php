<?php /* Smarty version 2.6.26, created on 2016-07-10 08:08:21
         compiled from file:C:%5Cxampp%5Chtdocs%5Cocs/plugins/paymethod/manual/templates%5CsettingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:C:\\xampp\\htdocs\\ocs/plugins/paymethod/manual/templates\\settingsForm.tpl', 11, false),array('function', 'fieldLabel', 'file:C:\\xampp\\htdocs\\ocs/plugins/paymethod/manual/templates\\settingsForm.tpl', 14, false),array('modifier', 'escape', 'file:C:\\xampp\\htdocs\\ocs/plugins/paymethod/manual/templates\\settingsForm.tpl', 17, false),)), $this); ?>
	<tr>
		<td colspan="2"><h4><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.paymethod.manual.settings"), $this);?>
</h4></td>
	</tr>
	<tr valign="top">
		<td class="label" width="20%"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'manualInstructions','required' => 'true','key' => "plugins.paymethod.manual.settings.instructions"), $this);?>
</td>
		<td class="value" width="80%">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.paymethod.manual.settings.manualInstructions"), $this);?>
<br />
			<textarea name="manualInstructions" id="manualInstructions" rows="12" cols="60" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['manualInstructions'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea>
		</td>
	</tr>