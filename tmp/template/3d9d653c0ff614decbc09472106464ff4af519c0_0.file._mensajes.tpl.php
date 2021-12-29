<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-29 15:24:59
  from 'E:\Proyectos\Php\veterinaria\views\partials\_mensajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61cca7fbac82f0_61501086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d9d653c0ff614decbc09472106464ff4af519c0' => 
    array (
      0 => 'E:\\Proyectos\\Php\\veterinaria\\views\\partials\\_mensajes.tpl',
      1 => 1640801793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61cca7fbac82f0_61501086 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['_error']->value))) {?>
    <div style="margin-top: 40px;"></div>
    <p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</p>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['_mensaje']->value))) {?>
    <div style="margin-top: 40px;"></div>
    <p class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</p>
<?php }
}
}
