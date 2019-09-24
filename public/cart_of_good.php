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

	$name_good = $cart['good_name'];
    $id_good = $cart['id_good'];
    $price_good = $cart['good_price'];
     $number_good = $_POST['number']; 
    $user_good = $_SESSION['username'];
	
	$insert_query = sprintf("INSERT INTO basket (id_good, name_good, price_good, number_good, user_good ) VALUES (\"%s\" , \"%s\", \"%s\") ;", $id_good, $name_good, $price_good, $number_good, $user_good );
    
mysqli_query(myDbConnect(), $insert_query);
    
    $query_auth = sprintf('SELECT * FROM basket WHERE id_good = "%s" LIMIT 1;', $id_good);
    $mysql_auth = mysqli_query(myDbConnect(), $query_auth);
    $basket= mysqli_fetch_assoc ($mysql_auth);
    }}
?>
        
    <?php if ($basket): ?> 
       
        Вы собираетесь купить:    <?=$basket['name_good'];?>
        В колличестве: <?=$basket['number_good'];?>
        На сумму: <?=(int) $basket['number_good'] * (int) $basket['price_good'];?>
        <?php endif; ?>  
  

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" value="<?=$cart['id_good'];?>" name="feedback">
	Добавить отзыв
</button>
  </div>
