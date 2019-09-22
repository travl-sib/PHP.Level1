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
    
      <!-- Проверка на наличие товара -->
      
       <?php if ($cart['is_active']>0): ?>
       
          <p>Наименование: <?=$cart['good_name'];?> </p>
          <p>Описание: <?=$cart['good_description'];?> </p>   
          <p>Цена: <?=$cart['good_price'];?> </p>
          <img src="public/img/<?=$cart['id_good'];?>.jpg" alt="good">
        <?php endif; ?>
    </div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" value="<?=$cart['id_good'];?>" name="feedback">
	Добавить отзыв
</button>

</div>