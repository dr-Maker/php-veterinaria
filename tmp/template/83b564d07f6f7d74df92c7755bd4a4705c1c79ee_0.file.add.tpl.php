<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-29 16:12:41
  from 'E:\Proyectos\Php\veterinaria\views\telefonos\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61ccb329a31486_59858065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83b564d07f6f7d74df92c7755bd4a4705c1c79ee' => 
    array (
      0 => 'E:\\Proyectos\\Php\\veterinaria\\views\\telefonos\\add.tpl',
      1 => 1640801793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
    'file:../telefonos/_form.tpl' => 1,
  ),
),false)) {
function content_61ccb329a31486_59858065 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                </h3>
                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <p class="text-danger">Campos obligatorios *</p>
                <?php $_smarty_tpl->_subTemplateRender("file:../telefonos/_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
