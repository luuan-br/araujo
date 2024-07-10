<?php
    $rows = get_field('lawyers');

    if (!function_exists('criarSigla2')) {
        function criarSigla2($nomeCompleto) {
            // Divide o nome completo em partes
            $nomes = explode(' ', $nomeCompleto);
            
            // Pega a primeira letra do primeiro nome
            $primeiraInicial = substr($nomes[0], 0, 1);
            
            // Pega a primeira letra do último nome
            $ultimaInicial = substr($nomes[count($nomes) - 1], 0, 1);
            
            // Junta as iniciais e retorna a sigla
            $sigla = strtoupper($primeiraInicial . $ultimaInicial);
            return $sigla;
        }
    }
?>

<?php if(!empty($rows)): ?>
<div class="lawyers">
    <?php foreach($rows as $row): ?>
        <a class="lawyer" href="<?= get_the_permalink($row) ?>">
            <div class="lawyer__icon">
                <?php if(( function_exists('has_post_thumbnail') ) && ( has_post_thumbnail($row))): ?>
                    <?php 
                        $post_thumbnail_id = get_post_thumbnail_id($row);
                        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
                    ?>
                    <?php if(!empty($post_thumbnail_url)): ?>
                        <img class="profile img-fluid" src="<?= $post_thumbnail_url; ?>" alt="<?= the_title($row); ?>" />
                    <?php  endif; ?>
                <?php else: ?>
                    <?php $name= get_the_title($row); ?>
                    <div class="sigla">
                        <?= criarSigla2($name); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="lawyer__content">
                <div class="name"><?= get_the_title($row) ?></div>
            </div>
        </a>
    <?php endforeach; ?>
</div>
<?php endif; ?>