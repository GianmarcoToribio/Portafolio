/**
 * Main JavaScript file for Personal Portfolio
 */

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (mobileMenuToggle && navMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            document.body.classList.toggle('menu-open');
        });
    }
    
    // Smooth scrolling for navigation links
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Close mobile menu if open
            if (navMenu && navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                document.body.classList.remove('menu-open');
            }
            
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                window.scrollTo({
                    top: targetSection.offsetTop - 70, // Adjust for header height
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Header scroll effect
    const header = document.querySelector('.site-header');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            header.style.padding = '0.5rem 0';
            header.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
        } else {
            header.style.padding = '1rem 0';
            header.style.boxShadow = '0 1px 3px rgba(0, 0, 0, 0.1)';
        }
    });
    
    // Section animations on scroll
    const sections = document.querySelectorAll('.section');
    
    const animateSections = function() {
        const triggerBottom = window.innerHeight * 0.8;
        
        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            
            if (sectionTop < triggerBottom) {
                section.classList.add('active');
                
                // Animate skill bars if this is the skills section
                if (section.classList.contains('skills-section')) {
                    animateSkillBars();
                }
            }
        });
    };
    
    function animateSkillBars() {
        const skillLevels = document.querySelectorAll('.skill-level');
        
        skillLevels.forEach(skillLevel => {
            const percentage = skillLevel.parentElement.previousElementSibling.querySelector('.skill-percentage').textContent;
            skillLevel.style.setProperty('--skill-level', percentage);
            skillLevel.classList.add('animate');
        });
    }
    
    // Run animations on load and scroll
    animateSections();
    window.addEventListener('scroll', animateSections);
    
    // Project filters
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => {
                btn.classList.remove('active');
            });
            
            // Add active class to clicked button
            this.classList.add('active');
            
            const filterValue = this.getAttribute('data-filter');
            
            projectCards.forEach(card => {
                if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Handle contact form submission
    const contactForm = document.getElementById('contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            // Form validation would go here
            // This is just a basic example without actual submission
            
            // Get form field values
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const subject = document.getElementById('subject').value.trim();
            const message = document.getElementById('message').value.trim();
            
            // Simple validation
            if (name === '' || email === '' || subject === '' || message === '') {
                e.preventDefault();
                alert('Por favor, completa todos los campos.');
                return false;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                e.preventDefault();
                alert('Por favor, ingresa una dirección de correo electrónico válida.');
                return false;
            }
            
            // If validation passes, the form will submit normally to the PHP handler
        });
    }
    
    // Check for contact form success/error message in URL
    const urlParams = new URLSearchParams(window.location.search);
    const contactStatus = urlParams.get('contact');
    
    if (contactStatus === 'success') {
        alert('Tu mensaje ha sido enviado exitosamente. ¡Me pondré en contacto contigo pronto!');
    } else if (contactStatus === 'error') {
        const errors = urlParams.get('errors');
        if (errors) {
            alert('Hubo un error al enviar tu mensaje: ' + errors.replace('|', ', '));
        } else {
            alert('Hubo un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.');
        }
    }
});