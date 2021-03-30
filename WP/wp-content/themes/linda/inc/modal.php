<div id="modalSample" class="modalBox">
    <div class="modal-container">
        <div class="wrap">
        <h3>Baixe agora gratis!</h3>
            <div class="box-btns">
                <?php if(get_field('url_stores', 'option')): $i = 0; ?>
                <?php while(has_sub_field('url_stores', 'option')): $i++; ?>

                <a href="<?php the_sub_field('google_play'); ?>"><img alt="" src="<?php echo PW_THEME_URL; ?>./assets/img/gplay.png"></a>
                <a href="<?php the_sub_field('app_store'); ?>"><img alt="" src="<?php echo PW_THEME_URL; ?>./assets/img/apstore.png"></a>

                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>
    <div id="inv-modal" class="inv-modal modalcta"></div>
</div>