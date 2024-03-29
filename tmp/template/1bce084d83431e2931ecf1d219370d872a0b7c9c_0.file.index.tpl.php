<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-29 16:12:10
  from 'E:\Proyectos\Php\veterinaria\views\clientes\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61ccb30a7ad774_21782152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bce084d83431e2931ecf1d219370d872a0b7c9c' => 
    array (
      0 => 'E:\\Proyectos\\Php\\veterinaria\\views\\clientes\\index.tpl',
      1 => 1640801793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61ccb30a7ad774_21782152 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-10 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/add" class="btn btn-outline-success btn-sm">Agregar Cliente</a>
                </h3>

                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['clientes']->value)) && count($_smarty_tpl->tpl_vars['clientes']->value)) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Comuna</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientes']->value, 'cliente');
$_smarty_tpl->tpl_vars['cliente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->value) {
$_smarty_tpl->tpl_vars['cliente']->do_else = false;
?>
                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/view/<?php echo $_smarty_tpl->tpl_vars['cliente']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cliente']->value['nombre'];?>
</a>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['email'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['comuna']['nombre'];?>
</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay clientes registrados</p>
                <?php }?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
