        <footer>
            <p>This is my footer.</p>
            <?php wp_nav_menu(array(
                'theme_location' => 'secondary'
            )); ?>
        </footer>

        <!--Prints scripts or data specified in functions.php-->
        <?php wp_footer(); ?>

    </body>
</html>