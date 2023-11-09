<html>
    <head>
    <title>CSS PWEB 7 SEPTEMBER</title>
    <link rel="stylesheet" href="mystyle.css" >
    <style>
        body{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color:peru;
        }
        p,div {
            text-align: center;
        }

        .salam{
            font-size :larger;
            text-align: right;
            font-weight: bold;
            text-transform: uppercase;
        }

        .garisbawah{
            text-decoration: underline;
            color : black;

        }


    </style>
    </head>
    <body>
        <!-- Inline CSS, digunakan jika hanya 1 bagian di 1 halaman yang berbeda-->
        Hallo <b style="
        color:darkviolet;
        text-decoration: underline;
        text-shadow: 2px 2px 5px rgb(0, 0, 0)">Apa</b> Kabar ?
        <!-- Inpage CSS, digunakan jika yang berbeda hanya di 1 halaman-->
        <div class="garisbawah salam">Hallo Apa Kabar ?</div>
        <!-- External FIle , digunakan untuk global 1 situs-->
        <span class="sembunyi" >Hallo Apa Kabar ?</span>
       <p>Hallo Apa Kabar ?</p>
        <h1><b style="color: red;text-decoration: underline;"></b></h1>
    </body>
</html>
