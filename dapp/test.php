<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Page Title</title>
    <script type=”text/javascript” src=”web3.min.js”></script>
    <script type=”text/javascript” src=”eth.js”></script>
    <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js/dist/web3.min.js"></script>
    <script>
        var cookie_time = document.cookie;
        
        if (typeof web3 !== 'undefined') {
          web3 = new Web3(web3.currentProvider);
        } else {
          // set the provider you want from Web3.providers
          web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
        }
        
        var network_version = web3.version.network;
        console.log(network_version);
        
        var accounts = web3.eth.accounts;  //get account info
        var from_account = accounts[0];
        var to_account = accounts[1];
        
        var coinbase = web3.eth.coinbase;
        var balance = web3.fromWei(web3.eth.getBalance(coinbase), 'ether');
        
        var time = new Date();
        
        var year = time.getFullYear();
        var month = time.getMonth();
        var day = time.getDate();
        var hour = time.getHours();
        var minuits = time.getMinutes();
        
        var fulltime = year + month + day + hour + minuits;
        
        console.log(coinbase);
        console.log(balance.c); //check ether in the coinbase 
        
        console.log(from_account);
        console.log(to_account);
        
        var transactionObj = { //transaction object setting
            latitude = latitude,
            longitude = longitude,
            Hash = accounts,
            Time = fulltime
        };
        
        if(cookie_time > 500000){
            var latitude = request.getParameterValues("latitude");
            var longitude = request.getParameterValues("longitude");
            
            web3.eth.sendTransaction(transactionObj);
        }else {
            //
        }
        
    </script>
</head>
<body>
</body>
</html>
