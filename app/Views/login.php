<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Login - ParkirPro</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#3b82f6", 
                        "primary-hover": "#2563eb", 
                        "primary-light": "#eff6ff", 
                        "surface": "#f8fafc", 
                        "surface-card": "#ffffff",
                        "text-main": "#0f172a", 
                        "text-muted": "#64748b", 
                        "border-subtle": "#f1f5f9" 
                    },
                    "fontFamily": {
                        "headline": ["Manrope"],
                        "body": ["Inter"]
                    },
                    "boxShadow": {
                        "soft": "0 4px 20px -2px rgba(0, 0, 0, 0.03)",
                        "float": "0 20px 40px -5px rgba(59, 130, 246, 0.15)"
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
        h1, h2, h3, .font-headline { font-family: 'Manrope', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24; }
        .glass-panel { background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(255, 255, 255, 0.2); }
    </style>
</head>
<body class="text-text-main min-h-screen flex items-center justify-center p-4 sm:p-8 relative overflow-hidden bg-surface">

    <!-- Decorative exact background blobs -->
    <div class="fixed top-[-20%] left-[-10%] w-[500px] h-[500px] rounded-full bg-blue-400/20 blur-[120px] mix-blend-multiply pointer-events-none"></div>
    <div class="fixed bottom-[-20%] right-[-10%] w-[600px] h-[600px] rounded-full bg-indigo-400/20 blur-[120px] mix-blend-multiply pointer-events-none"></div>

    <div class="max-w-5xl w-full bg-surface-card rounded-[2.5rem] shadow-float border border-white/50 overflow-hidden flex flex-col md:flex-row relative z-10">
        
        <!-- Brand / Image Section -->
        <div class="w-full md:w-5/12 bg-primary relative p-12 flex flex-col items-start justify-between min-h-[500px] overflow-hidden">
            <!-- Vibrant dynamic gradient -->
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500 via-indigo-600 to-blue-800 z-0"></div>
            
            <div class="relative z-10 w-full mb-12 transform transition-transform hover:scale-[1.02] duration-500">
                <div class="w-16 h-16 bg-white/20 backdrop-blur-xl rounded-2xl flex items-center justify-center border border-white/30 shadow-lg mb-8">
                    <span class="material-symbols-outlined text-white text-4xl font-bold" style="font-variation-settings: 'FILL' 1;">local_parking</span>
                </div>
                <h1 class="text-4xl lg:text-5xl font-extrabold text-white font-headline tracking-tight mb-4">ParkirPro</h1>
                <p class="text-blue-100 text-sm leading-relaxed max-w-sm font-medium opacity-90">
                    Sistem Manajemen Parkir Cerdas Terintegrasi. Amankan kendaraan, pantau transaksi, dan kelola pendapatan dengan antarmuka yang elegan.
                </p>
            </div>
            
            <div class="relative z-10 glass-panel p-5 rounded-2xl w-full mt-auto">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-white text-xl">shield_lock</span>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-white tracking-widest uppercase mb-0.5">Secure Login</p>
                        <p class="text-[11px] font-medium text-blue-100 leading-tight">Dienkripsi dengan standar SHA-256 untuk operasional.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Login Form Section -->
        <div class="w-full md:w-7/12 p-12 md:p-20 bg-surface-card flex flex-col justify-center">
            <div class="mb-12">
                <h2 class="text-3xl font-extrabold text-text-main font-headline mb-3 tracking-tight">Selamat Datang 👋</h2>
                <p class="text-text-muted font-medium">Masuk ke akun operasional Anda untuk melanjutkan.</p>
            </div>

            <form class="space-y-6" action="<?= site_url('/') ?>" method="GET">
                <div class="space-y-2">
                    <label class="text-[11px] font-bold text-text-muted uppercase tracking-widest block">ID Karyawan / Email</label>
                    <div class="relative group">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-400 group-focus-within:text-primary transition-colors">person</span>
                        <input type="text" class="w-full pl-12 pr-4 py-4 bg-surface border border-slate-200 rounded-2xl focus:ring-4 focus:ring-primary/10 focus:border-primary focus:bg-white transition-all font-medium placeholder:text-slate-400 text-sm outline-none shadow-sm" placeholder="Masukkan ID atau Email">
                    </div>
                </div>
                
                <div class="space-y-2">
                    <div class="flex justify-between items-center">
                        <label class="text-[11px] font-bold text-text-muted uppercase tracking-widest">Kata Sandi</label>
                        <a href="#" class="text-xs font-bold text-primary hover:text-primary-hover transition-colors">Lupa Sandi?</a>
                    </div>
                    <div class="relative group">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-400 group-focus-within:text-primary transition-colors">lock</span>
                        <input type="password" class="w-full pl-12 pr-12 py-4 bg-surface border border-slate-200 rounded-2xl focus:ring-4 focus:ring-primary/10 focus:border-primary focus:bg-white transition-all font-medium placeholder:text-slate-400 text-sm outline-none shadow-sm" placeholder="••••••••">
                        <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-text-main transition-colors">
                            <span class="material-symbols-outlined text-[20px]">visibility</span>
                        </button>
                    </div>
                </div>

                <div class="flex items-center gap-3 pt-2">
                    <input type="checkbox" id="remember" class="w-4 h-4 rounded border-slate-300 text-primary focus:ring-primary focus:ring-2 transition-all">
                    <label for="remember" class="text-sm font-medium text-text-muted cursor-pointer hover:text-text-main transition-colors">Ingat sesi saya di perangkat ini</label>
                </div>

                <button type="submit" class="w-full bg-text-main text-white py-4 rounded-2xl font-bold text-sm hover:bg-primary hover:shadow-float transform hover:-translate-y-1 active:translate-y-0 active:shadow-none transition-all duration-300 flex justify-center items-center gap-3 mt-8 group">
                    <span>Masuk ke Dashboard</span>
                    <span class="material-symbols-outlined text-[20px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </button>
            </form>

            <div class="mt-12 text-center">
                <p class="text-xs font-medium text-text-muted">Butuh bantuan teknis? <a href="#" class="font-bold text-text-main hover:text-primary transition-colors">Hubungi IT Support</a></p>
            </div>
        </div>
    </div>
</body>
</html>
