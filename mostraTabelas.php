<?php
include("classes/Gerador.php");
$gerador = new Gerador();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GetClass</title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript">
// função para selecionar todos os users
function check(count) {
	var elem = document.formTabelas.elements;
	if(count == 0) {
		for(i=0;i<elem.length;i++) {
			var x = elem[i];
			if(x.name == "tabelas[]") {
				x.checked = true;
			}
		}
	} else {
		for(i=0;i<elem.length;i++) {
			var x = elem[i];
			if(x.name == "tabelas[]") {
				x.checked = false;
			}
		}
	}
}
</script>
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
        <td align="right" valign="top" bgcolor="#FFFFFF"><a href="index2.php"><img src="imagens/bt_voltar.jpg" alt="Voltar" width="40" height="40" border="0" /></a></td>
        <td align="right" valign="top" background="imagens/layout pg/linha_direita.jpg" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" background="imagens/layout pg/linha_esquerda.jpg" bgcolor="#FFFFFF">&nbsp;</td>
        <td align="center" valign="top" bgcolor="#FFFFFF"><form id="formTabelas" name="formTabelas" method="post" action="gerarClasses.php">
          <table width="399" border="0" cellspacing="2" cellpadding="0">
            <tr>
              <td colspan="2" align="left" valign="top" class="pretoNegrito12">Selecione as tabelas que você deseja mapear.</td>
              </tr>
            <tr>
              <td colspan="2" align="left" valign="top"><a href="#" class="linkAbusado" onclick="check(0)">Marcar todos</a> <span class="linkAbusado">/</span> <a href="#" class="linkAbusado" onclick="check(1)">Desmarcar Todos</a></td>
              </tr>
			<?php foreach($gerador->selecionaTBLs() as $tabela) {?>
            <tr>
              <td width="34" align="center" valign="top"><label>
                <input type="checkbox" value="<?php echo $tabela->getTabela();?>" name="tabelas[]" id="tabelas[]" />
              </label></td>
              <td width="359" align="left" valign="middle"><?php echo $tabela->getTabela();?></td>
            </tr>
			<?php }?>
            <tr>
              <td colspan="2" align="center" valign="top"><label>
                <input name="banco" type="hidden" id="banco" value="<?php echo $_POST['banco'];?>" />
                <input name="Submit" type="submit" class="formButton" id="button" value="Gerar Classes" />
              </label></td>
              </tr>
          </table>
        </form></td>
        <td align="right" valign="top" background="imagens/layout pg/linha_direita.jpg" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
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