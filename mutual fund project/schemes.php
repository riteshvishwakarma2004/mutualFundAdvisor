<?php
session_start();
if(!$_SESSION["login"]){
   header("Location: login.php");
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Funds</title>
    <link rel="stylesheet" href="schemes.css">
</head>
<body>
    <div class="container">

        <div class="scheme">
            <div class="img_name">
                <div class="img">
                    <img src="logo3.png" alt="Index Fund">
                </div>
                <div class="scheme_name">
                    <p><b><code>Small Cap</code></b></p>
                    <p><b><code>Bond</code></b></p>
                </div>
            </div>
            <div class="detail">
                <div class="aum">
                    <p><code>AUM</code></p>
                    <p><b>200.14 cr</b></p>
                </div>
                <div class="expense">
                    <p><code>Expense Ratio</code></p>
                    <p><b>0.9%</b></p>
                </div>
                <div class="min">
                    <p><code>min. Investment</code></p>
                    <p><b>1000</b></p>
                </div>
            </div>
            <div class="buttons">
                <button>
                    <a href="#"><b>Know More</b></a>
                </button>
                <button class="invest_btn">
                    <a href="#"><b>Invest Now</b></a>
                </button>
            </div>   
        </div>

        <div class="scheme">
            <div class="img_name">
                <div class="img">
                    <img src="logo1.png" alt="Index Fund">
                </div>
                <div class="scheme_name">
                    <p><b><code>NIFTY 50</code></b></p>
                    <p><b><code>Index Fund</code></b></p>
                </div>
            </div>
            <div class="detail">
                <div class="aum">
                    <p><code>AUM</code></p>
                    <p><b>264.14 cr</b></p>
                </div>
                <div class="expense">
                    <p><code>Expense Ratio</code></p>
                    <p><b>0.1%</b></p>
                </div>
                <div class="min">
                    <p><code>min. Investment</code></p>
                    <p><b>100</b></p>
                </div>
            </div>
            <div class="buttons">
                <button>
                    <a href="#"><b>Know More</b></a>
                </button>
                <button class="invest_btn">
                    <a href="#"><b>Invest Now</b></a>
                </button>
            </div>   
        </div>

        <div class="scheme">
            <div class="img_name">
                <div class="img">
                    <img src="logo3.png" alt="Index Fund">
                </div>
                <div class="scheme_name">
                    <p><b><code>Small Cap</code></b></p>
                    <p><b><code>Bond</code></b></p>
                </div>
            </div>
            <div class="detail">
                <div class="aum">
                    <p><code>AUM</code></p>
                    <p><b>200.14 cr</b></p>
                </div>
                <div class="expense">
                    <p><code>Expense Ratio</code></p>
                    <p><b>0.9%</b></p>
                </div>
                <div class="min">
                    <p><code>min. Investment</code></p>
                    <p><b>1000</b></p>
                </div>
            </div>
            <div class="buttons">
                <button>
                    <a href="#"><b>Know More</b></a>
                </button>
                <button class="invest_btn">
                    <a href="#"><b>Invest Now</b></a>
                </button>
            </div>   
        </div>

        <div class="scheme">
            <div class="img_name">
                <div class="img">
                    <img src="logo3.png" alt="Index Fund">
                </div>
                <div class="scheme_name">
                    <p><b><code>Small Cap</code></b></p>
                    <p><b><code>Bond</code></b></p>
                </div>
            </div>
            <div class="detail">
                <div class="aum">
                    <p><code>AUM</code></p>
                    <p><b>200.14 cr</b></p>
                </div>
                <div class="expense">
                    <p><code>Expense Ratio</code></p>
                    <p><b>0.9%</b></p>
                </div>
                <div class="min">
                    <p><code>min. Investment</code></p>
                    <p><b>1000</b></p>
                </div>
            </div>
            <div class="buttons">
                <button>
                    <a href="#"><b>Know More</b></a>
                </button>
                <button class="invest_btn">
                    <a href="#"><b>Invest Now</b></a>
                </button>
            </div>   
        </div>

        <div class="scheme">
            <div class="img_name">
                <div class="img">
                    <img src="logo1.png" alt="Index Fund">
                </div>
                <div class="scheme_name">
                    <p><b><code>NIFTY 50</code></b></p>
                    <p><b><code>Index Fund</code></b></p>
                </div>
            </div>
            <div class="detail">
                <div class="aum">
                    <p><code>AUM</code></p>
                    <p><b>264.14 cr</b></p>
                </div>
                <div class="expense">
                    <p><code>Expense Ratio</code></p>
                    <p><b>0.1%</b></p>
                </div>
                <div class="min">
                    <p><code>min. Investment</code></p>
                    <p><b>100</b></p>
                </div>
            </div>
            <div class="buttons">
                <button>
                    <a href="#"><b>Know More</b></a>
                </button>
                <button class="invest_btn">
                    <a href="#"><b>Invest Now</b></a>
                </button>
            </div>   
        </div>

        <div class="scheme">
            <div class="img_name">
                <div class="img">
                    <img src="logo2.png" alt="Index Fund">
                </div>
                <div class="scheme_name">
                    <p><b><code>Large Cap</code></b></p>
                    <p><b><code>Mutual Fund</code></b></p>
                </div>
            </div>
            <div class="detail">
                <div class="aum">
                    <p><code>AUM</code></p>
                    <p><b>250.14 cr</b></p>
                </div>
                <div class="expense">
                    <p><code>Expense Ratio</code></p>
                    <p><b>0.8%</b></p>
                </div>
                <div class="min">
                    <p><code>min. Investment</code></p>
                    <p><b>500</b></p>
                </div>
            </div>
            <div class="buttons">
                <button>
                    <a href="#"><b>Know More</b></a>
                </button>
                <button class="invest_btn">
                    <a href="#"><b>Invest Now</b></a>
                </button>
            </div>   
        </div>

        <div class="scheme">
            <div class="img_name">
                <div class="img">
                    <img src="logo3.png" alt="Index Fund">
                </div>
                <div class="scheme_name">
                    <p><b><code>Small Cap</code></b></p>
                    <p><b><code>Bond</code></b></p>
                </div>
            </div>
            <div class="detail">
                <div class="aum">
                    <p><code>AUM</code></p>
                    <p><b>200.14 cr</b></p>
                </div>
                <div class="expense">
                    <p><code>Expense Ratio</code></p>
                    <p><b>0.9%</b></p>
                </div>
                <div class="min">
                    <p><code>min. Investment</code></p>
                    <p><b>1000</b></p>
                </div>
            </div>
            <div class="buttons">
                <button>
                    <a href="#"><b>Know More</b></a>
                </button>
                <button class="invest_btn">
                    <a href="#"><b>Invest Now</b></a>
                </button>
            </div>   
        </div>

        <div class="scheme">
            <div class="img_name">
                <div class="img">
                    <img src="logo3.png" alt="Index Fund">
                </div>
                <div class="scheme_name">
                    <p><b><code>Small Cap</code></b></p>
                    <p><b><code>Bond</code></b></p>
                </div>
            </div>
            <div class="detail">
                <div class="aum">
                    <p><code>AUM</code></p>
                    <p><b>200.14 cr</b></p>
                </div>
                <div class="expense">
                    <p><code>Expense Ratio</code></p>
                    <p><b>0.9%</b></p>
                </div>
                <div class="min">
                    <p><code>min. Investment</code></p>
                    <p><b>1000</b></p>
                </div>
            </div>
            <div class="buttons">
                <button>
                    <a href="#"><b>Know More</b></a>
                </button>
                <button class="invest_btn">
                    <a href="#"><b>Invest Now</b></a>
                </button>
            </div>   
        </div>
        
        <div class="scheme">
            <div class="img_name">
                <div class="img">
                    <img src="logo2.png" alt="Index Fund">
                </div>
                <div class="scheme_name">
                    <p><b><code>Large Cap</code></b></p>
                    <p><b><code>Mutual Fund</code></b></p>
                </div>
            </div>
            <div class="detail">
                <div class="aum">
                    <p><code>AUM</code></p>
                    <p><b>250.14 cr</b></p>
                </div>
                <div class="expense">
                    <p><code>Expense Ratio</code></p>
                    <p><b>0.8%</b></p>
                </div>
                <div class="min">
                    <p><code>min. Investment</code></p>
                    <p><b>500</b></p>
                </div>
            </div>
            <div class="buttons">
                <button>
                    <a href="#"><b>Know More</b></a>
                </button>
                <button class="invest_btn">
                    <a href="#"><b>Invest Now</b></a>
                </button>
            </div>   
        </div>

        <div class="scheme">
            <div class="img_name">
                <div class="img">
                    <img src="logo3.png" alt="Index Fund">
                </div>
                <div class="scheme_name">
                    <p><b><code>Small Cap</code></b></p>
                    <p><b><code>Bond</code></b></p>
                </div>
            </div>
            <div class="detail">
                <div class="aum">
                    <p><code>AUM</code></p>
                    <p><b>200.14 cr</b></p>
                </div>
                <div class="expense">
                    <p><code>Expense Ratio</code></p>
                    <p><b>0.9%</b></p>
                </div>
                <div class="min">
                    <p><code>min. Investment</code></p>
                    <p><b>1000</b></p>
                </div>
            </div>
            <div class="buttons">
                <button>
                    <a href="#"><b>Know More</b></a>
                </button>
                <button class="invest_btn">
                    <a href="#"><b>Invest Now</b></a>
                </button>
            </div>   
        </div>

        <div class="scheme">
            <div class="img_name">
                <div class="img">
                    <img src="logo2.png" alt="Index Fund">
                </div>
                <div class="scheme_name">
                    <p><b><code>Large Cap</code></b></p>
                    <p><b><code>Mutual Fund</code></b></p>
                </div>
            </div>
            <div class="detail">
                <div class="aum">
                    <p><code>AUM</code></p>
                    <p><b>250.14 cr</b></p>
                </div>
                <div class="expense">
                    <p><code>Expense Ratio</code></p>
                    <p><b>0.8%</b></p>
                </div>
                <div class="min">
                    <p><code>min. Investment</code></p>
                    <p><b>500</b></p>
                </div>
            </div>
            <div class="buttons">
                <button>
                    <a href="#"><b>Know More</b></a>
                </button>
                <button class="invest_btn">
                    <a href="#"><b>Invest Now</b></a>
                </button>
            </div>   
        </div>

        <div class="scheme">
            <div class="img_name">
                <div class="img">
                    <img src="logo3.png" alt="Index Fund">
                </div>
                <div class="scheme_name">
                    <p><b><code>Small Cap</code></b></p>
                    <p><b><code>Bond</code></b></p>
                </div>
            </div>
            <div class="detail">
                <div class="aum">
                    <p><code>AUM</code></p>
                    <p><b>200.14 cr</b></p>
                </div>
                <div class="expense">
                    <p><code>Expense Ratio</code></p>
                    <p><b>0.9%</b></p>
                </div>
                <div class="min">
                    <p><code>min. Investment</code></p>
                    <p><b>1000</b></p>
                </div>
            </div>
            <div class="buttons">
                <button>
                    <a href="#"><b>Know More</b></a>
                </button>
                <button class="invest_btn">
                    <a href="#"><b>Invest Now</b></a>
                </button>
            </div>   
        </div>

    </div>
</body>
</html>