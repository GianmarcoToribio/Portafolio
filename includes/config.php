<?php
/**
 * Configuration file for personal portfolio
 * Edit this file to update your personal information
 */

$config = [
    // Site Information
    'site_title' => 'Mi portafolio profesional',
    'logo_text' => 'Portfolio',
    
    // Personal Information
    'name' => 'Gianmarco toribio',
    'title' => 'Practicante para desarrollo web,analista y tecnico en ofimatica',
    'about_me' => 'Mi pasión es desarrollarme profesionalmente en el área en la que me estoy especializando, adquiriendo experiencia laboral y consolidando mis conocimientos. Poseo habilidades en PHP, HTML, SQL Server, ofimática (Word, Excel, PowerPoint) y en diseño de páginas web.',
    'profile_image' => 'images/profile.jpg',
    
    // Contact Information
    'phone' => '+51 944070297',
    'email' => [
        'gmail' => 'gianmarcojta19@gmail.com',
        'outlook' => 'Juniorta19@hotmail.com'
    ],
    'social_media' => [
        'linkedin' => 'https://www.linkedin.com/in/gianmarco-toribio-435022344/',
        'github' => 'https://github.com/GianmarcoToribio',
        'Facebook' => 'https://www.facebook.com/profile.php?id=100003809690657',
        'instagram' => 'https://www.instagram.com/gianmarco_toribio/'
    ],
    
    // Resume/CV File
    'resume_file' => 'files/resume.pdf'
];

// Skills Configuration
$skills = [
    'technical' => [
        ['name' => 'PHP', 'level' => 50],
        ['name' => 'HTML/CSS', 'level' => 70],
        ['name' => 'JavaScript', 'level' => 50],
        ['name' => 'MySQL', 'level' => 70],
        ['name' => 'WordPress', 'level' => 90],
        ['name' => 'React', 'level' => 30],
        ['name' => 'Android', 'level' => 60],
    ],
    'soft' => [
        ['name' => 'Comunicación', 'level' => 95],
        ['name' => 'Trabajo en equipo', 'level' => 90],
        ['name' => 'Resolución de problemas', 'level' => 70],
        ['name' => 'Gestión del tiempo', 'level' => 80],
    ]
];

// Experience Configuration
$experiences = [
    [
        'title' => 'Analista de datos',
        'company' => 'Ubuntu Jovenes Voluntarios Peru.',
        'period' => 'Abril 2024 - Junio 2024',
        'description' => 'Fui encargado de recibir la informacion de los egresados a la empresa y guardarlo en base de datos que tenia.',
        'achievements' => [
            'Reduje el tiempo de espera de los aceptados en la empresa',
            'Ayude en el ordenamiento de perfiles de los nuevos practicas a la empresa',
        ]
    ],
    [
        'title' => 'Supervisor de Area Sistemas',
        'company' => 'Ubuntu Jovenes Voluntarios Peru.',
        'period' => 'Abril 2024 - Junio 2024',
        'description' => 'Fui encargado de ejecutar proyectos de sistemas para una sede que tenia la empresa en SMP.',
        'achievements' => [
            'Aportar nuevos sistemas en la sede nueva de la empresa',
            'Implementar una nueva area en la sede',
        ]
    ],
];

// Education Configuration
$education = [
    [
        'degree' => 'Egresado',
        'institution' => 'Universidad Privada del Norte',
        'period' => '2019 - 2025',
        'description' => 'Estudiante de la carrera de ingenieria de sistema',
        'achievements' => ['GPA: 17/20.0', 'Tercio superior en algunos cursos']
    ],
    [
        'degree' => 'Estudiante',
        'institution' => 'Saco Oliveros',
        'period' => '2014 - 2018',
        'description' => 'Estudiante del colegio saco oliveros que se destaca por su ingresantes a las top de univerisades.',
        'achievements' => ['GPA: 16/20.0']
    ]
];

// Projects Configuration
$projects = [
    [
        'title' => 'Balanceador para un sitio web',
        'image' => 'images/projects/proyect1.png',
        'category' => 'Desarrollador Web',
        'technologies' => ['WordPress', 'MySQL', 'Google Cloud'],
        'description' => 'Este proyecto fue para hacer un balanceador para un curso sobre un empresa de cafe.',
        'link' => 'https://docs.google.com/document/d/1o700-gIQw_jgVvzcQLe5me7cvJn488aP/edit?usp=sharing&ouid=113517782037077383937&rtpof=true&sd=true'
    ],
    [
        'title' => 'Desarrollo de aplicación movil "codeledge"',
        'image' => 'images/projects/proyecto2.png',
        'category' => 'Desarrollador Frontend movil',
        'technologies' => ['React', 'Dbeaver', 'Postman', 'Github'],
        'description' => 'Fui parte front en el desarrollo de un aplicativo para aprendizaje de lenguaje de programación llamado "Codeledge".',
        'link' => 'https://drive.google.com/file/d/17YEEJr4WoweLxlSktpBptI-VOq8gIWvk/view?usp=sharing'
    ],
    [
        'title' => 'Analista de Datos para UbuntuJV Peru',
        'image' => 'images/projects/proyect3.png',
        'category' => 'Analista de Datos',
        'technologies' => ['Excel', 'Onedrive'],
        'description' => 'Encargado de revisar a los nuevos Ingresante a la empresa para la sede que me correspondia.',
        'link' => 'https://drive.google.com/file/d/1biRtF63Ul0gm12dyi98GYErheRe8oSIx/view?usp=sharing'
    ],
    [
        'title' => 'Analista de sistemas para una Empresa',
        'image' => 'images/projects/proyect4.png',
        'category' => 'Analista de Sistemas',
        'technologies' => ['Word', 'Excel', 'PHP', 'Xampp'],
        'description' => 'Esto fue un informe de para una empresa llamada win(pero con data ficticia) el informe fue detallado lo que esta incluido y asu vez tambien se hizo el desarrollo de una pagina web en PHP para la misma pagina.',
        'link' => 'https://docs.google.com/document/d/1whPuQtENjpjR0mXQhxJyvCCM2wS8rr__/edit?usp=sharing&ouid=113517782037077383937&rtpof=true&sd=true'
    ],
];