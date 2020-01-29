<?php

//fills individual seminar pages with seminar info from master-seminar array
if(strrpos($_SERVER['PHP_SELF'], 'Seminars-2019')){
	foreach($seminars_array as $seminarArrIndividual){
		if(strrpos($_SERVER['PHP_SELF'], $seminarArrIndividual['pageUrl'])){
			if(array_key_exists('multiSpeakers', $seminarArrIndividual)){
				$speaker1 =  $seminarArrIndividual['multiSpeakers'][0]['speaker'];
				$speakerImgSrc1 = '<img src="https://landscapearchitect.com/TLE-LB/images/speakers/2019-Speakers/' . $seminarArrIndividual['multiSpeakers'][0]['imgSrc'] . '" class="center-block speakerImg">';
				$speaker2 =  $seminarArrIndividual['multiSpeakers'][1]['speaker'];
				$speakerImgSrc2 = '<img src="https://landscapearchitect.com/TLE-LB/images/speakers/2019-Speakers/' . $seminarArrIndividual['multiSpeakers'][1]['imgSrc'] . '" class="center-block speakerImg">';
				$speaker3 =  $seminarArrIndividual['multiSpeakers'][2]['speaker'];
				$speakerImgSrc3 = '<img src="https://landscapearchitect.com/TLE-LB/images/speakers/2019-Speakers/' . $seminarArrIndividual['multiSpeakers'][2]['imgSrc'] . '" class="center-block speakerImg">';
				$speaker4 =  $seminarArrIndividual['multiSpeakers'][3]['speaker'];
				$speakerImgSrc4 = '<img src="https://landscapearchitect.com/TLE-LB/images/speakers/2019-Speakers/' . $seminarArrIndividual['multiSpeakers'][3]['imgSrc'] . '" class="center-block speakerImg">';
			} else {
				$speakerImgSrc = '<img src="https://landscapearchitect.com/TLE-LB/images/speakers/2019-Speakers/' . $seminarArrIndividual['imgSrc'] . '" class="center-block speakerImg">';
			}
			$semName = $seminarArrIndividual['semName'];
			$semNameFirst = $seminarArrIndividual['semNameFirst'];
			$semNameSecond = $seminarArrIndividual['semNameSecond'];
			$speaker = $seminarArrIndividual['speaker'];
			$ceu = 'CEUs: ' . $seminarArrIndividual['ceu'];
			$semInfoMain = $seminarArrIndividual['semInfoMain'];
			$semDateTime = $seminarArrIndividual['date'] . ' ' . $seminarArrIndividual['time'];
			$room = $seminarArrIndividual['room'];
			$price = $seminarArrIndividual['price'];
		}
	} //END foreach
	unset($seminarArrIndividual);
}




function seminarsByTract($seminars_array, $tract){
	$arrayByTracts = array(
		'bus' => array(),
		'des' => array(),
		'fire' => array(),
		'irr' => array(),
		'main' => array(),
		'pest' => array(),
		'plant' => array(),
		'soil' => array(),
		'sus' => array(),
		'tree' => array(),
		'turf' => array()	
	);
	
	foreach ($seminars_array as $seminarArr){
		foreach ($seminarArr['tract'] as $currentSeminarArrTract){
		//$currentSeminarArrTract holds individual tract element of current seminar array's tract array
			if($currentSeminarArrTract == $tract){
				array_push($arrayByTracts[$tract], $seminarArr);
			}
		}
		unset($currentSeminarArrTracts);
	}
	unset($seminarArr);

	array_multisort (array_column($arrayByTracts[$tract], 'seminarSlot'), SORT_ASC, $arrayByTracts[$tract]);

	foreach ($arrayByTracts[$tract] as $seminarArrOutput){
			$codeBlock = 
		 '<div class="col-md-6 col-sm-12 margin-bottom-40-xs row">
				<div class="col-xs-3 imgPaddingAdjustLeft">
					<a href="https://landscapearchitect.com/TLE-LB/Seminars-2019/' . $seminarArrOutput['pageUrl'] . '" target="_blank">
						<img src="https://landscapearchitect.com/TLE-LB/images/speakers/2019-Speakers/' . $seminarArrOutput['imgSrc'] . '">
					</a>
				</div>
				<div class="col-xs-8">
					<p id="semTime">' . $seminarArrOutput['date'] . '<br>' . $seminarArrOutput['time'] . '</p>
					<h2 class="seminarHeaderBold font-size-22 margin-top-0-xs margin-bottom-5-xs">
						<a href="https://landscapearchitect.com/TLE-LB/Seminars-2019/' . $seminarArrOutput['pageUrl'] . '">' . $seminarArrOutput['semName'] . '</a>
					</h2>
					<p id="speaker" class="margin-bottom-10-xs italic">by ' . $seminarArrOutput['speaker'] . '</p>
					<p id="room" class="margin-bottom-0-xs <!--room-display-->">Room: ' . $seminarArrOutput['room'] . '</p>
					<p id="ceu">CEUs: ' . $seminarArrOutput['ceu'] . '</p>	
				</div>
			</div>';
			echo $codeBlock;
		}
	unset($seminarArrOutput);
} //END seminarsByTract()
		
	
	

//fills Seminar-Schedule Page, called on Seminar-Schedule.php
function fillSemSchedulePHP(&$seminars_array, $semContainer){	
	$previousTime;
	$wedFirst = true;
	$thursFirst = true;

	array_multisort (array_column($seminars_array, 'seminarSlot'), SORT_ASC, $seminars_array);
	
	foreach ($seminars_array as $seminarArr){
		$roomDisplay = 'room-display';
	
		if($seminarArr['room'] == 'Sustainability &amp; Water Conservation Center' ||
			 $seminarArr['room'] == 'Design Center' ||
			 $seminarArr['room'] == 'Outside'){
			 		$roomDisplay = '';
			 }

		$codeBlock = 
		 '<div class="col-xs-12 margin-bottom-50-xs row flex">
				<div class="col-xs-2 imgPaddingAdjustLeft">
					<a href="https://landscapearchitect.com/TLE-LB/Seminars-2019/' . $seminarArr['pageUrl'] . '" target="_blank">
						<img src="https://landscapearchitect.com/TLE-LB/images/speakers/2019-Speakers/' . $seminarArr['imgSrc'] . '">
					</a>
				</div>
				<div class="col-xs-8 vertical-flex">
					<p id="semTime">'. $seminarArr['time'] . '</p>
					<h2 class="seminarHeaderBold font-size-28 margin-top-0-xs margin-bottom-5-xs">
						<a href="https://landscapearchitect.com/TLE-LB/Seminars-2019/' . $seminarArr['pageUrl'] . '">' . $seminarArr['semName'] . '</a>
					</h2>
					<p id="speaker" class="margin-bottom-10-xs italic">by ' . $seminarArr['speaker'] . '</p>
					<p id="room" class="margin-bottom-0-xs ' . $roomDisplay . '">Room: ' . $seminarArr['room'] . '</p>
					<p id="ceu">CEUs: ' . $seminarArr['ceu'] . '</p>
					<p id="price" class="bold font-size-22 margin-bottom-0-xs italic">Price: $' . $seminarArr['price'] . '</p>
				</div>
			</div>';
		
		if($seminarArr['date'] === "Wednesday, Oct. 23rd"){
			if($semContainer === "wednesday"){
				if($previousTime != $seminarArr['time']){
					if($wedFirst == true){
						echo '<div class="clear"><h2 class="headersFour margin-bottom-20-xs greyBackground followMeBar" style="margin-right: -10px;">'. $seminarArr['time'] . '</h2></div>';
						$wedFirst = false;
					} else {
						echo '<div class="clear"><h2 class="headersFour margin-bottom-20-xs margin-top-40-xs greyBackground followMeBar" style="margin-right: -10px;">'. $seminarArr['time'] . '</h2></div>';
					}
				}
				echo $codeBlock;
			}	
		} else if($seminarArr['date'] === "Thursday, Oct. 24th"){
			if($semContainer === "thursday"){
				if($previousTime != $seminarArr['time']){
					if($thursFirst == true){
						echo '<div class="clear"><h2 class="headersFour margin-bottom-20-xs greyBackground followMeBar" style="margin-right: -10px;">'. $seminarArr['time'] . '</h2></div>';
						$wedFirst = false;
					} else {
						echo '<div class="clear"><h2 class="headersFour margin-bottom-20-xs margin-top-40-xs greyBackground followMeBar" style="margin-right: -10px;">'. $seminarArr['time'] . '</h2></div>';
					}
				}
				echo $codeBlock;
			}	
		} else {};
		
		$previousTime = $seminarArr['time'];
			
	} //END foreach
	
	unset($seminarArr);
} //END fillSemSchedule();



//fills Seminar-Schedule Page, called on Seminar-Schedule.php
function fillSemsTradeShowSchedule(&$seminars_array, $semContainer){	
	$previousTime;
	$wedFirst = true;
	$thursFirst = true;

	array_multisort (array_column($seminars_array, 'seminarSlot'), SORT_ASC, $seminars_array);
	
	foreach ($seminars_array as $seminarArr){
		$codeBlock = 
		 '<div class="col-xs-12 margin-bottom-10-xs row font-size-20">
				<p class="margin-top-0-xs margin-bottom-5-xs">
					<a href="https://landscapearchitect.com/TLE-LB/Seminars-2019/' . $seminarArr['pageUrl'] . '">' . $seminarArr['semName'] . '</a> <span class="italic">by ' . $seminarArr['speaker'] . '</span>
				</p>
			</div>';
		
		if($seminarArr['date'] === "Wednesday, Oct. 23rd"){
			if($semContainer === "wednesday"){
				if($previousTime != $seminarArr['time']){
					echo '<div class="dividerQuote-sm-spacing col-lg-12"></div><p class="font-size-24 margin-bottom-45-xs clear"><span class="bold">'. $seminarArr['time'] . '</span><span class="">&nbsp;&nbsp;|&nbsp;&nbsp;</span>Seminar</p>';
				}
				echo $codeBlock;
			}	
		} else if($seminarArr['date'] === "Thursday, Oct. 24th"){
			if($semContainer === "thursday"){
				if($previousTime != $seminarArr['time']){
					echo '<div class="dividerQuote-sm-spacing col-lg-12"></div><p class="font-size-24 margin-bottom-45-xs clear"><span class="bold">'. $seminarArr['time'] . '</span><span class="">&nbsp;&nbsp;|&nbsp;&nbsp;</span>Seminars</p>';
				}
				echo $codeBlock;
			}	
		} else {};
		
		$previousTime = $seminarArr['time'];
			
	} //END foreach
	
	unset($seminarArr);
} //END fillSemSchedule();




//Pre: takes array containing all seminars
//Post: echos seminars in alpha order onto page
//called on Seminar-Schedule-Alpha.php
function seminarsByAlpha(&$seminars_array){
	array_multisort (array_column($seminars_array, 'semName'), SORT_ASC, $seminars_array);
	
	foreach ($seminars_array as $seminarArr){
	
		$codeBlock = 
		 '<div class="col-xs-12 margin-bottom-40-xs row">
				<a href="https://landscapearchitect.com/TLE-LB/Seminars-2019/'. $seminarArr['pageUrl'] . '" class="seminarListTitleLink"><h2 class="seminarHeaderBold font-size-24 margin-top-0-xs margin-bottom-5-xs">' . $seminarArr['semName'] . ' <span class="italic font-size-20 lighter">by ' . $seminarArr['speaker'] . '</p></h2></a>
				<p id="semTime" class="margin-bottom-5-xs">' . $seminarArr['date'] . ' ' . $seminarArr['time'] . '</p>
				<p id="ceu">CEUs: ' . $seminarArr['ceu'] . '</p>	
		 </div>';
		 
		 echo $codeBlock;
	}
	unset($seminarArr);
}//END seminarsByAlpha()




//Pre: takes array containing all seminars
//Post: echos speakers in alpha order onto page with their seminars next to them
//called on Seminar-Schedule-Alpha.php
function speakersByAlpha(&$seminars_array){
	array_multisort (array_column($seminars_array, 'speaker'), SORT_ASC, $seminars_array);
	
	foreach ($seminars_array as $seminarArr){

		$multiSeminarsArr = array();
		
		if($seminarArr['multipleSems'] == true && $seminarArr['semNum'] > 1){
			//skip
		} else if($seminarArr['multipleSems'] == true){
			foreach ($seminars_array as $seminarArrTwo){
				if($seminarArr["speaker"] == $seminarArrTwo["speaker"]){
					array_push($multiSeminarsArr, $seminarArrTwo);
				}
			}
			unset($seminarArrTwo);
			$semString = '';
			array_multisort (array_column($multiSeminarsArr, 'seminarSlot'), SORT_ASC, $multiSeminarsArr);
			for($i = 0; $i < sizeof($multiSeminarsArr); $i++){
				$semString .= '<h2 class="headersFive font-size-20 margin-top-10-xs"><a href="https://landscapearchitect.com/TLE-LB/Seminars-2019/'. $multiSeminarsArr[$i]['pageUrl'] . '" class="seminarListTitleLink">' . $multiSeminarsArr[$i]['semName'] . '</a><br><span class="italic lighter">' .  $multiSeminarsArr[$i]['date'] . ' ' . $multiSeminarsArr[$i]['time'] .'</span></h2>';
			}
			$codeBlock = 
				 '<div class="margin-bottom-40-xs row">
						<div class="col-lg-2 col-md-3 col-sm-4">
							<img src="https://landscapearchitect.com/TLE-LB/images/speakers/2019-Speakers/' . $seminarArr['imgSrc'] . '">
						</div>
						<div class="col-lg-10 col-md-9 col-sm-8">
							<h2 class="headersTwo margin-top-0-sm margin-top-20-xs margin-bottom-10-xs">' . $seminarArr['speaker'] . '</h2>
							<p>' . $seminarArr['shortBio'] .'</p>' . $semString . '
						</div>
				 </div>';
		 	echo $codeBlock;
		} else {
			$codeBlock = 
				 '<div class="margin-bottom-50-sm margin-bottom-60-xs row">
						<div class="col-lg-2 col-md-3 col-sm-4">
							<img src="https://landscapearchitect.com/TLE-LB/images/speakers/2019-Speakers/' . $seminarArr['imgSrc'] . '">
						</div>
						<div class="col-lg-10 col-md-9 col-sm-8">
							<h2 class="headersTwo margin-top-0-sm margin-top-20-xs margin-bottom-10-xs">' . $seminarArr['speaker'] . '</h2>
							<p>' . $seminarArr['shortBio'] .'</p>
							<h2 class="headersFive font-size-20 margin-top-10-xs"><a href="https://landscapearchitect.com/TLE-LB/Seminars-2019/'. $seminarArr['pageUrl'] . '" class="seminarListTitleLink">' . $seminarArr['semName'] . '</a><br><span class="italic lighter">' .  $seminarArr['date'] . ' ' . $seminarArr['time'] .'</span></h2>
						</div>
				 </div>';
		 	echo $codeBlock;
		}
	}
	unset($seminarArr);
}//END speakersByAlpha()




//function relatedSemsAtTheConventionPages(&$seminars_array, $keywords, $excludedkeywords, $divToAppend){
//	$storage = array();
//	foreach ($seminars_array as $seminarArr){
//		$tagArray = $seminarArr['tags'];
//		$match = 0;
//		foreach ($excludedkeywords as $excludedword){
//			if()
//		}
//	}
//}
//	


?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	
		




$(document).ready(function(){

		
	$("div#scrollTopButton img").click(function(e){
			animateScrollTop();
	});

	
	if(window.location.href.indexOf('Seminar-Schedule-Alpha') > -1 ||window.location.href.indexOf('Seminars-SpeakerAlpha') > -1){
		displayScrollTopBtn();
		semScheduleSingleStickyHeader();
		seminarMenuFixed('normal');
	 } else if(window.location.href.indexOf('Seminar-Schedule-Tracts') > -1){
	 	displayScrollTopBtn();
		tractClickScroll();
	 	semScheduleSingleStickyHeaderTracts();
		seminarMenuFixed('normal');
	 } else if(window.location.href.indexOf('Seminar-Schedule') > -1){
	 	displayScrollTopBtn();
		seminarMenuFixed('semSchedule');
		semScheduleDoubleStickyHeaders();
	 } else if(window.location.href.indexOf('exhibitor-List-2019') > -1){
	 	displayScrollTopBtn();
	 }
	 

	
}); //END document addEventListener



function tractClickScroll(){
	$(this).click(function(event){
		var thisId = event.target.closest('div').id;
		thisId = thisId.slice(0, thisId.length - 3) + 'Header';
		const semSchContainTop = $('#semSchContain')[0].getBoundingClientRect().top;
		const scrollCheck = 207 - parseInt($('.semContent').css('padding-top'), 10);
		let newScrollOffset;
		
		if (semSchContainTop > scrollCheck){
			newScrollOffset = 205;
		} else {
			newScrollOffset = 101;
		}
		
    $([document.documentElement, document.body]).animate({
        scrollTop: $('#' + thisId).offset().top - newScrollOffset
    }, 1000);
	});
}







function semScheduleSingleStickyHeaderTracts(){
	let firstHeaderTop;
	const firstHeader = $('#firstHeader');

	$(window).scroll(function(e){
		firstHeaderTop = firstHeader[0].getBoundingClientRect().top;
		const semSchContainTop = $('#semSchContain')[0].getBoundingClientRect().top;
		const scrollCheck = 207 - parseInt($('.semContent').css('padding-top'), 10);

		if (semSchContainTop > scrollCheck){
			firstHeader.removeClass('sticky');
			firstHeader.removeClass('tractImgContainerSmall');
			firstHeader.addClass('tractImgContainerFull');
		} else {
			firstHeader.addClass('sticky');
			firstHeader.css('top', 0);
			firstHeader.removeClass('tractImgContainerFull');
			firstHeader.addClass('tractImgContainerSmall');
		}
	});
}



function semScheduleSingleStickyHeader(){
	let firstHeaderTop;
	const firstHeader = $('#firstHeader');

	$(window).scroll(function(e){
		firstHeaderTop = firstHeader[0].getBoundingClientRect().top;
		const semSchContainTop = $('#semSchContain')[0].getBoundingClientRect().top;
		const scrollCheck = 102 - parseInt($('.semContent').css('padding-top'), 10);

		if (semSchContainTop > scrollCheck){
			firstHeader.removeClass('sticky');
		} else {
			firstHeader.addClass('sticky');
			firstHeader.css('top', 0);
		} 
	});
}



function semScheduleDoubleStickyHeaders(){	
		let firstHeaderTop, secondHeaderTop;
		const firstHeader = $('#wedHeader');
		const secondHeader = $('#thursHeader');
		const firstHeaderHeight = firstHeader.outerHeight();
		const secondHeaderHeight = secondHeader.outerHeight();

		$(window).scroll(function(e){
			const scrollPosY = (window.pageYOffset || document.documentElement.scrollTop) - (document.documentElement.clientTop || 0);

			firstHeaderTop = firstHeader[0].getBoundingClientRect().top;
			secondHeaderTop = secondHeader[0].getBoundingClientRect().top;
//			const speakerItemWedContainTop = document.getElementById('speakerItemWedContain').getBoundingClientRect().top;
//			const speakerItemThursContainTop = document.getElementById('speakerItemThursContain').getBoundingClientRect().top; 
			
			const scrollCheck_OneWed = 82 - parseInt($('.contentWed').css('padding-top'), 10);
			const scrollCheck_OneThurs = 80 - parseInt($('.contentThurs').css('padding-top'), 10);
			
			const speakerItemWedContainTop = $('#speakerItemWedContainTest')[0].getBoundingClientRect().top;
			const speakerItemThursContainTop = $('#speakerItemThursContainTest')[0].getBoundingClientRect().top;
//			const speakerItemWedContainBottom = document.getElementById('speakerItemWedContain').getBoundingClientRect().bottom;
//			const speakerItemThursContainBottom = document.getElementById('speakerItemThursContain').getBoundingClientRect().bottom;

			
			//set peakerItemWedContainTop to jquery to use offset().top to determine when changing so that padding for .style + content is included in calculation
	
			 if(speakerItemWedContainTop > scrollCheck_OneWed) {
				firstHeader.removeClass('sticky');
				secondHeader.removeClass('sticky');
				console.log('1');
			} else if(speakerItemWedContainTop <= 82 && speakerItemThursContainTop  > scrollCheck_OneThurs){
				firstHeader.addClass('sticky');
				firstHeader.css('top', 0);
				secondHeader.css('top', 0);
				secondHeader.removeClass('sticky');
				secondHeader.removeClass('col-xs-12');
				secondHeader.addClass('col-md-9');
				secondHeader.addClass('col-sm-8');
				console.log('2');
				
				
				//nothing is happening here, it is only in this stage for one pt of scroll
				//needs to be section that has thursHeader push wedHeader up
			} else if((secondHeaderTop < (firstHeaderTop + firstHeaderHeight)) && speakerItemThursContainTop > -20) {
				firstHeader.addClass('sticky');
				secondHeader.addClass('sticky');
				secondHeader.addClass('col-xs-12');
				secondHeader.removeClass('col-md-9');
				secondHeader.removeClass('col-sm-8');
				firstHeader.css('top', - (scrollPosY - (secondHeaderTop - firstHeaderHeight)));
				secondHeader.css('top', (firstHeaderTop + firstHeaderHeight));
				console.log('3');

			} else {
				secondHeader.addClass('sticky');
				secondHeader.addClass('col-xs-12');
				secondHeader.removeClass('col-md-9');
				secondHeader.removeClass('col-sm-8');
				firstHeader.removeClass('sticky');
				secondHeader.css('top', 0);
				console.log('5');
			}
		}); 
	}//End changeClass()



function animateScrollTop(){
	$("html, body").animate({ scrollTop: "0px" }, 1000);
}



function displayScrollTopBtn(){
	let firstHeaderTop, btnCurrentPosTop, btnCurrentPosBottom, containerMainBottom;
	const firstHeader = $('#firstHeader');
	const scrollTopBtn = $('#scrollTopButton')
	const btnOriginalPos = scrollTopBtn[0].getBoundingClientRect().top;
	const containerMain = $('.containerMain');

	$(window).scroll(function(e){
		const scrollPosY = (window.pageYOffset || document.documentElement.scrollTop) - (document.documentElement.clientTop || 0);
		firstHeaderTop = firstHeader[0].getBoundingClientRect().top;
		btnCurrentPosTop = scrollTopBtn[0].getBoundingClientRect().top;
		btnCurrentPosBottom = scrollTopBtn[0].getBoundingClientRect().bottom;
		containerMainBottom = containerMain[0].getBoundingClientRect().bottom;
//
//		console.log(containerMainBottom);
//		console.log(btnCurrentPosBottom);

		if(firstHeaderTop < 0){
			$('#scrollTopButton').addClass("scrollTopButtonFixed");
			$('#scrollTopButton').removeClass("scrollTopButtonAbsolute");
		} else if (btnCurrentPosBottom <= containerMainBottom + 500){
			$('#scrollTopButton').removeClass("scrollTopButtonFixed");
			$('#scrollTopButton').removeClass("scrollTopButtonAbsolute");
		} else if(firstHeaderTop > 0){
			$('#scrollTopButton').removeClass("scrollTopButtonFixed");
			$('#scrollTopButton').removeClass("scrollTopButtonAbsolute");
		}
	});
}



function seminarMenuFixed(condition){

	let firstHeaderTop, semSchContainTop;
	const semMenu = $('#semMenu');
	const firstHeader = $('#firstHeader');
	const semSchContain = $('#semSchContain');
	const semMenuWidthDiv = $(".semMenuWidth");
	let semMenuWidth = semMenuWidthDiv.width();
	semMenu.css('width', semMenuWidth);

	$(window).resize(function(e){
		semMenuWidth = semMenuWidthDiv.width();
		semMenu.css('width', semMenuWidth);
	});

	$(window).scroll(function(e){
		firstHeaderTop = firstHeader[0].getBoundingClientRect().top;
		if(condition == 'normal'){
			semSchContainTop = semSchContain[0].getBoundingClientRect().top;
		}
		
		if(condition == 'semSchedule'){
			if (firstHeaderTop < 66){
				semMenu.addClass("semMenuTopFixedSemSch");
			} else {
				semMenu.removeClass("semMenuTopFixedSemSch");
			}
		} else {
			if (semSchContainTop < 66){
				semMenu.addClass("semMenuTopFixedSemSch");
			} else {
				semMenu.removeClass("semMenuTopFixedSemSch");
			}
		} 
//		else {
//			if (firstHeaderTop < -90){
//				semMenu.addClass("semMenuTopFixed");
//			} else {
//				semMenu.removeClass("semMenuTopFixed");
//			}

	});
}



function relatedSemsAtTheConventionPages(keywords, excludedKeyword, divToAppend){
	var storage = [];
	var excludes = [...excludedKeyword];
	
	mainSeminarArray.forEach(function(obj, index){
		let tagArray = obj.tags;
		var match = 0;
		excludedKeyword.forEach(function(exclude){
			if(tagArray.indexOf(exclude) > -1){
				//do nothing
			} else {
				tagArray.forEach(function(tag){
					if(keywords.indexOf(tag) > -1){
						match++;
					}
				});
				if(match == keywords.length){
					storage.push(obj);
				}
			}
		});
	});
	
	storage.sort(function(a,b){
		return a.seminarSlot - b.seminarSlot;
	}).forEach(function(obj, index){
		let newId = obj.pageUrl.substr(0, (obj.pageUrl.length - 4));
		let template = `<div class="col-lg-12 margin-top-20-xs" id="${newId}-relatedSemsAtTheConvention">
											<p class="datePrintAdjust">${obj.date} ${obj.time}</p>
											<a href="https://landscapearchitect.com/TLE-LB/Seminars-2019/${obj.pageUrl}" class="seminarListTitleLink"><h2 class="headersThree margin-bottom-5-xs margin-top-0-xs">${obj.semName}</h2></a>
											<p>by ${obj.speaker}</p>
										</div>`;
	
		let seminar = document.createElement("div");
		seminar.innerHTML = template;
		seminar.className = 'row';
		document.getElementById(divToAppend).append(seminar);
		if(index < storage.length - 1){
			let divider = document.createElement("div");
			divider.className = "dividerQuote col-xs-11 row margin-top-20-xs margin-bottom-20-xs";
			document.getElementById(divToAppend).append(divider);
		}
		
	});
} //END relatedSemsAtTheConventionPages();



function speakersAtTheConventionPages(keywords, excludedKeyword, divToAppend){
	var storage = [];
	var excludes = [...excludedKeyword];
	
	mainSeminarArray.forEach(function(obj, index){
		let tagArray = obj.tags;
		var match = 0;
		var push = true;
		excludedKeyword.forEach(function(exclude){
			if(tagArray.indexOf(exclude) > -1){
				//do nothing
			} else {
				tagArray.forEach(function(tag){
					if(keywords.indexOf(tag) > -1){
						match++;
					}
				});
				if(match == keywords.length){
					storage.forEach(function(storedObj){
						if(storedObj.speaker == obj.speaker){
							push = false;
						}
					});
					if(push){
						storage.push(obj);
					}
				}
			}
		});
	});
	
	storage.forEach(function(obj, index){
		let newId = obj.pageUrl.substr(0, (obj.pageUrl.length - 4));
		let template = `<div class="row margin-top-20-xs">
													<div class="col-xs-3">
														<img src="https://landscapearchitect.com/TLE-LB/images/speakers/2019-Speakers/${obj.imgSrc}">
													</div>
													<div class="col-xs-9">
														<h3 class="headresThree margin-top-0-xs">${obj.speaker}</h3>
														<p>${obj.shortBio}</p>
													</div>
												</div>`;
	
		let seminar = document.createElement("div");
		seminar.id = `${newId}-speakersAtTheConventionPages`;
		seminar.className = `sortable col-lg-12 row`;
		seminar.innerHTML = template;
		document.getElementById(divToAppend).append(seminar);
		
	});
} //END speakersAtTheConventionPages()











//MISC currently unused



////fills Seminar-Schedule Page
//function fillSemSchedule(){
//	let previousTime = ``;	
//	
//	mainSeminarArray.sort(function(a,b) {
//			return a.seminarSlot - b.seminarSlot;
//	}).forEach(function(currentObj ,index){
//		let currentTract = currentObj.tract;
//		let currentTime = currentObj.seminarSlot;
//		let tractCatMaster = ``;
//		let tractAssignerImg, tractAssignerUrl;
//	
//		for(let i=0; i < currentTract.length; i++){
//		if(currentTract[i] == "irr"){
//			tractAssignerImg = "seminar-tract-graphic_01.png";
//			tractAssignerUrl = "seminars-IrrigationTract-2018.php";
//		} else if(currentTract[i] == "sus"){
//			tractAssignerImg = "seminar-tract-graphic_02.png";
//			tractAssignerUrl = "seminars-IrrigationTract-2018.php";
//		} else if(currentTract[i] == "tree"){
//			tractAssignerImg = "seminar-tract-graphic_03.png";
//			tractAssignerUrl = "seminars-TreeTract-2018.php";
//		} else if(currentTract[i] == "main"){
//			tractAssignerImg = "seminar-tract-graphic_04.png";
//			tractAssignerUrl = "eminars-MaintenanceTract-2018.php";
//		} else if(currentTract[i] == "turf"){
//			tractAssignerImg = "seminar-tract-graphic_05.png";
//			tractAssignerUrl = "seminars-TurfTract-2018.php";
//		} else if(currentTract[i] == "pest"){
//			tractAssignerImg = "seminar-tract-graphic_06.png";
//			tractAssignerUrl = "seminars-PestTract-2018.php";
//		} else if(currentTract[i] == "soil"){
//			tractAssignerImg = "seminar-tract-graphic_07.png";
//			tractAssignerUrl = "seminars-DesignTract-2018.php";
//		} else if(currentTract[i] == "des"){
//			tractAssignerImg = "seminar-tract-graphic_08.png";
//			tractAssignerUrl = "seminars-DesignTract-2018.php";
//		} else if(currentTract[i] == "bus"){
//			tractAssignerImg = "seminar-tract-graphic_09.png";
//			tractAssignerUrl = "seminars-BusinessTract-2018.php";
//		} else if(currentTract[i] == "comp"){
//			tractAssignerImg = "seminar-tract-graphic_10.png";
//			tractAssignerUrl = "seminars-CompostTract-2018.php";
//		}
//			tractCatMaster += `<a href="https://landscapearchitect.com/TLE-LB/${tractAssignerUrl}"><img src="https://landscapearchitect.com/TLE-LB/images/${tractAssignerImg}" width="30px" style="display: inline;"></a>&nbsp;`;
//		}
//
//		let codeBlock = 
//		 `<div class="col-xs-12 margin-bottom-40-xs row">
//				<div class="col-xs-2 imgPaddingAdjustLeft">
//					<a href="https://landscapearchitect.com/TLE-LB/Seminars-2019/${currentObj.pageUrl}" target="_blank">
//						<img src="https://landscapearchitect.com/TLE-LB/images/speakers/2019-Speakers/${currentObj.imgSrc}">
//					</a>
//				</div>
//				<div class="col-xs-8">
//					<p id="semTime">${currentObj.time}</p>
//					<h2 class="seminarHeaderBold font-size-28 margin-top-0-xs margin-bottom-5-xs">
//						<a href="https://landscapearchitect.com/TLE-LB/Seminars-2019/${currentObj.pageUrl}">${currentObj.semName}</a>
//					</h2>
//					<p id="speaker" class="margin-bottom-10-xs italic">by ${currentObj.speaker}</p>
//					<p id="room" class="margin-bottom-0-xs <!--room-display-->">Room: ${currentObj.room}</p>
//					<p id="ceu">CEUs: ${currentObj.ceu}</p>	
//				</div>
//			</div>`;
//			
//		let timeDivider = `<h2 class="headersFour margin-bottom-20-xs greyBackground followMeBar">${currentObj.time}</h2>`;
//		let dividerItem = document.createElement("div");
//		dividerItem.className += "clear";
//		dividerItem.innerHTML = timeDivider;
//		
//						
//		const speakerItemWedContain = document.getElementById("speakerItemWedContain");
//		const speakerItemThursContain = document.getElementById("speakerItemThursContain");
//		let speakerItem = document.createElement("div");
//		speakerItem.innerHTML = codeBlock;
//		
//
//		if(currentObj.date === "Wednesday, Oct. 23rd"){
//			if(previousTime != currentObj.time){
//			speakerItemWedContain.append(dividerItem);
//			}
//			speakerItemWedContain.append(speakerItem);
//		} else if(currentObj.date === "Thursday, Oct. 24th"){
//			if(previousTime != currentObj.time){
//				speakerItemThursContain.append(dividerItem);
//			}
//			speakerItemThursContain.append(speakerItem);
//		} else {};
//		
//		previousTime = currentObj.time;
//				
//
//	}); //END foreach
//} //END fillSemSchedule();







//function fillTrackPages() {
//	// Creates tracts on tract pages
//	let tractPageCat;
//	const tractPages = ["IrrigationTract","SustainableTract","TreeTract","MaintenanceTract","TurfTract","PestTract","SoilAmendmentsTract","DesignTract","BusinessTract","CompostTract"];
//	const tractObjCats = ["irr","sus","tree","main","turf","pest","soil","des","bus","comp"];
//	let matchingSems = [];
//
//	//finds the tract category that matches the current page
//	tractPages.forEach(function(item, index){
//		if(window.location.href.indexOf(item) > -1){
//			tractPageCat = tractObjCats[index];
//		}
//	});


	
////fills individual seminar/speaker pages with information from mainSeminarArray
////finds correct page based on pageUrl of each object in the mainSeminarArray
//function fillSemPage(){ 	
//	mainSeminarArray.forEach(function(obj, index){
//		if(window.location.href.indexOf(obj.pageUrl) > -1){
//			var semPageObj = mainSeminarArray[index]; 
//			if(!("multiSpeakers" in semPageObj)){
//				//for one speaker
////				document.getElementById("semNameFirst").innerHTML = semPageObj.semNameFirst;
////				document.getElementById("semNameSecond").innerHTML = semPageObj.semNameSecond;
////				document.getElementById("speaker").innerHTML = `by ${semPageObj.speaker}`;
////				for(var i = 0; i < document.getElementsByClassName("speaker1").length; i++){
////					document.getElementsByClassName("speaker1")[i].innerHTML = semPageObj.speaker;
////				}
////				document.getElementById("ceu").innerHTML = `CEUs: ${semPageObj.ceu}`;
////				document.getElementById("semInfoMain").innerHTML = semPageObj.semInfoMain;
////				document.getElementById("speakerImgSrc").innerHTML = `<img src="https://landscapearchitect.com/TLE-LB/images/speakers/2019-Speakers/${semPageObj.imgSrc}" class="center-block speakerImg">`;
////				document.getElementById("semDatetime").innerHTML = `${semPageObj.date} ${semPageObj.time}`;
////				document.getElementById("room").innerHTML = `Room ${semPageObj.room}`;
//			} else {
//				//for multiple speakers
////				document.getElementById("semNameFirst").innerHTML = semPageObj.semNameFirst;
////				document.getElementById("semNameSecond").innerHTML = semPageObj.semNameSecond;
////				document.getElementById("ceu").innerHTML = `CEUs: ${semPageObj.ceu}`;
////				document.getElementById("semInfoMain").innerHTML = semPageObj.semInfoMain;
////				document.getElementById("semDatetime").innerHTML = `${semPageObj.date} ${semPageObj.time}`;
////				document.getElementById("room").innerHTML = `Room ${semPageObj.room}`;
////				if(semPageObj.panel == true){
////					document.getElementById("speaker").innerHTML = `with ${semPageObj.speaker}`;
////				} else {
////					document.getElementById("speaker").innerHTML = `by ${semPageObj.speaker}`;
////				}
//				if(document.getElementById("speakerA") != null){
//					document.getElementById("speakerA").innerHTML = semPageObj.speaker;
//				}
//				for(var i = 0; i < semPageObj.multiSpeakers.length; i++){
//					var num = i + 1;
//					document.getElementById("speaker" + num).innerHTML = semPageObj.multiSpeakers[i].speaker;
//					document.getElementById("speakerImgSrc" + num).innerHTML = `<img src="https://landscapearchitect.com/TLE-LB/images/speakers/2019-Speakers/${semPageObj.multiSpeakers[i].imgSrc}" class="center-block speakerImg">`;
//				}
//			}
//		}
//	});
//}// END fillSemPage()






//	mainSeminarArray.filter(function(obj){
//		return obj.tract.indexOf(tractPageCat) >-1;
//	}).sort(function(a,b) {
//		return a.seminarSlot - b.seminarSlot;
//	}).forEach(function(currentObj,index, array){
//
//		let leftTemplate = `<table cellspacing="5px" id="speakerItems">
//						<tr>
//							<td valign="top" width="70%">
//							<h2 class="headersTwo" style="margin-bottom: 10px; margin-top: 0px;">
//								<p style="text-align: left; font-size: 20px; font-family: 'Open sans';">${currentObj.date}: ${currentObj.time}</p>
//								<a href="https://landscapearchitect.com/TLE-LB/seminars-${currentObj.pageUrl}" target="_blank">${currentObj.semName}</a><br>
//								by ${currentObj.speaker}<br>
//								<span style="text-align: left; font-size: 15px; font-family: 'Open sans';">CEUs: ${currentObj.ceu}</span>
//							</h2>
//							<p style="text-align: left; font-size: 16px; font-family: 'Open sans';">${currentObj.semInfo}</p>
//							</td>
//							<td valign="top" align="right" width="30%">
//							<a href="https://landscapearchitect.com/TLE-LB/seminars-${currentObj.pageUrl}" target="_blank"><img src="https://landscapearchitect.com/TLE-LB/images/speakers/${currentObj.imgSrc}" width="80%"></a>
//							</td>
//						</tr>
//					</table>`;
//		let rightTemplate = `<table cellspacing="5px" id="speakerItems">
//								<tr>
//									<td valign="top" align="left" width="30%">
//									<a href="https://landscapearchitect.com/TLE-LB/seminars-${currentObj.pageUrl}" target="_blank"><img src="https://landscapearchitect.com/TLE-LB/images/speakers/${currentObj.imgSrc}" width="80%"></a>
//									</td>
//									<td valign="top" width="70%">
//									<h2 class="headersTwo" style="margin-bottom: 10px; margin-top: 0px;">
//										<p style="text-align: left; font-size: 20px; font-family: 'Open sans';">${currentObj.date}: ${currentObj.time}</p>
//										<a href="https://landscapearchitect.com/TLE-LB/seminars-${currentObj.pageUrl}" target="_blank">${currentObj.semName}</a><br>
//										by ${currentObj.speaker}<br>
//										<span style="text-align: left; font-size: 15px; font-family: 'Open sans';">CEUs: ${currentObj.ceu}</span>
//									</h2>
//									<p style="text-align: left; font-size: 16px; font-family: 'Open sans';">${currentObj.semInfo}</p>
//									</td>
//								</tr>
//							</table>`;
//		let dividerQuote = `<div class="dividerQuote goldQuoteDivide"><h3>"The seminars were all great. Presentations ranged from highly professional to accessible for those who want to gain general knowledge."</h3></div>`;
//		let dividerLine = `<div class="dividerQuote" style="border-top: 1px solid #C2C2C2; margin: 50px 0px "></div>`;
//
//		let seminar = document.createElement("div");
//		let divider = document.createElement("div");
//
//		if(index === 0 || index % 2 === 0 ){
//			seminar.innerHTML = leftTemplate;
//		} else{
//			seminar.innerHTML = rightTemplate;
//		}
//
//
//		document.getElementById("seminarSchduleContain").append(seminar);
//
//		if(index === 0){
//			divider.innerHTML = dividerQuote;
//			document.getElementById("seminarSchduleContain").append(divider);
//		} else if(index === array.length -1){
//			//do nothing
//		} else {
//			divider.innerHTML = dividerLine;
//			document.getElementById("seminarSchduleContain").append(divider);
//		}
//	});
//
//} //END fillTrackPages()


	
	
</script>



