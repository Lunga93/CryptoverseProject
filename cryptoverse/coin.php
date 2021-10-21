<html>
    <body>
    <?php
        include("connection.php");
        include("functions.php");
        //API KEYS:  C938843F-78B2-4848-973A-77385C2A2E99 ; 71E2C732-2B51-47BA-87EC-4FE08B2A4796
         //connect to database
        require_once("connection.php");
        //array of coins
        $coins_USD = array('http://rest.coinapi.io/v1/exchangerate/BTC/USD',
                           'http://rest.coinapi.io/v1/exchangerate/ETH/USD',
                           'http://rest.coinapi.io/v1/exchangerate/BNB/USD',
                           'http://rest.coinapi.io/v1/exchangerate/ADA/USD',
                           'http://rest.coinapi.io/v1/exchangerate/USDT/USD',
                           'http://rest.coinapi.io/v1/exchangerate/XRP/USD',
                           'http://rest.coinapi.io/v1/exchangerate/SOL/USD',
                           'http://rest.coinapi.io/v1/exchangerate/DOT/USD',
                           'http://rest.coinapi.io/v1/exchangerate/USDC/USD',
                           'http://rest.coinapi.io/v1/exchangerate/DOGE/USD');

        
        while($array = next($coins_USD)){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-CoinAPI-Key: C938843F-78B2-4848-973A-77385C2A2E99')); //coinranking44aadfaf60cf06f7229dbc0a49c80bedf977536b3292b40c
            curl_setopt_array($ch, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => $array
            ));
            $response = json_decode(curl_exec($ch),true);
            var_dump($response);
            // echo "\n\n";
            // // echo $response -> rate ;
            // echo "\n\n";
            // print_r($response['rate']) ;
            $price = round($response['rate'], 6);
            $id = $response['asset_id_base'];

            $query1 = "SELECT Cryptocurrency_ID
                        FROM cryptocurrency
                        WHERE EXISTS
                        (SELECT Cryptocurrency_ID FROM cryptocurrency WHERE Cryptocurrency_ID = '$id');";
            $query1R = mysqli_query($con, $query1R)
                        or die("<p style=\"color: red;\">Could not execute query!</p>");
            
            if(isset($query1R)){
                $queryU="UPDATE cryptocurrency
                        SET Cryptocurrency_Value = '$price' 
                        WHERE Cryptocurrency_ID= '$id' ";
                
                $result = mysqli_query($con, $queryU)
                                or die("<p style=\"color: red;\">Could not execute query!</p>");
            }else{
                $queryI="INSERT INTO devworks.cryptocurrency(, Balance)
                            value ('$uName', 1000";
                
                $result = mysqli_query($conn, $queryU)
                                or die("<p style=\"color: red;\">Could not execute query!</p>");
            }

                
            
            curl_close($ch);
        } 
        mysqli_close($conn);
        // if(isset($_GET['view'])){
        //     header("location: ../watchlist.php");
        //     exit();
        // }else{
        //     header("location: ../wallet.php");
        //     exit();
        // }
        
        
        // header("location: coins.php");

        ?>
    </body>
</html>

