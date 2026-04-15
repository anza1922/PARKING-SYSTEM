<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="max-w-6xl mx-auto">
    <!-- Header minimal -->
    <div class="mb-10 lg:flex items-end justify-between">
        <div>
            <h1 class="text-4xl font-extrabold text-text-main font-headline tracking-tight">Riwayat Transaksi</h1>
            <p class="text-text-muted mt-2 text-sm max-w-xl">Lacak riwayat lengkap keluar-masuk kendaraan, ekspor laporan, dan lihat analitik.</p>
        </div>
        <div class="mt-6 lg:mt-0 flex gap-3">
            <button class="px-5 py-2.5 bg-white border border-border-subtle rounded-xl text-xs font-bold text-text-main hover:bg-surface shadow-sm inline-flex items-center gap-2 transition-colors">
                <span class="material-symbols-outlined text-[16px]">print</span> Print Laporan
            </button>
            <button class="px-5 py-2.5 bg-primary text-white rounded-xl text-xs font-bold shadow-soft hover:shadow-float hover:-translate-y-0.5 transition-all inline-flex items-center gap-2">
                <span class="material-symbols-outlined text-[16px]">file_download</span> Ekspor CSV
            </button>
        </div>
    </div>

    <!-- Stats Overview minimal -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 justify-center rounded-[1.5rem] border border-border-subtle shadow-sm hover:shadow-soft transition-all">
            <p class="text-text-muted text-[10px] font-bold uppercase tracking-widest mb-2">Total Transaksi</p>
            <h3 class="text-3xl font-extrabold font-headline">1,284</h3>
        </div>
        <div class="bg-white p-6 justify-center rounded-[1.5rem] border border-border-subtle shadow-sm hover:shadow-soft transition-all">
            <p class="text-text-muted text-[10px] font-bold uppercase tracking-widest mb-2">Pemasukan Kotor</p>
            <h3 class="text-3xl font-extrabold font-headline text-primary">4.5M</h3>
        </div>
        <div class="bg-white p-6 justify-center rounded-[1.5rem] border border-border-subtle shadow-sm hover:shadow-soft transition-all">
            <p class="text-text-muted text-[10px] font-bold uppercase tracking-widest mb-2">Rata Durasi</p>
            <h3 class="text-3xl font-extrabold font-headline">3j 45m</h3>
        </div>
        <div class="bg-white p-6 justify-center rounded-[1.5rem] border border-border-subtle shadow-sm hover:shadow-soft transition-all">
            <p class="text-text-muted text-[10px] font-bold uppercase tracking-widest mb-2">Persentase Sukses</p>
            <h3 class="text-3xl font-extrabold font-headline text-emerald-500">99.2%</h3>
        </div>
    </div>

    <!-- Filter Bar Floating -->
    <div class="bg-white/80 backdrop-blur-xl p-4 rounded-2xl border border-border-subtle shadow-sm mb-6 flex flex-wrap lg:flex-nowrap items-center justify-between gap-4 sticky top-20 z-30">
        <div class="flex flex-wrap items-center gap-4 w-full lg:w-auto">
            <div class="relative group">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-400 text-[18px]">search</span>
                <input class="pl-10 pr-4 py-2 bg-surface rounded-xl text-xs font-medium w-full sm:w-48 outline-none focus:ring-2 focus:ring-primary/20 border border-transparent transition-all" placeholder="Cari Plat..." type="text">
            </div>
            
            <div class="h-8 w-px bg-slate-200 hidden sm:block"></div>
            
            <select class="px-4 py-2 bg-surface text-text-main font-medium border border-transparent rounded-xl text-xs outline-none focus:ring-2 focus:ring-primary/20 transition-all cursor-pointer">
                <option>Semua Status</option>
                <option>Selesai</option>
                <option>Berlangsung</option>
            </select>
            
            <select class="px-4 py-2 bg-surface text-text-main font-medium border border-transparent rounded-xl text-xs outline-none focus:ring-2 focus:ring-primary/20 transition-all cursor-pointer">
                <option>Hari Ini</option>
                <option>7 Hari Terakhir</option>
                <option>Bulan Ini</option>
            </select>
        </div>
        
        <button class="px-4 py-2 bg-text-main text-white rounded-xl text-xs font-bold hover:bg-slate-800 transition-colors hidden lg:block">
            Terapkan
        </button>
    </div>

    <!-- Transaction List Minimalist Clean (Spaced Cards) -->
    <div>
        <!-- Data Headers (Desktop Only) -->
        <div class="hidden lg:grid grid-cols-12 gap-4 px-8 py-4 mb-3 text-[10px] font-bold text-text-muted uppercase tracking-widest bg-surface/80 backdrop-blur-sm rounded-2xl border border-border-subtle sticky top-40 z-20">
            <div class="col-span-2">ID Transaksi</div>
            <div class="col-span-2">Kendaraan & Plat</div>
            <div class="col-span-3">Jadwal Masuk - Keluar</div>
            <div class="col-span-2">Durasi</div>
            <div class="col-span-2">Tarif Akhir</div>
            <div class="col-span-1 text-right">Status</div>
        </div>

        <!-- Spaced Cards Container -->
        <div class="space-y-4">
            
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-float hover:-translate-y-1 hover:border-primary/30 transition-all p-6 lg:p-4 lg:px-8 group">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-4 items-start lg:items-center">
                    <div class="col-span-1 lg:col-span-2">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">ID Transaksi</span>
                        <span class="text-sm font-bold text-text-main group-hover:text-primary transition-colors">#TRX-9921</span>
                    </div>
                    <div class="col-span-1 lg:col-span-2">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">Kendaraan & Plat</span>
                        <div class="flex flex-col">
                            <span class="font-mono font-bold text-sm bg-surface w-fit px-2 py-0.5 rounded border border-slate-200">B 1234 ABC</span>
                            <span class="text-[10px] font-bold text-text-muted mt-1 uppercase">Mobil Standar</span>
                        </div>
                    </div>
                    <div class="col-span-1 lg:col-span-3">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">Waktu</span>
                        <div class="flex items-center gap-2 text-xs">
                            <span class="px-2 py-1 bg-surface rounded shadow-inner text-text-main font-bold">08:30 <span class="text-text-muted font-normal ml-1">12 Okt</span></span>
                            <span class="material-symbols-outlined text-slate-300 text-[16px]">arrow_forward</span>
                            <span class="px-2 py-1 bg-surface rounded shadow-inner text-text-muted font-medium">12:45 <span class="text-slate-300 ml-1">12 Okt</span></span>
                        </div>
                    </div>
                    <div class="col-span-1 lg:col-span-2">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">Durasi</span>
                        <span class="text-sm font-bold text-text-main p-2 bg-blue-50/50 rounded-lg">4j 15m</span>
                    </div>
                    <div class="col-span-1 lg:col-span-2">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">Tarif</span>
                        <span class="text-sm font-extrabold text-text-main">Rp 25.000</span>
                    </div>
                    <div class="col-span-1 text-left lg:text-right">
                        <span class="inline-flex items-center px-3 py-1.5 rounded-lg text-[10px] font-bold tracking-widest bg-emerald-50 text-emerald-600 uppercase border border-emerald-100 shadow-sm">Selesai</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-float hover:-translate-y-1 hover:border-primary/30 transition-all p-6 lg:p-4 lg:px-8 group">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-4 items-start lg:items-center">
                    <div class="col-span-1 lg:col-span-2">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">ID Transaksi</span>
                        <span class="text-sm font-bold text-text-main group-hover:text-primary transition-colors">#TRX-9920</span>
                    </div>
                    <div class="col-span-1 lg:col-span-2">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">Kendaraan & Plat</span>
                        <div class="flex flex-col">
                            <span class="font-mono font-bold text-sm bg-surface w-fit px-2 py-0.5 rounded border border-slate-200">D 889 UI</span>
                            <span class="text-[10px] font-bold text-text-muted mt-1 uppercase">Sepeda Motor</span>
                        </div>
                    </div>
                    <div class="col-span-1 lg:col-span-3">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">Waktu</span>
                        <div class="flex items-center gap-2 text-xs">
                            <span class="px-2 py-1 bg-surface rounded shadow-inner text-text-main font-bold">09:15 <span class="text-text-muted font-normal ml-1">12 Okt</span></span>
                            <span class="material-symbols-outlined text-slate-300 text-[16px]">arrow_forward</span>
                            <span class="px-2 py-1 bg-surface rounded shadow-inner text-text-muted font-medium">10:00 <span class="text-slate-300 ml-1">12 Okt</span></span>
                        </div>
                    </div>
                    <div class="col-span-1 lg:col-span-2">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">Durasi</span>
                        <span class="text-sm font-bold text-text-main p-2 bg-blue-50/50 rounded-lg">45m</span>
                    </div>
                    <div class="col-span-1 lg:col-span-2">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">Tarif</span>
                        <span class="text-sm font-extrabold text-text-main">Rp 5.000</span>
                    </div>
                    <div class="col-span-1 text-left lg:text-right">
                        <span class="inline-flex items-center px-3 py-1.5 rounded-lg text-[10px] font-bold tracking-widest bg-emerald-50 text-emerald-600 uppercase border border-emerald-100 shadow-sm">Selesai</span>
                    </div>
                </div>
            </div>

            <!-- Card 3 Active -->
            <div class="bg-blue-50/30 rounded-2xl border border-primary/30 shadow-sm hover:shadow-float hover:-translate-y-1 hover:border-primary/60 transition-all p-6 lg:p-4 lg:px-8 group relative">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-4 items-start lg:items-center">
                    <div class="col-span-1 lg:col-span-2 relative">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">ID Transaksi</span>
                        <div class="flex items-center gap-2">
                            <span class="text-sm font-bold text-primary group-hover:underline cursor-pointer">#TRX-9919</span>
                            <div class="w-2 h-2 rounded-full bg-primary animate-pulse"></div>
                        </div>
                    </div>
                    <div class="col-span-1 lg:col-span-2">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">Kendaraan & Plat</span>
                        <div class="flex flex-col">
                            <span class="font-mono font-bold text-sm bg-white w-fit px-2 py-0.5 rounded border border-primary/20 text-primary">F 2021 XYZ</span>
                            <span class="text-[10px] font-bold text-text-muted mt-1 uppercase">Mobil MPV</span>
                        </div>
                    </div>
                    <div class="col-span-1 lg:col-span-3">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">Waktu</span>
                        <div class="flex items-center gap-2 text-xs">
                            <span class="px-2 py-1 bg-white rounded shadow-inner text-text-main font-bold border border-slate-100">07:00 <span class="text-text-muted font-normal ml-1">12 Okt</span></span>
                            <span class="material-symbols-outlined text-slate-300 text-[16px]">arrow_forward</span>
                            <span class="text-primary font-bold italic text-[11px] bg-white px-2 py-1 rounded border border-primary/20 shadow-sm">Menunggu...</span>
                        </div>
                    </div>
                    <div class="col-span-1 lg:col-span-2">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">Durasi</span>
                        <span class="text-sm font-bold text-primary p-2 bg-white rounded-lg border border-primary/10 shadow-sm">5j 45m</span>
                    </div>
                    <div class="col-span-1 lg:col-span-2">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">Tarif</span>
                        <span class="text-sm font-bold text-text-muted italic">Diproses</span>
                    </div>
                    <div class="col-span-1 text-left lg:text-right">
                        <span class="inline-flex items-center px-3 py-1.5 rounded-lg text-[10px] font-bold tracking-widest bg-primary text-white uppercase shadow-sm">Aktif</span>
                    </div>
                </div>
            </div>

            <!-- Card 4 Err -->
            <div class="bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-float hover:-translate-y-1 hover:border-red-300 transition-all p-6 lg:p-4 lg:px-8 group opacity-75 hover:opacity-100">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-4 items-start lg:items-center">
                    <div class="col-span-1 lg:col-span-2">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">ID Transaksi</span>
                        <span class="text-sm font-bold text-text-main transition-colors line-through">#TRX-9918</span>
                    </div>
                    <div class="col-span-1 lg:col-span-2">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">Kendaraan & Plat</span>
                        <div class="flex flex-col">
                            <span class="font-mono font-bold text-sm bg-surface w-fit px-2 py-0.5 rounded border border-slate-200">B 55 KK</span>
                            <span class="text-[10px] font-bold text-text-muted mt-1 uppercase">Motor Besar</span>
                        </div>
                    </div>
                    <div class="col-span-1 lg:col-span-3">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">Waktu</span>
                        <div class="flex items-center gap-2 text-xs">
                            <span class="px-2 py-1 bg-surface rounded shadow-inner text-text-muted font-medium">06:10</span>
                            <span class="material-symbols-outlined text-slate-300 text-[16px]">arrow_forward</span>
                            <span class="px-2 py-1 bg-surface rounded shadow-inner text-text-muted font-medium">06:15</span>
                        </div>
                    </div>
                    <div class="col-span-1 lg:col-span-2">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">Durasi</span>
                        <span class="text-sm font-bold text-text-muted">Batal (5m)</span>
                    </div>
                    <div class="col-span-1 lg:col-span-2">
                        <span class="text-xs lg:hidden font-bold text-text-muted uppercase tracking-widest mb-1 block">Tarif</span>
                        <span class="text-sm font-bold text-text-muted">-</span>
                    </div>
                    <div class="col-span-1 text-left lg:text-right">
                        <span class="inline-flex items-center px-3 py-1.5 rounded-lg text-[10px] font-bold tracking-widest bg-red-50 text-red-600 uppercase border border-red-100 shadow-sm">Dibatalkan</span>
                    </div>
                </div>
            </div>

        </div>
        
        <!-- Clean Pagination -->
        <div class="bg-white rounded-2xl shadow-sm px-8 py-5 flex flex-col md:flex-row items-center justify-between border border-border-subtle mt-8">
            <div class="text-[11px] font-bold uppercase tracking-widest text-text-muted mb-4 md:mb-0">
                Menampilkan 1-10 dari 1.284 Transaksi
            </div>
            <div class="flex items-center gap-2">
                <button class="w-10 h-10 flex items-center justify-center rounded-xl bg-surface hover:bg-white border border-border-subtle text-slate-400 disabled:opacity-30 transition-all shadow-sm" disabled>
                    <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                </button>
                <div class="flex items-center gap-1.5">
                    <button class="w-10 h-10 rounded-xl bg-primary text-white text-sm font-extrabold shadow-float transition-transform hover:-translate-y-0.5">1</button>
                    <button class="w-10 h-10 rounded-xl bg-surface hover:bg-white border border-border-subtle hover:border-primary text-text-main text-sm font-bold transition-all shadow-sm">2</button>
                    <button class="w-10 h-10 rounded-xl bg-surface hover:bg-white border border-border-subtle hover:border-primary text-text-main text-sm font-bold transition-all shadow-sm">3</button>
                    <span class="px-2 text-slate-400 text-xs font-bold">...</span>
                </div>
                <button class="w-10 h-10 flex items-center justify-center rounded-xl bg-surface hover:bg-white border border-border-subtle hover:border-primary text-text-main shadow-sm transition-all hover:-translate-y-0.5">
                    <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                </button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
