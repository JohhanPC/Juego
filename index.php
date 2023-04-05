<html>
    <body>
        <form action="" method="post">
            Nombre jugador 1: <input type="text" name="nombrejugador1"><br>
            Nombre jugador 2: <input type="text" name="nombrejugador2"><br>
            <input type="submit" value="Enviar">
        </form>

        <?php

        include("guerrero.php");
        include("tanque.php");
        include("batalla.php");

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $nombreJugador1 = $_POST['nombrejugador1'];
            $nombreJugador2 = $_POST['nombrejugador2'];
        }

        $battleOne = new Batalla;

        $guerrero1 = new Guerrero();
        $guerrero1->nombre = $nombreJugador1;
        $guerrero1->mostrarSkills();
        $guerrero1->mostrarHabilidad();
        echo "<br>";

        $tanque1 = new Tanque();
        $tanque1->nombre = $nombreJugador2;
        $tanque1->mostrarSkills();
        $tanque1->mostrarHabilidad();
        echo "<br>";

        $guerrero1->actualizarSalud($battleOne->batalla($tanque1, $guerrero1), $guerrero1);
        echo "<br>";
        $tanque1->actualizarSalud($battleOne->batalla($guerrero1, $tanque1), $tanque1);
        echo "<br>";



        ?>
    </body>
</html>