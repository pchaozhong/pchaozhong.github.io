<!DOCTYPE HTML>
<html>
	<head>
		<title>World Cup 2018 Lottery</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js/dist/web3.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript">
	    var lang;
	    var userLang = navigator.language || navigator.userLanguage;
	    if (userLang == 'zh-CN') {
	    	lang = "ZH"
	    } else if (userLang == 'en-US') {
	    	lang = "EN"
	    } else if (userLang == 'ja') {
	    	lang = "JA"
	    } else {
	    	lang = "EN"
	    }

		var voc = [ 
					{"EN":"World Cup 2018 Lottery","ZH":"世界杯 2018 竞猜","JA":"ワールドカップ 2018 予測"},
					{"EN":"Refresh","ZH":"刷新","JA":"リフレッシュ"},
					{"EN":"My Account Info","ZH":"用户帐户状况","JA":"ユーザーアカウント情報"},
					{"EN":"Total amount of wager","ZH":"总下注额","JA":"総計ウェイジャー"},
					{"EN":"Total winning bonus","ZH":"我赢得的奖金合计","JA":"マイ賞金合計"},
					{"EN":"No convertible amount","ZH":"未兑换的金额","JA":"未受領金額"},
					{"EN":"Withdraw My bonus","ZH":"领取奖金","JA":"受領賞金"},
					{"EN":"Enter Your Prediction","ZH":"预测登陆","JA":"予測エントリ"},
					{"EN":"No.","ZH":"场次","JA":"試合No"},
					{"EN":"Prediction","ZH":"预测结果","JA":"予測結果"},
					{"EN":"Fail","ZH":"输","JA":"負"},
					{"EN":"Win","ZH":"赢","JA":"勝"},
					{"EN":"Draw","ZH":"平","JA":"引分"},
					{"EN":"Wager","ZH":"下注额","JA":"ｳｪｲｼﾞｬｰ"},
					{"EN":"BUY","ZH":"下注","JA":"購入"},
					{"EN":"[No.] must be between [8 ～ 48].","ZH":"[场次]，请在[8 ～ 48]范围内填写。","JA":"[試合No]、[8 ～ 48]の範囲内に入力してください。"},
					{"EN":"[Wager] must be between [0.001 ETH ～ 100 ETH].","ZH":"[下注额]，请在[0.001 ETH ～ 100 ETH]范围内填写。","JA":"[ｳｪｲｼﾞｬｰ]、[0.001 ETH ～ 100 ETH]の範囲内に入力してください。"},
					{"EN":"The purchase was successful and is being processed. Please wait a moment!","ZH":"您的购入已经成功,正在处理,请稍等!","JA":"購入成功、今処理中です、しばらくお待ち下さい！"},
					{"EN":"Match","ZH":"比赛双方","JA":"対戦チーム"},
					{"EN":"Start Time(Local)","ZH":"开始时间(本地)","JA":"開始時刻(ローカル)"},
					{"EN":"My holdings","ZH":"下注额","JA":"マイウェイジャー"},
					{"EN":"Bonus pool","ZH":"奖金池","JA":"賞金プール"},
					{"EN":"Result","ZH":"结果","JA":"結果"},
					{"EN":"Unknown","ZH":"未定","JA":"未定"},
					{"ZH":"俄罗斯","JA":"ロシア","EN":"Russia"},{"ZH":"沙特阿拉伯","JA":"サウジアラビア","EN":"SaudiArabia"},{"ZH":"埃及","JA":"エジプト","EN":"Egypt"},{"ZH":"乌拉圭","JA":"ウルグアイ","EN":"Uruguay"},{"ZH":"葡萄牙","JA":"ポルトガル","EN":"Portugal"},{"ZH":"西班牙","JA":"スペイン","EN":"Spain"},{"ZH":"摩洛哥","JA":"モロッコ","EN":"Morocco"},{"ZH":"伊朗","JA":"イラン","EN":"Iran"},{"ZH":"法国","JA":"フランス","EN":"France"},{"ZH":"澳大利亚","JA":"オーストラリア","EN":"Australia"},{"ZH":"秘鲁","JA":"ペルー","EN":"Peru"},{"ZH":"丹麦","JA":"デンマーク","EN":"Denmark"},{"ZH":"阿根廷","JA":"アルゼンチン","EN":"Argentina"},{"ZH":"冰岛","JA":"アイスランド","EN":"Iceland"},{"ZH":"克罗地亚","JA":"クロアチア","EN":"Croatia"},{"ZH":"尼日利亚","JA":"ナイジェリア","EN":"Nigeria"},{"ZH":"巴西","JA":"ブラジル","EN":"Brazil"},{"ZH":"瑞士","JA":"スイス","EN":"Switzerland"},{"ZH":"哥斯达黎加","JA":"コスタリカ","EN":"CostaRica"},{"ZH":"塞尔维亚","JA":"セルビア","EN":"Serbia"},{"ZH":"德国","JA":"ドイツ","EN":"Germany"},{"ZH":"墨西哥","JA":"メキシコ","EN":"Mexico"},{"ZH":"瑞典","JA":"スウェーデン","EN":"Sweden"},{"ZH":"韩国","JA":"韓国","EN":"SouthKorea"},{"ZH":"比利时","JA":"ベルギー","EN":"Belgium"},{"ZH":"巴拿马","JA":"パナマ","EN":"Panama"},{"ZH":"突尼斯","JA":"チュニジア","EN":"Tunisia"},{"ZH":"英格兰","JA":"イングランド","EN":"England"},{"ZH":"波兰","JA":"ポーランド","EN":"Poland"},{"ZH":"塞内加尔","JA":"セネガル","EN":"Senegal"},{"ZH":"哥伦比亚","JA":"コロンビア","EN":"Colombia"},{"ZH":"日本","JA":"日本","EN":"Japan"}
		];

		function translate(ele, lng){
			for(var i = 0; i < voc.length; i++){
				for(var k in voc[i]){
					if(voc[i][k] == ele.innerText.trim()){
						ele.innerText = voc[i][lng];
						break;
					}
				}
			}
		}

		function translateTo(lng){
			var trc = document.getElementsByClassName("translatable");
			for(var i = 0;i < trc.length; i++){
				translate(trc[i], lng);
			}
		}

		function doTranslateTo(lng){
			lang = lng;
			translateTo(lng);
		}

		var WorldCup2018;
		var arrOutcomeName = new Array(4);
		{
			arrOutcomeName[0] = "Unknown";
			arrOutcomeName[1] = "Win";
			arrOutcomeName[2] = "Fail";
			arrOutcomeName[3] = "Draw";
		}
		var arrTeamName = new Array(33);
		{
			arrTeamName[0] = "Unknown";
			arrTeamName[1] = "Russia";
			arrTeamName[2] = "SaudiArabia";
			arrTeamName[3] = "Egypt";
			arrTeamName[4] = "Uruguay";
			arrTeamName[5] = "Portugal";
			arrTeamName[6] = "Spain";
			arrTeamName[7] = "Morocco";
			arrTeamName[8] = "Iran";
			arrTeamName[9] = "France";
			arrTeamName[10] = "Australia";
			arrTeamName[11] = "Peru";
			arrTeamName[12] = "Denmark";
			arrTeamName[13] = "Argentina";
			arrTeamName[14] = "Iceland";
			arrTeamName[15] = "Croatia";
			arrTeamName[16] = "Nigeria";
			arrTeamName[17] = "Brazil";
			arrTeamName[18] = "Switzerland";
			arrTeamName[19] = "CostaRica";
			arrTeamName[20] = "Serbia";
			arrTeamName[21] = "Germany";
			arrTeamName[22] = "Mexico";
			arrTeamName[23] = "Sweden";
			arrTeamName[24] = "SouthKorea";
			arrTeamName[25] = "Belgium";
			arrTeamName[26] = "Panama";
			arrTeamName[27] = "Tunisia";
			arrTeamName[28] = "England";
			arrTeamName[29] = "Poland";
			arrTeamName[30] = "Senegal";
			arrTeamName[31] = "Colombia";
			arrTeamName[32] = "Japan";
		}
		window.addEventListener('load', function () {
		if (typeof web3 !== 'undefined') {
			console.log('Web3 Detected! ' + web3.currentProvider.constructor.name)
			window.web3 = new Web3(web3.currentProvider);
		} else {
			// console.warn("No web3 detected. Falling back to http://localhost:8545.");
			// window.web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
			// (‘Unable to connect to Metamask’)
			document.getElementById("msgArea").innerHTML = "Play this game you should install Metamask on a desktop browser like Chome or FireFox.<a href='faq.html'/>&nbsp;FAQ</a></li>";
		}

		var WorldCup2018Contract = web3.eth.contract([
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"name": "previousOwner",
				"type": "address"
			},
			{
				"indexed": true,
				"name": "newOwner",
				"type": "address"
			}
		],
		"name": "OwnershipTransferred",
		"type": "event"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_matchId",
				"type": "uint8"
			},
			{
				"name": "_prediction",
				"type": "uint8"
			}
		],
		"name": "betMatch",
		"outputs": [],
		"payable": true,
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [],
		"name": "kill",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"name": "previousOwner",
				"type": "address"
			}
		],
		"name": "OwnershipRenounced",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"name": "_setterAddress",
				"type": "address"
			},
			{
				"indexed": false,
				"name": "_matchId",
				"type": "uint8"
			},
			{
				"indexed": false,
				"name": "_startTime",
				"type": "uint256"
			}
		],
		"name": "UpdateMatchStartTime",
		"type": "event"
	},
	{
		"constant": false,
		"inputs": [],
		"name": "pause",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"name": "_setterAddress",
				"type": "address"
			},
			{
				"indexed": false,
				"name": "_matchId",
				"type": "uint8"
			},
			{
				"indexed": false,
				"name": "_hostTeamId",
				"type": "uint8"
			},
			{
				"indexed": false,
				"name": "_guestTeamId",
				"type": "uint8"
			}
		],
		"name": "UpdateMatch",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"name": "_setterAddress",
				"type": "address"
			},
			{
				"indexed": false,
				"name": "_matchId",
				"type": "uint8"
			},
			{
				"indexed": false,
				"name": "_outcome",
				"type": "uint8"
			}
		],
		"name": "SetOutcome",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"name": "_betterAddress",
				"type": "address"
			},
			{
				"indexed": false,
				"name": "_invested",
				"type": "uint256"
			},
			{
				"indexed": false,
				"name": "_matchId",
				"type": "uint8"
			},
			{
				"indexed": false,
				"name": "_prediction",
				"type": "uint8"
			}
		],
		"name": "BetMatch",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"name": "newContract",
				"type": "address"
			}
		],
		"name": "ContractUpgrade",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"name": "_player",
				"type": "address"
			},
			{
				"indexed": false,
				"name": "_value",
				"type": "uint256"
			}
		],
		"name": "WithdrawPayments",
		"type": "event"
	},
	{
		"constant": false,
		"inputs": [],
		"name": "renounceOwnership",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_newCEO",
				"type": "address"
			}
		],
		"name": "setCEO",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_newCFO",
				"type": "address"
			}
		],
		"name": "setCFO",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_tax",
				"type": "uint8"
			}
		],
		"name": "setClamTax",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_newCOO",
				"type": "address"
			}
		],
		"name": "setCOO",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_matchId",
				"type": "uint8"
			},
			{
				"name": "_outcome",
				"type": "uint8"
			}
		],
		"name": "setOutcome",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "newOwner",
				"type": "address"
			}
		],
		"name": "transferOwnership",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [],
		"name": "unpause",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_matchId",
				"type": "uint8"
			},
			{
				"name": "_hostTeamId",
				"type": "uint8"
			},
			{
				"name": "_guestTeamId",
				"type": "uint8"
			}
		],
		"name": "updateMatch",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_matchId",
				"type": "uint8"
			},
			{
				"name": "_startTime",
				"type": "uint256"
			}
		],
		"name": "updateMatchStartTime",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [],
		"name": "withdrawPayments",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "constructor"
	},
	{
		"payable": true,
		"stateMutability": "payable",
		"type": "fallback"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "getCFO",
		"outputs": [
			{
				"name": "retCFOAddress",
				"type": "address"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "getClamTax",
		"outputs": [
			{
				"name": "claimTax",
				"type": "uint8"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "getMatchInfoList01",
		"outputs": [
			{
				"name": "matchIdArray",
				"type": "uint8[64]"
			},
			{
				"name": "hostTeamIdArray",
				"type": "uint8[64]"
			},
			{
				"name": "guestTeamIdArray",
				"type": "uint8[64]"
			},
			{
				"name": "startTimeArray",
				"type": "uint256[64]"
			},
			{
				"name": "outcomeArray",
				"type": "uint8[64]"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "getMatchInfoList02",
		"outputs": [
			{
				"name": "winPredictionArray",
				"type": "uint256[64]"
			},
			{
				"name": "losePredictionArray",
				"type": "uint256[64]"
			},
			{
				"name": "tiePredictionArray",
				"type": "uint256[64]"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "getMatchInfoList03",
		"outputs": [
			{
				"name": "winPredictionArrayForLoginUser",
				"type": "uint256[64]"
			},
			{
				"name": "losePredictionArrayForLoginUser",
				"type": "uint256[64]"
			},
			{
				"name": "tiePredictionArrayForLoginUser",
				"type": "uint256[64]"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "getOwner",
		"outputs": [
			{
				"name": "retOwnerAddress",
				"type": "address"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "getTotalInvest",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "getTotalPayments",
		"outputs": [
			{
				"name": "retTotalPayments",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "getUserAccountInfo",
		"outputs": [
			{
				"name": "invested",
				"type": "uint256"
			},
			{
				"name": "prize",
				"type": "uint256"
			},
			{
				"name": "balance",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	}
]);
		// https://etherscan.io/tx/0x2847b19c874bb1ab564bea302cd778f9071adcffa5cb8cca937b03208bd7ef01
		WorldCup2018 = WorldCup2018Contract.at('0xd9894dD6E8d4F823bD8bCd1e8a871a295B1cfb07');
		console.log(WorldCup2018);

		translateTo(lang);
		getUserAccountInfo();
		getMatchInfoList01();
		document.getElementById('langSelect').value=lang;
		})

		function getUserAccountInfo() {
			document.getElementById("userAccountInfo").innerHTML = "";
			document.getElementById("doPredictionInfo").innerHTML = "";
			try {
				WorldCup2018.getUserAccountInfo(function(error, result){
					if(!error) {
						console.log(result);

						document.getElementById("userAccountInfo_Invested").innerHTML = web3.fromWei(result[0], 'ether') + " ETH.";
						document.getElementById("userAccountInfo_Prize").innerHTML = web3.fromWei(result[1], 'ether') + " ETH.";
						document.getElementById("userAccountInfo_Balance").innerHTML = web3.fromWei(result[2], 'ether') + " ETH.";
						if (result[2] > 0) {
							document.getElementById("withdrawBalance").disabled = false;
						}
					} else
						console.error(error);
				});
			} catch (err) {
				document.getElementById("userAccountInfo").innerHTML = err;
			}
		}

		function doWithdrawBalance() {
			document.getElementById("userAccountInfo").innerHTML = "";
			document.getElementById("doPredictionInfo").innerHTML = "";
			try {
				WorldCup2018.withdrawPayments({from: web3.eth.accounts[0], gas: '1000000', gasPrice: '2000000000'}, function(error){
					if(!error) {
						document.getElementById("withdrawBalance").disabled = true;
					} else
						console.error(error);
				});
			} catch (err) {
				document.getElementById("userAccountInfo").innerHTML = err;
			}
		}

		var matchInfoList = []; // array[64][11]
		function getMatchInfoList01() {
			document.getElementById("doPredictionInfo").innerHTML = "";
			document.getElementById("userAccountInfo").innerHTML = "";
			try {
				WorldCup2018.getMatchInfoList01(function(error, result){
					if(!error) {
						console.log(result);

						matchInfoList[0] = result[0];
						matchInfoList[1] = result[1];
						matchInfoList[2] = result[2];
						matchInfoList[3] = result[3];
						matchInfoList[4] = result[4];

						WorldCup2018.getMatchInfoList02(function(error, result){
							if(!error) {
								console.log(result);

								matchInfoList[5] = result[0];
								matchInfoList[6] = result[1];
								matchInfoList[7] = result[2];

								WorldCup2018.getMatchInfoList03(function(error, result){
									if(!error) {
										console.log(result);

										matchInfoList[8] = result[0];
										matchInfoList[9] = result[1];
										matchInfoList[10] = result[2];

										console.log(matchInfoList);

										if (matchInfoList["length"] > 0) {
											// matchInfo_title
											var table = document.getElementById("matchInfoList");

											var tableRows = table.getElementsByTagName('tr');
											var rowCount = tableRows.length;
											for (var intI = rowCount - 1; intI > 0; intI--) {
											   table.deleteRow(intI);
											}

											for (var intI = 0; intI < 48; intI++) {
												var gmtDate  = new Date('1970-01-01 00:00:00+00:00');
												// Match start at gmtDate([GMT Start Date] + [diffSeconds from contract])
												gmtDate.setSeconds(gmtDate.getSeconds() + matchInfoList[3][intI]);

												var row = table.insertRow(table.rows.length);
												// Match No.
												{
													var cellMatchNo = row.insertCell(0);
													var tMatchNo = document.createElement("span");
													tMatchNo.id = "matchNo_" + (intI + 1);
													tMatchNo.innerHTML = matchInfoList[0][intI];
													cellMatchNo.appendChild(tMatchNo);
												}
												// HostTeam vs GuestTeam
												{
													var cellHvsG = row.insertCell(1);

													var tHostTeamName = document.createElement("span");
													tHostTeamName.id = "hostTeamName_" + (intI + 1);
													tHostTeamName.className = "translatable";
													tHostTeamName.innerHTML = arrTeamName[matchInfoList[1][intI]];
													cellHvsG.appendChild(tHostTeamName);

													var tVS = document.createElement("span");
													tVS.innerHTML = "  vs  "
													cellHvsG.appendChild(tVS);

													var tGuestTeamName = document.createElement("span");
													tGuestTeamName.id = "guestTeamName_" + (intI + 1);
													tGuestTeamName.className = "translatable";
													tGuestTeamName.innerHTML = arrTeamName[matchInfoList[2][intI]];
													cellHvsG.appendChild(tGuestTeamName);

												}
												// StartTime(LOCAL)
												{
													var cellStartTime = row.insertCell(2);
													var tStartTimeLocal = document.createElement("span");
													tStartTimeLocal.id = "startTimeLocal_" + (intI + 1);
													tStartTimeLocal.innerHTML = gmtDate.toLocaleString();
													cellStartTime.appendChild(tStartTimeLocal);
												}
												// My holdings = WinInvest(You)+LoseInvest(You)+TieInvest(You)
												{
													var cellMyHoldings = row.insertCell(3);
													var tMyHoldings = document.createElement("span");
													tMyHoldings.id = "myHoldings_" + (intI + 1);
													if (intI > 6) {
														tMyHoldings.innerHTML = web3.fromWei((parseInt(matchInfoList[8][intI])+parseInt(matchInfoList[9][intI])+parseInt(matchInfoList[10][intI])), 'ether') + " ETH";
													} else {
														tMyHoldings.innerHTML = "-";
													}
													cellMyHoldings.appendChild(tMyHoldings);
												}
												// Bonus pool = WinInvest(Match)+LoseInvest(Match)+TieInvest(Match)
												{
													var cellBonusPool = row.insertCell(4);
													var tBonusPool = document.createElement("span");
													tBonusPool.id = "bonusPool_" + (intI + 1);
													if (intI > 6) {
														tBonusPool.innerHTML = web3.fromWei((parseInt(matchInfoList[5][intI])+parseInt(matchInfoList[6][intI])+parseInt(matchInfoList[7][intI])), 'ether') + " ETH";
													} else {
														tBonusPool.innerHTML = "-";
													}
													cellBonusPool.appendChild(tBonusPool);
												}
												// Result
												{
													var cellResult = row.insertCell(5);
													var tResult = document.createElement("span");
													tResult.id = "result_" + (intI + 1);
													tResult.className = "translatable";
													tResult.innerHTML = arrOutcomeName[matchInfoList[4][intI]];
													cellResult.appendChild(tResult);
												}
											}
											translateTo(lang);
										}
									} else
										console.error(error);
								});
							} else
								console.error(error);
						});
					} else
						console.error(error);
				});
			} catch (err) {
				document.getElementById("matchInfo_title").innerHTML = err;
			}
		}

		function doPrediction() {
			document.getElementById("doPredictionInfo").innerHTML = "";
			document.getElementById("userAccountInfo").innerHTML = "";
			try {
				// uint8 _matchId, uint8 _prediction
				var matchId = document.getElementById("inputMatchNo").value;
				var predictionArray = document.getElementsByName("inputPrediction");
				var prediction;
				for (var intI = 0; intI < predictionArray.length; intI++) {
					if (predictionArray[intI].checked) {
						prediction = predictionArray[intI].value;
					}
				}
				var investValue = document.getElementById("inputInvest").value;
				// input check
				// No. [1 ～ 48]
				if (matchId < 8 || matchId > 48) {
					document.getElementById("doPredictionInfo").innerHTML = "[No.] must be between [8 ～ 48].";
				} else if (investValue < 0.001 || investValue > 100) {
					// Wager [0.001 ETH ～ 100 ETH]
					document.getElementById("doPredictionInfo").innerHTML = "[Wager] must be between [0.001 ETH ～ 100 ETH].";
				} else {
					WorldCup2018.betMatch(matchId, prediction, {from: web3.eth.accounts[0], gas: '1000000', gasPrice: '2000000000', value: web3.toWei(investValue, 'ether')}, function(error){
						if(!error) {
							document.getElementById("doPredictionInfo").innerHTML = "The purchase was successful and is being processed. Please wait a moment!";
							// console.log(result);
						} else
							console.error(error);
					});
				}
				translateTo(lang);
			} catch (err) {
				document.getElementById("doPredictionInfo").innerHTML = err;
			}
		}
	</script>
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
								<option class="translatable" value='ZH'>中文</option>
								<option class="translatable" value='JA'>日本語</option>
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
						<!-- <button class='translatable' type="button" onClick="getUserAccountInfo();">Refresh</button> -->
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
									<input type="radio" id="Draw" name="inputPrediction" value="3">
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
								<!-- <button class="translatable" type="button" onClick="doPrediction();">Buy</button> -->
								</div>
							</div>
						</div>
					</div>
				<font color="red"><span class="translatable" id="doPredictionInfo"></span></font>
				</div>
				<!-- <button class="translatable" type="button" onClick="getMatchInfoList01();">Refresh</button> -->
				<a href="javascript:getMatchInfoList01();" class="button alt"><span class="translatable">Refresh</span></a>
				<hr class="major" />
				<div class="row">
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
					&copy; Z.A.L Union Techology. Created
				</div>

			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>