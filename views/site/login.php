
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
   ?>
   <form method="post" class="autorisation_form">
        <h2>АВТОРИЗАЦИЯ</h2>
       <label>ЛОГИН &nbsp&nbsp<input type="text" name="login" class="login_auth"></label><br>
       <label>ПАРОЛЬ <input type="password" name="password" class="psw_auth"></label><br>
       <button>ВОЙТИ</button>
   </form>
<?php endif;