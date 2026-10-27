<?php

return [
    'company' => [
        'name' => 'Company Name',
        'brand_mark' => 'C',
        'email' => 'hello@example.com',
        'phone' => '',
        'address' => '',
        'social_links' => [],
    ],
    'theme' => [
        'ink' => '#14222d',
        'accent' => '#e4a62b',
        'muted' => '#63717b',
        'paper' => '#f5f6f4',
        'surface' => '#ffffff',
        'line' => '#e5e9e8',
    ],
    'navigation' => [
        ['href' => '/#top', 'label' => 'nav.home', 'section' => 'hero'],
        ['href' => '/#services', 'label' => 'nav.services', 'section' => 'services'],
        ['href' => '/#about', 'label' => 'nav.about', 'section' => 'about'],
        ['href' => '/#contact', 'label' => 'nav.contact', 'section' => 'contact'],
    ],
    'sections' => [
        ['component' => 'hero/a', 'content' => 'hero'],
        ['component' => 'services/a', 'content' => 'services'],
        ['component' => 'about/a', 'content' => 'about'],
        ['component' => 'contact/form', 'content' => 'contact'],
    ],
    'content' => [
        'en' => [
            'site_title' => 'Company Name | Your Company, Your Industry',
            'site_description' => 'A short introduction to your company and what you do.',
            'topbar_label' => 'YOUR COMPANY · YOUR INDUSTRY',
            'footer_description' => 'A short line about your company goes here.',
            'footer_tagline' => 'Designed for your business.',
            'footer_rights' => 'All rights reserved.',
            'hero' => [
                'eyebrow' => 'YOUR COMPANY · YOUR INDUSTRY',
                'title' => 'Your headline goes right here.',
                'description' => 'Add a short introduction to your company and what you do.',
                'image_alt' => 'Company introduction image',
                'image' => '/assets/images/hero.jpg',
            ],
            'services' => [
                'eyebrow' => 'WHAT WE DO',
                'title' => 'Services at a glance',
                'items' => [
                    ['title' => 'Service title', 'description' => 'Add a short description of this service.'],
                    ['title' => 'Service title', 'description' => 'Add a short description of this service.'],
                    ['title' => 'Service title', 'description' => 'Add a short description of this service.'],
                ],
            ],
            'gallery' => [
                'eyebrow' => 'A LOOK AT OUR WORK',
                'title' => 'Selected projects',
                'items' => [
                    ['image' => '/assets/images/project-1.jpg', 'alt' => 'Project one'],
                    ['image' => '/assets/images/project-2.jpg', 'alt' => 'Project two'],
                    ['image' => '/assets/images/project-3.jpg', 'alt' => 'Project three'],
                ],
            ],
            'testimonials' => [
                'eyebrow' => 'CLIENT STORIES',
                'title' => 'What our clients say',
                'items' => [
                    ['quote' => 'Add a short client testimonial here.', 'name' => 'Client name', 'role' => 'Company or role'],
                ],
            ],
            'cta' => [
                'eyebrow' => 'LET’S WORK TOGETHER',
                'title' => 'Have a project in mind?',
                'action' => 'Get in touch',
            ],
            'about' => [
                'eyebrow' => 'A LITTLE ABOUT US',
                'title' => 'A place for your company story.',
                'description' => 'Share a few words about your experience, your people, and the way you work.',
                'image_alt' => 'Company team',
                'image' => '/assets/images/about.jpg',
            ],
            'contact' => [
                'eyebrow' => "LET'S WORK TOGETHER",
                'title' => 'Have a project in mind?',
            ],
        ],
        'id' => [
            'site_title' => 'Nama Perusahaan | Perusahaan Anda, Industri Anda',
            'site_description' => 'Pengantar singkat tentang perusahaan dan layanan Anda.',
            'topbar_label' => 'PERUSAHAAN ANDA · INDUSTRI ANDA',
            'footer_description' => 'Tambahkan deskripsi singkat tentang perusahaan Anda.',
            'footer_tagline' => 'Dirancang untuk bisnis Anda.',
            'footer_rights' => 'Hak cipta dilindungi.',
            'hero' => [
                'eyebrow' => 'PERUSAHAAN ANDA · INDUSTRI ANDA',
                'title' => 'Judul utama Anda ada di sini.',
                'description' => 'Tambahkan pengantar singkat tentang perusahaan dan layanan Anda.',
                'image_alt' => 'Gambar pengenalan perusahaan',
                'image' => '/assets/images/hero.jpg',
            ],
            'services' => [
                'eyebrow' => 'LAYANAN KAMI',
                'title' => 'Layanan kami',
                'items' => [
                    ['title' => 'Nama layanan', 'description' => 'Tambahkan deskripsi singkat tentang layanan ini.'],
                    ['title' => 'Nama layanan', 'description' => 'Tambahkan deskripsi singkat tentang layanan ini.'],
                    ['title' => 'Nama layanan', 'description' => 'Tambahkan deskripsi singkat tentang layanan ini.'],
                ],
            ],
            'gallery' => [
                'eyebrow' => 'LIHAT HASIL KERJA KAMI',
                'title' => 'Proyek pilihan',
                'items' => [
                    ['image' => '/assets/images/project-1.jpg', 'alt' => 'Proyek satu'],
                    ['image' => '/assets/images/project-2.jpg', 'alt' => 'Proyek dua'],
                    ['image' => '/assets/images/project-3.jpg', 'alt' => 'Proyek tiga'],
                ],
            ],
            'testimonials' => [
                'eyebrow' => 'CERITA KLIEN',
                'title' => 'Pendapat klien kami',
                'items' => [
                    ['quote' => 'Tambahkan testimoni singkat dari klien di sini.', 'name' => 'Nama klien', 'role' => 'Perusahaan atau jabatan'],
                ],
            ],
            'cta' => [
                'eyebrow' => 'MARI BEKERJA SAMA',
                'title' => 'Ada proyek yang ingin dibahas?',
                'action' => 'Hubungi kami',
            ],
            'about' => [
                'eyebrow' => 'TENTANG KAMI',
                'title' => 'Ceritakan kisah perusahaan Anda.',
                'description' => 'Ceritakan pengalaman, tim, dan cara kerja perusahaan Anda.',
                'image_alt' => 'Tim perusahaan',
                'image' => '/assets/images/about.jpg',
            ],
            'contact' => [
                'eyebrow' => 'MARI BEKERJA SAMA',
                'title' => 'Punya proyek yang ingin dibahas?',
            ],
        ],
    ],
];
