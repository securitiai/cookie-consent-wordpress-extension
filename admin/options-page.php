<div class="wrap scc">
    <h1 style="margin-bottom: 2rem;">Cookie Consent | Automating Global Compliance</h1>
    <div class="scc-header">
        <div class="scc-header__col">
            <h2>
                <a target="_blank" rel="noopener noreferrer" href="https://securiti.ai/privaci/cookie-consent-management/?utm_source=wordpress&utm_medium=referral&utm_campaign=plugin">
                    <img src="<?php echo plugin_dir_url(__DIR__) . 'admin/media/logo.png'; ?>" class="logo" width="261" alt="Cookie Consent by Securiti">
                </a>
            </h2>
        </div>
        <div class="scc-header__col tagline">
            <p><?php echo __('Global Leader in Privacy Management', 'scc'); ?></p>
        </div>
        <div class="scc-header__col">
            <a target="_blank" rel="noopener noreferrer" href="https://www.rsaconference.com/about/press-releases/securitiai-named-most-innovative-startup-at-rsa-conference-innovation-sandbox/?utm_source=wordpress&utm_medium=referral&utm_campaign=plugin">
                <img src="<?php echo plugin_dir_url(__DIR__) . 'admin/media/header-rsac.png'; ?>" width="92" alt="Cookie Consent by Securiti">
            </a>
            <a target="_blank" rel="noopener noreferrer" href="https://securiti.ai/privacy-mangement-forrester-wave-report/?utm_source=wordpress&utm_medium=referral&utm_campaign=plugin">
                <img src="<?php echo plugin_dir_url(__DIR__) . 'admin/media/forrester-header.png'; ?>" width="92" alt="Forrester Wave Report">
            </a>
        </div>
    </div>

    <div class="scc-body">
        <div class="scc-body__row">
            <div class="scc-body__col">
                <div class="scc-getting-started">
                    <h3 style="text-transform: none"><?php echo __('Getting Started with', 'scc');?> <a href="https://securiti.ai/privaci/cookie-consent-management/?utm_source=wordpress&utm_medium=referral&utm_campaign=plugin" target="_blank" rel="noopener noreferrer">Securiti</a></h3>
                    <p><?php echo __('This component of the Securiti plugin requires a freemium account.', 'scc'); ?></p>
                    <a target="_blank" rel="noopener noreferrer" href="https://securiti.ai/privaci/cookie-consent-management/?utm_source=wordpress&utm_medium=referral&utm_campaign=plugin" class="scc-btn --theme-secondary" target="_blank" rel="noopener noreferrer"><?php echo __('Sign up for Free', 'scc'); ?></a>
                </div>

                <hr>

                <div class="scc-cookie-code">
                    <p class="big"><?php echo __('Once you have', 'scc'); ?> <a href="https://app.securiti.ai/#/consent" target="_blank" rel="noopener noreferrer"><?php echo __('access to a Securiti account', 'scc'); ?></a>, <?php echo __('copy and paste your styling and cookie consent script into the box below to start display our cookie banner on your Wordpress website.', 'scc');?></p>

                    <p><?php echo __('Insert the code from Securiti here.', 'scc'); ?></p>

                    <form method="post" action="options.php">
                        <?php settings_fields('cookie-consent-code'); ?>
                        <?php do_settings_sections('cookie-consent-code'); ?>

                        <textarea name="scc_code"><?php echo sanitize_textarea_field(esc_attr(get_option('scc_code'))); ?></textarea>

                        <?php submit_button(); ?>

                    </form>
                </div>

                <div class="scc-disclaimer">
                    <h3><?php echo __('What to expect', 'scc'); ?></h3>
                    <p><?php echo __('Securiti automatically deploys the Cookie Consent script onto your site to enable visitors to provide or withdraw consent.', 'scc'); ?></p>

                    <h3><?php echo __('Disclaimer', 'scc');?></h3>
                    <p><?php echo __('Use of this plugin does not, by itself, ensure compliance with legal requirements related to cookies', 'scc');?></p>
                </div>

            </div>
            <div class="scc-body__col --sidebar">
                <a href="https://app.securiti.ai/#/consent" class="scc-btn --theme-secondary --style-block" target="_blank" rel="noopener noreferrer"><?php echo __('Access Securiti Account', 'scc'); ?></a>

                <a href="https://securiti.ai/privaci/cookie-consent-management/?utm_source=wordpress&utm_medium=referral&utm_campaign=plugin" class="scc-btn --theme-primary --style-block" target="_blank" rel="noopener noreferrer" style="margin-top: 10px;"><?php echo __('Create Securiti Account', 'scc'); ?></a>

                <hr>

                <h3><?php echo __('GET HELP', 'scc'); ?></h3>
                <p class="small"><?php echo __('Email us at', 'scc');?> <a href="mailto:support@securiti.ai">support@securiti.ai</a></p>

                <hr>

                <h3><?php echo __('How do I upgrade from the free edition', 'scc'); ?></h3>
                <p style="margin-bottom: .5rem"><?php echo __('Upgrade to a Plan 1', 'scc'); ?></p>
                <p><?php echo __('Subscribe by purchasing it on our', 'scc'); ?> <a href="https://buy.securiti.ai/?utm_source=wordpress&utm_medium=referral&utm_campaign=plugin" target="_blank" rel="noopener noreferrer"><?php echo __('pricing page', 'scc'); ?></a>. <?php echo __('Simply follow the checkout process, enter your payment details to upgrade your account', 'scc'); ?></p>

                <hr>

                <h3><?php echo __('About', 'scc'); ?></h3>
                <p><?php echo __('Securiti provides a comprehensive privacy compliance platform for global privacy law including GDPR, CCPA, and ePrivacy and is powered by an award-winning platform. Securiti was named a leader in the Forrester Wave 2020 and Most Innovative Startup in RSA 2020.' ,'scc'); ?></p>
            </div>
        </div>
    </div>
</div>