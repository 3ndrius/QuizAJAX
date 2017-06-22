<?php
session_start();

if(isset($_SESSION['email'])) {
$mail = $_SESSION['email'];

include("connect.php");
$conn = mysqli_connect($servername, $username, $password, $db_name);
mysqli_query($conn,"SET NAMES `utf8` COLLATE `utf8_polish_ci`");


 $output = '';
 $sql = "SELECT * FROM pytania WHERE user_email ='$mail'";
 $sql1 = "secelct count(*) from pytania";
 $result = mysqli_query($conn, $sql);
$res = mysqli_query($conn, $sql1);
 $output .= '
 <div align="center">
 <table class="table table-bordered table-responsive">
 <tr>
 <th width="3%">Id</th>
 <th width="29%">Tresc</th>
 <th width="15%">OdpA</th>
 <th width="15%">OdpB</th>
 <th width="15%">OdpC</th>
 <th width="15%">OdpD</th>
 <th width="4%">Poprawna</th>
 <th width="4%">Delete</th>
 </tr>';
 if(mysqli_num_rows($result) >= 0)
 {
 while($row = mysqli_fetch_array($result))
 {
 $output .= '
 <tr>
 <td>'.$row["id"].'</td>
 <td class="tresc" data-id1="'.$row["id"].'" >'.$row["tresc"].'</td>
 <td class="odp1" data-id2="'.$row["id"].'" contenteditable>'.$row["odp1"].'</td>
 <td class="odp2" data-id3="'.$row["id"].'" contenteditable>'.$row["odp2"].'</td>
 <td class="odp3" data-id4="'.$row["id"].'" contenteditable>'.$row["odp3"].'</td>
 <td class="odp4" data-id5="'.$row["id"].'" contenteditable>'.$row["odp4"].'</td>
 <td class="poprawna" data-id6="'.$row["id"].'" contenteditable>'.$row["poprawna"].'</td>
 <td><button class="btn btn-danger" type="button" name="delete_btn" data-id3="'.$row["id"].'" id="delete">Usuń</button></td>
 </tr>
 ';
 }
 $output .= '
 <tr>
 <td></td>
 <td id="tresc" contenteditable></td>
 <td id="odp1" contenteditable></td>
 <td id="odp2" contenteditable></td>
 <td id="odp3" contenteditable></td>
 <td id="odp4" contenteditable></td>
 <td id="poprawna" contenteditable></td>
 <td><button class="btn btn-primary" type="button" name="add" id="add">Dodaj</button></td>
 </tr>
 ';
 }
 else
 {
 $output .= '<tr>
 <td colspan="4">Data not Found</td>
 </tr>';
 }
 $output .= '</table>
 </div>';
 echo $output;
}
else{
    echo "brak danych ";

    header("Location:login.php");
     exit();
}
//    include"connect.php";
// $output = '';
//
//
// $sql = "SELECT * FROM pytania";
// $result = mysqli_query($conn, $sql);
// $output .= '
// <div align="center">
// <table class="table table-bordered table-responsive">
// <tr>
// <th width="3%">Id</th>
// <th width="29%">Tresc</th>
// <th width="15%">OdpA</th>
// <th width="15%">OdpB</th>
// <th width="15%">OdpC</th>
// <th width="15%">OdpD</th>
// <th width="4%">Poprawna</th>
// <th width="4%">Delete</th>
// </tr>';
// if(mysqli_num_rows($result) > 0)
// {
// while($row = mysqli_fetch_array($result))
// {
// $output .= '
// <tr>
// <td>'.$row["id"].'</td>
// <td class="tresc" data-id1="'.$row["id"].'" contenteditable>'.$row["tresc"].'</td>
// <td class="odp1" data-id2="'.$row["id"].'" contenteditable>'.$row["odp1"].'</td>
// <td class="odp2" data-id3="'.$row["id"].'" contenteditable>'.$row["odp2"].'</td>
// <td class="odp3" data-id4="'.$row["id"].'" contenteditable>'.$row["odp3"].'</td>
// <td class="odp4" data-id5="'.$row["id"].'" contenteditable>'.$row["odp4"].'</td>
// <td class="poprawna" data-id6="'.$row["id"].'" contenteditable>'.$row["poprawna"].'</td>
// <td><button class="btn btn-danger" type="button" name="delete_btn" data-id3="'.$row["id"].'" id="delete">Usuń</button></td>
// </tr>
// ';
// }
// $output .= '
// <tr>
// <td></td>
// <td id="tresc" contenteditable></td>
// <td id="odp1" contenteditable></td>
// <td id="odp2" contenteditable></td>
// <td id="odp3" contenteditable></td>
// <td id="odp4" contenteditable></td>
// <td id="poprawna" contenteditable></td>
// <td><button class="btn btn-primary" type="button" name="add" id="add">Dodaj</button></td>
// </tr>
// ';
// }
// else
// {
// $output .= '<tr>
// <td colspan="4">Data not Found</td>
// </tr>';
// }
// $output .= '</table>
// </div>';
// echo $output;
//
//}
 ?>
