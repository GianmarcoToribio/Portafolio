<section id="personal" class="section personal-section">
    <div class="container">
        <div class="section-content">
            <div class="personal-info">
                <div class="profile-image">
                    <img src="<?php echo $config['profile_image']; ?>" alt="<?php echo $config['name']; ?>">
                </div>
                
                <div class="personal-details">
                    <h1><?php echo $config['name']; ?></h1>
                    <h2><?php echo $config['title']; ?></h2>
                    
                    <div class="bio">
                        <p><?php echo $config['about_me']; ?></p>
                    </div>
                    
                    <div class="action-buttons">
                        <a href="<?php echo $config['resume_file']; ?>" class="btn btn-primary" download>
                            <i class="fas fa-download"></i> Descargar Resumen
                        </a>
                        <a href="#contact" class="btn btn-secondary">
                            <i class="fas fa-envelope"></i> Mis contactos
                        </a>
                    </div>
                    
                    <?php echo generateSocialLinks($config['social_media']); ?>
                </div>
            </div>
        </div>
    </div>
</section>