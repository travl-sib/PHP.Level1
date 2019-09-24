<?php

if ($_SESSION['isAuth']): ?>

<h5 class="m-3 alert alert-success">Вы авторезировались <?=$_SESSION['username']?> </h5>


<?php else : ?>

<h5 class="m-3 alert alert-success">Доступа нет, вщйдите: <a href="../login.php"></a> </h5>
<?php die; ?>
<?php endif; ?>