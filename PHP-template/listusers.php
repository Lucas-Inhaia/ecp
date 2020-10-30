<?php

include_once './includes/connect.php'; // Conecta com o banco

$state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_NUMBER_INT);
$city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_NUMBER_INT);
$formation = filter_input(INPUT_POST, 'formation', FILTER_SANITIZE_NUMBER_INT);
$page = filter_input(INPUT_POST, 'page', FILTER_SANITIZE_NUMBER_INT);
$amount_result_per_page = filter_input(INPUT_POST, 'amount_result_per_page', FILTER_SANITIZE_NUMBER_INT);
$start = ($page * $amount_result_per_page) - $amount_result_per_page;

// Consultar no banco de dados
if ($formation and $state and $city) {
	$select_user = "SELECT * FROM users WHERE state = '$state' AND city = '$city' AND formation = '$formation' ORDER BY first_name ASC LIMIT $start, $amount_result_per_page ";
}
elseif ($state and $city) {
	$select_user = "SELECT * FROM users WHERE state = '$state' AND city = '$city' ORDER BY first_name ASC LIMIT $start, $amount_result_per_page ";
}
elseif ($state and $formation) {
	$select_user = "SELECT * FROM users WHERE state = '$state' AND formation = '$formation' ORDER BY first_name ASC LIMIT $start, $amount_result_per_page ";
}
elseif ($formation) {
	$select_user = "SELECT * FROM users WHERE formation = '$formation' ORDER BY first_name ASC LIMIT $start, $amount_result_per_page ";
}
elseif ($state) {
	$select_user = "SELECT * FROM users WHERE state = '$state' ORDER BY first_name ASC LIMIT $start, $amount_result_per_page ";
} 
else {
	$select_user = "SELECT * FROM users ORDER BY first_name ASC LIMIT $start, $amount_result_per_page ";
}

$result_user = mysqli_query($conn, $select_user);

if (($result_user) and ($result_user->num_rows != 0)) {

			while ($row_user = mysqli_fetch_assoc($result_user)) {

				$name_formation = $row_user['formation'];
				$query_formation = "SELECT name FROM formations WHERE id='$name_formation'";
				$result_formation = $conn->query($query_formation);
				$row_formation = $result_formation->fetch_assoc();

				$name_state = $row_user['state'];
				$query_state = "SELECT uf FROM states WHERE id='$name_state'";
				$result_state = $conn->query($query_state);
				$row_state = $result_state->fetch_assoc();

				$name_city = $row_user['city'];
				$query_city = "SELECT name FROM cities WHERE id='$name_city'";
				$result_city = $conn->query($query_city);
				$row_city = $result_city->fetch_assoc();

				if ($row_user['situation'] = 1) {
					$row_situation = "Verificado";
				}

				$modal_id = $row_user['id'];
		
			}

}