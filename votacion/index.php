<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="estilo2.css">
</head>

<body>
    <header>
        <h3 id="centrado">VOTACION DE MUJERES CANTANTES</h3>
        <h2 id="titulo"> MEJOR ACTRICES</h2>
    </header>
    <section>
        <?php
        error_reporting(0);
        session_start();
        
        $total = $_SESSION['total'];
        $pcandidata1 = ($_SESSION['candidata1']*100)/$total;
        $pcandidata2 = ($_SESSION['candidata2']*100)/$total;
        $pcandidata3 = ($_SESSION['candidata3']*100)/$total;
        $pcandidata4 = ($_SESSION['candidata4']*100)/$total;
        ?>
        <form name="frmVotacion" method="POST" action="conteo2.php">
            <table border="1" width="600" cellspacing="10" cellpadding="1">
                <tr>
                    <td id="centrado"><img src="candidata1.png" /></td>
                    <td id="centrado"><img src="candidata2.png" /></td>
                </tr>
                <tr>
                    <td id="centrado"> Maite Perroni 41 años <br>
                        <input type="submit" value="Votar" name="btnBoton1" /><br>
                        TOTAL DE VOTOS:
                        <?php echo $_SESSION['candidata1']; ?><br>
                        PORCENTAJE DE VOTOS:
                        <?php echo round($pcandidata1,2);?>%
                    </td>
                    <td id="centrado">Karol G 33 años<br>
                        <input type="submit" value="Votar" name="btnBoton2" /><br>
                        TOTAL DE VOTOS:
                        <?php echo $_SESSION['candidata2']; ?><br>
                        PORCENTAJE DE VOTOS:
                        <?php echo round($pcandidata2,2); ?>%
                    </td>
                </tr>
                <tr>
                    <td id="centrado"><img src="candidata3.png" /></td>
                    <td id="centrado"><img src="candidata4.png" /></td>
                </tr>
                <tr>
                    <td id="centrado">Gloria Trevi 56 años<br>
                        <input type="submit" value="Votar" name="btnBoton3" /><br>
                        TOTAL DE VOTOS:
                        <?php echo $_SESSION['candidata3'];?><br>
                        PORCENTAJE DE VOTOS:
                        <?php echo round($pcandidata3,2);?>%
                    </td>
                    <td id="centrado">Becky G 27 años<br>
                        <input type="submit" value="Votar" name="btnBoton4" /><br>
                        TOTAL DE VOTOS:
                        <?php echo $_SESSION['candidata4'];?><br>
                        PORCENTAJE DE VOTOS:
                        <?php echo round($pcandidata4,2);?>%
                    </td>
                </tr>
            </table>
        </form>
        <?php
        $arreglo = array('Maite Perroni'=>$_SESSION['candidata1'],
        'Karol g'=>$_SESSION['candidata2'],
        'Gloria Trevi'=>$_SESSION['candidata3'],
        'Becky g'=>$_SESSION['candidata4']
    );
        arsort($arreglo);
        reset($arreglo);
        list($candidata,$puntaje)= each($arreglo);
        ?>
        <table border="1" width="600" cellspacing="10" cellpadding="1">
            <tr>
                <td id="ganadora">TOTAL DE VOTANTES:
                    <?php echo $_SESSION['total']; ?>
                </td>
            </tr>
            <tr>
                <td id="ganadora">GANADORA:
                    <?php echo $candidata; ?>
                    (
                    <?php echo $puntaje; ?> votos)
                </td>
            </tr>
        </table>
        </section>
        <footer>
    <h5 id="centrado"></h5>
</footer>
</body>

</html>


