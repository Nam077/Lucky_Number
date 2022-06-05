
<?php
  session_start();
  if(isset($_COOKIE['text'])){
    
    $c = "";
    
    if(isset($_SESSION['username_ss'])){
      $c = $_SESSION['username_ss'];
      $db = mysqli_connect("localhost","root","","random");
      $sql = "SELECT * FROM danhsachtaikhoan WHERE userName = '$c'";
      $result = mysqli_query($db,$sql);
      $kt = 0;
      // echo $username ." - ".$password."<br>";
      if (mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result)){
            $c = $row['Name'];
            $d = $row['Email'];
              // echo $row['userName'] ." - ".$row['passWord']."<br>";
          }
      }
     
    }
    else echo "Lỗi";
    // $d ='0973685674';
    $e= 'Số May Mắn ' .$_COOKIE['text'] .'<br>Ngày: ' .$a. '<br>Tên: ' .$c .'<br>Email:' .$d;  
  }
?>
<?php
    include 'view/headerluu.php';
    include 'view/menu.php';
?>
</div>
  <div class="hh">
    <div id="form_wrapper">
      <div id="form_left">
        <div> 
          <img style="width: 100%; margin-top: -10%;" style="width: 20%; height: 50%;" src="generate.php?text=<?php echo $e?>" alt=""> 
        </div>
      </div>
      <div id="form_right">
        <h1 style="color: darkred;">Xin Chào    <?php echo $c; ?></span> </h1>
        <div>
         
          <div class="h">
            <input style="width: 40%;" type="button"  class="btn btn-white btn-animate" value="Quay Lại" class="btn"  onclick="history.back()">
          </div>
        </span>
    </div>
  </div>
</div>
<?php
  include 'view/footer.php';
?>
