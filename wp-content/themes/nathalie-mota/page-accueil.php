<?php

/**
 * Template Name: Page d'Accueil
 */
get_header();
?>

<main id="primary" class="site-main">

    <!-- Chargement du hero -->

    <div class="hero-area">
        <h1 class="title-hero">Photographe Event</h1>
        <img src="http://localhost:8888/nathalie-mota/wp-content/uploads/2024/05/nathalie-11-1-scaled.webp" alt="image header">
    </div>
         <div class="post-photo">
         <form class='filter-form' method="get">
    <div class="filter-container">
        <div class="filter-1">
            <select class="filter-categorie select2" name="categorie">
                <option value="">Catégorie</option>
                <?php
                // Récupérer les catégories WordPress
                $categories = get_terms('categorie', array('hide_empty' => false));
                foreach ($categories as $category) {
                    echo '<option value="' . esc_attr($category->term_id) . '">' . esc_html($category->name) . '</option>';
                }
                ?>
            </select>
        </div>

        <div class="filter-2">
            <select class="filter-formats select2" name="formats">
                <option value="">Formats</option>
                <?php
                // Récupérer les termes de la taxonomie "Formats"
                $formats = get_terms('formats', array('hide_empty' => false));
                foreach ($formats as $format) {
                    echo '<option value="' . esc_attr($format->term_id) . '">' . esc_html($format->name) . '</option>';
                }
                ?>
            </select>
        </div>

        <div class="filter-3">
            <select class="filter-order select2" name="order">
                <option value="">Trier par</option>
                <option value="desc" <?php if ($order === "desc") echo 'selected'; ?>>A partir des plus récentes</option>
                <option value="asc" <?php if ($order === "asc") echo 'selected'; ?>>A partir des plus anciennes</option>
            </select>
        </div>
    </div>
</form>


        <section class="publication">
            <div class="photo-grid">
                <?php
                $args = array(
                    'post_type' => 'photo',
                    'posts_per_page' => 8,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                ?>

                        <div class="photo-item">
                            <h3 class="title-photo"><?php the_title(); ?></h3>
                            <?php
                            $categories = get_the_terms(get_the_ID(), 'categorie');
                            $category_name = !empty($categories) ? esc_html($categories[0]->name) : '';
                            if (!empty($category_name)) {
                                echo '<h4 class="categorie-photo">' . $category_name . '</h4>';
                            }
                            ?>
                            <?php the_post_thumbnail('large'); // Affiche l'image à la une 
                            ?>
                            <a href="<?php the_permalink(); ?>" class="detail-photo-link">
                                <span class="detail-photo"></span>
                            </a>
                            <form>
                                <input type="hidden" name="postid" class="postid" value="<?php the_id(); ?>">
                                <a href="<?php the_post_thumbnail_url('full'); ?>" class="openLightbox" title="Afficher la photo en plein écran" data-fancybox="gallery" data-caption="<?php echo esc_attr(get_field('reference')) . (!empty($category_name) ? ' - ' . $category_name : ''); ?>" data-postid="<?php echo get_the_id(); ?>" data-arrow="true">
                                </a>
                            </form>
                        </div>


                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo 'Aucune photo trouvée.';
                endif;
                ?>
            </div>
        </section>
        <div class="button">
            <button id="load-more" data-page="1">Charger plus</button> <!-- Bouton Charger plus -->
        </div>
    </div>

</main><!-- #main -->

<?php
the_content();
get_sidebar();
get_footer();
?>