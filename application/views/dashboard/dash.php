<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">
	<title>Helo Campaign</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $this->config->item("css"); ?>hello_css/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $this->config->item("css"); ?>hello_css/css/datepicker.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/datepicker.css"> -->
	<!--<link href="css/bootstrap.css" rel="stylesheet">-->
	<!--		<link href="js/jQuery-contextMenu-master/dist/jquery.contextMenu.css" rel="stylesheet">-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo $this->config->item("css"); ?>hello_css/css/style.css?v=2" rel="stylesheet">
	<!--<link href="css/style.css?v=2" rel="stylesheet"> -->
</head>
<script src="<?php echo $this->config->item("js"); ?>hello_js/js/jquery-3.2.1.js"></script>
    <script src="<?php echo $this->config->item("js"); ?>hello_js/js/bootstrap.js"></script>
<script src="<?php echo $this->config->item("js"); ?>hello_js/js/bootstrap-datepicker.js"></script>
<script>
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
</script>

<body class="context-menu-one">
	<div class="se-pre-con"></div>
	<div class="dashboardSection">
		<div class="row breadDatesection">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<ol class="breadcrumb">
					<li class="rootLocation">
						<img style="height: 40px;width:40px" src="<?php echo $this->config->item("css"); ?>img/logo.png" alt="">
					</li>
				</ol>
			</div>
			<div style="padding-top:10px;" class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<div class="row">
					<div id="nav-custom-date-blank" class="col-md-6 text-center"></div>
					<div style="padding-left: 25px;" id="nav-custom-date" class="col-md-6 text-center">
						<input id="date1" class="col-md-5 form-control" style="width: 110px;" type="text" placeholder="mm/dd/yyyy">
						<span style="padding-top: 6px;" class="col-md-2">To</span>
						<input id="date2" class="col-md-5 form-control" placeholder="mm/dd/yyyy" style="width: 110px;" type="text">
					</div>
					<div class="col-md-3 text-right">
						<select id="nav-duration-selector" style="width: 140px" class="form-control durationSelect">
							<option>Last 7 Days</option>
							<option>Last Week</option>
							<option>Last 15 Days</option>
							<option>Last 30 Days</option>
							<option>This Month</option>
							<option>Last Month</option>
							<option value="custom">Custom</option>
						</select>
					</div>
					<div class="col-md-2 text-center">
						<a href="<?php echo site_url("dashboard/logout"); ?>" style="width: 70px" class="form-control durationSelect">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row statFigurerow">

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="campaign">
					<!-- <div class="row">
							<div class="figuresCard text-center statscard">
								<div class="row statHeadrow">
									<div class="statHead">
										Campaign Stats
									</div>
								</div>
								<div class="row statfigRow">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<div class="row">
											<div class="statFigure count">
												25000
											</div>
										</div>
										<div class="row">
											<div class="stattitle">
												Total SMS
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<div class="row">
											<div class="statFigure count">
												24500
											</div>
										</div>
										<div class="row">
											<div class="stattitle">
												Delivered SMS
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<span class="percentTitle">Success Rate :</span>
									<span class="percentFigure success">99.19%</span>
								</div>
							</div>
							<div class="figuresCard text-center statscard">
								<div class="row statHeadrow">
									<div class="statHead">
										Undelivered SMS
									</div>
								</div>
								<div class="row statfigRow">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<div class="row">
											<div class="statFigure count">
												300
											</div>
										</div>
										<div class="row">
											<div class="stattitle">
												DND No's
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<div class="row">
											<div class="statFigure count">
												200
											</div>
										</div>
										<div class="row">
											<div class="stattitle">
												Failed
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<span class="percentTitle">SMS Failed Rate :</span>
									<span class="percentFigure danger">00.81%</span>
								</div>
							</div>
							<div class="figuresCard text-center statscard">
								<div class="row statHeadrow">
									<div class="statHead">
										Open Stats
									</div>
								</div>
								<div class="row statfigRow">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<div class="row">
											<div class="statFigure count">
												18000
											</div>
										</div>
										<div class="row">
											<div class="stattitle">
												Open Link
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<div class="row">
											<div class="statFigure count">
												7000
											</div>
										</div>
										<div class="row">
											<div class="stattitle">
												Unopened
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<span class="percentTitle">SMS Open Rate :</span>
									<span class="percentFigure success">73.47%</span>
								</div>
							</div>
							<div class="figuresCard text-center statscard">
								<div class="row statHeadrow">
									<div class="statHead">
										Link Clicks
									</div>
								</div>
								<div class="row statfigRow">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<div class="row">
											<div class="statFigure count">
												23500
											</div>
										</div>
										<div class="row">
											<div class="stattitle">
												Total Clicks
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<div class="row">
											<div class="statFigure count">
												18000
											</div>
										</div>
										<div class="row">
											<div class="stattitle">
												Unique Clicks
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<span class="percentTitle">Click Rate :</span>
									<span class="percentFigure success">95.92%</span>
								</div>
							</div>
							<div class="figuresCard text-center statscard">
								<div class="row statHeadrow">
									<div class="statHead">
										Video Views
									</div>
								</div>
								<div class="row statfigRow">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<div class="row">
											<div class="statFigure count">
												23500
											</div>
										</div>
										<div class="row">
											<div class="stattitle">
												Total View
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<div class="row">
											<div class="statFigure count">
												18000
											</div>
										</div>
										<div class="row">
											<div class="stattitle">
												Unique VIew
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<span class="percentTitle">Video Rate :</span>
									<span class="percentFigure success">95.92%</span>
								</div>
							</div>
						</div>   -->
					<div class="row cardSection">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="row cardheadRow">
									<div class="cardTitlesetion">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 cardTitle">
												SMS by Month
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="cardDetail">
										<!-- <div class="row">
												<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
													<div class="row">
														<div class="cardstatFigure blue">
															16050 (68.3%)
														</div>
													</div>
													<div class="row">
														<div class="cardstattitle">
															Direct Clicks
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
													<div class="row">
														<div class="cardstatFigure darkblue">
															7450 (31.7%)
														</div>
													</div>
													<div class="row">
														<div class="cardstattitle">
															Referral Clicks
														</div>
													</div>
												</div>
											</div> -->
										<div class="row">
											<div class="cardGraph">
												<div id="clickreport1" style="min-width: 100%; height: auto; margin: 0 auto"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row cardSection">
						<div class="col-lg-9 col-md-9">
							<div class="card">
								<div class="row cardheadRow">
									<div class="cardTitlesetion">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 cardTitle">
												SMS by Company
											</div>
											<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
													<div class="row">
														<div id="graph1-duration-selection-blank" class="col-md-6 text-center"></div>
														<div style="padding-left: 10px;" id="graph1-duration-date" class="col-md-6 text-center">
															<input id="date5" class="col-md-5 form-control" style="width: 108px" type="text" placeholder="mm/dd/yyyy">
															<span style="padding-top:5px " class="col-md-2">To</span>
															<input id="date6" class="col-md-5 form-control" placeholder="mm/dd/yyyy" style="width: 108px" type="text">
														</div>
														<div class="col-md-3 text-right">
															<select style="width: 120px;" id="graph1-duration-selection" class="form-control durationSelect">
																<option>Last 7 Days</option>
																<option>Last Week</option>
																<option>Last 15 Days</option>
																<option>Last 30 Days</option>
																<option>This Month</option>
																<option>Last Month</option>
																<option value="custom">Custom</option>
															</select>
														</div>
														<div class="col-md-3 text-right">
															<select style="width: 120px;" class="form-control durationSelect">
																<option>Large Cap</option>
																<option>Medium Cap</option>
																<option>Small Cap</option>
																<option>Micro Cap</option>
															</select>
														</div>
													</div>
												</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="cardDetail">
										<!-- <div class="row">
														<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
															<div class="row">
																<div class="cardstatFigure blue">
																	16050 (68.3%)
																</div>
															</div>
															<div class="row">
																<div class="cardstattitle">
																	Direct Clicks
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center">
															<div class="row">
																<div class="cardstatFigure darkblue">
																	7450 (31.7%)
																</div>
															</div>
															<div class="row">
																<div class="cardstattitle">
																	Referral Clicks
																</div>
															</div>
														</div>
													</div> -->
										<div class="row">
											<div class="cardGraph">
												<div id="clickreport2" style="min-width: 100%; height: auto; margin: 0 auto"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3">
							<div class="card">
								<div class="row cardheadRow">
									<div class="cardTitlesetion">
										<div class="row">
											<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 cardTitle">
												Point of Contact
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="cardDetail">
										<div class="row">
											<table >
												<tr>
													<td>
														<a href="">Ajay Pandey</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="">Anchal Pandita</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="">Harshit Vador</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="">Hiren Bhanushali</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="">Internal Reseller</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="">Jitesh Tripathi</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="">Kapil Parmar</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="">Nisha Pal</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="">No Data</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="">No Data</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="">No Data</a>
													</td>
												</tr>
												<tr>
													<td>
														<a href="">No Data</a>
													</td>
												</tr>

											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row cardSection">
						<div class="col-lg-6 col-md-6">
							<div class="card">
								<div class="cardTitlesetion">
									<div class="row cardheadRow">
										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 cardTitle">
											Point of Contact
										</div>
									</div>
								</div>
								<div class="cardDetail cardData">
									<div class="row">
										<div class="cardGraph">
											<div id="conversion1" style="min-width: 100%; height: auto; margin: 0 auto"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="card">
								<div class="cardTitlesetion">
									<div class="row cardheadRow">
										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 cardTitle">
											Campaign Summary
										</div>
									</div>
								</div>
								<div class="cardDetail cardData">
									<div class="row">
										<div class="cardGraph">
											<div id="conversion2" style="min-width: 100%; height: auto; margin: 0 auto"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div role="tabpanel" class="tab-pane" id="demographics">
						<div class="row cardSection">
							<div class="col-lg-6 col-md-6">
								<div class="col-lg-12 col-md-12">
									<div class="card">
									<div class="row">
										<div class="cardTitlesetion">
											<div class="row cardheadRow">
												<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 cardTitle">
													Title
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="cardDetail">
											<div class="row">
												<div class="cardGraph">
													<div id="top5states" style="min-width: 100%; height: auto; margin: 0 auto"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="card">
										<div class="row">
											<div class="cardTitlesetion">
												<div class="row cardheadRow">
													<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 cardTitle">
														Title
													</div>

												</div>
											</div>
										</div>
										<div class="row">	
											<div class="cardDetail">
												<div class="row">
													<div class="cardGraph">
														<div id="top5statessystemDetail" style="min-width: 100%; height: auto; margin: 0 auto"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="card">
									<div class="row">
										<div class="cardTitlesetion">
											<div class="row cardheadRow">
												<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 cardTitle">
													Geo Location Report
												</div>
												<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
													<select class="form-control durationSelect">
													  <option>Hourly</option>
													  <option>Daily</option>
													  <option>Weekly</option>
													  <option>Monthly</option>
													  <option>Yearly</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="cardDetail">
											<div class="row">
												<div class="cardDetail">
													<div class="row">
														<div class="cardGraph">
															<div id="geoLocation" style="min-width: 100%; height: 715px; margin: 0 auto"></div>
														</div>
													</div>
												</div>
											</div>
											<table class="table"> 
												<thead>
													<tr>
														<th>Circle Name</th> 
														<th>SMS Delivered</th> 
														<th>SMS Success rate</th> 
														<th>Total clicks</th>
														<th>Clicks rate</th> 
														<th>Direct clicks</th> 
														<th>Referral clicks</th> 
													</tr> 
												</thead>
												<tbody class="text-center"> 
													<tr> 
														<th>Maharashtra</th> 
														<td>8900</td> 
														<td>98.89%</td> 
														<td>9000</td> 
														<td class="tHighlight">101.12%</td> 
														<td>5800</td> 
														<td>3200</td> 
													</tr> 
													<tr> 
														<th>Gujarat</th> 
														<td>8900</td> 
														<td>98.89%</td> 
														<td>9000</td> 
														<td class="tHighlight">101.12%</td> 
														<td>5800</td> 
														<td>3200</td> 
													</tr> 
													<tr> 
														<th>Andhra Pradesh</th> 
														<td>8900</td> 
														<td>98.89%</td> 
														<td>9000</td> 
														<td class="tHighlight">101.12%</td> 
														<td>5800</td> 
														<td>3200</td> 
													</tr> 
												</tbody> 
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						 
					</div>
					<div role="tabpanel" class="tab-pane" id="customerInsights">
						<h1 class="text-center jumbotron">Dont Know what comes here</h1>  
					</div> -->
			</div>
		</div>
	</div>
	<!-- /container -->

	<!-- Bootstrap core JavaScript
		================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="js/jquery-3.2.1.js"></script>-->
    
    <!--<script src="js/bootstrap.js"></script>-->
    <!--<script src="js/bootstrap-datepicker.js"></script>-->
    
    

	<!--		<script src="js/Highmaps/code/highmaps.js"></script>-->

	<!--		<script src="js/Highmaps/in-all.js"></script>-->
	<!--
		<script src="js/Highcharts/code/highcharts.js"></script>
		<script src="http://code.highcharts.com/maps/modules/map.js"></script>
		<script src="js/Highcharts/code/js/modules/heatmap.js"></script>
-->


	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/heatmap.js"></script>
	<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
	<script src="//code.highcharts.com/maps/modules/map.js"></script>
	<script src="https://code.highcharts.com/maps/modules/data.js"></script>
	<script src="http://code.highcharts.com/mapdata/countries/in/in-all.js"></script>
	<script src="https://code.highcharts.com/mapdata/countries/in/custom/in-all-disputed.js"></script>
	<!--	   <script src="js/jQuery-contextMenu-master/dist/jquery.contextMenu.js"></script>	-->
    <!--<script src="js/script.js"></script> -->
   <!--<script src="<?php echo $this->config->item("js"); ?>hello_js/js/script.js"></script> -->
	<script>

	</script>
</body>

</html>