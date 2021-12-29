<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-29 20:14:24
  from 'E:\Proyectos\Php\veterinaria\views\logusuario\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61ccebd037c087_48974565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5caf3c825cb33277d21159fb8ae73eec867e218' => 
    array (
      0 => 'E:\\Proyectos\\Php\\veterinaria\\views\\logusuario\\index.tpl',
      1 => 1640819662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../partials/_mensajes.tpl' => 1,
  ),
),false)) {
function content_61ccebd037c087_48974565 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-12 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                  
                </h3>
                <?php $_smarty_tpl->_subTemplateRender("file:../partials/_mensajes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php if (true) {?>
                    <table class="table table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Id Usuario</th>
                            <th>Nombre</th>
                            <th>Rut</th>
                            <th>Url</th>
                            <th>Registro de Ingreso</th>
                            <th>Registro de Salida</th>

                         </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logusuario']->value, 'log');
$_smarty_tpl->tpl_vars['log']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['log']->value['id'];?>
</td>

                                <td><?php echo $_smarty_tpl->tpl_vars['log']->value['id_usuario'];?>
</td>

                                <td><?php echo $_smarty_tpl->tpl_vars['log']->value['nombre'];?>
</td>

                                <td><?php echo $_smarty_tpl->tpl_vars['log']->value['rut'];?>
</td>

                                <td><?php echo $_smarty_tpl->tpl_vars['log']->value['url'];?>
</td>

                                <td><?php echo $_smarty_tpl->tpl_vars['log']->value['updated_at'];?>
</td>

                                <td><?php echo $_smarty_tpl->tpl_vars['log']->value['created_at'];?>
</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php } else { ?>
                    <p class="text-info">No hay regiones registradas</p>
                <?php }?>
            </div>
        </div>
    </div>
</section> <!-- .section --><?php }
}
