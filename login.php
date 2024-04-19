<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça login e divirta-se</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <form action="controller.php" method="post">
        <h2>Faça login</h2>
        <input type="text" class="inputStyle" name="username" placeholder="Nome de usuário">
        <input type="text" class="inputStyle" name="password" placeholder="Senha de usuário">
        <button type="submit">Entrar</button>
    </form>
    <?php if(isset($_GET['error'])): ?> 
        <div>Invalid username or password. Please try again.</div>   
    <?php endif; ?> 
</body>
</html>