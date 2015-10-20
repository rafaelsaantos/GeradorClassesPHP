<?php
include("classes/Gerador.php");
$gerador = new Gerador();
if(file_exists("classes/DB.php")) {
	header("Location: index2.php");
} else {
	if(isset($_POST['acao']) and $_POST['acao'] == "instalar") {
		new Instal($_POST['servidor'], $_POST['usuario'], $_POST['senha']);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Instalação - GetClass</title>
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
        <td align="left" valign="top" bgcolor="#FFFFFF">
        <?php if(isset($_GET['msg'])) {?>
        <table width="100%" border="0" cellpadding="0" cellspacing="2" bgcolor="#FF0000">
          <tr>
            <td height="25" align="center" valign="middle" bgcolor="#FBBDBE" class="pretoNegrito14"><?php echo urldecode($_GET['msg']);?></td>
          </tr>
        </table>
        <?php }?>
        </td>
        <td align="right" valign="top" background="imagens/layout pg/linha_direita.jpg" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" background="imagens/layout pg/linha_esquerda.jpg" bgcolor="#FFFFFF">&nbsp;</td>
        <td align="left" valign="top" bgcolor="#FFFFFF"><form id="formInstal" name="formInstal" method="post" action="index.php">
          <table width="313" border="0" align="center" cellpadding="0" cellspacing="3">
            <tr>
              <td align="left" valign="top" class="CampoLista">Instalação do gerador de classes GetClass.</td>
            </tr>
            <tr>
              <td align="left" valign="top">Informe os dados para a conexão com o banco de dados mysql.</td>
            </tr>
            <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="0">
                <tr>
                  <td>Servidor:</td>
                  <td><label>
                    <input name="servidor" type="text" class="formTexto" id="servidor" />
                  </label></td>
                </tr>
                <tr>
                  <td>Usuário:</td>
                  <td><label>
                    <input name="usuario" type="text" class="formTexto" id="usuario" />
                  </label></td>
                </tr>
                <tr>
                  <td>Senha:</td>
                  <td><label>
                    <input name="senha" type="password" class="formTexto" id="senha" />
                  </label></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="center" valign="top"><label>
                <input name="Submit" type="submit" class="formButton" id="button" value="Instalar" />
                <input name="acao" type="hidden" id="acao" value="instalar" />
              </label></td>
            </tr>
          </table>
        </form>        </td>
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
<?php }?>