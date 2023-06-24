<?php //Template name: conhecimento-page  ?>
<?php get_header(); ?>
<main>
    <div class="conter_conhecimento_page">
        <div class="postagens">
            <?php 
                $campo_dos_posts = acf_get_fields(25);
                $counter = 1;
                for ($i=0; $i <= count($campo_dos_posts); $i++){ 
                    if(($i % 4 == 0) && ($i > 0)){
                        $texto_do_post = get_field('texto-do-post-' .$counter);
                        $titulo_do_post = get_field('titulo-do-post-'. $counter);
                        $img = get_field('imagem-do-post-'.$counter);
                        $link_do_post = get_field('link-do-post-' . $counter);
                        $size = 'full';
                        
                        ?>
                        <div class="conter_informacao_da_postagem">
                            <div class="post" id="<?=$counter?>">
                                <h1 class="titulo_do_post"><?php echo $titulo_do_post; ?></h1>
                                <?php echo wp_get_attachment_image( $img, $size ); ?>
                                <div class="descricao_link_post">
                                    <p><span><?php echo $texto_do_post; ?></span></p>
                                    <a href="<?php echo $link_do_post; ?>" target="_blank">VEJA AQUI</a>
                                </div>
                            </div>
                        </div>
                        <?php 
                        $counter++;
                    }
                }
            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>