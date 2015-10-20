<?php
set_time_limit(0);
include("classes/Gerador.php");
$gerador = new Gerador();
$gerador->geraClasses();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GetClass</title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="imagens/quadrado_branco.jpg" width="10" height="10" /></td>
    <td><img src="imagens/quadrado_branco.jpg" width="10" height="10" /></td>
    <td><img src="imagens/quadrado_branco.jpg" width="10" height="10" /></td>
  </tr>
  <tr>
    <td width="1%" align="left" valign="top"><img src="imagens/layout pg/topo_esquerdo.jpg" width="13" height="110" /></td>
    <td width="98%" align="left" valign="top" background="imagens/layout pg/fundo_topo.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="4%">&nbsp;</td>
        <td width="63%" align="left" valign="top"><img src="imagens/layout pg/logo.jpg" width="237" height="110" /></td>
        <td width="33%">&nbsp;</td>
      </tr>
    </table></td>
    <td width="1%" align="right" valign="top"><img src="imagens/layout pg/topo_direito.jpg" width="13" height="110" /></td>
  </tr>
  <tr>
    <td height="32" align="left" valign="top" background="imagens/layout pg/borda_esquerda_menu.jpg" bgcolor="#EEEEEE">&nbsp;</td>
    <td height="32" align="center" valign="top" background="imagens/layout pg/fundo_menu.jpg" bgcolor="#EEEEEE">
    </td>
    <td height="32" align="left" valign="top" background="imagens/layout pg/borda_direita_menu.jpg" bgcolor="#EEEEEE">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" background="imagens/layout pg/borda_esquerda.jpg" bgcolor="#EEEEEE">&nbsp;</td>
    <td align="right" valign="top" bgcolor="#EEEEEE">&nbsp;</td>
    <td align="left" valign="top" background="imagens/layout pg/borda_direita.jpg" bgcolor="#EEEEEE">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" background="imagens/layout pg/borda_esquerda.jpg" bgcolor="#EEEEEE">&nbsp;</td>
    <td align="left" valign="top" bgcolor="#EEEEEE"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="1%" align="left" valign="top" bgcolor="#FFFFFF"><img src="imagens/layout pg/conto_superior_esquerdo.jpg" width="15" height="5" /></td>
        <td width="98%" align="left" valign="top" background="imagens/layout pg/linha_superior.jpg" bgcolor="#FFFFFF"><img src="imagens/layout pg/linha_superior.jpg" width="22" height="5" /></td>
        <td width="1%" align="left" valign="top" bgcolor="#FFFFFF"><img src="imagens/layout pg/conto_superior_direito.jpg" width="14" height="5" /></td>
      </tr>
      <tr>
        <td align="left" valign="top" background="imagens/layout pg/linha_esquerda.jpg" bgcolor="#FFFFFF">&nbsp;</td>
        <td height="25" align="center" valign="middle" bgcolor="#FFFFFF" class="CampoLista"><a href="index.php" class="CampoLista">Gerar Nova</a></td>
        <td align="right" valign="top" background="imagens/layout pg/linha_direita.jpg" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" background="imagens/layout pg/linha_esquerda.jpg" bgcolor="#FFFFFF">&nbsp;</td>
        <td align="center" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="2" bgcolor="<?php echo $gerador->getColor();?>">
          <tr>
            <td height="25" align="center" valign="middle" bgcolor="<?php echo $gerador->getBgColor();?>" class="pretoNegrito12"><?php echo $gerador->getMsg();?></td>
          </tr>
        </table></td>
        <td align="right" valign="top" background="imagens/layout pg/linha_direita.jpg" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" background="imagens/layout pg/linha_esquerda.jpg" bgcolor="#FFFFFF">&nbsp;</td>
		<?php if($gerador->getStatus()) {?>
        <td height="30" align="center" valign="middle" bgcolor="#FFFFFF" class="vermelhoNegrito14">Classes Geradas Com sucesso.<br />
          Acesse a pasta  &quot;<?php echo $gerador->getPasta();?>&quot; onde estarão sua classes.</td>
        <td align="right" valign="top" background="imagens/layout pg/linha_direita.jpg" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
		<?php }?>
      <tr>
        <td align="left" valign="top" bgcolor="#FFFFFF"><img src="imagens/layout pg/conto_inferior_esquerdo.jpg" width="15" height="6" /></td>
        <td align="left" valign="top" background="imagens/layout pg/linha_inferior.jpg" bgcolor="#FFFFFF"><img src="imagens/layout pg/linha_inferior.jpg" width="22" height="6" /></td>
        <td align="left" valign="top" bgcolor="#FFFFFF"><img src="imagens/layout pg/conto_inferior_direito.jpg" width="14" height="6" /></td>
      </tr>
    </table></td>
    <td align="left" valign="top" background="imagens/layout pg/borda_direita.jpg" bgcolor="#EEEEEE">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" background="imagens/layout pg/borda_esquerda.jpg" bgcolor="#EEEEEE">&nbsp;</td>
    <td align="left" valign="top" bgcolor="#EEEEEE">&nbsp;</td>
    <td align="left" valign="top" background="imagens/layout pg/borda_direita.jpg" bgcolor="#EEEEEE">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="imagens/layout pg/fundo_esquerdo.jpg" width="13" height="46" /></td>
    <td align="center" valign="middle" background="imagens/layout pg/fundo_fundo.jpg" class="creditos"><?php echo $gerador->getCopyright();?></td>
    <td align="left" valign="top"><img src="imagens/layout pg/fundo_direito.jpg" width="12" height="46" /></td>
  </tr>
  <tr>
    <td><img src="imagens/quadrado_branco.jpg" width="10" height="10" /></td>
    <td><img src="imagens/quadrado_branco.jpg" width="10" height="10" /></td>
    <td><img src="imagens/quadrado_branco.jpg" width="10" height="10" /></td>
  </tr>
</table>
</body>
</html>