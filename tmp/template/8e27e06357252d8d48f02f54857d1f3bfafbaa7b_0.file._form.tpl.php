<?php
/* Smarty version 4.0.0-rc.0, created on 2021-12-29 16:12:41
  from 'E:\Proyectos\Php\veterinaria\views\telefonos\_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_61ccb329aac850_39269590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e27e06357252d8d48f02f54857d1f3bfafbaa7b' => 
    array (
      0 => 'E:\\Proyectos\\Php\\veterinaria\\views\\telefonos\\_form.tpl',
      1 => 1640801793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ccb329aac850_39269590 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <div class="mb-3">
        <label for="numero" class="label text-success" style="font-weight: bold; font-size: 14px;">Teléfono <span
                class="text-danger">*</span></label>
        <input type="number" name="numero" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['telefono']->value['numero'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" class="form-control" id="" aria-describedby=""
            placeholder="Número de teléfono">
    </div>
    <div class="mb-3">
        <label for="movil" class="label text-success" style="font-weight: bold; font-size: 14px;">Tipo <span
                class="text-danger">*</span></label>
        <select name="movil" class="form-control">
            <?php if ($_smarty_tpl->tpl_vars['button']->value == 'Editar') {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['telefono']->value['movil'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['telefono']->value['movil'] == 1) {?>
                        Móvil
                    <?php } else { ?>
                        Fijo
                    <?php }?>
                </option>
            <?php }?>

            <option value="">Seleccione...</option>
            <option value="1">Móvil</option>
            <option value="2">Fijo</option>
        </select>
    </div>
    <input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
    <button type="submit" class="btn btn-outline-success"><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</button>
    <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];
echo $_smarty_tpl->tpl_vars['ruta']->value;?>
" class="btn btn-outline-primary">Volver</a>
</form><?php }
}
