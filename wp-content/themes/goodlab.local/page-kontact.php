<?php get_header(); ?>

<div class="preloader">
    <div class="loader"></div>
</div>

<main>
    <section>
        <div class="mainSection">
            <div class="center">
                <div class="titleMain">
                    <p>Kontact do nas</p>
                </div>
                <div class="contentWrap">
                    <div class="textLeftWrap">
                        <div class="quote">
                            <p><?php the_field("quotation") ?> </p>
                        </div>
                        <div class="contact">
                            <a href="tel:500600700">500 600 700</a>
                            <a href="mailto:info@goodlab.pl">info@goodlab.pl</a>
                        </div>
                    </div>
                    <div class="formMiddleWrap">
                        <div class="commonForFormMap">
                            <div class="eachForm">
                                <form method="post" id="form" action="<?php esc_url(admin_url("admin-ajax.php"))?>">
                                    <input type="text" name="name_surname" id="name_f" placeholder="Imię i Nazwisko">
                                    <fieldset>
                                        <legend>E-mail</legend>
                                        <input type="email" name="email" id="email_f" placeholder="Email">
                                    </fieldset>
                                    <textarea name="comment" id="comment_f" placeholder="Opis lub pytanie"></textarea>
                                    <input type="submit" name="submit" value="Wyślij wiadomość">
                                </form>
                            </div>
                            <div class="thankyouWrap">
                                <p>Thank you for your message :)</p>
                            </div>
                            <div class="mapWrap">
                                <?php
                                $location = get_field('map');
                                if( !empty($location) ):
                                    ?>
                                    <div class="acf-map">
                                        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="sponsorsWrap">
	                    <?php

	                    // check if the repeater field has rows of data
	                    if( have_rows('sponsors') ):

		                    // loop through the rows of data
		                    while ( have_rows('sponsors') ) : the_row();
			                    ?>
                                <div class="sponsorsEach">
                                    <a href="#"><img src="<?php the_sub_field("sponsor") ?>" alt="sponsors"></a>
                                </div>
		                    <?php
		                    endwhile;
	                    endif;
	                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>



