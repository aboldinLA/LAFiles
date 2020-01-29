		
		$(window).load(function(){
				// Isotope 2
				var $container_sec = $('#isotope_sec2');
				$container_sec.isotope({
						itemSelector: '.isotope-item',
				filter: '.all'

				});

				var $optionSets_sec = $('.filter.sfilter'),
				$optionLinks_sec = $optionSets_sec.find('a');
				$optionLinks_sec.click(function () {
						var $this = $(this);
						if ($this.hasClass('selected')) {
								return false;
						}
						var $optionSet_sec = $this.parents('.filter.sfilter');
						$optionSet_sec.find('.selected').removeClass('selected');
						$this.addClass('selected');
						var options_sec = {},
										key = $optionSet_sec.attr('data-option-key'),
										value = $this.attr('data-option-value');
						value = value === 'false' ? false : value;
						options_sec[key] = value;
						if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
							changeLayoutMode($this, options_sec);
						} else {
								$container_sec.isotope(options_sec);
						}
						return false;
				});
		});


