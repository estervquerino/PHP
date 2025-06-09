<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo cadastro de employee</title>
</head>
<body>
    <h1>Formulário para novo cadastro</h1>
    <form method="post" action="">
        <label for="em_name">Nome:</label><br>
        <input type="text" id="em_name"
        name="em_name" required><br><br>

        <label>Gênero:</label><br>
        <input type="radio" id="male"
        name="gender" value="M" required>
        <label for="female">Feminino</label><br><br>

        <label for="contact_number">Número de contato:</label><br>
        <input type="text" id="contact_number"
        name="contact_number"><br><br>

        <label for="salary">Salário:</label><br>
        <input type="number" step="0.01"
        id="salary" name="salary"
        
    </form>
    
</body>
</html>