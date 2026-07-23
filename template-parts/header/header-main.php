<header class="header" data-js-header>
      <div class="header__wrapper">
        <div class="container">
            <div class="header__inner">
              <div class="header__logo logo">
              <?php if (has_custom_logo()) : ?>
                  <?php the_custom_logo(); ?>
              <?php else : ?>
                  <a
                      href="<?= esc_url(home_url('/')); ?>"
                      class="logo__text"
                  >
                      <?= esc_html(get_bloginfo('name')); ?>
                  </a>
              <?php endif; ?>
              </div>
              <div class="header__overlay" data-js-header-overlay>
                <nav class="header__menu">
					      	<?php
					      		wp_nav_menu([
    			      			'theme_location' => 'primary',
    			      			'container' => false,
    			      			'menu_class' => 'header__menu-list',
                      'fallback_cb' => false,
					      		]);
					      		?>
					      </nav>
                <div class="header__action">
              <div class="header__action-info">
                <a class="header__action-phone" href="tel:+79999999999"
                  >+7 (999) 999-99-99</a
                >
                <div class="header__action-time-work">
                  Ежедневно 9:00 - 20:00
                </div>
              </div>
              <button
                class="button"
                type="button"
                data-modal-open="order-modal"
              >
                Заказать звонок
              </button>
                </div>
              </div>

          <div class="header__mob-action visible-tablet">
           
					<? get_template_part('template-parts/components/burger-button'); ?>

          </div>
              </div>
        </div>
      </div>
    </header>