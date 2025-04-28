<?php
/**
 * Helper functions for the portfolio
 */

/**
 * Generate a skill bar with percentage
 * 
 * @param string $name Skill name
 * @param int $level Skill level (0-100)
 * @return string HTML for the skill bar
 */
function generateSkillBar($name, $level) {
    $html = '<div class="skill-item">';
    $html .= '<div class="skill-info">';
    $html .= '<span class="skill-name">' . htmlspecialchars($name) . '</span>';
    $html .= '<span class="skill-percentage">' . htmlspecialchars($level) . '%</span>';
    $html .= '</div>';
    $html .= '<div class="skill-bar">';
    $html .= '<div class="skill-level" style="width: ' . htmlspecialchars($level) . '%;"></div>';
    $html .= '</div>';
    $html .= '</div>';
    
    return $html;
}

/**
 * Generate social media links
 * 
 * @param array $socialMedia Array of social media platforms and links
 * @return string HTML for social media links
 */
function generateSocialLinks($socialMedia) {
    $html = '<div class="social-links">';
    
    foreach ($socialMedia as $platform => $url) {
        $icon = '';
        switch (strtolower($platform)) {
            case 'linkedin':
                $icon = 'fab fa-linkedin-in';
                break;
            case 'github':
                $icon = 'fab fa-github';
                break;
            case 'twitter':
                $icon = 'fab fa-twitter';
                break;
            case 'facebook':
                $icon = 'fab fa-facebook-f';
                break;
            case 'instagram':
                $icon = 'fab fa-instagram';
                break;
            default:
                $icon = 'fas fa-link';
        }
        
        $html .= '<a href="' . htmlspecialchars($url) . '" target="_blank" class="social-link" aria-label="' . htmlspecialchars($platform) . '">';
        $html .= '<i class="' . $icon . '"></i>';
        $html .= '</a>';
    }
    
    $html .= '</div>';
    return $html;
}

/**
 * Generate email link with icon
 * 
 * @param string $email Email address
 * @param string $platform Email platform (gmail, outlook, etc.)
 * @return string HTML for email link
 */
function generateEmailLink($email, $platform = 'default') {
    $icon = 'fas fa-envelope';
    if (strtolower($platform) === 'gmail') {
        $icon = 'fab fa-google';
    } elseif (strtolower($platform) === 'outlook') {
        $icon = 'fab fa-microsoft';
    }
    
    return '<a href="mailto:' . htmlspecialchars($email) . '" class="contact-link email-link">'
         . '<i class="' . $icon . '"></i>'
         . '<span>' . htmlspecialchars($email) . '</span>'
         . '</a>';
}

/**
 * Generate project card
 * 
 * @param array $project Project information
 * @return string HTML for project card
 */
function generateProjectCard($project) {
    $html = '<div class="project-card" data-category="' . htmlspecialchars($project['category']) . '">';
    $html .= '<div class="project-image">';
    $html .= '<img src="' . htmlspecialchars($project['image']) . '" alt="' . htmlspecialchars($project['title']) . '">';
    $html .= '</div>';
    $html .= '<div class="project-info">';
    $html .= '<h3 class="project-title">' . htmlspecialchars($project['title']) . '</h3>';
    $html .= '<p class="project-category">' . htmlspecialchars($project['category']) . '</p>';
    $html .= '<div class="project-technologies">';
    
    foreach ($project['technologies'] as $tech) {
        $html .= '<span class="technology-tag">' . htmlspecialchars($tech) . '</span>';
    }
    
    $html .= '</div>';
    $html .= '<p class="project-description">' . htmlspecialchars($project['description']) . '</p>';
    $html .= '<a href="' . htmlspecialchars($project['link']) . '" class="btn btn-view-project">View Project</a>';
    $html .= '</div>';
    $html .= '</div>';
    
    return $html;
}