<header class="header" data-js-header>
      <div class="header__body">
        <div class="header__body-inner container">
          <div class="header__logo">
        		<?php
        		if (has_custom_logo()) {
            	the_custom_logo();
        		} else {
            bloginfo('name');
        		}
        		?>
    </div>
          <!-- <a
            class="header__action-phone header__action-phone--logo"
            href="tel:+79255638484"
            >+7 (925) 563-84-84</a
          > -->

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
    </header>