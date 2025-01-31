<section class="login">
    <h2>Login</h2><br>
    <form action="?controller=Profesor&action=login" method="POST">
        <label for="email">email: </label>
        <input type="text" name="email" id="email">
        <?php if(isset($_SESSION['profesor']) && $_SESSION['profesor'] == false):?>
            <p style="color: red;">No existe ese email</p>
        <?php endif;?>
        <input type="submit" value="LOGIN">
    </form>
</section>