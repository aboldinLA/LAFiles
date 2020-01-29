<?

		function createPageLinksSearch($totalResultsAmount, $page, $limit, $keyword) {

								if ( $limit == 'all' ) {
									return '';

								} else {
										
										$link = ($_GET['brand'] == 'y') 
											? 'https://landscapearchitect.com' . htmlentities($_SERVER['PHP_SELF']) . '?key=' . $keyword . '&brand=y' 
											: 'https://landscapearchitect.com' . htmlentities($_SERVER['PHP_SELF']) . '?key=' . $keyword;
										
								
										$last = ceil( $totalResultsAmount / $limit );
										
										$extendLinks = ( $page < 5 || ($last - 5) <  $page ) ? 10 : 4;
										
										$start = ( ( $page - $extendLinks ) > 0 ) ? $page - $extendLinks : 1;
										$end = ( ( $page + $extendLinks ) < $last ) ? $page + $extendLinks : $last;


										$class = ( $page == 1 ) ? "disable" : "active";
										$html = '<a href="'. $link . '&limit=' . $limit . '&page=' . ( $page - 1 ) . '" class="' . $class . ' prev">Prev</a>';


										if ( $start > 1 ) {
														$html   .= '<a href="'. $link . '&limit=' . $limit . '&page=1">1</a>';
														$html   .= '<a href="#" class="disable"><span>. . .</span></a>';
										}

										for ( $i = $start ; $i <= $end; $i++ ) {
														$class  = ( $page == $i ) ? "disable" : "";
														$html   .= '<a href="'. $link . '&limit=' . $limit . '&page=' . $i . '" class="' . $class . '">' . $i . '</a>';
										}

										if ( $end < $last ) {
														$html   .= '<a href="#" class="disable"><span>. . .</span></a>';
														$html   .= '<a href="'. $link . '&limit=' . $limit . '&page=' . $last . '">' . $last . '</a>';
										}

										$class = ( $page == $last ) ? "disable" : "active";
										$html .= '<a href="'. $link . '&limit=' . $limit . '&page=' . ( $page + 1 ) . '" class="' . $class . ' nxt">Next</a>';

										return $html;


									}

							}


?>