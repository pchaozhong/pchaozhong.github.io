<!DOCTYPE HTML>
<html>
	<head>
		<title>World Cup 2018 Lottery</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
		<script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js/dist/web3.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<h1><a href="#">Created <span>by Z.A.L Union Technology.</span></a></h1>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="faq.html">Faq</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<div id="main">
				<section class="wrapper style1">
					<div class="inner">
					<!-- Intro -->
					<div class="row">
						<div class="10u 12u$(medium)">&nbsp;
						</div>
						<div class="2u 12u$(medium)">
							<select id="langSelect" onchange='doTranslateTo(this.value)'>
								<option class="translatable" value='EN'>English</option>
								<option class="translatable" value='JA'>日本語</option>
								<option class="translatable" value='ZH'>中文</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="2u 12u$(small)">
								<span class="image fit"><img src="images/logo.png" alt="" />
						</div>
						<div class="10u$ 12u$(small)">
							<h2 id="content" class="translatable">World Cup 2018 Lottery</h2>
						</div>
					</div>
					<br />
					<font color="red"><span class="translatable" id="msgArea"></span></font>
					<br />
					<hr class="major" />
					<div class="row">
						<div class="5u 12u$(small)">
							<span class="translatable">My Account Info</span>
							<div class="box">
								<div>
									<span class="translatable">Total amount of wager</span>
									<span>&nbsp;:&nbsp;&nbsp;</span>
									<span id="userAccountInfo_Invested"></span>
									<br/>
									<span class="translatable">Total winning bonus</span>
									<span>&nbsp;:&nbsp;&nbsp;</span>
									<span id="userAccountInfo_Prize"></span>
									<br/>
									<span class="translatable">No convertible amount</span>
									<span>&nbsp;:&nbsp;&nbsp;</span>
									<span id="userAccountInfo_Balance"></span>
									<br/>
									<br/>
									<a href="javascript:getUserAccountInfo();" class="button alt"><span class="translatable">Refresh</span></a>
									<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
									<button class="translatable" type="button" id="withdrawBalance" onClick="doWithdrawBalance();" disabled="disabled">Withdraw My bonus</button>
								</div>
							</div>
						</div>
					</div>
					<font color="red"><span class="translatable" id="userAccountInfo"></span></font>
					<div class="row">
						<div class="5u 12u$(small)">
							<span class='translatable'>Enter Your Prediction</span>
							<div class="box">
								<div class="row uniform">
									<div class="3u 12u$(small)">
										<span class="translatable">No.</span>
									</div>
									<div class="4u 12u$(small)">
										<input type="text" style="text-align:center;" size="3" maxlength="2" id="inputMatchNo"/>
									</div>
									<div class="5u$ 12u$(small)">&nbsp;&nbsp;&nbsp;</div>
									<div class="3u 12u$(small)">
											<span class="translatable">Prediction</span>
									</div>
									<div class="3u 12u$(small)">
										<input type="radio" id="win" name="inputPrediction" value="1" checked>
										<label for="win"><span class="translatable">Win</span></label>
									</div>
									<div class="3u 12u$(small)">
										<input type="radio" id="Draw" name="inputPrediction" value="3" disabled>
										<label for="Draw"><span class="translatable">Draw</span></label>
									</div>
									<div class="3u$ 12u$(small)">
										<input type="radio" id="Fail" name="inputPrediction" value="2">
										<label for="Fail"><span class="translatable">Fail</span></label>
									</div>
									<div class="3u 12u$(small)">
										<span class="translatable">Wager</span>
									</div>
									<div class="4u 12u$(small)">
										<input type="text" style="text-align:right;" size="8" maxlength="6" id="inputInvest" name="inputInvest"/>
									</div>
									<div class="5u$ 12u$(small)">
										<span>ETH<br>[0.001 ETH ～ 100 ETH].</span>
									</div>
									<div class="2u 12u$(small)">&nbsp;</div>
									<div class="7u 12u$(small)">
										<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
									</div>
									<div class="3u$ 12u$(small)">
										<a href="javascript:doPrediction();" class="button alt"><span class="translatable">BUY</span></a>
									</div>
								</div>
							</div>
						</div>
					<font color="red"><span class="translatable" id="doPredictionInfo"></span></font>
					</div>
					<a href="javascript:getMatchInfoList01();" class="button alt"><span class="translatable">Refresh</span></a>
					<hr class="major" />
					<div class="row">
						<div class="flex flex-tabs">
							<ul class="tab-list">
								<li><a href="#" data-tab="Group" class="active"><span class="translatable">Group</span></a></li>
								<li><a href="#" data-tab="RoundOf16"><span class="translatable">RoundOf16</span></a></li>
								<li><a href="#" data-tab="QuarterFinals"><span class="translatable">QuarterFinals</span></a></li>
								<li><a href="#" data-tab="SemiFinals"><span class="translatable">SemiFinals</span></a></li>
								<li><a href="#" data-tab="PlayOffForThirdPlace"><span class="translatable">PlayOffForThirdPlace</span></a></li>
								<li><a href="#" data-tab="Final"><span class="translatable">Final</span></a></li>
							</ul>
							<div class="tabs">
								<div class="tab Group flex flex-3 active">
									<div class="table-wrapper">
										<table class="alt" id="matchInfoList">
											<tbody>
												<tr style="font-weight: bold; text-align: center">
													<th style="width:100px"><span class="translatable">No.</span></th>
													<th style="width:300px"><span class="translatable">Match</span></th>
													<th style="width:235px"><span class="translatable">Start Time(Local)</span></th>
													<th style="width:300px"><span class="translatable">My holdings</span></th>
													<th style="width:300px"><span class="translatable">Bonus pool</span></th>
													<th style="width:80px"><span class="translatable">Result</span></th>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab RoundOf16 flex flex-3 ">
									<div class="table-wrapper">
										<table class="alt" id="matchInfoList_1">
											<tbody>
												<tr style="font-weight: bold; text-align: center">
													<th style="width:100px"><span class="translatable">No.</span></th>
													<th style="width:300px"><span class="translatable">Match</span></th>
													<th style="width:235px"><span class="translatable">Start Time(Local)</span></th>
													<th style="width:300px"><span class="translatable">My holdings</span></th>
													<th style="width:300px"><span class="translatable">Bonus pool</span></th>
													<th style="width:80px"><span class="translatable">Result</span></th>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab QuarterFinals flex flex-3 ">
									<div class="table-wrapper">
										<table class="alt" id="matchInfoList_2">
											<tbody>
												<tr style="font-weight: bold; text-align: center">
													<th style="width:100px"><span class="translatable">No.</span></th>
													<th style="width:300px"><span class="translatable">Match</span></th>
													<th style="width:235px"><span class="translatable">Start Time(Local)</span></th>
													<th style="width:300px"><span class="translatable">My holdings</span></th>
													<th style="width:300px"><span class="translatable">Bonus pool</span></th>
													<th style="width:80px"><span class="translatable">Result</span></th>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab SemiFinals flex flex-3 ">
									<div class="table-wrapper">
										<table class="alt" id="matchInfoList_3">
											<tbody>
												<tr style="font-weight: bold; text-align: center">
													<th style="width:100px"><span class="translatable">No.</span></th>
													<th style="width:300px"><span class="translatable">Match</span></th>
													<th style="width:235px"><span class="translatable">Start Time(Local)</span></th>
													<th style="width:300px"><span class="translatable">My holdings</span></th>
													<th style="width:300px"><span class="translatable">Bonus pool</span></th>
													<th style="width:80px"><span class="translatable">Result</span></th>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab PlayOffForThirdPlace flex flex-3 ">
									<div class="table-wrapper">
										<table class="alt" id="matchInfoList_4">
											<tbody>
												<tr style="font-weight: bold; text-align: center">
													<th style="width:100px"><span class="translatable">No.</span></th>
													<th style="width:300px"><span class="translatable">Match</span></th>
													<th style="width:235px"><span class="translatable">Start Time(Local)</span></th>
													<th style="width:300px"><span class="translatable">My holdings</span></th>
													<th style="width:300px"><span class="translatable">Bonus pool</span></th>
													<th style="width:80px"><span class="translatable">Result</span></th>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab Final flex flex-3 ">
									<div class="table-wrapper">
										<table class="alt" id="matchInfoList_5">
											<tbody>
												<tr style="font-weight: bold; text-align: center">
													<th style="width:100px"><span class="translatable">No.</span></th>
													<th style="width:300px"><span class="translatable">Match</span></th>
													<th style="width:235px"><span class="translatable">Start Time(Local)</span></th>
													<th style="width:300px"><span class="translatable">My holdings</span></th>
													<th style="width:300px"><span class="translatable">Bonus pool</span></th>
													<th style="width:80px"><span class="translatable">Result</span></th>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
					</ul>
					&copy; Z.A.L Union Technology. Created
				</div>

			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/worldcup.js"></script>

	</body>
</html>
