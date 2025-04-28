<section id="skills" class="section skills-section">
    <div class="container">
        <div class="section-header">
            <h2>Habilidades y Experiencia</h2>
            <p>Mi conjunto de habilidades profesionales y competencias clave</p>
        </div>
        
        <div class="section-content">
            <div class="skills-container">
                <div class="skills-column">
                    <h3>Habilidades Técnicas</h3>
                    <div class="skill-bars">
                        <?php foreach ($skills['technical'] as $skill): ?>
                            <?php echo generateSkillBar($skill['name'], $skill['level']); ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="skills-column">
                    <h3>Habilidades Blandas</h3>
                    <div class="skill-bars">
                        <?php foreach ($skills['soft'] as $skill): ?>
                            <?php echo generateSkillBar($skill['name'], $skill['level']); ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
            <div class="strengths-container">
                <h3>Fortalezas Principales</h3>
                <div class="strengths-grid">
                    <div class="strength-item">
                        <div class="strength-icon"><i class="fas fa-code"></i></div>
                        <h4>Código Limpio</h4>
                        <p>Escritura de código mantenible y bien estructurado</p>
                    </div>
                    
                    <div class="strength-item">
                        <div class="strength-icon"><i class="fas fa-handshake"></i></div>
                        <h4>Colaboración Efectiva</h4>
                        <p>Capacidad para colaborar de manera efectiva, aportando ideas y adaptándome a diferentes dinámicas grupales.</p>
                    </div>
                    
                    <div class="strength-item">
                        <div class="strength-icon"><i class="fas fa-tasks"></i></div>
                        <h4>Adaptabilidad y Gestión del Tiempo</h4>
                        <p>Capacidad para organizar prioridades, cumplir plazos exigentes y adaptarme a cambios en proyectos y prácticas.</p>
                    </div>
                    
                    <div class="strength-item">
                        <div class="strength-icon"><i class="fas fa-brain"></i></div>
                        <h4>Aprendizaje Rápido</h4>
                        <p>Habilidad para aprender nuevos conceptos, herramientas y procesos en poco tiempo, adaptándome rápidamente a nuevos retos.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>