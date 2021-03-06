<?php

require_once '..\passwordBD.php';

class ConexaoBd {

    private static $instance = NULL;
    protected $tabela;
    const colunasMinMax = array("hotl_lczc", "degd_scl", "satc_pop", "nvl_tecn", "depe_tecn",
        "acss_tecn", "acss_magi", "h_psna", "peso_psna", "prte_fsco", "pvmt_raca", "rptc_raca", "pvmt_fnaagsd_fna",
        "rrdd_flra", "rrdd_rcs_ntrl", "popd_relg", "popd_lnga", "popd_mito", "qt_cls", "apcc_lmca", "vlr_obj", "rptc_cls", "rptc_pfs", "qt_pfs");

    public function __construct() {
        
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";

            self::$instance = new PDO('mysql:host=' . passwordBD::$servername . ';dbname=' . passwordBD::$dbname, passwordBD::$username, passwordBD::$password, $pdo_options);
        }
        return self::$instance;
    }

    /* lista 1 ou varias linhas de uma tabela e retorna a array delas */

    public function listarBase($colunas, $tabela, $where = null, $ordenar = null) {
        $sql = "SELECT $colunas FROM $tabela ";
        if ($where != null) {
            $sql .= ' ' . $where;
        }
        if ($ordenar != null) {
            $sql .= ' ' . $where;
        }
        $res = array();
        foreach (self::getInstance()->query($sql) as $row) {
            $res[] = $row;
        }
        return $res;
    }

    /* da update em 1 ou varias colunas de uma tabela e retorna BOOL */

    public function updateBase($parametros, $tabela, $where) {
        $query = "";
        foreach ($parametros as $coluna => $valor) {
            if (in_array($coluna, self::colunasMinMax) && $valor == "") {
                continue;
            }
            if ($valor == "0" || $valor == "") {
                $query .= "`" . $coluna . "`=NULL,";
            } else {
                $query .= "`" . $coluna . "`='$valor',";
            }
        }
        $query = substr($query, 0, -1);
        $sql = "UPDATE `$tabela`a SET $query WHERE $where";
        $res = self::getInstance()->query($sql);
        if ($res->rowCount() >= 0) {
            return true;
        } else {
            return false;
        }
        return $res;
    }

    /* insere em 1 registro numa tabela e retorna BOOL */

    public function inserirBase($parametros, $tabela) {
        $colunas = "";
        $valores = "";
        foreach ($parametros as $coluna => $valor) {
            if (in_array($coluna, self::colunasMinMax) && $valor == "") {
                continue;
            }

            if ($valor == "0" || $valor == "") {
                $colunas .= $coluna . ',';
                $valores .= "NULL,";
            } else {
                $colunas .= $coluna . ',';
                $valores .= "'" . $valor . "',";
            }
        }
        $colunas = substr($colunas, 0, -1);
        $valores = substr($valores, 0, -1);

        $sql = "INSERT INTO $tabela ($colunas) VALUES ($valores)";
        $res = self::getInstance()->query($sql);

        if ($res->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /* da delete */

    public function excluirBase($tabela, $where) {
        $sql = "DELETE FROM $tabela WHERE $where";
        $res = self::getInstance()->query($sql);
        if ($res->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
        return $res;
    }

    /* retorna o ID a ser usado no proximo registro em determinada tabela */

    public function getNextID($tabela) {
        $sql = "SHOW TABLE STATUS LIKE '$tabela'";
        $res = null;
        foreach (self::getInstance()->query($sql) as $row) {
            $res = $row['Auto_increment'];
        }
        return $res;
    }
    
    /* retorna o nome da tabela */
    public function getTabela() {
        return $this->tabela;
    }

}
