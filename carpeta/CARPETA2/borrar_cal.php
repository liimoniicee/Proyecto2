<?PHP


require 'conexion.php';

include 'fuctions.php';
header('Content-type: calificaciones.php; charset=UTF-8');
$response = array();

if ($_POST['delete']) {

    $pid = intval($_POST['delete']);
    $query = "DELETE FROM calificaciones WHERE ID_CALIFICACIONES='$pid';";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    if ($stmt) {
        $response['status']  = 'success';
 $response['message'] = 'Product Deleted Successfully ...';

    } else {
        $response['status']  = 'error';
 $response['message'] = 'Unable to delete product ...';
    }
    echo json_encode($response);
}
