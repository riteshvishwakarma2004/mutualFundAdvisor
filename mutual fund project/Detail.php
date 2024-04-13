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
    <title>Detail</title>
    <style>
        table {
          width: 100%;
          border-collapse: collapse;
        }
        th, td {
          border: 1px solid #ddd;
          padding: 8px;
          text-align: left;
        }
        th {
          background-color: #f2f2f2;
        }

        p{
            font-size: 25px;
        }
    </style>
</head>
<body>
    <div class="logout">
        <button>
            <a href="logout.php">logout</a>
        </button>
    </div>
    <p><b>The Nifty 50 is a well diversified 50 stock index and it represent important sectors of the economy.</b></p>
    <p><code>The base period selected for Nifty 50 index is the close of prices on November 3, 1995, which marks the completion of one year of operations of NSE's Capital Market Segment. The base value of the index has been set at 1000 and a base capital of Rs.2.06 trillion.</code></p>
    <p><code>The Nifty 50 Index represents about 59% of the free float market capitalization of the stocks listed on NSE as on September 29, 2023.</code></p>
    <p><code>The total traded value of Nifty 50 index constituents for the last six months ending September 2023 is approximately 34.6% of the traded value of all stocks on the NSE.</code></p>
    <p><code>Effective June 26, 2009, Nifty 50 is computed using Free Float Market Capitalisation weighted method, wherein the level of index reflects the free float market capitalisation of all stocks in Index.</code></p>


    <div>
        <table>
            <thead>
                <tr>
                    <th>Comapny</th>
                    <th>Market Capital</th>
                    <th>Market Price</th>
                    <th>Sector</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Reliance Industries</td>
                    <td>19,19,595 Cr</td>
                    <td>2,836.45</td>
                    <td>Oil, Gas, & Fuels</td>
                </tr>
                <tr>
                    <td>Reliance Industries</td>
                    <td>19,19,595 Cr</td>
                    <td>2,836.45</td>
                    <td>Oil, Gas, & Fuels</td>
                </tr>
                <tr>
                    <td>Reliance Industries</td>
                    <td>19,19,595 Cr</td>
                    <td>2,836.45</td>
                    <td>Oil, Gas, & Fuels</td>
                </tr>
                <tr>
                    <td>Reliance Industries</td>
                    <td>19,19,595 Cr</td>
                    <td>2,836.45</td>
                    <td>Oil, Gas, & Fuels</td>
                </tr>
                <tr>
                    <td>Reliance Industries</td>
                    <td>19,19,595 Cr</td>
                    <td>2,836.45</td>
                    <td>Oil, Gas, & Fuels</td>
                </tr>
                <tr>
                    <td>Reliance Industries</td>
                    <td>19,19,595 Cr</td>
                    <td>2,836.45</td>
                    <td>Oil, Gas, & Fuels</td>
                </tr>
                <tr>
                    <td>Reliance Industries</td>
                    <td>19,19,595 Cr</td>
                    <td>2,836.45</td>
                    <td>Oil, Gas, & Fuels</td>
                </tr>
                <tr>
                    <td>Reliance Industries</td>
                    <td>19,19,595 Cr</td>
                    <td>2,836.45</td>
                    <td>Oil, Gas, & Fuels</td>
                </tr>
                <tr>
                    <td>Reliance Industries</td>
                    <td>19,19,595 Cr</td>
                    <td>2,836.45</td>
                    <td>Oil, Gas, & Fuels</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>