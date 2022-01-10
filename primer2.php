<?
$sql = 'SELECT * FROM candy';
$result = mysqli_query($conn,$sql);
$ar_result = [];
if($result == false){
   print("Ошибка при выполнении запроса");
}else{
  while($row = mysqli_fetch_array($result)){
    $ar_result[] = $row;
  }
}
?>