<div class="ml-3">
  
    <!-- Список товаров -->
   
    <form method="get" >
	<div class="form-group">
		
        <label>Список товаров:</label>
        <select name="search" class="mb-3 form-control" >
           <?php foreach ($goods as $good):?>
            <option value="<?=$good['id_good'];?>"><?=$good['good_name'];?></option>
           
           <?php endforeach; ?>
        </select>
        <br> <br>

       

        <button type="submit" class=" btn btn-primary">Submit</button>
        <button type="reset" class=" btn btn-primary">Reset</button>

    </form>
    
    <!-- Карточка товара -->
    
    
    
    <div class="cart-of-good">
    
          
       <?php if ($cart['is_active']>0): ?>
       
          <p>Наименование: <?=$cart['good_name'];?> </p>
          <p>Описание: <?=$cart['good_description'];?> </p>   
          <p>Цена: <?=$cart['good_price'];?> </p>
          <img src="public/img/<?=$cart['id_good'];?>.jpg" alt="good">
          
          <form method='post'>
          <input type="number" name="number"  placeholder="Колличество" value='1'>
<input type="submit" name="buy" value="Купить">

</form>
        <?php endif; ?>
        <?php
if (isset($_POST['buy'])){
    if ($cart['good_name'] && $cart['good_price'] && $cart['id_good'] && $_POST['number'] ) {

	$good_name = $cart['good_name'];
    $id_good = $cart['id_good'];
    $price = $cart['good_price'];
     $number_good = $_POST['number']; 
    $id_user = $_SESSION['id_user'];
	
	$insert_basket = sprintf("INSERT INTO basket (id_good,  price, amount, id_user ) VALUES (\"%s\" ,  \"%s\",\"%s\",\"%s\") ;", $id_good, $price, $number_good, $id_user );
   
    mysqli_query(myDbConnect(), $insert_basket);
        
        // Вывод из Корзины всех позиций
    
    $query_basket = 'SELECT * FROM basket;';
    $basket_bd = mysqli_query(myDbConnect(), $query_basket);
    $basket=[];
    while ($row = mysqli_fetch_assoc ($basket_bd)) {
	$basket[] = $row;
    }}}
?>
     
    <?php if ($basket): ?> 
       <?php $total = 0;?>
      <?php foreach ($basket as $good):  ?>
       
        Вы собираетесь купить:    <?= $good['id_good']; ?>
        В колличестве: <?= $good['amount'];?>
        На сумму: <?=$cost= (int) $good['amount'] * (int) $good['price'];?>
        
        
     <?php $total +=$cost;?>
     
     <!-- Удаление товара -->
      <form action='../engine/delete_good.php' method='post'>
         <p>Удалить товар</p>
         <input type="hiden" name="delet_good" value="<?=$good['id_good'];?>">
          <input type="submit" name="delet" value="Удалить">

</form>
        
        <?php endforeach; ?>  
        <?php endif; ?>  
           Итого: <?=$total;?> рублей.

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" value="<?=$cart['id_good'];?>" name="feedback">
	Добавить отзыв
</button>
  </div>
