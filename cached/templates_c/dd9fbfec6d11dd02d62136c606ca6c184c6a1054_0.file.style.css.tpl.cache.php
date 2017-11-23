<?php
/* Smarty version 3.1.29, created on 2017-11-23 09:15:25
  from "/var/www/cms/scenes/styles/navgo/style.css.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a16677d851a94_48422637',
  'file_dependency' => 
  array (
    'dd9fbfec6d11dd02d62136c606ca6c184c6a1054' => 
    array (
      0 => '/var/www/cms/scenes/styles/navgo/style.css.tpl',
      1 => 1511417673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a16677d851a94_48422637 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20344393625a16677d8336d0_88358747';
?>
/* NAV BUTTON */
.type_navgo {
 margin-right: -2px;
 margin-bottom: 1px;
 color:black;
 border:1px solid rgba(255,255,255,0.5);
 font-size:14px;
 background-color:rgba(255,255,255,0.7);
 padding:0px;
 align:left;
 width:145px;
 height:36px;
}

.type_navgo span {
 display: inline-block;
 width: 124px;
 position: relative;
 padding-left: 12px;
 padding-top: 9px;
 vertical-align: middle;

 height: 28px;
 background-image: url(<?php echo @constant('ROOTHTML');?>
img/elements/nav_arrow.png);
 background-repeat: no-repeat;
 background-position: right center;
}

<?php
$_from = $_smarty_tpl->tpl_vars['TYPE']->value['STYLES'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_STYLE_0_saved_item = isset($_smarty_tpl->tpl_vars['STYLE']) ? $_smarty_tpl->tpl_vars['STYLE'] : false;
$_smarty_tpl->tpl_vars['STYLE'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['STYLE']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['STYLE']->value) {
$_smarty_tpl->tpl_vars['STYLE']->_loop = true;
$__foreach_STYLE_0_saved_local_item = $_smarty_tpl->tpl_vars['STYLE'];
if ($_smarty_tpl->tpl_vars['STYLE']->value['HAS_DEFAULT'] != '') {?>
.type_navgo.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
 {
     background-image: url(<?php echo @constant('ROOTHTML');?>
cms/scenes/styles/nav/<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['HAS_DEFAULT'];?>
);
     background-repeat: no-repeat;
     background-position: 10px 3px;
}
.type_navgo.style_<?php echo $_smarty_tpl->tpl_vars['STYLE']->value['TITLE'];?>
 span {
 margin-left:36px;
 width: 88px;
}
<?php }
$_smarty_tpl->tpl_vars['STYLE'] = $__foreach_STYLE_0_saved_local_item;
}
if ($__foreach_STYLE_0_saved_item) {
$_smarty_tpl->tpl_vars['STYLE'] = $__foreach_STYLE_0_saved_item;
}
}
}
