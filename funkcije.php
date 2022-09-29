

      <?php



      
      function povrsina(){
      if(isset($_GET['jednako'])){
            $a = $_GET['a'];
            $b = $_GET['b'];
            switch ($_GET['operator']){
                case 'Odaberi matematičku operaiju nad pravokutnikom':
                    echo 'Odaberi operaciju';
                break;
                case 'Izračunaj površinu':
                      echo $a * $b;
                break;
                case 'Izračunaj opseg':
                     echo 2*($a * $b);
                break;
                default:
                    echo 'Niste unjeli stranice';
                break;
            }
        }else {
            echo '0';
        }
      $ServerName ="localhost";
      $dBUserName ="PA3";
$dBPassword ="HocuGore123";
$dBName ="PA3";

$conn = mysqli_connect($ServerName, $dBUserName, $dBPassword, $dBName );

if (!$conn){
    die("Connection failed: ". mysqli_connect_error());
}
$sql="INSERT INTO pravokutnik VALUES ($a,$b,$a*$b,now())";
$result=mysqli_query($conn,$sql);

      }
      
      
      function tablica($datum){
      $ServerName ="localhost";
      $dBUserName ="PA3";
$dBPassword ="HocuGore123";
$dBName ="PA3";

$conn = mysqli_connect($ServerName, $dBUserName, $dBPassword, $dBName );

if (!$conn){
    die("Connection failed: ". mysqli_connect_error());
}
          
       $sql="SELECT * FROM pravokutnik;";
  $result=mysqli_query($conn,$sql);
  echo '<table>';
  echo '<tr>';
        echo '<th>A</th>';
        echo '<th>B</th>';
        echo '<th>Površina</th>';
        echo '<th>Datum</th>';
    echo '</tr>';
  while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {   
    echo '<tr>';
        echo '<td>'.$row['a'].'</td>';
        echo '<td>'.$row['b'].'</td>';
        echo '<td>'.$row['povrsina'].'</td>';
        echo '<td>'.$row['datum'].'</td>';
    echo '</tr>';
  }
  echo '</table>';
      }
      ?>

