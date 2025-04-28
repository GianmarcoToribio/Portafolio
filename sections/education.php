<section id="education" class="section education-section">
    <div class="container">
        <div class="section-header">
            <h2>Educación</h2>
            <p>Formación académica y certificaciones</p>
        </div>
        
        <div class="section-content">
            <div class="education-timeline">
                <?php foreach ($education as $edu): ?>
                    <div class="education-item">
                        <div class="education-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        
                        <div class="education-content">
                            <div class="education-header">
                                <h3><?php echo htmlspecialchars($edu['degree']); ?></h3>
                                <div class="education-meta">
                                    <span class="institution"><?php echo htmlspecialchars($edu['institution']); ?></span>
                                    <span class="period"><?php echo htmlspecialchars($edu['period']); ?></span>
                                </div>
                            </div>
                            
                            <div class="education-body">
                                <p><?php echo htmlspecialchars($edu['description']); ?></p>
                                
                                <?php if (!empty($edu['achievements'])): ?>
                                    <div class="achievements">
                                        <h4>Logros:</h4>
                                        <ul>
                                            <?php foreach ($edu['achievements'] as $achievement): ?>
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

            <div class="certifications">
                <h3>Certificaciones y Educación Adicional</h3>
                <div class="certifications-grid">
                    <div class="certification-item">
                        <div class="certification-icon"><i class="fas fa-certificate"></i></div>
                        <div class="certification-content">
                            <a href="https://drive.google.com/file/d/1yDP8nnTDbyOWMFvImLD2ncp15x5cDtxV/view?usp=sharing" class="btn-certification">
                                <h4>Introducción a la Ciencia de Datos</h4>
                                <p>CISCO Networking Academy, 2023</p>
                            </a>
                        </div>
                    </div>
        
                    <div class="certification-item">
                        <div class="certification-icon"><i class="fas fa-certificate"></i></div>
                        <div class="certification-content">
                            <a href="https://drive.google.com/file/d/1gLWTsjFpGQRqaRY7aqOxJkUq9RBrroYi/view?usp=drive_link" class="btn-certification">
                                <h4>Partner: NDG Linux Essentials</h4>
                                <p>CISCO Networking Academy, 2024</p>
                            </a>
                        </div>
                    </div>

                    <div class="certification-item">
                        <div class="certification-icon"><i class="fas fa-certificate"></i></div>
                        <div class="certification-content">
                            <a href="https://drive.google.com/file/d/1_9ZG1Sl9pCV-c5QakeK_V1ouB29Lul7n/view?usp=sharing" class="btn-certification">
                                <h4>Fundamentos de Ciberseguridad</h4>
                                <p>CISCO Networking Academy, 2024</p>
                            </a>
                        </div>
                    </div>
                    
                    <div class="certification-item">
                        <div class="certification-icon"><i class="fas fa-certificate"></i></div>
                        <div class="certification-content">
                            <a href="https://drive.google.com/file/d/1O96VsBOrvoxd2Dy5oPv3ErE7ib3WayqF/view?usp=sharing" class="btn-certification">
                                <h4>Conciencia digital</h4>
                                <p>CISCO Networking Academy, 2024</p>
                            </a>
                        </div>
                    </div>
                    
                    <div class="certification-item">
                        <div class="certification-icon"><i class="fas fa-certificate"></i></div>
                        <div class="certification-content">
                            <a href="https://drive.google.com/file/d/1DRpNEa4ZjYbHK2OnBbe93Lm3e4g7-mff/view?usp=sharing" class="btn-certification">
                                <h4>CCNAv7: Introduction to Networks</h4>
                                <p>CISCO Networking Academy, 2024</p>
                            </a>
                        </div>
                    </div>
                    
                    <div class="certification-item">
                        <div class="certification-icon"><i class="fas fa-certificate"></i></div>
                        <div class="certification-content">
                            <a href="https://drive.google.com/file/d/1D7lrulKlF_z-s4jJzB5eyrICsV7fwmno/view?usp=sharing" class="btn-certification">
                                <h4>CCNA: Fundamentos de Conmutación,
                                Enrutamiento y Redes Inalámbricas</h4>
                                <p>CISCO Networking Academy, 2024</p>
                            </a>
                        </div>
                    </div>
                    
                    <div class="certification-item">
                        <div class="certification-icon"><i class="fas fa-certificate"></i></div>
                        <div class="certification-content">
                            <a href="https://drive.google.com/file/d/1rgDZ33J7MUM-CfMHvLNCkioymA5K8lOx/view?usp=sharing" class="btn-certification">
                                <h4>Introduction to IoT</h4>
                                <p>CISCO Networking Academy, 2020</p>
                            </a>
                        </div>
                    </div>
                    
                    <div class="certification-item">
                        <div class="certification-icon"><i class="fas fa-certificate"></i></div>
                        <div class="certification-content">
                            <a href="https://drive.google.com/file/d/1kBjmooi51vqzSZbBrPYvGoalCuCYgmMJ/view?usp=sharing" class="btn-certification">
                                <h4>Fundamentos de Python 1</h4>
                                <p>CISCO Networking Academy, 2023</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>