<?php //Template name: Home ?>
<?php get_header(); ?>  
<main>
    <div class="conter_pagina_inicial">
        <div class="reconhecimento_da_pagina">
            <h1> Bem-vindos à ECOUFF </h1>
            <p>A plataforma que coloca a sustentabilidade em primeiro lugar.</p>
        </div>
        <div class="quiz">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfizQF1wGFOt1vsAh87istgvne9P9hDE1_cefo8GbQ_zkym9A/viewform?usp=sf_link" target="_blank"><img src="<?php echo IMAGE_DIR . '/quiz_logo-removebg-preview.png' ?>" alt="Quiz" title="Clique aqui para ir ao nosso Quiz!"></a>
            <p>Preparamos um quiz educativo especialmente para você! Aproveite essa oportunidade para testar o seu nível de conhecimento e mergulhe em nossos materiais educativos disponíveis <a href="http://localhost:10046/conhecimentos/">aqui</a>. Fornecemos uma variedade de recursos, incluindo artigos informativos, infográficos e vídeos, que abordam temas relevantes sobre o meio ambiente e o descarte consciente. <br><br> Para acessar o quiz, é simples! Basta apenas clicar na imagem "Quiz" em nosso site e você será redirecionado para a página do quiz. Esteja preparado para responder perguntas estimulantes e aprender ainda mais sobre como fazer a diferença em prol do nosso planeta.</p>
        </div>
        <div class="sobre_nos">
            <img id="scrollHere" src="<?php echo IMAGE_DIR . '/uff_brasao-removebg-preview.png' ?>" alt="UFF_logo" title="Somos da UFF SI turma de Computação e meio ambiente">
            <div class="texto_sobre_nos">
                
                <h1>Conheça-nos</h1>
                <p>Somos um projeto de extensão da Universidade Federal Fluminense do curso de Sistemas de Informação, para a disciplina de Computação e Meio Ambiente. Nosso objetivo é fornecer conteúdos educativos voltados ao descarte consciente, além de explicações sobre os problemas ambientais ocasionados pelo descarte inadequado de resíduos. Acreditamos na importância de conscientizar a sociedade sobre a correta gestão dos resíduos, visando a preservação e sustentabilidade do meio ambiente. Por meio de artigos, vídeos e outros recursos, buscamos informar e orientar sobre as práticas corretas de descarte, incentivando a redução, reutilização e reciclagem de materiais.</p>
            </div>   
        </div>
        <div class="formulario">
            <div id="scrollHere2"></div>
            <div id="texto_formulario" >
                <h1>Entre em contato</h1>
                <p>Entre em contato para reporta algum erro no site; informações incompletas ou falsas.</p>
            </div>
            <div class="caixa_de_formulario">
                <?php echo do_shortcode('[contact-form-7 id="32" title="Formulario"]');?>
            </div>
        </div>
    </div>
</main>  







<?php get_footer(); ?>  