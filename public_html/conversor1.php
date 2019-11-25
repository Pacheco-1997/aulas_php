<!DOCTYPE html>
<html>
<head>
	<title>Conversor de moedas</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.html">Pagina Principal</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="trabalhos.html">Meus Trabalhos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="conversor.html">Conversor de Moedas</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contato.html">Contato</a>
                    </li>
                    </ul>
                </div>
              </nav>
              <br/>
            <div class="container">
              <div class="container d-flex justify-content-center" style="background-color:aqua;">
                <h1 id="titulo_container">Conversor de moedas</h1>
              </div>
              <br/>
                <br/>
                <br/>
                <br/>
              <div class="container d-flex justify-content-center">
                
                 <center><form method="POST" action="conversor.php">
                   
                   
                      <label>De: </label><script>
                        var options = ["AED,AMD,ANG,ARS,AUD,AWG,AZN,BAM,BBD,BDT,BGN,BHD,BIF,BMD,BND,BOB,BOV,BRL,BSD,BTN,BWP,BYN,BYR,BZD,CAD,CDF,CHE,CHF,CLF,CLP,CNH,CNY,COP,COU,CRC,CUC,CUP,CVE,CZK,DJF,DKK,DOP,DZD,EGP,ERN,ETB,EUR,FJD,FKP,GBP,GEL,GHS,GIP,GMD,GNF,GTQ,GYD,HKD,HNL,HRK,HTG,HUF,IDR,ILS,INR,IQD,IRR,ISK,JMD,JOD,JPY,KES,KGS,KHR,KMF,KPW,KRW,KWD,KYD,KZT,LAK,LBP,LKR,LRD,LSL,LYD,MAD,MDL,MGA,MKD,MMK,MNT,MOP,MRO,MUR,MVR,MWK,MXN,MXV,MYR,MZN,NAD,NGN,NIO,NOK,NPR,NZD,OMR,PAB,PEN,PGK,PHP,PKR,PLN,PYG,QAR,RON,RSD,RUB,RWF,SAR,SBD,SCR,SDG,SEK,SGD,SHP,SLL,SOS,SRD,SSP,STD,SVC,SYP,SZL,THB,TJS,TMT,TND,TOP,TRY,TTD,TWD,TZS,UAH,UGX,USD,USN,UYI,UYU,UZS,VEF,VND,VUV,WST,XAF,XCD,XDR,SDR,CFA,XOF,XPF,XSU,XUA,YER,ZAR,ZMW,ZWL"];
                           $('#select').empty();
                           $.each(options, function(i, p) {
                           $('#select').append($('<option></option>').val(p).html(p));
                           });

                      </script>
                        <select id="#select" name="select1">
                            <option value="USD">Dolar Americano</option>
                            <option value="BRL">Real Brasileiro</option>
                            <option value="EUR">Euro</option>
                        </select>
                        
                        <input type="text" name="quantidade">
                        <br/>
                        <br/>
                        <label>Para: </label>
                            <select id="#select" name="select2">
                                <option value="USD">Dolar Americano</option>
                                <option value="BRL">Real Brasileiro</option>
                                <option value="EUR">Euro</option>
                            </select>
                            <input type="text" name="resultado"><br/><br/>
                            <input type="submit" value="Calcular">
                 </form> </center>   
              </div>
            </div>
</body>
</html>