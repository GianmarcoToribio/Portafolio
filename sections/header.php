<header class="site-header" id="header">
    <div class="header-container">
        <div class="logo">
            <a href="index.php">
                <?php if (isset($config['logo_image']) && !empty($config['logo_image'])): ?>
                    <img src="<?php echo $config['logo_image']; ?>" alt="<?php echo $config['logo_text']; ?>">
                <?php else: ?>
                    <h1><?php echo $config['logo_text']; ?></h1>
                <?php endif; ?>
            </a>
        </div>
        
        <nav class="main-nav">
            <button class="mobile-menu-toggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <ul class="nav-menu">
                <li><a href="#personal" class="nav-link">Acerca de</a></li>
                <li><a href="#skills" class="nav-link">Habilidades</a></li>
                <li><a href="#experience" class="nav-link">Experiencia</a></li>
                <li><a href="#education" class="nav-link">Educación</a></li>
                <li><a href="#projects" class="nav-link">Proyectos</a></li>
                <li><a href="#contact" class="nav-link">Contacto</a></li>
            </ul>
        </nav>
    </div>
</header>