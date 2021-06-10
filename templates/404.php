<header>
    <h1><?php _e('Sorry, but the page you were trying to view does not exist.', 'govuk-theme') ?></h1>
</header>
<div class="row">
    <div class="rich-text">
            <p><?php _e('It looks like this was the result of either:', 'govuk-theme') ?></p>
            <ul>
                <li><?php _e('a mistyped address', 'govuk-theme') ?></li>
                <li><?php _e('an out-of-date link', 'govuk-theme') ?></li>
            </ul>
            <p><a href="<?php echo site_url() ?>"><?php _e('Go back to the homepage', 'govuk-theme') ?></a></p>
    </div>
</div>
