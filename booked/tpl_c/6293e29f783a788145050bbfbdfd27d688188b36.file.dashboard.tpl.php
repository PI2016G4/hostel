<?php /* Smarty version Smarty-3.1.16, created on 2016-12-16 02:25:37
         compiled from "C:\xampp\htdocs\booked\tpl\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1522158534291211578-30983113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6293e29f783a788145050bbfbdfd27d688188b36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\booked\\tpl\\dashboard.tpl',
      1 => 1479140420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1522158534291211578-30983113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'dashboardItem' => 0,
    'ScriptUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5853429125eb72_12678204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5853429125eb72_12678204')) {function content_5853429125eb72_12678204($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cssFiles'=>'css/dashboard.css','Qtip'=>true), 0);?>


<div id="page-dashboard">
	<div id="dashboardList">
		<?php  $_smarty_tpl->tpl_vars['dashboardItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dashboardItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dashboardItem']->key => $_smarty_tpl->tpl_vars['dashboardItem']->value) {
$_smarty_tpl->tpl_vars['dashboardItem']->_loop = true;
?>
			<div><?php echo $_smarty_tpl->tpl_vars['dashboardItem']->value->PageLoad();?>
</div>
		<?php } ?>
	</div>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"dashboard.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"resourcePopup.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>


	<script type="text/javascript">
		$(document).ready(function () {

			var dashboardOpts = {
				reservationUrl: "<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=",
				summaryPopupUrl: "ajax/respopup.php",
				scriptUrl: '<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
'
			};

			var dashboard = new Dashboard(dashboardOpts);
			dashboard.init();
		});
	</script>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
