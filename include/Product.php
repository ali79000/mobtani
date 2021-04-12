<?php
	if(! class_exists('Product')) {
		class Product
		{
		static function columnsList( $vars, $sep = ', ' ){
				
				$columns = array_keys( $vars );
				return join($sep , $columns);
			}
			static function valuesList( $vars, $sep = "', '" ){
				
				$values = array_values( $vars );
				return "'" . join($sep , $values) . "'";
			}
            static function columnValueList($params,$sep = ', '){
                foreach($params as $key => $value){
                    $varPairs[]="{$key} = '{$value}'";
                }
                return join($sep,$varPairs);
            }
			static function add( $params ){
				$columnsString = self::columnsList( $params );
				$valuesString = self::valuesList( $params );
				$tableName = get_class(); 
				
				
				$sql = "INSERT INTO {$tableName}({$columnsString}) 
						VALUES({$valuesString})";
				$result = $GLOBALS['db'] -> execute( $sql );
			
				if( $result )
					alerts('محصول با موفقیت ثبت شد!', 'success');

			}
			static function update( $params ){
                $columnValueList = self::columnValueList( $params );
		    	$tableName = get_class(); 				
				$sql = "UPDATE {$tableName} SET 
                {$columnValueList} 
                WHERE id={$params['id']}";
				$result = $GLOBALS['db'] -> execute( $sql );			
				if( $result )
					alerts("{$tableName}ثبت نام با موفقیت انجام شد!", 'success');
            }
			static function delete(){}
			static function find($where='TRUE',$order='id DESC',$count=10000,$offset=0){
                	$tableName = get_class();
                    $sql = "SELECT * FROM {$tableName} 
                    WHERE {$where} 
                    ORDER BY {$order} 
                    LIMIT {$offset}, {$count}";
                    $table = $GLOBALS['db'] -> execute( $sql );
                    return $table;
            }
		}
	}
?>