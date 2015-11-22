<?php
	
	class clsMyDbEngine {
		
		var $udcErrorSource = "clsMyDbEngine";
		var $pobjConn;
		var $pobjResultSet;
		var $pobjRow;
		var $pobjColumnName;
		var $pintException = 0, $pstrException = '';
		
		var $pintResultSetPointer = 0;
		var $pintRecordPointer = -1;	
		var $arrFields = array();
		var $str = array();
		
		function __construct() {
			 $this->pintException = 0;
			 $this->pstrException = '';
		}

		function intException() {
			return $this->pintException;
		}

		function strException() {
			return $this->pstrException;
		}

		private function blnOpenConnection() {
			
			global $arrMySQLConfig;			
			
			try 
			{
				
				$this->pobjConn = new mysqli($arrMySQLConfig['host'], $arrMySQLConfig['user'], $arrMySQLConfig['password'], $arrMySQLConfig['database'], $arrMySQLConfig['port']);
				return $this->pobjConn->connect_error === NULL;
			} catch(Exception $e) {
				$this->pintException = 1;
				$this->pstrException = $e;
				return false;
			}

			return true;

		}

		function blnOpenResultSet($strQuery) {

			// First open connection to database
			if(!$this->blnOpenConnection()) { return false; }

			// Execute the query
			if(!$this->pobjConn->multi_query($strQuery))
			{
				$this->pintException = 2;
				$this->pstrException = 'Query failed: '.$strQuery;
				return false;
			}
		
			// Store the first resultset in objResult
			if(!($this->pobjResultSet = $this->pobjConn->store_result())) {				
				$this->pintException = 3;
				$this->pstrException = 'store_result failed: '.$strQuery;
				return false;
			}
			
			//if(!blnResultsMoveNextRow()) {
				//$this->$pintException = 4;
				//$this->$pstrException = 'no records found for query: '.$strQuery;
				//return false;
			//}

			return true;

		}

		function blnMoveNextResultSet() {			
			if($this->pobjConn->more_results() && $this->pobjConn->next_result()) {				
				if(!($this->pobjResultSet = $this->pobjConn->store_result())) {					
					unset($this->pobjResultSet);					
					$this->pintException = 4;					
					$this->pstrException = 'store_result failed';				
					return false;
				}
				return true;
			}
			return false;
		}
			
		function blnResultsMoveNextRow() {			
			return 	($this->pobjRow = $this->pobjResultSet->fetch_array(MYSQLI_BOTH));							
		}
		
		function objResultsValue($strCordinal) {
			return $this->pobjRow[$strCordinal];			
		}
		
		function strResultsColName() {
			 $this->pobjColumnName = $this->pobjResultSet->fetch_field();			
			 return $this->pobjColumnName->name;			
		}							
		
		function lngResultsCount() {
			return count($this->pobjResultSet);
		}
		
		function lngResultsNumCols() {		
			return $this->pobjResultSet->field_count;
		}
		
		function lngResultSetsCount() {
			return $this->pobjConn->result_count;
		}
		
		function strResultType($strCordinal) {
			$objData = $this->objResultsValue($strCordinal);
			return gettype($objData);
		}
		
		function blnExecute($strQuery) {
			if(!$this->blnOpenConnection()) { return false; }
			if(!$this->pobjConn->multi_query($strQuery))
			{
				$this->pintException = 5;
				$this->pstrException = 'Query failed: '.$strQuery;
				return false;
			}
			
			return true;
		}
		
		function blnCloseConnection() {
			return $this->pobjConn->close();
		}
		
		function __destruct() {
			//unset($this->pobjResultSet);			
			try { $this->blnCloseConnection(); } catch(Exception $e){}
		}
	}

?>
