<?php
/* Smarty version 4.5.5, created on 2025-11-04 01:47:41
  from '/Applications/MAMP/htdocs/openemr/gacl/admin/templates/phpgacl/acl_test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6909a18d0c9184_46540518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75d6075a58bab4d80e6b62a0229ba9212cf0b034' => 
    array (
      0 => '/Applications/MAMP/htdocs/openemr/gacl/admin/templates/phpgacl/acl_test.tpl',
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
function content_6909a18d0c9184_46540518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:phpgacl/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
  </head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:phpgacl/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br />
<br />
<br />
<table align="center" cellpadding="2" cellspacing="2" border="2" width="50%">
	<th colspan="2">
		Which dimension of ACLs do you want to test?
	</th>
	<tr align="center">
		<td>
			[ <a href="acl_test2.php">2-dimensional ACLs</a> ]
		</td>
		<td>
			[ <a href="acl_test3.php">3-dimensional ACLs</a> ]
		</td>
	</tr>
</table>
<br />
<br />
<br />
<?php $_smarty_tpl->_subTemplateRender("file:phpgacl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
