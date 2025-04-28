<section id="experience" class="section experience-section">
    <div class="container">
        <div class="section-header">
            <h2>Experiencia Profesional</h2>
            <p>Mi trayectoria en el mundo profesional.</p>
        </div>
        
        <div class="section-content">
            <div class="timeline">
                <?php foreach ($experiences as $index => $exp): ?>
                    <div class="timeline-item <?php echo $index % 2 === 0 ? 'left' : 'right'; ?>">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <div class="timeline-header">
                                <h3><?php echo htmlspecialchars($exp['title']); ?></h3>
                                <span class="company"><?php echo htmlspecialchars($exp['company']); ?></span>
                                <span class="period"><?php echo htmlspecialchars($exp['period']); ?></span>
                            </div>
                            
                            <div class="timeline-body">
                                <p><?php echo htmlspecialchars($exp['description']); ?></p>
                                
                                <?php if (!empty($exp['achievements'])): ?>
                                    <div class="achievements">
                                        <h4>Key Achievements:</h4>
                                        <ul>
                                            <?php foreach ($exp['achievements'] as $achievement): ?>
                                                <li><?php echo htmlspecialchars($achievement); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>