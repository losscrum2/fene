<?php	
    require_once( $_SERVER['DOCUMENT_ROOT'] . '/'. $_SESSION["nombresistema"] .'/config/config.configurar.php' );
	require_once( $_SERVER['DOCUMENT_ROOT'] . '/'. $_SESSION["nombresistema"] .'/config/config.validaciones.php' );
    include_once( CLASS_PATH . "class.clquery.php" );
    include_once( CLASS_PATH . "class.clpaginacion.php" );   
	include_once( CLASS_PATH . "class.cltdiscapacidad.php" ); 
	include_once( CLASS_PATH . "class.clpafectadas.php" ); 
	include_once( CLASS_PATH . "class.cltnivelavance.php" ); 
	include_once( CLASS_PATH . "class.clexperiencia.php" );
	include_once( CLASS_PATH . "class.clnhijos.php" );
	include_once( CLASS_PATH . "class.cltqgarante.php" );
	include_once( CLASS_PATH . "class.clodiscapacidad.php" ); 
	include_once( CLASS_PATH . "class.cltporcentaje.php" ); 
	include_once( CLASS_PATH . "class.cltayudaeconomica.php" ); 
	include_once( CLASS_PATH . "class.clestadod.php" ); 
	include_once( CLASS_PATH . "class.clatecnicas.php" ); 
	include_once( CLASS_PATH . "class.cltseguro.php" ); 
	include_once( CLASS_PATH . "class.cltratamiento.php" ); 
	include_once( CLASS_PATH . "class.clthorario.php" ); 
	include_once( CLASS_PATH . "class.clilaboral.php" );
    class clIntereslaboral
    {
        private $StrTdiscapacidad;	
		private $StrPafectadas;	
		private $StrTnivelavance;
		private $StrObservaciones;
		private $StrPdiscapacidad;	
		private $StrNdiscapacidad;	
		private $StrParentezco;
		private $StrTdiscapacidadp;
		private $StrOdiscapacidad;
		private $StrDiagnostico;
		private $StrObservacionorigen;
		private $StrTporcentaje;
		private $strFechaIngreso;
		private $strTayuda;
		private $strTayudaeconomica;
		private $strEstadod;
		private $strIntereslaboral;
		private $strCrehabilitacion;
		private $strTipocentro;
		private $strTratamiento;
		private $strTratamientod;
		private $strThorario;
		private $StrObservacionc;
		
        private $StrCodigo;
		 private $strEtiqueta;
        private $strNombreBoton;
        private $strValorBoton;
		private $strNombreBotons;
        private $strValorBotons;
		private $strNombreBotona;
        private $strValorBotona;
        private $strLectura;
 		
        public function __construct()
        {
           $this->StrTdiscapacidad = ""; 
		   $this->StrPafectadas = ""; 
		   $this->StrTnivelavance = ""; 
		   $this->StrObservaciones = ""; 
		   $this->StrPdiscapacidad = ""; 
		   $this->StrNdiscapacidad= ""; 
		   $this->StrParentezco= ""; 
		   $this->StrTdiscapacidadp = ""; 
		   $this->StrOdiscapacidad = ""; 
		   $this->StrDiagnostico = ""; 
		   $this->StrObservacionorigen = ""; 
		   $this->StrTporcentaje = ""; 
		   $this->strFechaIngreso = "";
		   $this->strTayuda = "";
		   $this->strEstadod = "";
			$this->strIntereslaboral = "";
			$this->strCrehabilitacion = "";
			$this->strTipocentro = "";
			$this->strTratamiento = "";
			$this->strTratamientod = "";
			$this->strThorario = "";
			$this->StrObservacionc = ""; 
			 
		   	$this->StrCodigo = "";	
		    $this->strEtiqueta = "";
            $this->strNombreBoton = "";
            $this->strValorBoton = "";
			$this->strNombreBotons = "";
            $this->strValorBotons = "";
			$this->strNombreBotona = "";
            $this->strValorBotona = "";
            $this->strLectura = "";
		}
////////////// Tipo de Discapacidad  /////////////////////
        public function getStrTdiscapacidad()
        {
            return $this->StrTdiscapacidad;
        }
		public function setStrTdiscapacidad($n)
        {
            $this->StrTdiscapacidad = $n;
        }
////////////// Intereslaboral  /////////////////////
        public function getStrIntereslaboral()
        {
            return $this->StrIntereslaboral;
        }
		public function setStrIntereslaboral($n)
        {
            $this->StrIntereslaboral = $n;
        }	
////////////// Thorario  /////////////////////
        public function getStrThorario()
        {
            return $this->StrThorario;
        }
		public function setStrThorario($n)
        {
            $this->StrThorario = $n;
        }			
////////////// Observacionc /////////////////////
        public function getStrObservacionc()
        {
            return $this->StrObservacionc;
        }
		public function setStrObservacionc($n)
        {
            $this->StrObservacionc = $n;
        }					
////////////// Tratamiento  /////////////////////
        public function getStrTratamiento()
        {
            return $this->StrTratamiento;
        }
		public function setStrTratamiento($n)
        {
            $this->StrTratamiento= $n;
        }		
////////////// Tratamientod  /////////////////////
        public function getStrTratamientod()
        {
            return $this->StrTratamientod;
        }
		public function setStrTratamientod($n)
        {
            $this->StrTratamientod= $n;
        }					
////////////// Tipocentro  /////////////////////
        public function getStrTipocentro()
        {
            return $this->StrTipocentro;
        }
		public function setStrTipocentro($n)
        {
            $this->StrTipocentro= $n;
        }			
////////////// Crehabilitacion  /////////////////////
        public function getStrCrehabilitacion()
        {
            return $this->StrCrehabilitacion;
        }
		public function setStrCrehabilitacion($n)
        {
            $this->StrCrehabilitacion = $n;
        }			
////////////// Estado Discapacidad  /////////////////////
        public function getStrEstadod()
        {
            return $this->StrEstadod;
        }
		public function setStrEstadod($n)
        {
            $this->StrEstadod = $n;
        }		
////////////// Tipo de Ayuda  /////////////////////
        public function getStrTayuda()
        {
            return $this->StrTayuda;
        }
		public function setStrTayuda($n)
        {
            $this->StrTayuda= $n;
        }	
////////////// Tipo de Ayuda Economica /////////////////////
        public function getStrTayudaeconomica()
        {
            return $this->StrTayudaeconomica;
        }
		public function setStrTayudaeconomica($n)
        {
            $this->StrTayudaeconomica= $n;
        }				
/////////////////////////Fecha Ingreso//////////////////////////
 	public function getStrFechaIngreso()
        {
            return $this->strFechaIngreso;
        }

        public function setStrFechaIngreso($et)
        {
            $this->strFechaIngreso= $et;
        }			
////////////// Porcentaje  /////////////////////
        public function getStrTporcentaje()
        {
            return $this->StrTporcentaje;
        }
		public function setStrTporcentaje($n)
        {
            $this->StrTporcentaje = $n;
        }		
////////////// Diagnostico /////////////////////
        public function getStrDiagnostico()
        {
            return $this->StrDiagnostico;
        }
		public function setStrDiagnostico($n)
        {
            $this->StrDiagnostico = $n;
        }	
////////////// Observacionorigen /////////////////////
        public function getStrObservacionorigen()
        {
            return $this->StrObservacionorigen;
        }
		public function setStrObservacionorigen($n)
        {
            $this->StrObservacionorigen = $n;
        }				
////////////// Origen de Discapacidad  /////////////////////
        public function getStrOdiscapacidad()
        {
            return $this->StrOdiscapacidad;
        }
		public function setStrOdiscapacidad($n)
        {
            $this->StrOdiscapacidad = $n;
        }		
////////////// Tipo de Discapacidad  Pariente/////////////////////
        public function getStrTdiscapacidadp()
        {
            return $this->StrTdiscapacidadp;
        }
		public function setStrTdiscapacidadp($n)
        {
            $this->StrTdiscapacidadp = $n;
        }		
////////////// Parentezco  /////////////////////
        public function getStrParentezco()
        {
            return $this->StrParentezco;
        }
		public function setStrParentezco($n)
        {
            $this->StrParentezco= $n;
        }		
////////////// Numero de Discapacidad /////////////////////
        public function getStrNdiscapacidad()
        {
            return $this->StrNdiscapacidad;
        }
		public function setStrNdiscapacidad($n)
        {
            $this->StrNdiscapacidad = $n;
        }		
////////////// Parientes con Discapacidad  /////////////////////
        public function getStrPdiscapacidad()
        {
            return $this->StrPdiscapacidad;
        }
		public function setStrPdiscapacidad($n)
        {
            $this->StrPdiscapacidad= $n;
        }		
////////////// Nivel Avance  /////////////////////
        public function getStrTnivelavance()
        {
            return $this->StrTnivelavance;
        }
		public function setStrTnivelavance($n)
        {
            $this->StrTnivelavance = $n;
        }      
////////////// Observaciones /////////////////////
        public function getStrObservaciones()
        {
            return $this->StrObservaciones;
        }
		public function setStrObservaciones($n)
        {
            $this->StrObservaciones = $n;
        }        		  
////////////// Parte Afectadas /////////////////////
        public function getStrPafectadas()
        {
            return $this->StrPafectadas;
        }
		public function setStrPafectadas($n)
        {
            $this->StrPafectadas = $n;
        }           
////////////// Codigo /////////////////////
        public function getStrCodigo()
        {
            return $this->StrCodigo;
        }
		public function setStrCodigo($c)
        {
            $this->StrCodigo = $c;
        }
                
 ////////////////////////////////////////////////////////////////////////////
        public function getStrEtiqueta()
        {
            return $this->strEtiqueta;
        }

        public function setStrEtiqueta($e)
        {
            $this->strEtiqueta = $e;
        }

        public function getStrNombreBoton()
        {
            return $this->strNombreBoton;
        }

        public function setStrNombreBoton($nb)
        {
            $this->strNombreBoton = $nb;
        }
////////////////// Siguiente /////////////////////////////
       public function getStrNombreBotons()
        {
            return $this->strNombreBotons;
        }

        public function setStrNombreBotons($nb)
        {
            $this->strNombreBotons = $nb;
        }

/////////////////////// nombre a////////////////////////////////
 		public function getStrNombreBotona()
	        {
	            return $this->strNombreBotona;
	        }

        public function setStrNombreBotona($nb)
	        {
	            $this->strNombreBotona = $nb;
	        }	
////////////////////////valor voton siguiente///////////////////////////////

 public function getStrValorBotons()
        {
            return $this->strValorBotons;
        }

        public function setStrValorBotons($vb)
        {
            $this->strValorBotons = $vb;
        }
//////////////////////////valor a////////////////////////////////////
 		public function getStrValorBotona()
	        {
	            return $this->strValorBotona;
	        }

        public function setStrValorBotona($vb)
	        {
	            $this->strValorBotona = $vb;
	        }			
				
///////////////////////////////////////////////////////////////////////		
        public function getStrValorBoton()
        {
            return $this->strValorBoton;
        }

        public function setStrValorBoton($vb)
        {
            $this->strValorBoton = $vb;
        }

        public function getStrLectura()
        {
            return $this->strLectura;
        }

        public function setStrLectura($l)
        {
            $this->strLectura = $l;
        }

        public function getStrFormulario()
        {            
            
		$tdiscapacidad = new clTdiscapacidad();	
		$pafectadas= new clPafectadas();	
		$tnivelavance= new clTnivelavance();
		$pdiscapacidad= new clExperiencia();
		$ndiscapacidad= new clNhijos();
		$parentezco= new clTqgarante();
		$tdiscapacidadp = new clTdiscapacidad();	
		$odiscapacidad = new clOdiscapacidad();
		$tporcentaje = new clTporcentaje();
		$tayuda = new clExperiencia();
		$tayudaeconomica = new clTayudaeconomica();
		$estadod = new clEstadod();
		$intereslaboral= new clIlaboral();
		
		
          $retval  = '<script type="text/JavaScript" src="' . HOST .NAME. '/jquery/jquery.validate.js"></script>
                        <script type="text/JavaScript" src="' . HOST .NAME. '/jquery/jquery.metadata.js"></script>
                       ';

            
            $retval .= '<form id="frmintereslaboral" action="'. INTERESLABORAL_URL.'intereslaboral.php" method="POST">';

           $Regresar = "regresar('". INTERESLABORAL_URL. "intereslaboral.php')";

            $retval .= '<fieldset class="fieldsetPequeno">';
            $retval .= '<legend class="etiquetaborde">
                            INTERÉS LABORAL<img src="'. IMAGENES_PATH .'/siguiente.png" style="border: 0px none;">LISTAR INTERÉS LABORAL <img src="'. IMAGENES_PATH .'/siguiente.png" style="border: 0px none;"> '. $this->getStrEtiqueta() .'
                          </legend>
                       ';
            $NHC = "";		   
            $retval .= '
                        <table width="100%" border="0" align="center" cellpadding="1">
                            <tr>
                                <td colspan="4" align="center" class="tablatitulo">'. $this->getStrEtiqueta() .'</td>
                                <input class="textbox" id="strCodigo" name="strCodigo" type="hidden" maxlength="50" value="'. $this->getStrCodigo() .'" />
     						           

                            <tr class="formulariofila1">
                            	<td align="right"><b>Interés Laboral:&nbsp;</b></td>
	                             	<td align="left">                                    
	                                    <select name="lsIntereslaboral" id="lsIntereslaboral"  class="combobox">
	                                        '. $intereslaboral->getStrListar($this->getStrIntereslaboral()) .'
	                                    </select>
                                </td>  
                               <tr>
                                <td colspan="4" class="formulariofila1" align="center">
                                    <input type="submit" class="boton" name="'. $this->getStrNombreBoton() .'" value="'. $this->getStrValorBoton() .'" />
                                    <input type="submit" class="boton" name="'. $this->getStrNombreBotona() .'" value="'. $this->getStrValorBotona() .'" />
                                    <input type="submit" class="boton" name="'. $this->getStrNombreBotons() .'" value="'. $this->getStrValorBotons() .'" />
                                </td>
                            </tr>
                        </table>
                       ';
            $retval .= '</fieldset>';
            $retval .= '
                        </form>
                       ';            
            return $retval;
        }

        public function getStrIngresar() {
            $query = new clQuery();
            $resultado = false;
            //Nombre Procedimientos Almacenados
            $ProcedimientoAlmacenado = sprintf("CALL spingresarilaboral('%s','%s');",
            $this->getStrIntereslaboral(),$this->getStrCodigo());
            $query->setStrProcedimientoAlmacenado($ProcedimientoAlmacenado);

            if($query->getStrSqlInsertUpdateDelete()){
                //Nombre Procedimientos Almacenados [Auditoria]
                $descripcion = 'Interes laboral = [ '.$this->getStrIntereslaboral().' ] usuario = [ '. $this->getStrCodigo().' ] ';
                $ProcedimientoAlmacenado = sprintf("CALL spauditoria('%s', '%s', '%s', '%s');", $_SESSION["usuario"]["cuenta"], 'GUARDAR', 'intereslaboral', $descripcion);
                $query->setStrProcedimientoAlmacenado($ProcedimientoAlmacenado);
                $query->getStrSqlInsertUpdateDelete();
                $resultado = true;
 			}

            return $resultado;
        }
	public function getStrBuscarils($v) 
	{
            $query = new clQuery();
            $resultado = false;
            //Nombre Procedimientos Almacenados
            $ProcedimientoAlmacenado = sprintf("CALL spbidentificadorils('%d');","$v");
			$query->setStrProcedimientoAlmacenado($ProcedimientoAlmacenado);
            $resultado = $query->getStrSqlSelect();

            if( count($resultado) > 0 )
            {
            foreach( $resultado as $rst):   
				$valor=$rst['id_usuario'];
		    endforeach;
            }
		     return $valor;
      }    	
 	public function getStrBuscar() {
            $query = new clQuery();
            $resultado = false;
            //Nombre Procedimientos Almacenados
            $ProcedimientoAlmacenado = sprintf("CALL spbintereslaboral('%s');", $this->getStrCodigo());
            $query->setStrProcedimientoAlmacenado($ProcedimientoAlmacenado);
            $resultado = $query->getStrSqlSelect();

            if( count($resultado) > 0 )
            {
                foreach( $resultado as $rst):   
		            $this->setStrCodigo($rst['tilaboral_id']);
                    $this->setStrTayuda($rst["intereslaboral_id"]);
					
                endforeach;

                $retval = true;
            }
           
            return $retval;
        }

       public function getStrListar()
        {
            $paginacion = new clPaginacion();
            $query = new clQuery();

            //Nombre Procedimientos Almacenados
            $ProcedimientoAlmacenado = sprintf("CALL sptotalintereslaboral('%d');", $this->getStrCodigo());
            $query->setStrProcedimientoAlmacenado($ProcedimientoAlmacenado);
            $resultadototal = $query->getStrSqlSelect();

            foreach( $resultadototal as $rst):
                $paginacion->setStrTotalRegistros($rst["accesototal"]);
            endforeach;


            if(isset($_REQUEST['btnPagina']))
                $paginacion->setStrPaginaActual($_REQUEST['btnPagina']);
            else
                $paginacion->setStrPaginaActual(1);

            //Cuantos registros por p?gina
            $paginacion->setStrRegistrosPorPagina(REGISTROS);

            //Calcula la ultima pagina
            $paginacion->setStrPaginaUltima (ceil($paginacion->getStrTotalRegistros() / $paginacion->getStrRegistrosPorPagina()));

            //Si la p?gina actual es mayor que la ultima p?gina
            if($paginacion->getStrPaginaActual() > $paginacion->getStrPaginaUltima())
                $paginacion->setStrPaginaActual($paginacion->getStrPaginaUltima());

            //Si la paginaci?n actual es menor que 1
            if($paginacion->getStrPaginaActual() < 1)
                $paginacion->setStrPaginaActual(1);

            //Nombre Procedimientos Almacenados
             $re=($paginacion->getStrPaginaActual() - 1) * $paginacion->getStrRegistrosPorPagina();
			 $pa=$paginacion->getStrRegistrosPorPagina();
			 $cf=$this->getStrCodigo();
            $ProcedimientoAlmacenado = sprintf("CALL splistarintereslaboral('%d','%d','%d');","$re", "$pa","$cf");
            $query->setStrProcedimientoAlmacenado($ProcedimientoAlmacenado);
            $resultado = $query->getStrSqlSelect();

            $retval .= '<fieldset class="fieldsetGrande">';
            $retval .= '<legend class="etiquetaborde">
                            INTERÉS LABORAL <img src="'. IMAGENES_PATH .'/siguiente.png" style="border: 0px none;">LISTADO INTERÉS LABORAL </legend>
                       ';
            $retval .= '
                        <table border="0" width="100%" cellpadding="1" cellspacing="1" align="center">
                            <tr class="tablatitulo">
                                <th colspan="11">LISTADO INTERÉS LABORAL </th>
                            </tr>
                            <tr class="tablasubtitulo">
                                <th>...</th>  
                                <th align="center">ID</th>                                                              
                               <th align="center">Interés Laboral</th> 
                                <th align="center" colspan="3">Acciones</th>
                             </tr>
                        ';
            if( count($resultado) > 0 )
            {
                $i = 0;
                foreach( $resultado as $rst):
                    $retval .= '<tr class="listadofila'.$i.'" onMouseOver="resaltar(this)" onMouseOut="normal(this,'. $i .')" onclick="marcar(this,'. $i .')">';
                    $retval .= 	'<td align="center"><input name="rbSeleccionado" name="rbSeleccionado" type="radio"/></td>';                    
                    $retval .= 	'<td align="center">'. $rst["tilaboral_id"] .'</td>';
                    $retval .= 	'<td align="left">'. $rst["intereslaboral_nombre"] .'</td>';
					
                    $retval .= 	'<td align="center"><div class="vtip" title="ACTUALIZAR INTERÉS LABORAL  <br> [ codigo = '.$rst["tilaboral_id"] .' ]">';
                    $retval .=  '<a href="'. INTERESLABORAL_URL .'intereslaboral.php?btnActualizar=Actualizar&strCodigo='. $rst["tilaboral_id"] .'"><img src="'. IMAGENES_PATH .'/actualizar.png" title="" width="16px" height="16px"  border="0" /></a>';
                    $retval .= 	'</div></td>';
                    $retval .= 	'<td align="center"><div class="vtip" title="ELIMINAR INTERÉS LABORAL <br> [codigo = '.$rst["tilaboral_id"] .' ]">';
                    $retval .=  '<a href="'.INTERESLABORAL_URL .'intereslaboral.php?btnEliminar=Eliminar&strCodigo='. $rst["tilaboral_id"] .'" onclick="return confirmar()"><img src="'. IMAGENES_PATH .'/eliminar.png" title="" width="16px" height="16px"  border="0" /></a>';
                    $retval .= 	'</div></td>';
                    $retval .= 	'<td align="center"><div class="vtip" title="DETALLE INTERÉS LABORAL  <br> [ codigo = '.$rst["tilaboral_id"] .' ]">';
                    $retval .=  '<a href="'.INTERESLABORAL_URL.'intereslaboral.php?btnDetalle=Detalle&strCodigo='. $rst["tilaboral_id"] .'"><img src="'. IMAGENES_PATH .'/detalle.png" title="" width="16px" height="16px"  border="0" /></a>';
                    $retval .= 	'</div></td>';
                    $retval .= '</tr>';
                    $i = 1 - $i;
                endforeach;
            }

            $paginacion->setStrNombrePagina("intereslaboral/intereslaboral.php");
            $retval .= '<tr><td colspan="12" align="center">'. $paginacion->getStrPaginacion() .'</td></tr>';
            $retval .= '</table>';
            $retval .= '</fieldset>';
            return $retval;
        }
 public function getStrEliminar() 
        {
            $query = new clQuery();
            $resultado = false;
            //Nombre Procedimientos Almacenados
            $ProcedimientoAlmacenado = sprintf("CALL speliminarintereslaboral('%s');", $this->getStrCodigo());
            $query->setStrProcedimientoAlmacenado($ProcedimientoAlmacenado);
            $resultado = $query->getStrSqlInsertUpdateDelete();

           if($query->getStrSqlInsertUpdateDelete()){
                //Nombre Procedimientos Almacenados [Auditoria]
                $descripcion = 'Interes Laboral = [ '.$this->getStrIntereslaboral().' ] usuario = [ '. $this->getStrCodigo().' ] ';
                $ProcedimientoAlmacenado = sprintf("CALL spauditoria('%s', '%s', '%s', '%s');", $_SESSION["usuario"]["cuenta"], 'ELIMINAR', 'intereslaboral', $descripcion);
                $query->setStrProcedimientoAlmacenado($ProcedimientoAlmacenado);
                $query->getStrSqlInsertUpdateDelete();
                $resultado = true;
 			}

            return $resultado;
        }

	public function getStrActualizar() 
	{
			$query = new clQuery();
            $resultado = false;		
			$ProcedimientoAlmacenado = sprintf("CALL spactualizarintereslaboral('%s','%s');",
            $this->getStrCodigo(),$this->getStrIntereslaboral());
            $query->setStrProcedimientoAlmacenado($ProcedimientoAlmacenado);

            if($query->getStrSqlInsertUpdateDelete()){
                //Nombre Procedimientos Almacenados [Auditoria]
                $descripcion = 'Interes Laboral = [ '.$this->getStrIntereslaboral().' ] usuario = [ '. $this->getStrCodigo().' ] ';
                $ProcedimientoAlmacenado = sprintf("CALL spauditoria('%s', '%s', '%s', '%s');", $_SESSION["usuario"]["cuenta"], 'ACTUALIZAR', 'intereslaboral', $descripcion);
                $query->setStrProcedimientoAlmacenado($ProcedimientoAlmacenado);
                $query->getStrSqlInsertUpdateDelete();
                $resultado = true;
 			}

            return $resultado;
        }
public function getStrDetallePersona()
        {
            $query = new clQuery();
            //Nombre Procedimientos Almacenados
            $ProcedimientoAlmacenado = sprintf("CALL spbdetalleintereslaboral('%s');", $this->getStrCodigo());
            $query->setStrProcedimientoAlmacenado($ProcedimientoAlmacenado);
            $resultado = $query->getStrSqlSelect();

            $retval .= '<fieldset class="fieldsetGrande">';
            $retval .= '<legend class="etiquetaborde">
                            INTERÉS LABORAL <img src="'. IMAGENES_PATH .'/siguiente.png" style="border: 0px none;">INTERÉS LABORAL <img src="'. IMAGENES_PATH .'/siguiente.png" style="border: 0px none;">DETALLE INTERÉS LABORAL 
                        </legend>
                       ';

            if( count($resultado) > 0 )
            {
                $i = 0;
				$valor=$this->getStrCodigo();
			 	$v=$this->getStrBuscarils($valor);
                foreach( $resultado as $rst):
                    $retval .= '<table border="0" width="100%" cellpadding="2" cellspacing="2" align="center">';
                    $retval .= '<tr>
                                    <td colspan="2" align="center">
                                        <a href="'. INTERESLABORAL_URL.'intereslaboral.php?btnNuevo=Nuevo&strCodigo='.$v.'">| <img src="'. IMAGENES_PATH .'/atras.png" title="Regresar" width="16px" height="16px"  border="0" />REGRESAR LISTADO INTERÉS LABORAL |</a>
                                    <td>
                                </tr>
                                ';
                    
                    $retval .= '<tr class="tablatitulo">
                                    <th colspan="2">DETALLE&nbsp;INTERÉS LABORAL</th>
                                </tr>
                                ';

                    $retval .= '<tr class="listadofila0">
                                    <th align="right" class="bienvenida">Código:</th>
                                    <td align="left">  '. $rst["tilaboral_id"] .'</td>
                                </tr>
                                ';

                    $retval .= '<tr class="listadofila1">
                                    <th align="right" class="bienvenida">Interés Laboral:</th>
                                    <td align="left">  '. $rst["intereslaboral_nombre"] .'</td>
                                </tr>
                                ';
                   																																					            					
                    $i = 1 - $i;
                endforeach;
            }

            $retval .= '</table>';
            $retval .= '</fieldset>';
            return $retval;
        }

        
    }
?>