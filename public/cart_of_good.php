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
         <!-- Запись в таблицу Корзина новой позиции -->
        <?php
if (isset($_POST['buy'])){
    if ($cart['good_name'] && $cart['good_price'] && $cart['id_good'] && $_POST['number'] ) {

	$name_good = $cart['good_name'];
    $id_good = $cart['id_good'];
    $price_good = $cart['good_price'];
     $number_good = $_POST['number']; 
    $user_good = $_SESSION['username'];
	
	$insert_query = sprintf("INSERT INTO basket (id_good, name_good, price_good, number_good, user_good ) VALUES (\"%s\" , \"%s\", \"%s\") ;", $id_good, $name_good, $price_good, $number_good, $user_good );
    mysqli_query(myDbConnect(), $insert_query);
   
   // Вывод из Корзины всех позиций
  
$query_basket = sprintf('SELECT * FROM basket' );
  
   $basket_bd =  mysqli_query(myDbConnect(), $query_basket);
        
    $basket= mysqli_fetch_assoc ($mysql_auth);
    }}
?>
        
    <?php if ($basket): ?> 
      <?php $total = 0;?>
    
     <?php foreach ($basket as $good):  ?>  
        Вы собираетесь купить:    <?=$good['name_good'];?>
        В колличестве: <?=$good['number_good'];?>
        На сумму: <?= $cost = (int) $good['number_good'] * (int) $good['price_good'];?>
        
            <?php $total +=$cost;?>
             
        <form action='../engine/delete_good.php' method='post'>
         <p>Удалить товар</p>
         <input type="hiden" name="delet_good" value="<?=$good['id_good'];?>">
          <input type="submit" name="delet" value="Удалить">

</form>
        
        <?php endforeach; ?>  
        
           Итого: <?=$total;?> рублей.
           
<form action='../engine/delete_good.php' method='post'>
    <p>Удалить всё</p>
    <input type="hiden" name="delet_all" value="1">
    <input type="submit" name="delet" value="Удалить">

</form>
        <?php endif; ?>  
  

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" value="<?=$cart['id_good'];?>" name="feedback">
	Добавить отзыв
</button>
  </div>

  
  
