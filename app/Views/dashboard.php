<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- Floating Stat Cards Row -->
<div class="grid grid-cols-1 md:grid-cols-4 mb-10 gap-6">
    <div class="bg-surface-card p-6 rounded-3xl border border-border-subtle shadow-soft hover:shadow-float transform hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group">
        <div class="absolute top-0 right-0 w-24 h-24 bg-primary/5 rounded-bl-full -z-0 group-hover:scale-110 transition-transform"></div>
        <p class="text-text-muted text-[10px] font-bold uppercase tracking-widest mb-2 relative z-10">Total Kendaraan</p>
        <h3 class="text-4xl font-extrabold text-text-main font-headline relative z-10">1,284</h3>
        <div class="mt-4 flex items-center text-emerald-500 text-xs font-bold bg-emerald-50 w-fit px-2 py-1 rounded relative z-10">
            <span class="material-symbols-outlined text-[14px] mr-1">trending_up</span> 14% naik
        </div>
    </div>
    
    <div class="bg-surface-card p-6 rounded-3xl border border-border-subtle shadow-soft hover:shadow-float transform hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group">
        <div class="absolute top-0 right-0 w-24 h-24 bg-red-500/5 rounded-bl-full -z-0 group-hover:scale-110 transition-transform"></div>
        <p class="text-text-muted text-[10px] font-bold uppercase tracking-widest mb-2 relative z-10">Slot Terisi</p>
        <h3 class="text-4xl font-extrabold text-text-main font-headline relative z-10">72%</h3>
        <div class="mt-4 w-full bg-surface h-2 rounded-full overflow-hidden relative z-10">
            <div class="bg-red-500 h-full w-[72%] rounded-full"></div>
        </div>
    </div>
    
    <div class="bg-surface-card p-6 rounded-3xl border border-border-subtle shadow-soft hover:shadow-float transform hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group md:col-span-2 bg-gradient-to-br from-primary to-blue-800 text-white">
        <!-- Pattern background for the primary card -->
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_1px_1px,white_1px,transparent_0)]" style="background-size: 16px 16px;"></div>
        
        <div class="relative z-10 flex justify-between items-center h-full">
            <div>
                <p class="text-blue-100 text-[10px] font-bold uppercase tracking-widest mb-2">Pendapatan Hari Ini</p>
                <h3 class="text-4xl font-extrabold text-white font-headline tracking-tight">Rp 5.240.000</h3>
                <div class="mt-4 flex items-center text-blue-100 text-xs font-medium">
                    <span class="material-symbols-outlined text-[14px] mr-1">verified</span> Target tercapai
                </div>
            </div>
            <div class="hidden sm:flex items-center justify-center w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl rotate-12 group-hover:rotate-0 transition-transform duration-500">
                <span class="material-symbols-outlined text-white text-3xl" style="font-variation-settings: 'FILL' 1;">account_balance_wallet</span>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Park Map Section -->
    <div class="lg:col-span-2">
        <div class="bg-surface-card rounded-3xl border border-border-subtle shadow-soft overflow-hidden h-full flex flex-col">
            <div class="p-8 border-b border-border-subtle flex justify-between items-center bg-white/50 backdrop-blur-sm sticky top-0 z-10">
                <div>
                    <h3 class="text-xl font-bold font-headline text-text-main">Peta Slot Parkir Logis</h3>
                    <p class="text-sm text-text-muted mt-1 font-medium">Live monitoring Lantai 1 (A & B)</p>
                </div>
                <div class="flex items-center gap-2 bg-surface p-1.5 rounded-xl border border-border-subtle">
                    <button class="px-4 py-1.5 bg-white shadow-sm rounded-lg text-xs font-bold text-text-main">Lantai 1</button>
                    <button class="px-4 py-1.5 rounded-lg text-xs font-bold text-text-muted hover:text-text-main transition-colors">Lantai 2</button>
                </div>
            </div>
            <div class="p-8 bg-surface flex-1 flex flex-col gap-6">
                <!-- Zone A -->
                <div class="mb-4">
                    <h4 class="text-xs font-bold text-text-muted uppercase tracking-widest mb-4 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-primary ring-4 ring-primary/20"></span> Zona A (Premium)
                    </h4>
                    <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-6 gap-3">
                        <div class="aspect-square rounded-2xl bg-white border-2 border-border-subtle flex items-center justify-center shadow-sm relative group cursor-pointer hover:border-primary transition-colors">
                            <span class="text-sm font-bold text-text-muted">A1</span>
                            <div class="absolute inset-0 bg-primary rounded-xl m-1 opacity-0 group-hover:opacity-10 transition-opacity"></div>
                        </div>
                        <div class="aspect-square rounded-2xl bg-white border-2 border-red-500/50 flex flex-col items-center justify-center shadow-sm relative cursor-not-allowed">
                            <span class="material-symbols-outlined text-red-500 text-xl mb-1">directions_car</span>
                            <span class="text-[10px] font-bold text-red-500">A2</span>
                        </div>
                        <div class="aspect-square rounded-2xl bg-white border-2 border-red-500/50 flex flex-col items-center justify-center shadow-sm relative cursor-not-allowed">
                            <span class="material-symbols-outlined text-red-500 text-xl mb-1">directions_car</span>
                            <span class="text-[10px] font-bold text-red-500">A3</span>
                        </div>
                        <div class="aspect-square rounded-2xl bg-white border-2 border-border-subtle flex items-center justify-center shadow-sm relative group cursor-pointer hover:border-primary transition-colors">
                            <span class="text-sm font-bold text-text-muted">A4</span>
                        </div>
                        <div class="aspect-square rounded-2xl bg-white border-2 border-border-subtle flex items-center justify-center shadow-sm relative group cursor-pointer hover:border-primary transition-colors">
                            <span class="text-sm font-bold text-text-muted">A5</span>
                        </div>
                        <div class="aspect-square rounded-2xl bg-surface border-2 border-dashed border-border-subtle flex flex-col items-center justify-center text-text-muted cursor-not-allowed">
                            <span class="material-symbols-outlined text-xl mb-1 opacity-50">build</span>
                            <span class="text-[10px] font-bold">MTO</span>
                        </div>
                    </div>
                </div>

                <!-- Zone B -->
                <div>
                    <h4 class="text-xs font-bold text-text-muted uppercase tracking-widest mb-4 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 ring-4 ring-emerald-500/20"></span> Zona B (Reguler)
                    </h4>
                    <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-6 gap-3">
                        <div class="aspect-square rounded-2xl bg-white border-2 border-border-subtle flex items-center justify-center shadow-sm relative group cursor-pointer hover:border-primary transition-colors">
                            <span class="text-sm font-bold text-text-muted">B1</span>
                        </div>
                        <div class="aspect-square rounded-2xl bg-white border-2 border-red-500/50 flex flex-col items-center justify-center shadow-sm relative cursor-not-allowed">
                            <span class="material-symbols-outlined text-red-500 text-xl mb-1">two_wheeler</span>
                            <span class="text-[10px] font-bold text-red-500">B2</span>
                        </div>
                        <div class="aspect-square rounded-2xl bg-white border-2 border-border-subtle flex items-center justify-center shadow-sm relative group cursor-pointer hover:border-primary transition-colors">
                            <span class="text-sm font-bold text-text-muted">B3</span>
                        </div>
                        <div class="aspect-square rounded-2xl bg-white border-2 border-border-subtle flex items-center justify-center shadow-sm relative group cursor-pointer hover:border-primary transition-colors">
                            <span class="text-sm font-bold text-text-muted">B4</span>
                        </div>
                        <div class="aspect-square rounded-2xl bg-white border-2 border-border-subtle flex items-center justify-center shadow-sm relative group cursor-pointer hover:border-primary transition-colors">
                            <span class="text-sm font-bold text-text-muted">B5</span>
                        </div>
                        <div class="aspect-square rounded-2xl bg-white border-2 border-border-subtle flex items-center justify-center shadow-sm relative group cursor-pointer hover:border-primary transition-colors">
                            <span class="text-sm font-bold text-text-muted">B6</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 border-t border-border-subtle bg-white/50 backdrop-blur-sm flex justify-center gap-6">
                <div class="flex items-center gap-2 text-xs font-bold text-text-muted"><div class="w-3 h-3 border-2 border-border-subtle rounded-md bg-white"></div> Tersedia</div>
                <div class="flex items-center gap-2 text-xs font-bold text-text-muted"><div class="w-3 h-3 border-2 border-red-500/50 rounded-md bg-white"></div> Terisi</div>
                <div class="flex items-center gap-2 text-xs font-bold text-text-muted"><div class="w-3 h-3 border-2 border-primary/50 bg-primary/10 rounded-md"></div> Dipesan</div>
            </div>
        </div>
    </div>

    <!-- Live Transactions Column -->
    <div class="lg:col-span-1">
        <div class="bg-surface-card rounded-3xl border border-border-subtle shadow-soft overflow-hidden flex flex-col h-full">
            <div class="p-6 border-b border-border-subtle flex justify-between items-center bg-white/50 backdrop-blur-sm sticky top-0 z-10">
                <h3 class="text-lg font-bold font-headline text-text-main flex items-center gap-2">
                    <span class="relative flex h-2 w-2">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    Aktivitas Teras
                </h3>
            </div>
            
            <div class="p-6 flex-1 bg-surface font-medium space-y-4">
                
                <div class="bg-white p-4 rounded-2xl border border-border-subtle shadow-sm hover:-translate-y-0.5 transition-transform duration-200">
                    <div class="flex justify-between items-start mb-2">
                        <span class="px-2 py-0.5 bg-blue-50 text-primary text-[10px] font-bold rounded uppercase tracking-widest">Masuk</span>
                        <span class="text-xs text-text-muted">Baru saja</span>
                    </div>
                    <p class="text-sm font-bold text-text-main font-mono">B 1234 ABC</p>
                    <p class="text-xs text-text-muted mt-1">Mobil - Gate Utara 1</p>
                </div>

                <div class="bg-white p-4 rounded-2xl border border-border-subtle shadow-sm hover:-translate-y-0.5 transition-transform duration-200">
                    <div class="flex justify-between items-start mb-2">
                        <span class="px-2 py-0.5 bg-emerald-50 text-emerald-600 text-[10px] font-bold rounded uppercase tracking-widest">Keluar</span>
                        <span class="text-xs text-text-muted">2 mnt yll</span>
                    </div>
                    <p class="text-sm font-bold text-text-main font-mono">D 889 UI</p>
                    <p class="text-xs text-text-muted mt-1">Motor - Pembayaran: QRIS</p>
                </div>

                <div class="bg-white p-4 rounded-2xl border border-border-subtle shadow-sm hover:-translate-y-0.5 transition-transform duration-200">
                    <div class="flex justify-between items-start mb-2">
                        <span class="px-2 py-0.5 bg-blue-50 text-primary text-[10px] font-bold rounded uppercase tracking-widest">Masuk</span>
                        <span class="text-xs text-text-muted">8 mnt yll</span>
                    </div>
                    <p class="text-sm font-bold text-text-main font-mono">F 2021 XYZ</p>
                    <p class="text-xs text-text-muted mt-1">Mobil - Gate Selatan</p>
                </div>
                
                 <div class="bg-white p-4 rounded-2xl border border-border-subtle shadow-sm opacity-60">
                    <div class="flex justify-between items-start mb-2">
                        <span class="px-2 py-0.5 bg-red-50 text-red-600 text-[10px] font-bold rounded uppercase tracking-widest">Gagal</span>
                        <span class="text-xs text-text-muted">15 mnt yll</span>
                    </div>
                    <p class="text-sm font-bold text-text-main font-mono">Tidak Terbaca</p>
                    <p class="text-xs text-text-muted mt-1">CCTV Gate Utara 2 Error</p>
                </div>

            </div>
            
            <a href="<?= site_url('/riwayat') ?>" class="p-4 text-center text-sm font-bold text-primary hover:bg-primary-light transition-colors bg-white/50 backdrop-blur-sm border-t border-border-subtle">
                Lihat Semua Riwayat
            </a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
