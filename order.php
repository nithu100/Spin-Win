<?php include "common/header.php"; ?>
<h2 class="p-4 font-bold">My Orders</h2>

<?php
$o=$conn->query("SELECT * FROM orders WHERE user_id=".$_SESSION['user']['id']);
while($r=$o->fetch_assoc()){
?>
<div class="bg-white m-3 p-3 rounded shadow">
<p class="font-bold">Order #<?=$r['id']?></p>
<p>₹<?=$r['total_amount']?></p>

<div class="flex items-center justify-between mt-3">
<div class="<?=($r['status']>=1?'text-green-600':'')?>">Placed</div>
<div class="<?=($r['status']>=2?'text-green-600':'')?>">Dispatched</div>
<div class="<?=($r['status']>=3?'text-green-600':'')?>">Delivered</div>
</div>
</div>
<?php } ?>
<?php include "common/bottom.php"; ?>