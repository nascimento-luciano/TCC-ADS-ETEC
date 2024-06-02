<?php
include 'includes/scripts.php';
include 'includes/header.php';
?>
<!-- Conteúdo da página aqui -->

<h1 style="background-color: #d2691e; color: white; padding: 10px; border-radius: 15px; text-align: center;"><b>Bolo de Chocolate</b></h1>
    <div class="w3-content" style="display: flex;">
        
        <div class="side-content" style="margin-right: 20px; margin-top: 50px;">
                <img src="images/bolo.png" alt="Imagem 1" width="300" height="250" style="margin-left: -100px; display: block; border: 5px solid #ccc; border-radius: 10px;">
                <img src="images/Star.png" alt="Imagem 2" width="200" height="50" style="margin-left: -50px; display: block;">
                <p style="margin-left: auto; display: block;"><b>DESCRIÇÃO</b></p>
                <p style="margin-left: -70px; display: block;">Bolo cremoso, rápido e fácil.</p>
        </div>

        <div>
            
            <p Style="text-align: center">Esta é uma receita deliciosa de bolo de chocolate.</p>
            <ul style="background-color: #d3d3d3; padding: 10px; border-radius: 15px; text-align: justify; margin-right: 40px;">
                <li Style="text-align: center"><b>INGREDIENTES:</b></li>
        </br>
                <ul>
                    <li>2 xícaras de açúcar</li>
                    <li>1 3/4 xícaras de farinha de trigo</li>
                    <li>3/4 xícara de cacau em pó</li>
                    <li>1 1/2 colher de chá de bicarbonato de sódio</li>
                    <li>1 colher de chá de sal</li>
                    <li>2 ovos</li>
                    <li>1 xícara de leite</li>
                    <li>1/2 xícara de óleo</li>
                    <li>2 colheres de chá de essência de baunilha</li>
                    <li>1 xícara de água quente</li>
                </ul>
        </br>
                <li Style="text-align: center"><b>MODO DE PREPARO:</b></li>
        </br>
                <ol>
                    <li>Pré-aqueça o forno a 180°C.</li>
                    <li>Em uma tigela grande, misture o açúcar, a farinha de trigo, o cacau em pó, o bicarbonato de sódio e o sal.</li>
                    <li>Adicione os ovos, o leite, o óleo e a essência de baunilha e misture bem.</li>
                    <li>Adicione a água quente e misture até obter uma massa homogênea.</li>
                    <li>Despeje a massa em uma forma untada e enfarinhada.</li>
                    <li>Asse por cerca de 30 minutos ou até que um palito inserido no centro do bolo saia limpo.</li>
                    <li>Deixe esfriar antes de servir.</li>
                </ol>
            </ul>

            <div class="comentarios" style="text-align: center; padding: 20px;">
                <h3><b>Comentários</b></h3>
                <div class="comment-box" class="comment-box" style="display: inline-block; background-color: #fff; padding: 10px; border-radius: 5px;">
                    <textarea placeholder="Escreva seu comentário..." rows="4" cols="50" style="display: block; margin-bottom: 10px;"></textarea>
                    <button style="background-color: #444; color: white; border: none; border-radius: 5px; padding: 5px 15px; font-weight: bold;">Enviar</button>
                </div>
                <!-- Área para exibir os comentários -->
                <div class="comment-section" style="margin-top: 20px;">
                    <!-- Aqui serão exibidos os comentários -->
                </div>
            </div>

        </div>

        <div class="profile-info" style="display: flex; justify-content: flex-end; align-items: center; margin-right: -150px; margin-top: -500px;">
            
            <div Style="text-align: center">
                <img src="images/perfilhomem.png" alt="Foto de Perfil" style="border-radius: 50%; width: 150px; height: 150px; margin-right: 20px;">
                <p><b>POSTADO POR: ANDRE</b></p>
                <p>10/05/2023 - 08H59</p>
                <button style="background-color: #444; color: white; border: 2px solid #444; border-radius: 10px; font-weight: bold;">Perfil</button>
            </div>
        </div>

    </div>
<?php
include 'includes/footer.php';
?> 