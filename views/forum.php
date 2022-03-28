<?php


require_once("../db_connect.php");
include("../layout/header_forum.php");
if(isset($_SESSION['userid'])){
    $userid=$_SESSION['userid'];
}
try{
    $sql = "SELECT users.first_name, users.last_name, users.email, posts.text, posts.user_id, posts.created
    FROM users
    JOIN posts ON users.id=posts.user_id
    ORDER by users.created DESC";    
      $query= $conn->prepare($sql);
      $query->execute();
      $result= $query->fetchAll();
//var_dump($result);
  }catch(PDOException $e){
      echo "Failed: ". $e->getMessage();
  } 
  try{
    $sql1 = "SELECT *
    FROM users
    Where users.id=$userid";
      $query= $conn->prepare($sql1);
      $query->execute();
      $name= $query->fetch();
    //  var_dump($name);
  }catch(PDOException $e){
      echo "Failed: ". $e->getMessage();
  } 
  try{
    $sql2 = "SELECT *
    FROM users";
      $query= $conn->prepare($sql2);
      $query->execute();
      $users= $query->fetchAll();
    //  var_dump($name);
  }catch(PDOException $e){
      echo "Failed: ". $e->getMessage();
  } 

?>
<!-- personal account -->

<div class="container">
    <div class="row">
        <div class="col">
            <table class="users" >
                    <tr>
                        <th class="bg-secondary text-white"><?php echo "You can manage account, ".$name['first_name']?></th>
                        <th class="bg-secondary text-white"></th>
                    </tr>
                    <?php 
                        echo "<tr><td>
                        <a href='./user_edit.php?userid=".$userid."'><i class='fa-solid fa-pen-to-square text-secondary'></i></a>
                        <a href='../scripts/user_delete.php?userid=".$userid."'><i class='fa-solid fa-trash-can text-danger'></i></a></td></tr>";
                
                ?>
            </table>
        </div>
        <div class="col">
            <div class="card-header bg-secondary ms-3 my-3" >
                <form action="../scripts/posts.php" method="POST">
                    <textarea name="post" id="" cols="40" rows="" placeholder="Write something here.."></textarea>
                        <button type="submit" class="btn btn-secondary">Post</button>
                    <input type="hidden" name="userid" value="<?php echo $userid;?>">
                    </form>
            </div>
        </div>
    </div>  
</div>
        <!-- users account  -->
<div class="container">
    <div class="row">
        <div class="col">
            <table class="users" >
                <tr>
                    <th class="bg-secondary text-white">OTHER USERS</th>
                    <th class="bg-secondary text-white"></th>
                </tr>
                <?php 
                foreach($users as $user){
                    echo "<tr><td>".$user['first_name']."</td><td>".$user['last_name']."</td></tr>";
            }
            ?>
            </table>
        </div>
    
        <!-- CHAT  -->
    <div class="col">
        <div class="forum">
            <table class=" table table-hover" >
                <tr>
                    <th class="bg-secondary text-white">Lets chat!</th>
                    <th class="bg-secondary text-white"></th>
                </tr>
                <?php 
                foreach($result as $user){
                    echo "<tr><td>".$user['first_name']." ".$user['last_name']." posted: <br>".$user['created']."<td>".$user['text'];

            }
            ?>
            </table>
        </div>
    </div>
</div>


<!-- FORUM -->


  

