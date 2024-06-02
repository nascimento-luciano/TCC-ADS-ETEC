<?php
include 'includes/scripts.php';
include 'includes/header.php';
?>

<?php
$random_number = rand(); // Gera um número aleatório
?>

<style>
    body {
        background-image: url('images/fundocontato.png?<?php echo $random_number; ?>');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .contact-container {
        text-align: center;
        margin-top: 20px;
        padding: 20px;
    }

    .contact-header,
    .contact-list {
        background-color: #f0f0f0;
        color: #333;
        font-weight: bold;
        padding: 10px;
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s;
        width: 60%;
        margin: 0 auto;
        margin-bottom: 20px;
    }

    .contact-header::before {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 2px;
        background-color: #999;
        bottom: 0;
        left: 0;
    }

    .contact-header i {
        margin-left: 10px;
    }

    .contact-header:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .contact-list {
        list-style: none;
        /* Remover as bolinhas da lista */
        padding: 10px;
        overflow: hidden;
    }

    .contact-list li {
        margin: 10px 0;
        padding: 10px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s;
    }

    .contact-list li:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .contact-list li a {
        text-decoration: none;
        color: orange;
        /* Cor laranja permanente */
        font-weight: bold;
    }
</style>

<!-- Conteúdo da página aqui -->
<div class="w3-content contact-container">
    <div class="contact-header">CONTATO DOS PARTICIPANTES <i class="fas fa-address-book"></i></div>
    <div class="contact-list">
        <ul style="padding: 0; /* Remover o padding padrão da lista */">
            <li><a href="https://www.linkedin.com/in/ranieriv" target="_blank"><strong>Ranieri</strong></a></li>
            <li><a href="https://www.linkedin.com/in/nascimento-luciano/" target="_blank"><strong>Luciano</strong></a></li>
            <li><a href="https://www.linkedin.com/in/thales-greg%C3%B3rio-35979310a/" target="_blank"><strong>Thales</strong></a></li>
            <li><strong>Clementino</strong></li>
        </ul>
    </div>
</div>

<?php
include 'includes/footer.php';
?>