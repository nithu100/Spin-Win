<?php include "common/config.php";

if(isset($_POST['action'])){
  if($_POST['action']=="login"){
    $e=$_POST['email'];
    $p=md5($_POST['password']);
    $q=$conn->query("SELECT * FROM users WHERE email='$e' AND password='$p'");
    if($q->num_rows){
      $_SESSION['user']=$q->fetch_assoc();
      echo "ok";
    } else echo "Invalid login";
    exit;
  }

  if($_POST['action']=="signup"){
    $conn->query("INSERT INTO users(name,phone,email,password,created_at)
    VALUES('{$_POST['name']}','{$_POST['phone']}','{$_POST['email']}',
    '".md5($_POST['password'])."',NOW())");
    echo "ok"; exit;
  }
}
?>
<!-- UI -->
<div class="p-6">
<h2 class="text-xl font-bold mb-4">Login / Signup</h2>
<input id="email" class="w-full mb-2 p-2 border" placeholder="Email">
<input id="pass" class="w-full mb-2 p-2 border" placeholder="Password">
<button onclick="login()" class="bg-indigo-600 text-white w-full p-2">Login</button>
</div>

<script>
function login(){
fetch("",{method:"POST",
headers:{'Content-Type':'application/x-www-form-urlencoded'},
body:"action=login&email="+email.value+"&password="+pass.value})
.then(r=>r.text()).then(t=>{
 if(t=="ok") location.href="index.php"; else alert(t);
});
}
</script>