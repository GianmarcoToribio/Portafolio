<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <h3><?php echo $config['logo_text']; ?></h3>
            </div>
            
            <div class="footer-navigation">
                <ul class="footer-menu">
                    <li><a href="#personal">Acerca de</a></li>
                    <li><a href="#skills">Habilidades</a></li>
                    <li><a href="#experience">Experiencia</a></li>
                    <li><a href="#education">Educación</a></li>
                    <li><a href="#projects">Proyectos</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </div>
            
            <div class="footer-social">
                <?php echo generateSocialLinks($config['social_media']); ?>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php echo $config['name']; ?>. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>