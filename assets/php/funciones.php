<?php
// Función para mostrar un mensaje de error
function mostrarMensajeError($mensaje, $pagina)
{
    echo '<script src="../plugins/sweetAlert2/dist/sweetalert2.min.js"></script>';
    echo '<link rel="stylesheet" href="../plugins/sweetAlert2/dist/sweetalert2.min.css">';
    echo '<script>';
    echo 'document.addEventListener("DOMContentLoaded", function() {';
    echo '  Swal.fire({';
    echo '    icon: "error",';
    echo '    title: "Error",';
    echo '    text: "' . $mensaje . '",';
    echo '    target: document.getElementById("alert")';
    echo '  }).then((result) => {';
    echo '    if (result.isConfirmed) {';
    echo '      window.location.href = "' . $pagina . '";';
    echo '    }';
    echo '  });';
    echo '});';
    echo '</script>';
}

// Función para mostrar un mensaje de éxito
function mostrarMensajeExito($mensaje, $pagina)
{
    echo '<script src="../plugins/sweetAlert2/dist/sweetalert2.min.js"></script>';
    echo '<link rel="stylesheet" href="../plugins/sweetAlert2/dist/sweetalert2.min.css">';
    echo '<script>';
    echo 'document.addEventListener("DOMContentLoaded", function() {';
    echo '  Swal.fire({';
    echo '    icon: "success",';
    echo '    title: "Éxito",';
    echo '    text: "' . $mensaje . '",';
    echo '    target: document.getElementById("alert")';
    echo '  }).then((result) => {';
    echo '    if (result.isConfirmed) {';
    echo '      window.location.href = "' . $pagina . '";';
    echo '    }';
    echo '  });';
    echo '});';
    echo '</script>';
}

?>