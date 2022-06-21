
<?php require_once './views/header.php'; ?>
<?php require_once './views/nav.php'; ?>
 <div class="container">
 <h1>New User</h1>
 </div>
 <main>
    <div class="container">
        <form action="<?= constant('URL');?>newUser/registerUser" method="POST">

        <div class="container input">
            <label for="name">Enter your name</label>
            <input type="text" name="name" id="name" placeholder="Ejem: Juan" required>
        </div>
    
        <div class="container input">
            <label for="id">Enter your ID</label>
            <input type="text" name="id" id="id" placeholder="12354" required>
        </div>
        
        <div class="container input">
            <label for="age">Enter your age</label>
            <input type="number" name="age" id="age" placeholder="10" minlength="10" maxlength='70' required>
        </div>
        <button type="submit" name="btn" class='btn'>Registrar</button>
    </form>
    </div>
 </main>
<?php require_once './views/footer.php'; ?>
