<?php
/**
* Footer Template
*
* @package _bourbon 2.0.0
*/ ?>
</main>
<footer id="site-footer" role="contentinfo">
<?php if (is_active_sidebar('widget-footer')): ?>
<aside id="footer-widget" role="complementary">
<div class="container"><div class="wrap">
<?php dynamic_sidebar('widget-footer'); ?>
</div>
</div>
</aside>
<?php endif; ?>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
