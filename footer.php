<footer>
    <div class="footer-content">
        <p>&copy; <?php echo date('Y'); ?> PureFaithTV. All rights reserved.</p>
        <nav class="footer-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'container' => 'nav',
                'container_class' => 'footer-nav',
            ));
            ?>
        </nav>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
