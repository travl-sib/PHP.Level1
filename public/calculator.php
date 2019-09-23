<div class="ml-3">
    <form action="" method="get" >
	<div class="form-group">
		<label>Первое число</label>
		<input type="number" name="number1" class="mb-3 form-control" placeholder="<?=$number1?>">

                <br>
        <label>второе число</label>
        <input type="number" name="number2" class="mb-3 form-control" placeholder="<?=$number2?>">

        <label>Операция</label>
        <select name="operation" class="mb-3 form-control" placeholder="<?=$operation?>">
            <option value="1" <?php if ($operation == 1 ) echo 'selected'; ?>>Сложение</option>
            <option value="2" <?php if ($operation == 2) echo 'selected'; ?>>Вычитание</option>
            <option value="3" <?php if ($operation == 3) echo 'selected'?>>Умножение</option>
            <option value="4" <?php if ($operation == 4) echo 'selected';?>>Деление</option>
        </select>

        <button type="submit" class=" btn btn-primary">Submit</button>
        
        <button type="submit" name="operation" value="1" class=" btn btn-primary">Сложение </button>
        <button type="submit" name="operation" value="2" class=" btn btn-primary">Вычитание </button>
        <button type="submit" name="operation" value="3" class=" btn btn-primary">Умножение </button>
        <button type="submit" name="operation" value="4" class=" btn btn-primary">Деление </button>
        <br><br>
        <p> Результат <?= $result;?> </p>
        
 
    </form>

</div>