<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package alamaree
 */

get_header(); ?>

                <div id="primary" class="content-area">
                    <section class="grid"><section class="column-1-1">
                            <h2 class="tile-title">Une escale gourmande au coeur de Rungis</h2>
                            <p>Vivre une expérience gastronomique dans un cadre raffiné , mêler l'utile à l'agréable autour d'un repas d'affaires convivial , 
                                faire une parenthèse gourmande dans votre journée de travail ou bien simplement sentir le poul du ventre de Paris autour de petit déjeuner iodée...</p>
                            <p>.... bienvenue à la maree, Restaurant & brasserie au coeur du plus grand marché de produit frais au monde</p>
                        </section></section>
                    <section class="grid"><section class="column-1-3">
                            <p>Spicy jalapeno bacon ipsum dolor amet pork belly shank biltong, short ribs turkey strip steak brisket short loin shankle. 
                                Ball tip t-bone turkey porchetta beef ribs pork belly, bacon bresaola rump pancetta. Ribeye ham hamburger fatback. 
                                Pork loin shankle landjaeger t-bone chuck meatball ham hock pig. Sirloin jowl shank tenderloin doner shankle, 
                                landjaeger pork chop tail fatback filet mignon. Tongue kielbasa brisket jowl.</p>
                        </section><section class="column-2-3">
                            <p>Spicy jalapeno bacon ipsum dolor amet pork belly shank biltong, short ribs turkey strip steak brisket short loin shankle. 
                                Ball tip t-bone turkey porchetta beef ribs pork belly, bacon bresaola rump pancetta. Ribeye ham hamburger fatback. 
                                Pork loin shankle landjaeger t-bone chuck meatball ham hock pig. Sirloin jowl shank tenderloin doner shankle, 
                                landjaeger pork chop tail fatback filet mignon. Tongue kielbasa brisket jowl.</p>
                        </section></section>
                    <section class="grid"><section class="column-1-3">
                            <h2 class="tile-title">Bienvenue à la Marée</h2>
                            <p>Vivre une expérience gastronomique dans un cadre raffiné , mêler l'utile à l'agréable autour d'un repas d'affaires convivial , 
                                faire une parenthèse gourmande dans votre journée de travail ou bien simplement sentir le poul du ventre de Paris autour de petit déjeuner iodée...</p>
                            <p>.... bienvenue à la maree, Restaurant & brasserie au coeur du plus grand marché de produit frais au monde</p>
                        </section><section class="column-1-3">
                            <h2 class="tile-title">Suggestions du midi</h2>
                            <p>Spicy jalapeno bacon ipsum dolor amet pork belly shank biltong, short ribs turkey strip steak brisket short loin shankle. 
                                Ball tip t-bone turkey porchetta beef ribs pork belly, bacon bresaola rump pancetta. Ribeye ham hamburger fatback. 
                                Pork loin shankle landjaeger t-bone chuck meatball ham hock pig. Sirloin jowl shank tenderloin doner shankle, 
                                landjaeger pork chop tail fatback filet mignon. Tongue kielbasa brisket jowl.</p>
                        </section><section class="column-1-3">
                            <h2 class="tile-title">Suggestions du soir</h2>
                            <p>Spicy jalapeno bacon ipsum dolor amet pork belly shank biltong, short ribs turkey strip steak brisket short loin shankle. 
                                Ball tip t-bone turkey porchetta beef ribs pork belly, bacon bresaola rump pancetta. Ribeye ham hamburger fatback. 
                                Pork loin shankle landjaeger t-bone chuck meatball ham hock pig. Sirloin jowl shank tenderloin doner shankle, 
                                landjaeger pork chop tail fatback filet mignon. Tongue kielbasa brisket jowl.</p>
                            <p>Spicy jalapeno bacon ipsum dolor amet pork belly shank biltong, short ribs turkey strip steak brisket short loin shankle. 
                                Ball tip t-bone turkey porchetta beef ribs pork belly, bacon bresaola rump pancetta. Ribeye ham hamburger fatback. 
                                Pork loin shankle landjaeger t-bone chuck meatball ham hock pig. Sirloin jowl shank tenderloin doner shankle, 
                                landjaeger pork chop tail fatback filet mignon. Tongue kielbasa brisket jowl.</p>
                            <p>Spicy jalapeno bacon ipsum dolor amet pork belly shank biltong, short ribs turkey strip steak brisket short loin shankle. 
                                Ball tip t-bone turkey porchetta beef ribs pork belly, bacon bresaola rump pancetta. Ribeye ham hamburger fatback. 
                                Pork loin shankle landjaeger t-bone chuck meatball ham hock pig. Sirloin jowl shank tenderloin doner shankle, 
                                landjaeger pork chop tail fatback filet mignon. Tongue kielbasa brisket jowl.</p>
                        </section></section>
                        <main id="main" class="site-main">


                        <?php
                        if ( have_posts() ) :

                                if ( is_home() && ! is_front_page() ) : ?>
                                        <header>
                                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                        </header>

                                <?php
                                endif;

                                /* Start the Loop */
                                while ( have_posts() ) : the_post();

                                        /*
                                         * Include the Post-Format-specific template for the content.
                                         * If you want to override this in a child theme, then include a file
                                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                         */
                                        get_template_part( 'template-parts/content', get_post_format() );

                                endwhile;

                                the_posts_navigation();

                        else :

                                get_template_part( 'template-parts/content', 'none' );

                        endif; ?>

                        </main><!-- #main -->
                </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
