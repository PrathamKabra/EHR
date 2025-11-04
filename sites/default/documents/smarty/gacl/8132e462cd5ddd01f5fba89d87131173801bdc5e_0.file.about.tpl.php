<?php
/* Smarty version 4.5.5, created on 2025-11-04 01:47:50
  from '/Applications/MAMP/htdocs/openemr/gacl/admin/templates/phpgacl/about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6909a1968e30d7_57054954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8132e462cd5ddd01f5fba89d87131173801bdc5e' => 
    array (
      0 => '/Applications/MAMP/htdocs/openemr/gacl/admin/templates/phpgacl/about.tpl',
      1 => 1742713070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:phpgacl/header.tpl' => 1,
    'file:phpgacl/navigation.tpl' => 1,
    'file:phpgacl/footer.tpl' => 1,
  ),
),false)) {
function content_6909a1968e30d7_57054954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:phpgacl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </head>
  <body>
	<?php $_smarty_tpl->_subTemplateRender("file:phpgacl/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div style="text-align: center;">
      <table cellpadding="2" cellspacing="2" border="2" align="center">
        <tbody>
          <tr>
			<th>
				Report
			</th>
          </tr>
          <tr>
			<td align="center">
				<textarea name="system_information" rows="10" cols="60" wrap="VIRTUAL"><?php echo text($_smarty_tpl->tpl_vars['system_info']->value);?>
</textarea>
			</td>
          </tr>
		  <tr>
			<th>
				Credits
			</th>
          </tr>
          <tr>
			<td>
<pre>
<?php echo text($_smarty_tpl->tpl_vars['credits']->value);?>

</pre>
			</td>
          </tr>
        </tbody>
      </table>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:phpgacl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
