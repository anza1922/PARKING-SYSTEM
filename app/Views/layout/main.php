<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>ParkirinAja | <?= esc($title ?? 'Dashboard') ?></title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#3b82f6", // tailwind blue-500
                        "primary-hover": "#2563eb", // tailwind blue-600
                        "primary-light": "#eff6ff", // tailwind blue-50
                        "surface": "#f9fafb", // tailwind gray-50
                        "surface-card": "#ffffff",
                        "text-main": "#0f172a", // tailwind slate-900
                        "text-muted": "#64748b", // tailwind slate-500
                        "border-subtle": "#f1f5f9" // tailwind slate-100
                    },
                    "fontFamily": {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    },
                    "boxShadow": {
                        "soft": "0 4px 20px -2px rgba(0, 0, 0, 0.03)",
                        "float": "0 10px 30px -5px rgba(59, 130, 246, 0.15)"
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
        h1, h2, h3, h4, h5, .font-headline { font-family: 'Manrope', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24; }
        
        /* Smooth scrolling and hover transitions gloabally */
        * { transition: background-color 0.2s ease, border-color 0.2s ease; }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
    </style>
</head>
<body class="text-text-main overflow-x-hidden antialiased">

<?php
$currentUri = current_url(true)->getPath();
$isDashboard = empty($currentUri) || $currentUri === '/' || $currentUri === 'index.php';
$isReservasi = strpos($currentUri, 'reservasi') !== false;
$isKendaraanMasuk = strpos($currentUri, 'kendaraan-masuk') !== false;
$isKeluar = strpos($currentUri, 'keluar') !== false;
$isRiwayat = strpos($currentUri, 'riwayat') !== false;
$isPengaturan = strpos($currentUri, 'pengaturan') !== false;

// Glassmorphism active styles
// Grouping and animation styles added
$activeClass = 'group flex items-center px-4 py-3 bg-gradient-to-r from-primary to-blue-600 text-white font-bold rounded-2xl shadow-float transform translate-x-1 transition-all duration-500 pointer-events-none';
$inactiveClass = 'group flex items-center px-4 py-3 text-text-muted hover:text-primary hover:bg-blue-50/80 font-medium rounded-2xl hover:translate-x-1 transition-all duration-300';
?>

<!-- Minimalist Sidebar -->
<aside class="h-screen w-72 fixed left-0 top-0 bg-white/80 backdrop-blur-2xl border-r border-border-subtle flex flex-col py-8 z-50">
    <div class="px-8 mb-12 flex items-center gap-3">
        <div class="w-10 h-10 bg-gradient-to-br from-primary to-blue-700 rounded-xl flex items-center justify-center shadow-float">
            <span class="material-symbols-outlined text-white text-[20px] font-bold">local_parking</span>
        </div>
        <div>
            <h1 class="text-xl font-extrabold text-text-main tracking-tight font-headline">ParkirinAja</h1>
            <p class="text-[10px] text-text-muted font-bold tracking-widest uppercase mt-0.5">Terminal A</p>
        </div>
    </div>
    
    <nav class="flex-1 space-y-2 px-4">
        <a class="<?= $isDashboard ? $activeClass : $inactiveClass ?>" href="<?= site_url('/') ?>">
            <span class="material-symbols-outlined mr-4 text-[22px] transition-transform duration-300 group-hover:scale-110 group-hover:-rotate-3" <?= $isDashboard ? 'style="font-variation-settings: \'FILL\' 1"' : '' ?>>dashboard</span>
            <span class="text-sm transition-transform duration-300 group-hover:translate-x-0.5">Dashboard</span>
        </a>
        <a class="<?= $isReservasi ? $activeClass : $inactiveClass ?>" href="<?= site_url('/reservasi') ?>">
            <span class="material-symbols-outlined mr-4 text-[22px] transition-transform duration-300 group-hover:scale-110 group-hover:rotate-3" <?= $isReservasi ? 'style="font-variation-settings: \'FILL\' 1"' : '' ?>>calendar_today</span>
            <span class="text-sm transition-transform duration-300 group-hover:translate-x-0.5">Reservasi</span>
        </a>
        <a class="<?= $isKendaraanMasuk ? $activeClass : $inactiveClass ?>" href="<?= site_url('/kendaraan-masuk') ?>">
            <span class="material-symbols-outlined mr-4 text-[22px] transition-transform duration-300 group-hover:scale-110 group-hover:rotate-12" <?= $isKendaraanMasuk ? 'style="font-variation-settings: \'FILL\' 1"' : '' ?>>login</span>
            <span class="text-sm transition-transform duration-300 group-hover:translate-x-0.5">Kendaraan Masuk</span>
        </a>
        <a class="<?= $isKeluar ? $activeClass : $inactiveClass ?>" href="<?= site_url('/keluar') ?>">
            <span class="material-symbols-outlined mr-4 text-[22px] transition-transform duration-300 group-hover:scale-110 group-hover:-rotate-12" <?= $isKeluar ? 'style="font-variation-settings: \'FILL\' 1"' : '' ?>>logout</span>
            <span class="text-sm transition-transform duration-300 group-hover:translate-x-0.5">Checkout Keluar</span>
        </a>
        <a class="<?= $isRiwayat ? $activeClass : $inactiveClass ?>" href="<?= site_url('/riwayat') ?>">
            <span class="material-symbols-outlined mr-4 text-[22px] transition-transform duration-300 group-hover:scale-110 group-hover:-rotate-6" <?= $isRiwayat ? 'style="font-variation-settings: \'FILL\' 1"' : '' ?>>history</span>
            <span class="text-sm transition-transform duration-300 group-hover:translate-x-0.5">Riwayat Transaksi</span>
        </a>
    </nav>
    
    <div class="px-6 mt-8">
        <div class="w-full h-px bg-gradient-to-r from-transparent via-border-subtle to-transparent mb-8"></div>
        <button class="w-full bg-white text-text-main border border-border-subtle shadow-soft py-3 px-4 rounded-xl font-bold text-sm hover:border-primary hover:text-primary transition-all duration-300 flex items-center justify-center gap-2 group">
            <span class="material-symbols-outlined text-[18px] group-hover:scale-110 transition-transform">add</span>
            Tambah Slot
        </button>
    </div>
    
    <div class="mt-auto px-4 space-y-2">
        <a class="<?= $isPengaturan ? $activeClass : $inactiveClass ?>" href="<?= site_url('/pengaturan') ?>">
            <span class="material-symbols-outlined mr-4 text-[22px] transition-transform duration-300 group-hover:scale-110 group-hover:rotate-12" <?= $isPengaturan ? 'style="font-variation-settings: \'FILL\' 1"' : '' ?>>settings</span>
            <span class="text-sm transition-transform duration-300 group-hover:translate-x-0.5">Pengaturan</span>
        </a>
        <a class="group border border-transparent flex items-center px-4 py-3 text-red-500 hover:bg-red-50/80 hover:text-red-600 font-medium rounded-2xl hover:translate-x-1 transition-all duration-300" href="<?= site_url('/login') ?>">
            <span class="material-symbols-outlined mr-4 text-[22px] transition-transform duration-300 group-hover:scale-110">exit_to_app</span>
            <span class="text-sm transition-transform duration-300 group-hover:translate-x-0.5">Logout Akun</span>
        </a>
    </div>
</aside>

<!-- Main Canvas -->
<main class="ml-72 min-h-screen pb-16">
    <!-- TopAppBar - Glassmorphism -->
    <header class="sticky top-0 w-full h-20 bg-white/60 backdrop-blur-xl border-b border-white/20 shadow-[0_1px_2px_rgba(0,0,0,0.02)] flex justify-between items-center px-10 z-40 transition-all">
        <div>
            <!-- Breadcrumb minimalis -->
            <p class="text-xs font-bold text-primary uppercase tracking-widest mb-1"><?= esc($title ?? 'Overview') ?></p>
            <h2 class="text-2xl font-extrabold text-text-main font-headline tracking-tight leading-none"><?= esc($title ?? 'ParkirPro Dashboard') ?></h2>
        </div>
        
        <div class="flex items-center gap-6">
            <div class="relative group hidden md:block">
                <span class="absolute left-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-text-muted text-[20px] transition-colors group-focus-within:text-primary">search</span>
                <input class="pl-12 pr-4 py-2.5 bg-white border border-border-subtle rounded-2xl text-sm focus:ring-4 focus:ring-primary/10 focus:border-primary outline-none transition-all w-72 shadow-soft placeholder:text-slate-400 font-medium" placeholder="Cari plat nomor atau tiket..." type="text"/>
            </div>
            
            <div class="w-px h-8 bg-border-subtle mx-2 hidden md:block"></div>
            
            <button class="w-10 h-10 rounded-full flex items-center justify-center hover:bg-surface text-text-muted hover:text-primary transition-all relative">
                <span class="absolute top-2 right-2.5 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
                <span class="material-symbols-outlined">notifications</span>
            </button>
            
            <div class="relative">
                <div onclick="toggleProfileDropdown()" class="flex items-center gap-3 cursor-pointer p-1.5 pr-4 rounded-full border border-border-subtle bg-white hover:shadow-soft transition-all group">
                    <div class="h-9 w-9 rounded-full overflow-hidden">
                        <img alt="Admin Profile" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDi8nSxFtzi4lEFNgAtrIXFogS1XYBZbit0INpRQszJDRobMmaw1eSvRAvaugA7UD1egZN7o4EvLdOl6ki-DbqhkiR2chNilJxjHuu4Rd3_E7jv77MNX-mSXOBHcALODiiYc9jEsU9MieKTZQZUa24J9M240enaD1GBlaHwlJfHdPlD6IJyHlV6CMeFrgzMomb9XY3IxzP5XqMNRDcUi375Kg-bJflYwzJGKVLbweGKUNhYlfEaEJTY-m4ImAzXBD7yAd6UcJY3CYM"/>
                    </div>
                    <div class="hidden lg:block text-left">
                        <p class="text-sm font-bold text-text-main leading-none group-hover:text-primary transition-colors">Budi Admin</p>
                        <p class="text-[10px] text-text-muted font-medium mt-1">Terminal A</p>
                    </div>
                    <span class="material-symbols-outlined text-text-muted text-[18px] ml-1 group-hover:text-text-main transition-colors">expand_more</span>
                </div>

                <!-- Dropdown Menu -->
                <div id="profileDropdown" class="hidden absolute right-0 mt-3 w-60 bg-white rounded-2xl shadow-float border border-border-subtle overflow-hidden z-50 transform origin-top-right transition-all">
                    <div class="p-4 border-b border-border-subtle bg-gradient-to-br from-surface to-slate-50">
                        <p class="text-sm font-extrabold font-headline text-text-main">Budiono Speed</p>
                        <p class="text-[11px] font-bold text-text-muted mt-0.5">budispeed.admin@parkirinAja.com</p>
                    </div>
                    <div class="p-2 space-y-1">
                        <a href="<?= site_url('/pengaturan') ?>" class="flex items-center gap-3 px-3 py-2.5 text-sm font-bold text-text-main hover:bg-slate-50 hover:text-primary rounded-xl transition-colors">
                            <span class="material-symbols-outlined text-[18px]">manage_accounts</span> Edit Profil
                        </a>
                        <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-sm font-bold text-text-main hover:bg-slate-50 hover:text-primary rounded-xl transition-colors">
                            <span class="material-symbols-outlined text-[18px]">receipt_long</span> Laporan Akses
                        </a>
                    </div>
                    <div class="p-2 border-t border-border-subtle bg-surface">
                        <a href="<?= site_url('/login') ?>" class="flex items-center gap-3 px-3 py-2.5 text-sm font-bold text-red-500 hover:bg-red-50 rounded-xl transition-colors">
                            <span class="material-symbols-outlined text-[18px]">logout</span> Logout Akun
                        </a>
                    </div>
                </div>
            </div>
            
            <script>
                function toggleProfileDropdown() {
                    document.getElementById('profileDropdown').classList.toggle('hidden');
                }
                
                // Tutup ketika klik di luar menu
                document.addEventListener('click', function(event) {
                    let dropdown = document.getElementById('profileDropdown');
                    let button = event.target.closest('.relative');
                    if (!button && dropdown && !dropdown.classList.contains('hidden')) {
                        dropdown.classList.add('hidden');
                    }
                });
            </script>
        </div>
    </header>
    
    <!-- Content Area Setup with more breathing room -->
    <div class="pt-10 px-10">
        <?= $this->renderSection('content') ?>
    </div>
</main>
</body>
</html>
