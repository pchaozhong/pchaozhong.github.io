(function($) {
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

// 		$(document).ready(function() {
// 		    $('#matchInfoList').DataTable();
// 			if (userLang == 'zh-CN') {
// 				alert ("The language iscn: " + userLang);
// 			} else if (userLang == 'ja') {
// 				alert ("The language isjp: " + userLang);
// 			} else {

// 			}

// 		} );

    var voc = [ 
                {"EN":"English","ZH":"英语","JA":"英語"},{"EN":"Chinese","ZH":"中文","JA":"中国語"},{"EN":"Japanese","ZH":"日语","JA":"日本語"},
                {"EN":"2018 World Cup Lottery","ZH":"2018世界杯彩票","JA":"2018ワールドカップ宝くじ"},
                {"EN":"Refresh","ZH":"刷新","JA":"リフレッシュ"},
                {"EN":"My Account Info","ZH":"用户帐户状况","JA":"ユーザーアカウント情報"},
                {"EN":"Total amont of wager","ZH":"总下注额","JA":"総計ウェイジャー"},
                {"EN":"Winning bonus","ZH":"我赢得的奖金","JA":"マイ賞金"},
                {"EN":"No convertible bonus","ZH":"未兑换的奖金","JA":"未受領賞金"},
                {"EN":"Withdraw My bonus","ZH":"领取奖金","JA":"受領賞金"},
                {"EN":"Enter Your Prediction","ZH":"预测登陆","JA":"予測エントリ"},
                {"EN":"No.","ZH":"场次","JA":"試合No"},
                {"EN":"Prediction","ZH":"预测结果","JA":"予測結果"},
                {"EN":"Fail","ZH":"输","JA":"負"},
                {"EN":"Win","ZH":"赢","JA":"勝"},
                {"EN":"Draw","ZH":"平","JA":"引分"},
                {"EN":"Wager","ZH":"下注额","JA":"ウェイジャー"},
                {"EN":"Buy","ZH":"下注","JA":"購入"},
                {"EN":"Prediction should be recorded in the next block of [Ethereum Block Chain] as soon.","ZH":"预测内容将很快被记录到[以太坊区块链]的下一个区块中。","JA":"予測内容は、もうすぐ[イーサリアムブロックチェーン]の次のブロックに記録されます。"},
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
        console.log('No Web3 Detected... using HTTP Provider')
        window.web3 = new Web3(new Web3.providers.HttpProvider("https://ropsten.infura.io/SockCQRLEtdDj6vi03nt"));
    }

    web3.eth.defaultAccount = '0x81b7e08f65bdf5648606c89998a9cc8164397647';
    const transactionObject = {
        from: web3.eth.accounts[0],
        gas: '1000000',
        gasPrice: '2000000000' // 2Gwei
    };

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
    "constant": false,
    "inputs": [],
    "name": "pause",
    "outputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "function"
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
    "inputs": [],
    "payable": false,
    "stateMutability": "nonpayable",
    "type": "constructor"
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
    // https://ropsten.etherscan.io/tx/0xf7eb13a8aafb47b92160616c21948778ee00ad268233e2d3e1361342cf601863
    WorldCup2018 = WorldCup2018Contract.at('0xb4259472f480a01f522eb3bd0fda872166ffcef6');
    console.log(WorldCup2018);

    translateTo(lang);
    getUserAccountInfo();
    getMatchInfoList01();
    document.getElementById('langSelect').value=lang;
    })

    function getBalance() {
        var address, wei, balance
        address = document.getElementById("address").value
        try {
            web3.eth.getBalance(address, function (error, wei) {
                if (!error) {
                    var balance = web3.fromWei(wei, 'ether');
                    document.getElementById("output").innerHTML = balance + " ETH";
                }
            });
        } catch (err) {
            document.getElementById("output").innerHTML = err;
        }
    }

    function getUserAccountInfo() {
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
                                        for (var intI = rowCount - 1; intI > 1; intI--) {
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
                                                tMyHoldings.innerHTML = web3.fromWei((parseInt(matchInfoList[8][intI])+parseInt(matchInfoList[9][intI])+parseInt(matchInfoList[10][intI])), 'ether') + " ETH";
                                                cellMyHoldings.appendChild(tMyHoldings);
                                            }
                                            // Bonus pool = WinInvest(Match)+LoseInvest(Match)+TieInvest(Match)
                                            {
                                                var cellBonusPool = row.insertCell(4);
                                                var tBonusPool = document.createElement("span");
                                                tBonusPool.id = "bonusPool_" + (intI + 1);
                                                tBonusPool.innerHTML = web3.fromWei((parseInt(matchInfoList[5][intI])+parseInt(matchInfoList[6][intI])+parseInt(matchInfoList[7][intI])), 'ether') + " ETH";
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

            WorldCup2018.betMatch(matchId, prediction, {from: web3.eth.accounts[0], gas: '1000000', gasPrice: '2000000000', value: web3.toWei(investValue, 'ether')}, function(error){
                if(!error) {
                    document.getElementById("doPredictionInfo").innerHTML = "Prediction should be recorded in the next block of [Ethereum Block Chain] as soon.";
                    // console.log(result);
                } else
                    console.error(error);
            });
        } catch (err) {
            document.getElementById("doPredictionInfo").innerHTML = err;
        }
    }

    function changeTab(tab) {
        var tabs = document.getElementsByClassName('tab-head')[0].getElementsByTagName('h2');
        var contents = document.getElementsByClassName('tab-content')[0].getElementsByTagName('div');

        for(var i = 0, len = tabs.length; i < len; i++) {
            if(tabs[i] === tab) {
                tabs[i].className = 'selected';
                contents[i].className = 'show';
            } else {
                tabs[i].className = '';
                contents[i].className = '';
            }
        }
    }
})(jQuery);