<!DOCTYPE HTML>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon" />
    <!-- Fonte del Proyecto Raleway -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" />
    <!-- Referencia de la hoja de estilo de Css -->
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/responsive.css" />
    <title>Mi Portafolio</title>
</head>
<html>

<body>
    <section class="formcontato" id="contacto">
        <div class="formcontato__contacto">
            <div class="formcontato--esquerda">
                <img class="formcontato__img" src="../assets/contact_image.png" />
            </div>
            <div class="formcontato__text">
                <h2 class="formcontato__title">Contacto</h2>
                <h3 class="formcontato__subtext">¿Quieres contactarme?</h3>
                <h3 class="formcontato__subtext">
                    Complete el siguiente formulario y me pondré en contacto con usted
                    lo antes posible.
                </h3>
                <form action="./mail.php" method="post" class="formcontato__form" name="form" id="formcontato">
                    <input class="formcontato__input" type="text" name="name" id="nombre" placeholder="Nombre" />
                    <input class="formcontato__input" type="email" name="email" id="email" placeholder="E-mail" />
                    <input class="formcontato__input" type="text" name="asunto" id="asunto" placeholder="Assunto" />
                    <textarea class="formcontato__textarea" rows="5" cols="40" id="mensagem" name="mensaje" placeholder="Mensaje"></textarea>
                    <button type="submit" class="formcontato__botao">
                        Enviar mensaje
                    </button>
                </form>
            </div>
        </div>
    </section>

</body>

</html>
<!-- 
    # ⚠⚠⚠ LEA CON CUIDADO ⚠⚠⚠

// ARCHIVO NECESARIO PARA HAMBIENTE DE PRUEBAS - NO ELIMINAR.

// © ANGELUS INFERNUS

# ⚠⚠⚠ DO NOT DELETE ⚠⚠⚠
-->