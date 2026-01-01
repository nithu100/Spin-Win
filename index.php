<?php include "common/header.php"; ?>
<div class="p-4 grid grid-cols-2 gap-3">
<?php
$p=$conn->query("SELECT * FROM products LIMIT 6");
while($r=$p->fetch_assoc()){
?>
<div class="bg-white p-2 rounded shadow">
<img src="images/<?=$r['image']?>" class="h-24 mx-auto">
<h3><?=$r['name']?></h3>
<p class="text-indigo-600 font-bold">₹<?=$r['price']?></p>
<a href="product_detail.php?id=<?=$r['id']?>" class="text-sm text-blue-500">View</a>
</div>
<?php } ?>
</div>
<?php include "common/bottom.php"; ?>