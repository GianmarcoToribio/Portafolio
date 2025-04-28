<section id="contact" class="section contact-section">
    <div class="container">
        <div class="section-header">
            <h2>Contáctame</h2>
            <p>Ponte en contacto para oportunidades o colaboraciones</p>
        </div>
        
        <div class="section-content">
            <div class="contact-container">
                <div class="contact-info">
                    <div class="contact-card">
                        <h3>Información de Contacto</h3>
                        
                        <div class="contact-details">
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <span><?php echo htmlspecialchars($config['phone']); ?></span>
                            </div>
                            
                            <div class="contact-item">
                                <?php echo generateEmailLink($config['email']['gmail'], 'gmail'); ?>
                            </div>
                            
                            <div class="contact-item">
                                <?php echo generateEmailLink($config['email']['outlook'], 'outlook'); ?>
                            </div>
                            
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Disponibilidad para trabajo remoto o lima metropolitana</span>
                            </div>
                        </div>
                        
                        <div class="social-section">
                            <h4>Conéctate conmigo</h4>
                            <?php echo generateSocialLinks($config['social_media']); ?>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form-container">
                    <form id="contact-form" class="contact-form" action="process_form.php" method="POST">
                        <div class="form-group">
                            <label for="name">Tu nombre</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Tu correo electrónico</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Asunto</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-submit">Enviar mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>