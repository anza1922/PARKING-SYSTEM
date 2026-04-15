<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="max-w-6xl mx-auto">
    <!-- Page Header Section Minimalist -->
    <div class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <div class="inline-flex items-center justify-center w-16 h-16 bg-red-50 text-red-500 rounded-2xl mb-4 shadow-sm">
                <span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1;">logout</span>
            </div>
            <h1 class="text-4xl font-extrabold text-text-main tracking-tight font-headline">Checkout Kendaraan</h1>
            <p class="text-text-muted mt-2 text-sm max-w-xl leading-relaxed">Verifikasi plat nomor dan kelola penyelesaian pembayaran untuk pelanggan.</p>
        </div>
        
        <div class="flex gap-3">
            <div class="bg-white px-4 py-2 rounded-xl shadow-sm border border-border-subtle flex items-center gap-3">
                <span class="relative flex h-3 w-3">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                </span>
                <span class="text-xs font-bold text-text-main">Gate Aktif</span>
            </div>
        </div>
    </div>

    <!-- Interface Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- Verifikasi & Input Area -->
        <div class="lg:col-span-7 space-y-8">
            
            <div class="bg-surface-card p-8 md:p-10 rounded-[2rem] shadow-float border border-border-subtle relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-br from-surface to-transparent opacity-50 z-0 pointer-events-none"></div>
                <!-- Identify -->
                <div class="relative z-10 flex items-center mb-8">
                    <div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center mr-4">
                        <span class="material-symbols-outlined text-primary font-bold">search</span>
                    </div>
                    <h3 class="text-xl font-bold font-headline text-text-main">Pencarian Unit</h3>
                </div>
                
                <div class="relative z-10 space-y-6">
                    <div>
                        <label class="block text-[11px] font-bold text-text-muted mb-2 uppercase tracking-widest">Plat Nomor (License Plate)</label>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <input class="flex-1 px-6 py-4 bg-white border border-slate-200 rounded-2xl text-2xl font-mono font-bold text-text-main focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all uppercase placeholder:text-slate-300 shadow-inner" placeholder="B 1234 ABC" type="text" value="B 4422 KLP"/>
                            <button class="px-8 py-4 bg-text-main text-white font-bold rounded-2xl hover:bg-slate-800 hover:-translate-y-0.5 transition-all shadow-sm flex items-center justify-center">
                                Hitung Biaya
                            </button>
                        </div>
                    </div>
                    
                    <div class="pt-6 border-t border-border-subtle grid grid-cols-2 gap-4">
                        <div class="p-5 bg-surface rounded-2xl border border-white">
                            <p class="text-[10px] font-bold text-text-muted uppercase tracking-widest mb-1">Masuk</p>
                            <p class="text-lg font-extrabold text-text-main">14:32</p>
                            <p class="text-xs text-text-muted font-medium">14 Okt 2023</p>
                        </div>
                        <div class="p-5 bg-surface rounded-2xl border border-white">
                            <p class="text-[10px] font-bold text-text-muted uppercase tracking-widest mb-1">Keluar (Sekarang)</p>
                            <p class="text-lg font-extrabold text-text-main">16:45</p>
                            <p class="text-xs text-text-muted font-medium">14 Okt 2023</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-surface-card p-8 rounded-[2rem] shadow-soft hover:shadow-float transition-shadow border border-border-subtle relative overflow-hidden">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-bold font-headline text-text-main">Verifikasi Kamera Gate</h3>
                    <span class="px-3 py-1.5 bg-emerald-50 text-emerald-600 text-[10px] font-bold rounded-lg tracking-widest uppercase border border-emerald-100">MATCH 98%</span>
                </div>
                <!-- Minimalist Image Display -->
                <div class="aspect-video w-full rounded-2xl bg-slate-900 flex items-center justify-center overflow-hidden relative shadow-inner group">
                    <img class="w-full h-full object-cover opacity-70 group-hover:opacity-90 transition-opacity duration-500 scale-105 group-hover:scale-100" data-alt="close up high resolution image of a car license plate at a parking exit gate under bright security lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPLbH5Dw7NE5Com6mcH750lTxASir7XVa5x09D-zTP6eBCVj0K_HNqkPC3RukyCkOvyoDQksP_7rlJENY8qEWAP81XpBX-FBPx7pFa_s2qLI5svbk_3RHGF_5ct7Ahab4X1C1c02HvnQFbIOFYthRMENRBc_9BK0YfuFV2KD68KwkGY9arkQMnICg3SrPcV4DGgmndBSL31klTHYeyMBUAV_OR5Edp62XBDWJuPmRr6loR05JXmI95DdgnFkHGzYo3UsHN0zhSGmc"/>
                    
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <div class="w-1/2 h-1/3 border border-emerald-400/80 rounded block shadow-[0_0_15px_rgba(52,211,153,0.3)]"></div>
                    </div>
                    
                    <div class="absolute bottom-6 left-6 bg-black/50 backdrop-blur-md px-4 py-2 rounded-xl text-white">
                        <p class="font-mono text-xs tracking-widest font-bold">DETECT: B 4422 KLP</p>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- Checkout / Payment Column -->
        <div class="lg:col-span-5 relative">
            <div class="bg-surface-card rounded-[2rem] shadow-float border border-border-subtle overflow-hidden sticky top-28 flex flex-col">
                
                <div class="p-8 pb-6 border-b border-border-subtle bg-white">
                    <h3 class="text-xl font-bold font-headline mb-6 text-text-main flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">receipt_long</span> Rincian Tagihan
                    </h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center bg-surface p-3 rounded-xl border border-white">
                            <span class="text-text-muted text-sm font-medium">Durasi Menginap</span>
                            <span class="font-bold text-text-main">2 Jam 13 Menit</span>
                        </div>
                        <div class="flex justify-between items-center px-2 py-1">
                            <span class="text-text-muted text-sm font-medium">Tarif Dasar (1 Jam)</span>
                            <span class="font-bold text-text-main">Rp 5.000</span>
                        </div>
                        <div class="flex justify-between items-center px-2 py-1 border-b border-dashed border-border-subtle pb-4">
                            <span class="text-text-muted text-sm font-medium">Tarif Lanjut (1 Jam 13 Menit)</span>
                            <span class="font-bold text-text-main">Rp 9.000</span>
                        </div>
                        <div class="flex justify-between items-center px-2 py-1 pt-2">
                            <span class="text-text-muted text-sm font-bold uppercase tracking-widest text-[10px]">Subtotal Biaya</span>
                            <span class="font-extrabold text-primary">Rp 14.000</span>
                        </div>
                    </div>
                </div>
                
                <!-- Payment methods minimalist selectors -->
                <div class="p-8 py-6 bg-surface">
                    <p class="text-[10px] font-bold text-text-muted uppercase tracking-widest mb-4">Metode Bayar</p>
                    <div class="grid grid-cols-3 gap-3">
                        <label class="cursor-pointer relative group">
                            <input type="radio" name="payment" class="peer sr-only">
                            <div class="p-3 bg-white border-2 border-slate-200 rounded-xl flex flex-col items-center justify-center peer-checked:border-primary peer-checked:bg-primary-light transition-all shadow-sm">
                                <span class="material-symbols-outlined text-text-muted peer-checked:text-primary mb-1 text-[22px]">account_balance_wallet</span>
                                <span class="text-[10px] font-bold text-text-main uppercase tracking-widest">E-Money</span>
                            </div>
                        </label>
                        <label class="cursor-pointer relative group">
                            <input type="radio" name="payment" class="peer sr-only" checked>
                            <div class="p-3 bg-white border-2 border-slate-200 rounded-xl flex flex-col items-center justify-center peer-checked:border-primary peer-checked:bg-primary-light transition-all shadow-sm">
                                <span class="material-symbols-outlined text-text-muted peer-checked:text-primary mb-1 text-[22px]">payments</span>
                                <span class="text-[10px] font-bold text-text-main uppercase tracking-widest">Tunai</span>
                            </div>
                        </label>
                        <label class="cursor-pointer relative group">
                            <input type="radio" name="payment" class="peer sr-only">
                            <div class="p-3 bg-white border-2 border-slate-200 rounded-xl flex flex-col items-center justify-center peer-checked:border-primary peer-checked:bg-primary-light transition-all shadow-sm">
                                <span class="material-symbols-outlined text-text-muted peer-checked:text-primary mb-1 text-[22px]">qr_code_2</span>
                                <span class="text-[10px] font-bold text-text-main uppercase tracking-widest">QRIS</span>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="p-8 bg-text-main text-white relative overflow-hidden">
                    <!-- Subtle background decoration -->
                    <div class="absolute -right-6 -bottom-6 w-32 h-32 bg-white/5 rounded-full blur-2xl"></div>
                    
                    <div class="flex justify-between items-end mb-8 relative z-10">
                        <div>
                            <p class="text-[10px] text-slate-400 font-bold tracking-widest uppercase mb-1">Total Tagihan</p>
                            <p class="text-4xl font-black font-headline tracking-tighter">Rp 14.000</p>
                        </div>
                    </div>
                    
                    <div class="space-y-3 relative z-10">
                        <button class="w-full py-4 bg-primary text-white rounded-xl font-bold text-sm shadow-float hover:bg-primary-hover transform hover:-translate-y-0.5 transition-all flex justify-center items-center gap-2">
                            Konfirmasi & Buka Gate
                            <span class="material-symbols-outlined text-[18px]">lock_open</span>
                        </button>
                        <button class="w-full py-4 text-slate-300 bg-white/5 hover:bg-white/10 rounded-xl font-bold text-sm transition-colors backdrop-blur-sm">
                            Batalkan Transaksi
                        </button>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</div>
<?= $this->endSection() ?>
