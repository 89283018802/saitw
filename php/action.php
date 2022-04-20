<?php
$agent_nm = $_POST['name']; 
$category = $_POST['category'];
$sse = $_POST['sse'];




$conn = new mysqli('localhost', 'ter', 'qwerty', 'ter');
    if(mysqli_connect_errno()) {
        exit('Connect failed: '. mysqli_connect_error());
    }
//generate the query (doesn't add id because id is autoincremented)
$query = "INSERT INTO niga VALUES (NULL, " . $agent_nm . ", " . $category . ", " . $sse . ")";

//insert and close.
mysqli_query($conn, $query);
mysqli_close($conn);
<script type="text/javascript">
    setTimeout(function(){location.replace(location.href);}, 3000);
    </script>
    <p>Форма заполнена, вы будете переадресованы через 3 секунды. Если не получилось - жмите </p>
    <?php