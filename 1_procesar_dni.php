<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos el DNI desde el formulario
    $dni = $_POST['dni'];

    // Validamos que el DNI tenga 9 caracteres
    if (strlen($dni) != 9) {
        echo "El DNI debe tener 9 dígitos.";
    } else {
        // Extraemos el último carácter del DNI
        $lastDigit = substr($dni, -1);

        // Lógica para mostrar los días de solicitud
        $dias = [];

        if ($lastDigit == 1) {
            $dias = ["20-Mayo", "21-Mayo", "18-Junio"];
        } else if ($lastDigit == 2) {
            $dias = ["22-Mayo", "23-Mayo", "19-Junio"];
        } else if ($lastDigit == 3) {
            $dias = ["24-Mayo", "27-Mayo", "20-Junio"];
        } else if ($lastDigit == 4) {
            $dias = ["28-Mayo", "29-Mayo", "21-Junio"];
        } else if ($lastDigit == 5) {
            $dias = ["30-Mayo", "31-Mayo", "24-Junio"];
        } else if ($lastDigit == 6) {
            $dias = ["03-Junio", "04-Junio", "25-Junio"];
        } else if ($lastDigit == 7) {
            $dias = ["05-Junio", "06-Junio", "26-Junio"];
            echo "Recuerda que tu solicitud se procesa con prioridad.<br>";
        } else if ($lastDigit == 8) {
            $dias = ["10-Junio", "11-Junio", "27-Junio"];
        } else if ($lastDigit == 9) {
            $dias = ["12-Junio", "13-Junio", "28-Junio"];
        } else if ($lastDigit == 0) {
            $dias = ["15-Junio", "16-Junio", "02-Julio"];
        }

        // Mostrar los días ordenados, sort ordena un array de manera ascendente 
        sort($dias);
        //La función implode() se usa para convertir un array en una cadena de 
        //texto, separando por coma y espacio.
        echo "Tus días de solicitud son: " . implode(", ", $dias) . "<br>";
    }
    //ahor si quedo bien
}
?>
