<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-29 16:02:10
  from 'E:\Proyectos\Php\veterinaria\views\usuarios\_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61ccb0b27f9ac3_16511512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bc8849f5539ea68894de61dd16a75103c272915' => 
    array (
      0 => 'E:\\Proyectos\\Php\\veterinaria\\views\\usuarios\\_form.tpl',
      1 => 1640801793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ccb0b27f9ac3_16511512 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Guardar' || $_smarty_tpl->tpl_vars['button']->value == 'Modificar') {?>
        <div class="mb-3">
            <label for="clave" class="label text-success" style="font-weight: bold; font-size: 14px;">Password <span
                    class="text-danger">*</span></label>
            <input type="password" name="clave" class="form-control" id="" aria-describedby=""
                placeholder="Password del usuario" onpaste="return false">
        </div>
        <div class="mb-3">
            <label for="reclave" class="label text-success" style="font-weight: bold; font-size: 14px;">Confirmar Password <span class="text-danger">*</span></label>
            <input type="password" name="reclave" class="form-control" id="" aria-describedby=""
    placeholder="Confirmar password del usuario" onpaste="return false">
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
        <div class="mb-3">
            <label for="activo" class="label text-success" style="font-weight: bold; font-size: 14px;">Estado <span class="text-danger">*</span></label>
            <select name="activo" class="form-control">
                <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['activo'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['usuario']->value['activo'] == 1) {?>
                        Activo
                    <?php } else { ?>
                        Inactivo
                    <?php }?>
                </option>

                <option value="">Seleccione...</option>
                <option value="1">Activar</option>
                <option value="2">Desactivar</option>

            </select>
        </div>
    <?php }?>
    <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
    <button type="submit" class="btn btn-outline-success"><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</button>
    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];
echo $_smarty_tpl->tpl_vars['ruta']->value;?>
" class="btn btn-outline-primary">Cancelar</a>
</form><?php }
}
