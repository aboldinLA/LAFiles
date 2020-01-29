<?php
 require_once 'db.php';
 

// Demo Array
/*$queryParmas = array(
					'tabel_name' => 'editorial',
					'select' => '*',
					'join' => array(
						'typle' => 'LEFT JOIN',
						'tbl_name' => 'vendor_product',
						'on' => 'new_vendor.id=vendor_product.vendor_id',
					),
					'where' => array(
						"title NOT LIKE '%LA Weekly%'"  => 'AND',
						"subject != '10'" 				=> 'AND',
						"title NOT LIKE '%Promo%'" 		=> 'AND',
					),
					'orderby' => array( 'id','DESC' ),
					'limit' => array( '0','20' ),
				);*/

function getArticale( $parmaArr ){
	$conn = connection();

	if( !empty( $parmaArr ) && !empty( $parmaArr['tabel_name'] ) ){
		
		// For Tabel Name
		$tabel_name = $parmaArr['tabel_name'];
		
		// For Select Specific Field
		$select = ( isset( $parmaArr['select'] ) 
							&& !empty( $parmaArr['select'] ) ) 
							? $parmaArr['select'] : '*';

		// For Where Condition
		$where_con = '';
		if( isset( $parmaArr['where'] ) 
			&& !empty( $parmaArr['where']) ):

			$wCont = 1;
			$wTotalCnt = count($parmaArr['where']);

			foreach ( $parmaArr['where'] as $whereKey => $whereVal ) {

				if( $wCont == $wTotalCnt ):
					$where_con .= ( ( $wCont == 1 ) ? ' WHERE ':'' ).$whereKey;
				else:
					$where_con .= ( ( $wCont == 1 ) ? ' WHERE ':'' ).$whereKey.' '.$whereVal.' ';
				endif;
				$wCont++;

			}
		endif;

		// For OrderBy
		$orderby = '';
		if( isset( $parmaArr['orderby'] ) 
			&& !empty( $parmaArr['orderby'] ) ):
			
			if( isset( $parmaArr['orderby'][0] ) && $parmaArr['orderby'][0] == 'rand' ) {
				$orderby .= 'ORDER BY rand()';
			} else { 
				$oField = ( isset( $parmaArr['orderby'][0] ) 
							&& !empty( $parmaArr['orderby'][0] ) ) 
							? $parmaArr['orderby'][0] : 'id';

				$oType = ( isset( $parmaArr['orderby'][1] ) 
							&& !empty( $parmaArr['orderby'][1] ) ) 
							? $parmaArr['orderby'][1] : 'DESC';

							
				$orderby .= 'ORDER BY '.$oField.' '.$oType;
			}
		endif;


		// For Limit
		$qLimit = '';
		if( isset( $parmaArr['limit'] ) 
			&& !empty( $parmaArr['limit'] ) ):

			$sLimit = ( ( isset( $parmaArr['limit'][0] )
						&& !empty( $parmaArr['limit'][0] ) )
						? $parmaArr['limit'][0] : '0' );

			$eLimit = ( ( isset( $parmaArr['limit'][1] )
						&& !empty( $parmaArr['limit'][1] ) )
						? $parmaArr['limit'][1] : '20' );

			$qLimit .= 'LIMIT '.$sLimit.','.$eLimit;

		endif;

		// For JOIN Query
		$join_q = '';
		if( isset( $parmaArr['join'] ) && !empty( $parmaArr['join'] ) ):
			$join_type = ( isset( $parmaArr['join']['typle'] ) ) ? $parmaArr['join']['typle'] : 'LEFT JOIN';
			$join_tbl_name = ( isset( $parmaArr['join']['tbl_name'] ) ) ? $parmaArr['join']['tbl_name'].' ON ' : '';
			$join_on = ( isset( $parmaArr['join']['on'] ) ) ? $parmaArr['join']['on'] : '';
			$join_q .= ' '.$join_type.' '.$join_tbl_name.' '.$join_on.' ';
		endif;

		
		// Create Query
		$sql = "SELECT $select FROM $tabel_name $join_q $where_con $orderby $qLimit";
		
		$result = $conn->query($sql);	
	    return $result;
	    // return mysqli_fetch_array( $result );

	} else {
		return array();
	}
}	   
?>