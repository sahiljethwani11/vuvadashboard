$(document).ready(function(){
	$('#date1').datepicker();
	$('#date2').datepicker();
	$('#date3').datepicker();
	$('#date4').datepicker();
	$('#date5').datepicker();
	$('#date6').datepicker();
})

$(window).on('load', function () {
	// Animate loader off screen
	$(".se-pre-con").fadeOut("slow");
});

$(function () {
	$.contextMenu({
		selector: '.context-menu-one',
		callback: function (key, options) {
			var m = "clicked: " + key;
			window.console && console.log(m) || alert(m);
		},
		items: {
			"edit": { name: "Edit", icon: "edit" },
			"cut": { name: "Cut", icon: "cut" },
			copy: { name: "Copy", icon: "copy" },
			"paste": { name: "Paste", icon: "paste" },
			"delete": { name: "Delete", icon: "delete" },
			"sep1": "---------",
			"quit": {
				name: "Quit", icon: function () {
					return 'context-menu-icon context-menu-icon-quit';
				}
			}
		}
	});

	$('.context-menu-one').on('click', function (e) {
		console.log('clicked', this);
	})
});

$('.count').each(function () {
	$(this).prop('Counter', 0).animate({
		Counter: $(this).text()
	}, {
			duration: 4000,
			easing: 'swing',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
});

$(document).ready(function () {
	Highcharts.chart('clickreport1', {

		title: {
			text: ''
		},

		subtitle: {
			text: ''
		},

		credits: {
			enabled: false
		},
		exporting: { enabled: false },
		xAxis: {
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
		},

		yAxis: {
			title: {
				text: ''
			}
		},
		legend: {
			layout: 'vertical',
			align: 'right',
			verticalAlign: 'middle'
		},

		plotOptions: {
		},

		colors: ['#38c6da', '#0d47a1'],

		series: [{
			name: 'SMS Report',
			data: [0.40, 0.32, 0.34, 0.34, 0.44, 0.39, 0.03]
		}]

	});
});

$(document).ready(function () {
	Highcharts.chart('clickreport2', {
		chart: {
			type: 'bar'
		},
		title: {
			text: ''
		},
		subtitle: {
			text: ''
		},
		exporting: { enabled: false },
		xAxis: {
			categories: ['State Bank of India', 'Reliance Retail', 'Bandhan Bank', 'Kotak Mahindra Bank Limited', 'NetXcell', 'Sharekhan Ltd.', 'MP Poorva Kshetra Vidyut Vitran', 'Shriram Transport Finance Co.', 'Adarsh Credit', 'Sarastwat Bank', 'Reliance Market'],
			title: {
				text: null
			}
		},
		yAxis: {
			min: 0,
			title: {
			},
			labels: {
				overflow: 'justify'
			}
		},
		plotOptions: {
			bar: {
				dataLabels: {
					enabled: true
				}
			}
		},
		legend: {
			layout: 'vertical',
			align: 'right',
			verticalAlign: 'top',
			x: -40,
			y: 80,
			floating: true,
			borderWidth: 1,
			backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
			shadow: true
		},
		credits: {
			enabled: false
		},
		series: [{
			name: 'SMS by Company',
			data: [0.56, 0.26, 0.23, 0.22, 0.14, 0.23, 0.15, 0.16, 0.12, 0.10]
		}]
	});
});

$(document).ready(function () {

	// Build the chart

	Highcharts.chart('conversion1', {
		chart: {
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 20
			}
		},
		title: {
			text: ''
		},
		subtitle: {
			text: ''
		},
		plotOptions: {
			pie: {
				innerSize: 200,
				depth: 40
			}
		},
		credits: {
			enabled: false
		},
		exporting: { enabled: false },
		series: [{
			name: 'Point of Contact',
			data: [
				['Rajeev Mishra', 0.8],
				['Ajay Pandey', 0.3],
				['Prashant Gadekar', 0.1],
				['Harshit Vador', 0.6],
				['Suman Giri', 0.8],
				['Hiren Bhanushali', 0.4],
				['(Bank)', 0.4]
			]
		}]
	});
});


$(document).ready(function () {
	
	// Build the chart
	Highcharts.chart('conversion2', {
		chart: {
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 20
			}
		},
		title: {
			text: ''
		},
		subtitle: {
			text: ''
		},
		plotOptions: {
			pie: {
				innerSize: 200,
				depth: 40
			}
		},
		credits: {
			enabled: false
		},
		exporting: { enabled: false },
		series: [{
			name: '',
			data: [
				['Other', 4.04],
				['Expired', 6.41],
				['DNC Reject', 5.42],
				['DNC Refund', 5.94],
				['Send', 75.07]
			]
		}]
	});
});




$(document).ready(function () {
	$(function () {

		// Prepare demo data
		var data = [{
			"hc-key": "in-py",
			"value": 0
		}, {
			"hc-key": "in-ld",
			"value": 1
		}, {
			"hc-key": "in-wb",
			"value": 2
		}, {
			"hc-key": "in-or",
			"value": 3
		}, {
			"hc-key": "in-br",
			"value": 4
		}, {
			"hc-key": "in-sk",
			"value": 5
		}, {
			"hc-key": "in-ct",
			"value": 6
		}, {
			"hc-key": "in-tn",
			"value": 7
		}, {
			"hc-key": "in-mp",
			"value": 8
		}, {
			"hc-key": "in-2984",
			"value": 9
		}, {
			"hc-key": "in-ga",
			"value": 10
		}, {
			"hc-key": "in-nl",
			"value": 11
		}, {
			"hc-key": "in-mn",
			"value": 12
		}, {
			"hc-key": "in-ar",
			"value": 13
		}, {
			"hc-key": "in-mz",
			"value": 14
		}, {
			"hc-key": "in-tr",
			"value": 15
		}, {
			"hc-key": "in-3464",
			"value": 16
		}, {
			"hc-key": "in-dl",
			"value": 17
		}, {
			"hc-key": "in-hr",
			"value": 18
		}, {
			"hc-key": "in-ch",
			"value": 19
		}, {
			"hc-key": "in-hp",
			"value": 20
		}, {
			"hc-key": "in-jk",
			"value": 21
		}, {
			"hc-key": "in-kl",
			"value": 22
		}, {
			"hc-key": "in-ka",
			"value": 23
		}, {
			"hc-key": "in-dn",
			"value": 24
		}, {
			"hc-key": "in-mh",
			"value": 25
		}, {
			"hc-key": "in-as",
			"value": 26
		}, {
			"hc-key": "in-ap",
			"value": 27
		}, {
			"hc-key": "in-ml",
			"value": 28
		}, {
			"hc-key": "in-pb",
			"value": 29
		}, {
			"hc-key": "in-rj",
			"value": 30
		}, {
			"hc-key": "in-up",
			"value": 31
		}, {
			"hc-key": "in-ut",
			"value": 32
		}, {
			"hc-key": "in-jh",
			"value": 33
		}];

		// Initiate the chart
		$('#geoLocation').highcharts('Map', {

			title: {
				text: 'Highmaps basic demo'
			},

			credits: {
				enabled: false
			},

			subtitle: {
				text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/in/in-all.js">India</a>'
			},

			mapNavigation: {
				enabled: true,
				buttonOptions: {
					verticalAlign: 'bottom'
				}
			},

			colorAxis: {
				min: 0
			},

			colors: ['#414C6E'],

			series: [{
				data: data,
				mapData: Highcharts.maps['countries/in/in-all'],
				joinBy: 'hc-key',
				name: 'Random data',
				states: {
					hover: {
						color: '#DD3437'
					}
				},
				dataLabels: {
					enabled: true,
					format: '{point.name}'
				}
			}, {
				type: "mappoint",
				data: [{
					name: 'Chennai',
					x: 3354,
					y: -828
				}]
			}]
		});
	});

});

$(document).ready(function(){
	$("#nav-custom-date").hide()
	$("#graph-duration-date").hide()
	$("#graph1-duration-date").hide()
	$("#nav-duration-selector")
    .change(function (e) {
        if(e.target.value == "custom"){
			$('#nav-custom-date').show();
			$('#nav-custom-date-blank').hide();
            
		}else{
			$("#nav-custom-date").hide()
			$('#nav-custom-date-blank').show();
		}
	})
	$("#graph-duration-selection")
    .change(function (e) {
        if(e.target.value == "custom"){
			$('#graph-duration-date').show();
			$('#graph-duration-selection-blank').hide();
            
		}else{
			$("#graph-duration-date").hide()
			$('#graph-duration-selection-blank').show();
		}
	})
	$("#graph1-duration-selection")
    .change(function (e) {
        if(e.target.value == "custom"){
			$('#graph1-duration-date').show();
			$('#graph1-duration-selection-blank').hide();
            
		}else{
			$("#graph1-duration-date").hide()
			$('#graph1-duration-selection-blank').show();
		}
	})
})