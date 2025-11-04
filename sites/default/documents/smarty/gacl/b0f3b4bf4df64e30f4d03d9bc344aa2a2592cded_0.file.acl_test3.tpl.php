<?php
/* Smarty version 4.5.5, created on 2025-11-04 01:47:43
  from '/Applications/MAMP/htdocs/openemr/gacl/admin/templates/phpgacl/acl_test3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6909a18fc60437_78672152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0f3b4bf4df64e30f4d03d9bc344aa2a2592cded' => 
    array (
      0 => '/Applications/MAMP/htdocs/openemr/gacl/admin/templates/phpgacl/acl_test3.tpl',
      1 => 1742713070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:phpgacl/header.tpl' => 1,
    'file:phpgacl/navigation.tpl' => 1,
    'file:phpgacl/pager.tpl' => 2,
    'file:phpgacl/footer.tpl' => 1,
  ),
),false)) {
function content_6909a18fc60437_78672152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:phpgacl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:phpgacl/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form method="post" name="acl_list" action="acl_list.php">
<table cellpadding="2" cellspacing="2" border="2" width="100%">
  <tr class="pager">
	<td colspan="12">
		<?php $_smarty_tpl->_subTemplateRender("file:phpgacl/pager.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pager_data'=>$_smarty_tpl->tpl_vars['paging_data']->value,'link'=>"?"), 0, false);
?>
	</td>
  </tr>
  <tr>
    <th>#</th>
    <th>Section > ACO</th>
    <th>Section > ARO</th>
    <th>Section > AXO</th>
    <th>Return Value</th>
    <th>ACL_CHECK() Code</th>
    <th>Debug</th>
    <th>Time (ms)</th>
    <th>Access</th>
  </tr>
  <?php
$__section_x_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['acls']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_0_total = $__section_x_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_x']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_x']->value['iteration'] <= $__section_x_0_total; $_smarty_tpl->tpl_vars['__smarty_section_x']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
  <tr>
    <td valign="middle" align="center">
		<?php echo text((isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['iteration'] : null));?>

    </td>
    <td valign="middle" align="center">
		<?php echo text($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['display_aco_name']);?>

    </td>
    <td valign="top" align="left">
        <?php echo text($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aro_section_name']);?>
 > <?php echo text($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aro_name']);?>

    </td>
    <td valign="top" align="left">
        <?php echo text($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['axo_section_name']);?>
 > <?php echo text($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['axo_name']);?>

    </td>
    <td valign="top" align="center">
        <?php echo text($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['return_value']);?>
<br />
     </td>
    <td valign="top" align="left">
		acl_check('<?php echo text($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aco_section_value']);?>
', '<?php echo text($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aco_value']);?>
', '<?php echo text($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aro_section_value']);?>
', '<?php echo text($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aro_value']);?>
', '<?php echo text($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['axo_section_value']);?>
', '<?php echo text($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['axo_value']);?>
')
    </td>
    <td valign="top" align="center" nowrap>
		 [ <a href="acl_debug.php?aco_section_value=<?php echo attr_url($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aco_section_value']);?>
&aco_value=<?php echo attr_url($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aco_value']);?>
&aro_section_value=<?php echo attr_url($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aro_section_value']);?>
&aro_value=<?php echo attr_url($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['aro_value']);?>
&axo_section_value=<?php echo attr_url($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['axo_section_value']);?>
&axo_value=<?php echo attr_url($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['axo_value']);?>
&action=Submit">debug</a> ]
    </td>
    <td valign="top" align="center">
		<?php echo text($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['acl_check_time']);?>

    </td>
    <td valign="middle" class="<?php if ($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['access']) {?>green<?php } else { ?>red<?php }?>" align="center">
		<?php if ($_smarty_tpl->tpl_vars['acls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['access']) {?>
			ALLOW
		<?php } else { ?>
			DENY
		<?php }?>
    </td>
  </tr>
  <?php
}
}
?>
  <tr classs="pager">
	<td colspan="12">
		<?php $_smarty_tpl->_subTemplateRender("file:phpgacl/pager.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pager_data'=>$_smarty_tpl->tpl_vars['paging_data']->value,'link'=>"?"), 0, true);
?>
	</td>
  </tr>
</table>
</form>

<br />
<table align="center" cellpadding="2" cellspacing="2" border="2" width="30%">
  <tr>
	<th colspan="2">
		Summary
	</th>
  </tr>
  <tr align="center">
	<td>
		<b>Total ACL Check(s)</b>
	</td>
	<td>
		<?php echo text($_smarty_tpl->tpl_vars['total_acl_checks']->value);?>

	</td>
  </tr>
  <tr align="center">
	<td>
		<b>Average Time / Check</b>
	</td>
	<td>
		<?php echo text($_smarty_tpl->tpl_vars['avg_acl_check_time']->value);?>
ms
	</td>
  </tr>
</table>
<br />
<table align="center" cellpadding="2" cellspacing="2" border="2" width="30%">
	<th>
		Do you want to test 2-dimensional ACLs?
	</th>
	<tr align="center">
		<td>
			[ <a href="acl_test2.php">2-dimensional ACLs</a> ]
		</td>
	</tr>
</table>
<br />
<?php $_smarty_tpl->_subTemplateRender("file:phpgacl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
