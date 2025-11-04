<?php
/* Smarty version 4.5.5, created on 2025-11-04 00:38:22
  from '/Applications/MAMP/htdocs/openemr/templates/hl7/general_parse.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69094afe920cc7_57035557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b15b12e2ee0e394e861da56df8b4ceaf061f21da' => 
    array (
      0 => '/Applications/MAMP/htdocs/openemr/templates/hl7/general_parse.html',
      1 => 1742713071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69094afe920cc7_57035557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/openemr/library/smarty/plugins/function.xlt.php','function'=>'smarty_function_xlt',),));
?>
<form name="prescribe" method="post" onsubmit="return top.restoreSession()">
<!--Example HL7 data<td></tr>
MSH|^~\&|ADT1|CUH|LABADT|CUH|198808181127|SECURITY|ADT^A01|MSG00001|P|2.3|
EVN|A01|198808181122||
PID|||PATID1234^5^M11||RYAN^HENRY^P||19610615|M||C|1200 N ELM STREET^^GREENSBORO^NC^27401-1020|GL|(919)379-1212|(919)271-3434 ||S||PATID12345001^2^M10|123456789|987654^NC|
NK1|JOHNSON^JOAN^K|WIFE||||||NK^NEXT OF KIN
PV1|1|I|2000^2053^01||||004777^FISHER^BEN^J.|||SUR||||ADM|A0|-->

    <div class="form-group">
        <label for="hl7data"><?php echo smarty_function_xlt(array('t'=>'Paste HL7 Data'),$_smarty_tpl);?>
</label>
        <textarea class="form-control" rows="10" id="hl7data" name="hl7data"></textarea>
    </div>
    <div class="btn-group">
        <a href="javascript:document.forms[0].submit();" class="btn btn-secondary" onclick="top.restoreSession()">
            <i class="fa fa-play"></i>&nbsp;&nbsp;<?php echo smarty_function_xlt(array('t'=>'Parse HL7'),$_smarty_tpl);?>

        </a>
        <a href="javascript:document.forms[0].reset();" class="btn btn-link" onclick="top.restoreSession()">
            <i class="fa fa-times"></i>&nbsp;&nbsp;<?php echo smarty_function_xlt(array('t'=>'Clear HL7 Data'),$_smarty_tpl);?>

        </a>
    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['hl7_message_err']->value))) {?>
        <div class="alert alert-danger"><?php echo text($_smarty_tpl->tpl_vars['hl7_message_err']->value);?>
</div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['hl7_array']->value))) {?>
      <div class="table-responsive">
          <table class="table">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hl7_array']->value, 'hl7item', false, 'hl7key');
$_smarty_tpl->tpl_vars['hl7item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hl7key']->value => $_smarty_tpl->tpl_vars['hl7item']->value) {
$_smarty_tpl->tpl_vars['hl7item']->do_else = false;
?>
              <tr height="25"><td colspan="3"><?php echo text($_smarty_tpl->tpl_vars['hl7key']->value);?>
</td></tr>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hl7item']->value, 'segment_val', false, 'segment_name');
$_smarty_tpl->tpl_vars['segment_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['segment_name']->value => $_smarty_tpl->tpl_vars['segment_val']->value) {
$_smarty_tpl->tpl_vars['segment_val']->do_else = false;
?>
                  <tr><td>&nbsp;</td><td><?php echo text($_smarty_tpl->tpl_vars['segment_name']->value);?>
: </td><td><?php echo text($_smarty_tpl->tpl_vars['segment_val']->value);?>
</td></tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </table>
      </div>
    <?php }?>
    <input type="hidden" name="process" value="<?php echo attr($_smarty_tpl->tpl_vars['PROCESS']->value);?>
" />
</form>
<?php }
}
