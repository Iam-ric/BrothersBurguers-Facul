<?php include_once("./partials/verificaLogin.php") ?>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Loanday Template">
        <meta name="keywords" content="Loanday, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Brothers | Fornecedores</title>
        <?php include_once("./partials/styles.php") ?>
    </head>
    <body>
        <?php include_once("./partials/header_mobile.php") ?>
        <?php include_once("./partials/header.php") ?>
        <div class="container">
			<h2>Fornecedores</h2>
			<div class="row">
				<div class="col-md-12">
					 <div class="table-responsive">
                     <div style="text-align: center; font-size: 20px; margin-top:100px; margin-bottom: 200px">
                        <?php 
                            $link = "./xml/fornecedores.xml"; 
                            $xml = simplexml_load_file($link) -> fornecedores;

                            foreach($xml -> fornecedor as $fornecedor){ 
                                echo "<strong>Nome:</strong> ".utf8_decode($fornecedor -> nome)."<br />"; 
                                echo "<strong>Telefone:</strong> ".utf8_decode($fornecedor -> telefone1)."<br />";
                                echo "<strong>Telefone:</strong> ".utf8_decode($fornecedor -> telefone2)."<br />";
                                echo "<strong>E-mail:</strong> ".utf8_decode($fornecedor -> email1)."<br />";
                                echo "<strong>E-mail:</strong> ".utf8_decode($fornecedor -> email2)."<br />";
                                echo "<br />"; 
                            } 
                        ?>
                        </div>
					 </div>
				</div>
			</div>
		</div>
        <?php include_once("./partials/footer.php") ?>
        <?php include_once("./partials/search.php") ?>
        <?php include_once("./partials/scripts.php") ?>
    </body>
</html>