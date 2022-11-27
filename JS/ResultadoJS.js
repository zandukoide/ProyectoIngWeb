document.getElementById("primer-contenedor").style.display = "none";
document.getElementById("segundo-contenedor").style.display = "none";
document.getElementById("tercer-contenedor").style.display = "none";
document.getElementById("cuarto-contenedor").style.display = "none";

function seleccionar() {
    if (document.getElementById("dia1").selected == true) {
        document.getElementById("segundo-contenedor").style.display = "none";
        document.getElementById("tercer-contenedor").style.display = "none";
        document.getElementById("cuarto-contenedor").style.display = "none";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Fase de Grupos";
        document.getElementById("texto-dia").innerHTML = "Domingo, 20/11";
    
    } else if (document.getElementById("dia2").selected == true) {
        document.getElementById("cuarto-contenedor").style.display = "none";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("segundo-contenedor").style.display = "flex";
        document.getElementById("tercer-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Fase de Grupos";
        document.getElementById("texto-dia").innerHTML = "Lunes, 21/11";
        
    } else if (document.getElementById("dia3").selected == true) {
        document.getElementById("cuarto-contenedor").style.display = "flex";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("segundo-contenedor").style.display = "flex";
        document.getElementById("tercer-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Fase de Grupos";
        document.getElementById("texto-dia").innerHTML = "Martes, 22/11";

    } else if (document.getElementById("dia4").selected == true) {
        document.getElementById("cuarto-contenedor").style.display = "flex";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("segundo-contenedor").style.display = "flex";
        document.getElementById("tercer-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Fase de Grupos";
        document.getElementById("texto-dia").innerHTML = "Miércoles, 23/11";

    } else if (document.getElementById("dia5").selected == true) {
        document.getElementById("cuarto-contenedor").style.display = "flex";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("segundo-contenedor").style.display = "flex";
        document.getElementById("tercer-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Fase de Grupos";
        document.getElementById("texto-dia").innerHTML = "Jueves, 24/11";

    } else if (document.getElementById("dia6").selected == true) {
        document.getElementById("cuarto-contenedor").style.display = "flex";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("segundo-contenedor").style.display = "flex";
        document.getElementById("tercer-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Fase de Grupos";
        document.getElementById("texto-dia").innerHTML = "Viernes, 25/11";

    } else if (document.getElementById("dia7").selected == true) {
        document.getElementById("cuarto-contenedor").style.display = "flex";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("segundo-contenedor").style.display = "flex";
        document.getElementById("tercer-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Fase de Grupos";
        document.getElementById("texto-dia").innerHTML = "Sábado, 26/11";

    } else if (document.getElementById("dia8").selected == true) {
        document.getElementById("cuarto-contenedor").style.display = "flex";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("segundo-contenedor").style.display = "flex";
        document.getElementById("tercer-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Fase de Grupos";
        document.getElementById("texto-dia").innerHTML = "Domingo, 27/11";

    } else if (document.getElementById("dia9").selected == true) {
        document.getElementById("cuarto-contenedor").style.display = "flex";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("segundo-contenedor").style.display = "flex";
        document.getElementById("tercer-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Fase de Grupos";
        document.getElementById("texto-dia").innerHTML = "Lunes, 28/11";

    } else if (document.getElementById("dia10").selected == true) {
        document.getElementById("cuarto-contenedor").style.display = "flex";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("segundo-contenedor").style.display = "flex";
        document.getElementById("tercer-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Fase de Grupos";
        document.getElementById("texto-dia").innerHTML = "Martes, 29/11";

    } else if (document.getElementById("dia11").selected == true) {
        document.getElementById("cuarto-contenedor").style.display = "flex";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("segundo-contenedor").style.display = "flex";
        document.getElementById("tercer-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Fase de Grupos";
        document.getElementById("texto-dia").innerHTML = "Miércoles, 30/11";

    } else if (document.getElementById("dia12").selected == true) {
        document.getElementById("cuarto-contenedor").style.display = "flex";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("segundo-contenedor").style.display = "flex";
        document.getElementById("tercer-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Fase de Grupos";
        document.getElementById("texto-dia").innerHTML = "Jueves, 1/12";

    } else if (document.getElementById("dia13").selected == true) {
        document.getElementById("cuarto-contenedor").style.display = "flex";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("segundo-contenedor").style.display = "flex";
        document.getElementById("tercer-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Fase de Grupos";
        document.getElementById("texto-dia").innerHTML = "Viernes, 2/12";

    } else if (document.getElementById("dia14").selected == true) {
        document.getElementById("tercer-contenedor").style.display = "none";
        document.getElementById("cuarto-contenedor").style.display = "none";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("segundo-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Octavos de Final";
        document.getElementById("texto-dia").innerHTML = "Sábado, 3/12";

    } else if (document.getElementById("dia15").selected == true) {
        document.getElementById("tercer-contenedor").style.display = "none";
        document.getElementById("cuarto-contenedor").style.display = "none";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("segundo-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Octavos de Final";
        document.getElementById("texto-dia").innerHTML = "Domingo, 4/12";

    } else if (document.getElementById("dia16").selected == true) {
        document.getElementById("tercer-contenedor").style.display = "none";
        document.getElementById("cuarto-contenedor").style.display = "none";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("segundo-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Octavos de Final";
        document.getElementById("texto-dia").innerHTML = "Lunes, 5/12";

    } else if (document.getElementById("dia17").selected == true) {
        document.getElementById("tercer-contenedor").style.display = "none";
        document.getElementById("cuarto-contenedor").style.display = "none";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("segundo-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Octavos de Final";
        document.getElementById("texto-dia").innerHTML = "Martes, 6/12";

    } else if (document.getElementById("dia18").selected == true) {
        document.getElementById("tercer-contenedor").style.display = "none";
        document.getElementById("cuarto-contenedor").style.display = "none";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("segundo-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Cuartos de Final";
        document.getElementById("texto-dia").innerHTML = "Viernes, 9/12";

    } else if (document.getElementById("dia19").selected == true) {
        document.getElementById("tercer-contenedor").style.display = "none";
        document.getElementById("cuarto-contenedor").style.display = "none";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("segundo-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Cuartos de Final";
        document.getElementById("texto-dia").innerHTML = "Sábado, 10/12";
    
    } else if (document.getElementById("dia20").selected == true) {
        document.getElementById("segundo-contenedor").style.display = "none";
        document.getElementById("tercer-contenedor").style.display = "none";
        document.getElementById("cuarto-contenedor").style.display = "none";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Semifinales";
        document.getElementById("texto-dia").innerHTML = "Martes, 13/12";
    
    } else if (document.getElementById("dia21").selected == true) {
        document.getElementById("segundo-contenedor").style.display = "none";
        document.getElementById("tercer-contenedor").style.display = "none";
        document.getElementById("cuarto-contenedor").style.display = "none";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Semifinales";
        document.getElementById("texto-dia").innerHTML = "Miércoles, 14/12";

    } else if (document.getElementById("dia22").selected == true) {
        document.getElementById("segundo-contenedor").style.display = "none";
        document.getElementById("tercer-contenedor").style.display = "none";
        document.getElementById("cuarto-contenedor").style.display = "none";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Tercer Puesto";
        document.getElementById("texto-dia").innerHTML = "Sábado, 17/12";

    } else if (document.getElementById("dia23").selected == true) {
        document.getElementById("segundo-contenedor").style.display = "none";
        document.getElementById("tercer-contenedor").style.display = "none";
        document.getElementById("cuarto-contenedor").style.display = "none";
        document.getElementById("primer-contenedor").style.display = "flex";
        document.getElementById("texto-fase").innerHTML = "Final";
        document.getElementById("texto-dia").innerHTML = "Domingo, 18/12";
    }
}