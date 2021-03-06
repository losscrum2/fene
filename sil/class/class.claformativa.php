<?php	
require_once( $_SERVER['DOCUMENT_ROOT'] . '/'. $_SESSION["nombresistema"] .'/config/config.configurar.php' );
include_once( CLASS_PATH . "class.clquery.php" );

class clAformativa {
    private $strCodigo;
    private $strDescripcion;

    public function __construct() {
        $this->strCodigo = "";
        $this->strDescripcion = "";
    }

    // Funciones Get y Set de la Clase clLogin
    public function getStrCodigo() {
        return $this->strCodigo;
    }

    public function setStrCodigo($c) {
        $this->strCodigo = $c;
    }

    public function getStrDescripcion() {
        return $this->strDescripcion;
    }

    public function setStrDescripcion($d) {
        $this->strDescripcion = $d;
    }

    public function getStrListar($p) {
        $query = new clQuery();

        //Nombre Procedimientos Almacenados
        $ProcedimientoAlmacenado = sprintf("CALL splistaraformativa();");
        $query->setStrProcedimientoAlmacenado($ProcedimientoAlmacenado);
        $resultado = $query->getStrSqlSelect();
        $retval = "";

        if( count($resultado) > 0 ) {
            $retval .= '<option value="">Seleccione&nbsp;Area Formativa</option>';
            foreach( $resultado as $rst):
                if ($rst["areaformativa_id"] == $p )
                    $retval .= '<option value="'. $rst["areaformativa_id"] .'" selected="selected">'.$rst["areaformativa_nombre"] .'</option>';
                else
                    $retval .= '<option value="'. $rst["areaformativa_id"] .'">'.$rst["areaformativa_nombre"] .'</option>';
            endforeach;
        }
        else
            $retval .= '<option value="">Seleccione&nbsp;Area Formativa</option>';

        return $retval;
    }
}
?>