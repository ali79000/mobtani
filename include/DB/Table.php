<?php
	if(! class_exists('Table')) {
		class Table
		{
			static protected function columnsList( $vars, $sep = ', ' ){
				
				$columns = array_keys( $vars );
				return join($sep , $columns);
			}
			static protected function valuesList( $vars, $sep = "', '" ){
				
				$values = array_values( $vars );
				return "'" . join($sep , $values) . "'";
			}
            static protected function columnValueList($params,$sep = ', '){
                foreach($params as $key => $value){
                    $varPairs[]="{$key} = '{$value}'";
                }
                return join($sep,$varPairs);
            }
				static public function add( $params ){
                $params['status']='default';
				$columnsString = self::columnsList( $params );
				$valuesString = self::valuesList( $params );
				$tableName = static::class; 
	
				$sql = "INSERT INTO {$tableName}({$columnsString}) 
						VALUES({$valuesString})";
				$result = $GLOBALS['db'] -> execute( $sql );
			
				if( $result )
					Alert::alerts("{$tableName} با موفقیت ثبت شد!", 'success');
				return $result;
			}
				static public function update( $params ){
                $columnValueList = self::columnValueList( $params );
		    	$tableName = static::class;		
				$sql = "UPDATE {$tableName} SET 
                {$columnValueList} 
                WHERE id={$params['id']}";
				$result = $GLOBALS['db'] -> execute( $sql );			
				if( $result ){
					alerts("{$tableName}ویرایش با موفقیت انجام شد!", 'success');
               }
            }
			static public function delete($id){
                $tableName = static::class;
                /* $sql = "DELETE FROM {$tableName} WHERE id = {$id}"; */
                $sql = "UPDATE {$tableName} SET 
                status='deleted'
                WHERE id={$id}";
                	$result = $GLOBALS['db'] -> execute( $sql );			
				//if( $result ){
					alerts("{$tableName}حذف با موفقیت انجام شد!", 'success');
            //}
            }
			static public function find($where='TRUE',$order='id DESC',$count=10000,$offset=0){
                	$tableName = static::class;
                    $sql = "SELECT * FROM {$tableName} 
                    WHERE {$where} AND status != 'deleted' 
                    ORDER BY {$order} 
                    LIMIT {$offset}, {$count}";
                    $table = $GLOBALS['db'] -> execute( $sql );
                    return $table;
            }
        }
	}
?>