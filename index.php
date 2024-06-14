
<?php

if(isset($_POST['submit']))
{
    // print_r($_POST['nome']);
    // print_r($_POST['email']);
    // print_r($_POST['telefone']);
    // print_r($_POST['texto']);

    include_once('config.php');

    $nome = addslashes ($_POST['nome']);
    $email = addslashes ($_POST['email']) ;
    $telefone = addslashes ($_POST['telefone']);
    $texto = addslashes ($_POST['texto']);

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, texto)
     VALUES ('$nome', '$email', '$telefone', '$texto')") ;
      

 $para = "lexijurispro@gmail.com";
 $assunto = "Coleta de dados - Lexi & JurisPro";

$corpo = "Nome: ".$nome."\n"."E-mail:".$email."\n"."Telefone".$telefone."\n"."Assunto:".$texto;

$cabeca = "From lexijurispro@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para, $assunto, $corpo, $cabeca)){
    echo("E-mail enviado com sucesso!");
}else{
     echo("Houve um erro ao enviar o email!");
}

}

?>






<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script src="https://kit.fontawesome.com/0d4c524f48.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- GOOGLE FONTS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="menu.js" defer></script>

    <title>Lexi & JurisPro</title>
</head>

<body>
    <div class="background-color-image">
    </div>

    <header>
        <div class="interface">
            <div class="logo">
                <a href="#">
                    <img src="images/logo02.png.PNG" alt="Logo da advocacia Lexi & JurisPro">
                </a>
            </div><!--logo-->

            <nav class="menu-desktop">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#servicos">Servicos</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#advogados">Advogados</a></li>
                    <li></li>
                </ul>
            </nav>

            <div class="btn-contacto">
                <a href="#contacto">
                    <button>Contacto</button>
                </a>
            </div>
            <div class="btn-abrir-menu" id="btn-menu">
                <i class="fa-solid fa-bars"></i>
            </div>

            <div class="menu-mobile" id="menu-mobile">
                <div class="btn-fechar">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <nav>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#servicos">Servicos</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#advogados">Advogados</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                    </ul>
                </nav>
                


            </div>

            <div class="overlay-menu" id="overlay-menu"></div>

        </div><!--interface-->
    </header>

    <main>
        <section class="topo-do-site" id="home">
            <div class="interface">
                <div class="flex">
                    <div class="txt-topo-site"> 
                        <h1>NA DEFESA DOS DIREITOS, A JUSTIÇA ENCONTRA SUA VOZ<span>.</span></h1>
                        <p>Advogados são os guardiões dos direitos individuais e coletivos,
                            navegando pelo intricado sistema legal para garantir que a voz dos seus
                            clientes seja ouvida.</p>
                        <div class="btn-contacto">
                            <a href="#">
                                <button>E-mail</button>
                            </a>
                        </div>
                    </div>
                    <!-- txt-topo-site -->
                    <div class="img-topo-site">
                        <img src="images/11.PNG" alt="">
                    </div>
                    <!-- img-topo-site -->


                </div>
            </div>
        </section>

        <section class="especialidades" id="servicos">
            <div class="interface">
                <h2 class="titulo">NOSSOS <span>SERVIÇOS</span></h2>
                <div class="flex">
                    <div class="especialidades-box">
                        <i class="fa-solid fa-users"></i>
                        <h3>Direito Cívil</h3>
                        <p>Resolução de disputas civis, contratos e danos.</p>
                    </div>
                    <div class="especialidades-box">
                        <i class="fa-solid fa-person-dress"></i>
                        <h3>Direito da Familia</h3>
                        <p>Solução para questões familiares, divórcios e custódia de filhos.</p>
                    </div>
                    <div class="especialidades-box">
                        <i class="fa-solid fa-handshake"></i>
                        <h3>Direito do Consumidor</h3>
                        <p>Defesa de direitos dos Consumidores em
                            litigios comerciais.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="sobre" id="sobre">
            <div class="interface">
                <div class="flex">
                    <div class="img-sobre">
                        <img src="images/somos.WEBP" alt="">
                    </div>
                    
                    <div class="txt-sobre">
                        <h2>MUITO PRAZER, <span>SOMOS A LEXI & JURISPRO</span>

                        </h2>
                        <p>A Lexi & JurisPro é um escritório de advocacia comprometido em oferecer serviços jurídicos de
                            alta qualidade. Com uma equipe de advogados experientes e dedicados, nosso objetivo é
                            fornecer soluções eficazes para nossos clientes.</p>
                        <p>A Lexi & JurisPro baseia-se em princípios éticos sólidos. Nossos advogados estão
                            comprometidos em agir com integridade, transparência e respeito pelos direitos de nossos
                            clientes.</p>

                        <div class="btn-social">
                            <a href="#"><button><i class="fa-brands fa-instagram"></i></button></a>
                            <a href="https://www.facebook.com/profile.php?id=61558840275832&mibextid=LQQJ4d" target="_blank"><button><i class="fa-brands fa-facebook"></i></button></a>
                            <a href="#"><button><i class="fa-brands fa-whatsapp"></i></button></a>
                        </div>
        </section>
        <!-- Ssobre -->

        <section class="portfolio" id="advogados">
            <div class="interface">
                <h2 class="titulo">NOSSOS <span>ADVOGADOS</span></h2>
                <div class="flex">
                    <div class="img-port" style="background-image: url(images/advogado1.png.JPG);">
                        <div class="overlay">Dr. Rodrigo Menezes</div>
                    </div>
                    <div class="img-port" style="background-image: url(images/dra.WEBP);">
                        <div class="overlay">Dra. Isabel Ramos </div>
                    </div>
                    <div class="img-port" style="background-image: url(images/advogado7.png.JPG);">
                        <div class="overlay">Dr. Francisco Saraiva</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio -->

        <section class="formulario" id="contacto">
            <div class="interface">
                <h2 class="titulo">FALE <span>CONNOSCO</span></h2>

                <form action="index.php" method="POST">
                    <input type="text" name="nome" id="nome" placeholder="Seu nome completo:" required>
                    <input type="text" name="email" id="email" placeholder="Seu e-mail:" required>
                    <input type="number" name="telefone" id="telefone" placeholder="Seu telefone:">
                    <textarea name="texto" id="texto" placeholder="Sua mensagem" required></textarea>
                    <div class="btn-enviar"><input type="submit" name="submit" id="submit" value="Enviar"></div>
                </form>
            </div>
        </section>

    </main>




    <footer>
        <div class="interface">
            <div class="line-footer">
                <div class="flex">
                    <div class="logo-footer">
                        <img src="images/logo02.png.PNG" alt="">
                    </div>
                    <div class="btn-social">
                        <a href="#"><button><i class="fa-brands fa-instagram"></i></button></a>
                        <a href="https://www.facebook.com/profile.php?id=61558840275832&mibextid=LQQJ4d" target="_blank"><button><i class="fa-brands fa-facebook"></i></button></a>
                        <a href="#"><button><i class="fa-brands fa-whatsapp"></i></button></a>
                    </div>
                </div>
            </div>

            <div class="line-footer borda">
                <p><i class="fa-solid fa-square-envelope"></i> 
                    <a href="lexijurispro@gmail.com">lexijurispro@gmail.com</a></p>
            </div>
        </div>
    </footer>

</body>

</html>