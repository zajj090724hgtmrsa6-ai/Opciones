<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <H1>__OPCIONES___________________________________________________________________________________</H1>
    <form action="resultados.php" method="POST">
        <select id="D_Turisticos" name="D_Turisticos[] " multiple>
            <option value="Cancun">Cancun</option>
            <option value="Puerto Vallarta">Puerto Vallarta</option>
            <option value="Acapulco">Acapulco</option>
            <option value="Los cabos">Los cabos</option>
            <option value="Mazatlan">Mazatlan</option>
            <option value="Huatulco">Huatulco</option>
            <option value="Puerto Escondido">Puerto Escondido</option>
        </select><br><br>

        <H2>Actividades turisticas</H2>
        <label for="opcion-1">
            <input type="checkbox" value="BUCEO" id="opcion=1" name="A_Turisticas[]">BUCEO
        </label><br>
        <label for="opcion-2">
            <input type="checkbox" value="PASEO EN LANCHA" id="opcion=2" name="A_Turisticas[]">PASEO EN LANCHA
        </label><br>
        <label for="opcion-3">
            <input type="checkbox" value="VISITA A ZONAS ARQUEOLOGICAS" id="opcion=3" name="A_Turisticas[]">VISITA A ZONAS ARQUEOLOGICAS
        </label><br>
        <label for="opcion-4">
            <input type="checkbox" value="SENDERISMOS" id="opcion=4" name="A_Turisticas[]">SENDERISMOS
        </label><br>
        <label for="opcion-5">
            <input type="checkbox" value="PESCA DEPORTIVA" id="opcion=5" name="A_Turisticas[]">PESCA DEPORTIVA
        </label><br>
        <label for="opcion-6">
            <input type="checkbox" value="RECORRIDO GASTRONOMICO" id="opcion=6" name="A_Turisticas[]">RECORRIDO GASTRONOMICO
        </label><br>
        <label for="opcion-7">
            <input type="checkbox" value="VISITA A MUSEOS" id="opcion=7" name="A_Turisticas[]">VISITA A MUSEOS
        </label><br><br>

        <H2>Servicios Adicionales</H2>
        <label for="opcion-1">
            <input type="checkbox" value="TRANSPORTE AL AEROPUERTO" id="opcion=1" name="S_Adicionales[]">TRANSPORTE AL AEROPUERTO
        </label><br>
        <label for="opcion-2">
            <input type="checkbox" value="DESAYUNO INCLUIDO" id="opcion=2" name="S_Adicionales[]">DESAYUNO INCLUIDO
        </label><br>
        <label for="opcion-3">
            <input type="checkbox" value="HOSPEDAJE DE LUJO" id="opcion=3" name="S_Adicionales[]">HOSPEDAJE DE LUJO
        </label><br>
        <label for="opcion-4">
            <input type="checkbox" value="SEGURO DE VIAJERO" id="opcion=4" name="S_Adicionales[]">SEGURO DE VIAJERO
        </label><br>
        <label for="opcion-5">
            <input type="checkbox" value="RENTA DE AUTOMOVIL" id="opcion=5" name="S_Adicionales[]">RENTA DE AUTOMOVIL
        </label><br>
        <label for="opcion-6">
            <input type="checkbox" value="GUIA TURISTICOS" id="opcion=6" name="S_Adicionales[]">GUIA TURISTICOS
        </label><br>

        <label>Nombre completo: </label><input type="text" name="Nombre"><br><br>
        <label>Email: </label><input type="email" name="Email"><br><br>
        <button href="resultados.php" type="submit" name="GP">Generar paquete</button>
    </form>
</body>
</html>