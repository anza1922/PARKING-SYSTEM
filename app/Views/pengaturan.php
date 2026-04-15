<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- Script for minimal tabs -->
<script>
    function changeTab(tabId) {
        // Hide all tabs
        document.querySelectorAll('.settings-panel').forEach(panel => {
            panel.classList.add('hidden');
            panel.classList.remove('block', 'animate-[fadeIn_0.3s_ease-out]');
        });
        
        // Reset all buttons
        document.querySelectorAll('.settings-btn').forEach(btn => {
            btn.classList.remove('bg-white', 'shadow-soft', 'text-primary', 'border-transparent');
            btn.classList.add('text-text-muted', 'hover:text-text-main', 'hover:bg-white', 'border-transparent');
            
            // Adjust icons
            let icon = btn.querySelector('.material-symbols-outlined');
            icon.classList.remove('text-primary');
            icon.classList.add('text-slate-400', 'group-hover:text-text-main');
        });
        
        // Show target tab
        let targetPanel = document.getElementById(tabId);
        targetPanel.classList.remove('hidden');
        // Force reflow for animation
        void targetPanel.offsetWidth;
        targetPanel.classList.add('block', 'animate-[fadeIn_0.3s_ease-out]');
        
        // Activate target button
        let targetBtn = document.getElementById('btn-' + tabId);
        targetBtn.classList.remove('text-text-muted', 'hover:text-text-main', 'hover:bg-white');
        targetBtn.classList.add('bg-white', 'shadow-soft', 'text-primary');
        
        let targetIcon = targetBtn.querySelector('.material-symbols-outlined');
        targetIcon.classList.remove('text-slate-400', 'group-hover:text-text-main');
        targetIcon.classList.add('text-primary');
    }
</script>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<div class="max-w-6xl mx-auto">
    <!-- Header -->
    <div class="mb-10 text-center md:text-left">
        <h1 class="text-4xl font-extrabold font-headline text-text-main tracking-tight block">Pengaturan Sistem</h1>
        <p class="text-text-muted mt-2 text-sm max-w-xl">Kelola preferensi akun, integrasi *payment gateway*, dan tarif dasar area operasional Anda.</p>
    </div>

    <div class="flex flex-col lg:flex-row gap-10 items-start">
        <!-- Minimalist Sidebar -->
        <div class="w-full lg:w-64 space-y-2 sticky top-[120px] shrink-0">
            <button id="btn-tab-profil" onclick="changeTab('tab-profil')" class="settings-btn w-full text-left px-5 py-3.5 rounded-2xl bg-white shadow-soft text-primary font-bold transition-all border border-transparent group">
                <span class="material-symbols-outlined text-[18px] align-text-bottom mr-2 text-primary transition-colors">person</span> Profil Admin
            </button>
            <button id="btn-tab-tarif" onclick="changeTab('tab-tarif')" class="settings-btn w-full text-left px-5 py-3.5 rounded-2xl text-text-muted hover:text-text-main hover:bg-white font-medium transition-all group border border-transparent">
                <span class="material-symbols-outlined text-[18px] align-text-bottom mr-2 text-slate-400 group-hover:text-text-main transition-colors">sell</span> Tarif & Kuota
            </button>
            <button id="btn-tab-integrasi" onclick="changeTab('tab-integrasi')" class="settings-btn w-full text-left px-5 py-3.5 rounded-2xl text-text-muted hover:text-text-main hover:bg-white font-medium transition-all group border border-transparent">
                <span class="material-symbols-outlined text-[18px] align-text-bottom mr-2 text-slate-400 group-hover:text-text-main transition-colors">account_balance_wallet</span> Integrasi Pembayaran
            </button>
            <button id="btn-tab-keamanan" onclick="changeTab('tab-keamanan')" class="settings-btn w-full text-left px-5 py-3.5 rounded-2xl text-text-muted hover:text-text-main hover:bg-white font-medium transition-all group border border-transparent">
                <span class="material-symbols-outlined text-[18px] align-text-bottom mr-2 text-slate-400 group-hover:text-text-main transition-colors">shield_lock</span> Keamanan
            </button>
        </div>

        <!-- Configurations Container -->
        <div class="w-full flex-1 relative min-h-[600px]">
            
            <!-- PANEL 1: PROFIL -->
            <div id="tab-profil" class="settings-panel block space-y-8 animate-[fadeIn_0.3s_ease-out]">
                <!-- Setup Base Profile -->
                <div class="bg-surface-card p-10 rounded-[2.5rem] shadow-float border border-border-subtle relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent z-0 opacity-50 pointer-events-none"></div>
                    <div class="relative z-10 flex flex-col sm:flex-row items-center sm:items-start gap-8">
                        <div class="relative">
                            <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-soft">
                                <img alt="User Photo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDi8nSxFtzi4lEFNgAtrIXFogS1XYBZbit0INpRQszJDRobMmaw1eSvRAvaugA7UD1egZN7o4EvLdOl6ki-DbqhkiR2chNilJxjHuu4Rd3_E7jv77MNX-mSXOBHcALODiiYc9jEsU9MieKTZQZUa24J9M240enaD1GBlaHwlJfHdPlD6IJyHlV6CMeFrgzMomb9XY3IxzP5XqMNRDcUi375Kg-bJflYwzJGKVLbweGKUNhYlfEaEJTY-m4ImAzXBD7yAd6UcJY3CYM" class="w-full h-full object-cover">
                            </div>
                            <button class="absolute -bottom-2 right-2 w-10 h-10 bg-white border border-border-subtle rounded-full flex items-center justify-center text-text-main hover:text-primary shadow-sm transition-all hover:scale-105">
                                <span class="material-symbols-outlined text-[18px]">add_a_photo</span>
                            </button>
                        </div>
                        <div class="flex-1 w-full sm:w-auto">
                            <h3 class="text-xl font-bold font-headline mb-6 text-text-main border-b border-border-subtle pb-4">Informasi Personal</h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Nama Pengguna</label>
                                    <input type="text" value="Budi Santoso" class="w-full px-4 py-3 bg-surface border border-slate-200 rounded-xl focus:ring-4 focus:ring-primary/10 focus:border-primary text-sm font-bold text-text-main outline-none transition-all">
                                </div>
                                <div>
                                    <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Email Address</label>
                                    <input type="email" value="budi.admin@parkirpro.com" class="w-full px-4 py-3 bg-surface border border-slate-200 rounded-xl focus:ring-4 focus:ring-primary/10 focus:border-primary text-sm font-bold text-text-main outline-none transition-all">
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Akses Area (Read-only)</label>
                                    <div class="px-4 py-3 bg-slate-50 border border-slate-100 rounded-xl flex items-center justify-between opacity-70">
                                        <span class="text-sm font-bold text-slate-500">Terminal A (Gerbang Utara & Selatan)</span>
                                        <span class="material-symbols-outlined text-[18px] text-slate-400">lock</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- UI Display Preferences -->
                <div class="bg-surface-card p-10 rounded-[2.5rem] shadow-soft border border-border-subtle">
                    <h3 class="text-xl font-bold font-headline mb-6 text-text-main border-b border-border-subtle pb-4">Akses & Integrasi Perangkat</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-5 border border-border-subtle rounded-2xl hover:border-primary/50 transition-colors">
                            <div class="flex items-center gap-4">
                                <span class="p-3 bg-blue-50 text-primary rounded-xl material-symbols-outlined">api</span>
                                <div>
                                    <h4 class="font-bold text-text-main text-sm">Sinkronisasi Database Cloud</h4>
                                    <p class="text-xs text-text-muted mt-0.5">Mem-backup setiap transaksi per jam ke aws S3.</p>
                                </div>
                            </div>
                            <button class="w-12 h-6 bg-primary rounded-full relative transition-colors shadow-inner">
                                <span class="absolute right-1 top-1 w-4 h-4 bg-white rounded-full transition-transform"></span>
                            </button>
                        </div>
                        
                        <div class="flex items-center justify-between p-5 border border-border-subtle rounded-2xl hover:border-primary/50 transition-colors">
                            <div class="flex items-center gap-4">
                                <span class="p-3 bg-emerald-50 text-emerald-500 rounded-xl material-symbols-outlined">receipt</span>
                                <div>
                                    <h4 class="font-bold text-text-main text-sm">Auto-cetak E-Tiket Masuk</h4>
                                    <p class="text-xs text-text-muted mt-0.5">Membypass konfirmasi tambahan sebelum print PDF.</p>
                                </div>
                            </div>
                            <button class="w-12 h-6 bg-primary rounded-full relative transition-colors shadow-inner">
                                <span class="absolute right-1 top-1 w-4 h-4 bg-white rounded-full transition-transform"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PANEL 2: TARIF & KUOTA -->
            <div id="tab-tarif" class="settings-panel hidden space-y-8">
                <div class="bg-surface-card p-10 rounded-[2.5rem] shadow-soft border border-border-subtle">
                    <h3 class="text-xl font-bold font-headline mb-2 text-text-main flex items-center gap-2">
                        Tarif Dasar Kendaraan
                        <span class="px-2 py-0.5 bg-emerald-50 text-emerald-600 text-[10px] uppercase tracking-widest rounded shadow-sm border border-emerald-100">Aktif</span>
                    </h3>
                    <p class="text-text-muted text-sm mb-6 border-b border-border-subtle pb-6">Konfigurasi tarif progresif yang akan dikalkulasi otomatis oleh sistem berdasarkan *scan in/out*.</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Mobil -->
                        <div class="space-y-4">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 bg-surface rounded-xl flex items-center justify-center border border-border-subtle">
                                    <span class="material-symbols-outlined text-text-main text-[20px]">directions_car</span>
                                </div>
                                <h4 class="font-bold text-text-main">Golongan Mobil</h4>
                            </div>
                            
                            <div>
                                <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Tarif 1 Jam Pertama</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-text-muted font-bold">Rp</span>
                                    <input type="text" value="5.000" class="w-full pl-12 pr-4 py-3 bg-surface border border-slate-200 rounded-xl focus:ring-4 focus:ring-primary/10 focus:border-primary text-sm font-bold text-text-main outline-none transition-all">
                                </div>
                            </div>
                            <div>
                                <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Tambahan Per Jam</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-text-muted font-bold">Rp</span>
                                    <input type="text" value="3.000" class="w-full pl-12 pr-4 py-3 bg-surface border border-slate-200 rounded-xl focus:ring-4 focus:ring-primary/10 focus:border-primary text-sm font-bold text-text-main outline-none transition-all">
                                </div>
                            </div>
                        </div>

                        <!-- Motor -->
                        <div class="space-y-4">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 bg-surface rounded-xl flex items-center justify-center border border-border-subtle">
                                    <span class="material-symbols-outlined text-text-main text-[20px]">two_wheeler</span>
                                </div>
                                <h4 class="font-bold text-text-main">Golongan Sepeda Motor</h4>
                            </div>
                            
                            <div>
                                <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Tarif Flat (Semua Jam)</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-text-muted font-bold">Rp</span>
                                    <input type="text" value="2.000" class="w-full pl-12 pr-4 py-3 bg-surface border border-slate-200 rounded-xl focus:ring-4 focus:ring-primary/10 focus:border-primary text-sm font-bold text-text-main outline-none transition-all">
                                </div>
                            </div>
                            <div class="opacity-50 pointer-events-none">
                                <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Tambahan Per Jam</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-text-muted font-bold">Rp</span>
                                    <input type="text" value="0" disabled class="w-full pl-12 pr-4 py-3 bg-slate-100 border border-slate-200 rounded-xl text-sm font-bold text-text-main outline-none">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-surface-card p-10 rounded-[2.5rem] shadow-soft border border-border-subtle">
                    <h3 class="text-xl font-bold font-headline mb-6 text-text-main border-b border-border-subtle pb-4">Kuota Ketersediaan Maksimal</h3>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Kapasitas Slot Mobil</label>
                            <input type="number" value="450" class="w-full px-4 py-3 bg-surface border border-slate-200 rounded-xl focus:ring-4 focus:ring-primary/10 focus:border-primary text-sm font-bold text-text-main outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Kapasitas Slot Motor</label>
                            <input type="number" value="1200" class="w-full px-4 py-3 bg-surface border border-slate-200 rounded-xl focus:ring-4 focus:ring-primary/10 focus:border-primary text-sm font-bold text-text-main outline-none transition-all">
                        </div>
                    </div>
                </div>
            </div>

            <!-- PANEL 3: INTEGRASI PEMBAYARAN -->
            <div id="tab-integrasi" class="settings-panel hidden space-y-8">
                <div class="bg-surface-card p-10 rounded-[2.5rem] shadow-soft border border-border-subtle">
                    <h3 class="text-xl font-bold font-headline mb-6 text-text-main border-b border-border-subtle pb-4">API Payment Gateway</h3>
                    
                    <div class="p-6 border border-primary/20 bg-blue-50/30 rounded-2xl mb-8 flex items-start gap-4">
                        <span class="material-symbols-outlined text-primary mt-0.5">info</span>
                        <div>
                            <p class="text-sm font-bold text-primary mb-1">Status Mode *Live/Production*</p>
                            <p class="text-xs text-text-main">API Keys di bawah ini akan digunakan untuk menghasilkan QRIS dinamis di setiap nota keluar. Pastikan Client Key benar.</p>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Midtrans Merchant ID</label>
                            <input type="text" value="G882910-PARKIRPRO-A" class="w-full px-4 py-3 bg-surface border border-slate-200 rounded-xl font-mono text-sm font-bold text-text-main outline-none transition-all focus:border-primary focus:ring-2 focus:ring-primary/20">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Client Key</label>
                            <input type="password" value="SB-Mid-client-XXXXX" class="w-full px-4 py-3 bg-surface border border-slate-200 rounded-xl font-mono text-sm shadow-inner text-text-main outline-none transition-all focus:border-primary focus:ring-2 focus:ring-primary/20">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Server Key</label>
                            <input type="password" value="SB-Mid-server-YYYYYYYYYYYYYYYYY" class="w-full px-4 py-3 bg-surface border border-slate-200 rounded-xl font-mono shadow-inner text-sm text-text-main outline-none transition-all focus:border-primary focus:ring-2 focus:ring-primary/20">
                        </div>
                    </div>
                </div>
            </div>

            <!-- PANEL 4: KEAMANAN -->
            <div id="tab-keamanan" class="settings-panel hidden space-y-8">
                <div class="bg-surface-card p-10 rounded-[2.5rem] shadow-soft border border-border-subtle">
                    <h3 class="text-xl font-bold font-headline mb-6 text-text-main">Ubah Kata Sandi</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="space-y-5">
                            <div>
                                <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Kata Sandi Saat Ini</label>
                                <input type="password" placeholder="••••••••" class="w-full px-4 py-3 bg-surface border border-slate-200 rounded-xl focus:ring-4 focus:ring-primary/10 focus:border-primary text-sm font-bold text-text-main outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Kata Sandi Baru</label>
                                <input type="password" placeholder="••••••••" class="w-full px-4 py-3 bg-surface border border-slate-200 rounded-xl focus:ring-4 focus:ring-primary/10 focus:border-primary text-sm font-bold text-text-main outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Ulangi Kata Sandi Baru</label>
                                <input type="password" placeholder="••••••••" class="w-full px-4 py-3 bg-surface border border-slate-200 rounded-xl focus:ring-4 focus:ring-primary/10 focus:border-primary text-sm font-bold text-text-main outline-none transition-all">
                            </div>
                            <div class="pt-2">
                                <button class="px-6 py-3 bg-text-main text-white font-bold rounded-xl hover:bg-black hover:shadow-float transition-all text-sm">Ganti Sandi</button>
                            </div>
                        </div>

                        <div class="bg-white border-2 border-dashed border-border-subtle p-6 rounded-2xl flex flex-col justify-center items-center text-center">
                            <div class="w-16 h-16 bg-blue-50 text-primary rounded-full flex items-center justify-center mb-4">
                                <span class="material-symbols-outlined text-3xl">fingerprint</span>
                            </div>
                            <h4 class="font-bold text-text-main mb-2">Log Keamanan 2FA</h4>
                            <p class="text-xs text-text-muted mb-6">Autentikasi dua faktor diwajibkan untuk admin tingkat area.</p>
                            <button class="px-5 py-2 border border-border-subtle text-text-main text-xs font-bold rounded-lg hover:bg-surface transition-colors shadow-sm">Setup OTP App</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global Action Bar -->
            <div class="pt-6 pb-20 flex justify-end gap-3 border-t border-border-subtle mt-8">
                <button class="px-8 py-4 text-text-main font-bold text-sm bg-white border border-border-subtle hover:bg-slate-50 transition-colors rounded-2xl">Batal</button>
                <button class="px-8 py-4 bg-text-main text-white font-bold text-sm rounded-2xl hover:bg-primary shadow-float hover:-translate-y-0.5 transition-all">
                    Simpan Seluruh Pengaturan
                </button>
            </div>
            
        </div>
    </div>
</div>
<?= $this->endSection() ?>
