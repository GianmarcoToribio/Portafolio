<section id="projects" class="section projects-section">
    <div class="container">
        <div class="section-header">
            <h2>Projectos</h2>
            <p>Mostrando algunos de mis mejores trabajos.</p>
        </div>
        
        <div class="section-content">
            <div class="project-filters">
                <button class="filter-btn active" data-filter="all">Todo</button>
                <?php
                $categories = array_unique(array_column($projects, 'category'));
                foreach ($categories as $category): ?>
                    <button class="filter-btn" data-filter="<?php echo htmlspecialchars($category); ?>">
                        <?php echo htmlspecialchars($category); ?>
                    </button>
                <?php endforeach; ?>
            </div>
            
            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                    <?php echo generateProjectCard($project); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>