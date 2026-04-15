<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="max-w-6xl mx-auto">
    <!-- Header Minimalist -->
    <div class="mb-10 lg:flex items-end justify-between">
        <div>
            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-50 text-primary rounded-2xl mb-4 shadow-sm">
                <span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1;">calendar_today</span>
            </div>
            <h1 class="text-4xl font-extrabold text-text-main font-headline tracking-tight block">Reservasi Slot Parkir</h1>
            <p class="text-text-muted mt-3 text-sm max-w-xl leading-relaxed">Kelola pesanan parkir langganan, jadwal VIP, dan pantau kedatangan kendaraan secara berkala (real-time).</p>
        </div>
        <div class="mt-6 lg:mt-0 flex gap-3">
            <button class="px-6 py-3 bg-white border border-border-subtle text-text-main text-xs font-bold rounded-xl shadow-sm hover:bg-slate-50 transition-colors flex items-center gap-2">
                <span class="material-symbols-outlined text-[16px]">tune</span> Filter
            </button>
            <button onclick="toggleModalTambah()" class="px-6 py-3 bg-text-main text-white font-bold text-xs rounded-xl shadow-float hover:-translate-y-0.5 hover:bg-black transition-all flex items-center gap-2 group">
                <span class="material-symbols-outlined text-[16px] group-hover:rotate-90 transition-transform">add</span> Buat Reservasi Baru
            </button>
        </div>
    </div>

    <!-- Overview Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-surface-card p-6 rounded-[2rem] border border-border-subtle shadow-sm hover:shadow-soft transition-all flex justify-between items-center relative overflow-hidden group">
            <div class="relative z-10">
                <p class="text-text-muted text-[10px] font-bold uppercase tracking-widest mb-1">Menunggu Tiba</p>
                <h3 class="text-3xl font-extrabold font-headline text-text-main">14 <span class="text-sm text-text-muted font-medium">unit</span></h3>
            </div>
            <div class="w-14 h-14 bg-amber-50 text-amber-500 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-2xl">pending_actions</span>
            </div>
        </div>
        <div class="bg-surface-card p-6 rounded-[2rem] border border-border-subtle shadow-sm hover:shadow-soft transition-all flex justify-between items-center relative overflow-hidden group">
            <div class="relative z-10">
                <p class="text-text-muted text-[10px] font-bold uppercase tracking-widest mb-1">Sudah Parkir</p>
                <h3 class="text-3xl font-extrabold font-headline text-primary">42 <span class="text-sm text-primary/70 font-medium">unit</span></h3>
            </div>
            <div class="w-14 h-14 bg-blue-50 text-primary rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-2xl">local_parking</span>
            </div>
        </div>
        <div class="bg-surface-card p-6 rounded-[2rem] border border-border-subtle shadow-sm hover:shadow-soft transition-all flex justify-between items-center relative overflow-hidden group">
            <div class="relative z-10">
                <p class="text-text-muted text-[10px] font-bold uppercase tracking-widest mb-1">Slot Kosong VIP</p>
                <h3 class="text-3xl font-extrabold font-headline text-emerald-500">8 <span class="text-sm text-emerald-500/70 font-medium">slot</span></h3>
            </div>
            <div class="w-14 h-14 bg-emerald-50 text-emerald-500 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-2xl">event_available</span>
            </div>
        </div>
    </div>

    <!-- Tab / Date selection minimalist -->
    <div class="flex items-center gap-4 mb-6 sticky top-20 bg-surface/80 backdrop-blur-md py-4 z-20">
        <h3 class="font-bold text-text-main text-lg mr-4">Jadwal Tanggal:</h3>
        <button class="px-5 py-2.5 bg-primary text-white font-bold text-xs rounded-xl shadow-float">Hari Ini (12 Okt)</button>
        <button class="px-5 py-2.5 bg-white text-text-muted border border-border-subtle font-bold text-xs rounded-xl hover:text-text-main transition-colors">Besok (13 Okt)</button>
        <button class="w-10 h-10 bg-white border border-border-subtle text-text-muted rounded-xl flex items-center justify-center hover:text-primary transition-colors hover:shadow-sm">
            <span class="material-symbols-outlined text-[18px]">calendar_month</span>
        </button>
    </div>

    <!-- Reservation Spaced List -->
    <div class="space-y-4">
        
        <!-- Reservasi 1: Belum Datang (Mendekati) -->
        <div class="bg-white rounded-[1.5rem] border-2 border-amber-100 shadow-sm hover:shadow-float hover:-translate-y-1 transition-all p-6 relative overflow-hidden group">
            <div class="absolute left-0 top-0 bottom-0 w-2 bg-amber-400"></div>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center pl-2">
                
                <div class="col-span-3 flex items-center gap-4">
                    <div class="w-12 h-12 bg-amber-50 rounded-full flex items-center justify-center text-amber-500 shrink-0">
                        <span class="material-symbols-outlined">schedule</span>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold text-text-muted tracking-widest uppercase mb-0.5 block">Estimasi Tiba</span>
                        <p class="text-lg font-extrabold text-text-main">09:00 <span class="text-sm font-medium text-text-muted">s/d 14:00</span></p>
                    </div>
                </div>

                <div class="col-span-3">
                    <span class="text-[10px] font-bold text-text-muted tracking-widest uppercase mb-1 block">Pemesan</span>
                    <p class="text-sm font-bold text-text-main block">PT. Dirgantara Raya</p>
                    <p class="text-xs text-text-muted font-medium mt-0.5">Tamu Eksekutif (Bpk. Yanto)</p>
                </div>

                <div class="col-span-3">
                    <span class="text-[10px] font-bold text-text-muted tracking-widest uppercase mb-1 block">Kendaraan VIP</span>
                    <span class="font-mono font-bold text-sm bg-surface w-fit px-2 py-0.5 rounded border border-amber-200/50 text-text-main block">B 1 RI</span>
                    <p class="text-[10px] font-bold text-text-muted mt-1 uppercase">Alphard Hitam</p>
                </div>

                <div class="col-span-3 lg:text-right flex lg:justify-end items-center gap-3">
                    <div class="text-left hidden lg:block">
                        <p class="text-[10px] font-bold text-text-muted uppercase tracking-widest mb-1">Status</p>
                        <p class="text-xs font-bold text-amber-500 bg-amber-50 px-2 py-1 flex items-center gap-1 rounded"><span class="relative flex h-1.5 w-1.5"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-400 opacity-75"></span><span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-amber-500"></span></span>Segera Tiba</p>
                    </div>
                    <button class="w-10 h-10 bg-surface rounded-xl hover:bg-text-main hover:text-white transition-colors flex items-center justify-center text-slate-400">
                        <span class="material-symbols-outlined text-[20px]">more_vert</span>
                    </button>
                    <button class="px-5 py-2.5 bg-surface rounded-xl hover:bg-emerald-50 text-emerald-600 font-bold text-xs transition-colors border border-transparent shadow-inner">Scan Masuk</button>
                </div>
            </div>
        </div>

        <!-- Reservasi 2: Sudah Parkir -->
        <div class="bg-white rounded-[1.5rem] border border-border-subtle opacity-70 hover:opacity-100 shadow-sm hover:shadow-soft hover:-translate-y-1 transition-all p-6 group">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
                
                <div class="col-span-3 flex items-center gap-4">
                    <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center text-primary shrink-0">
                        <span class="material-symbols-outlined">how_to_reg</span>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold text-text-muted tracking-widest uppercase mb-0.5 block">Telah Tiba Pukul</span>
                        <p class="text-lg font-extrabold text-text-main">07:15 <span class="text-sm font-medium text-emerald-500 italic">di Area A1</span></p>
                    </div>
                </div>

                <div class="col-span-3">
                    <span class="text-[10px] font-bold text-text-muted tracking-widest uppercase mb-1 block">Pemesan</span>
                    <p class="text-sm font-bold text-text-main block">Budi Sentosa (Member)</p>
                    <p class="text-xs text-text-muted font-medium mt-0.5">Langganan Bulanan</p>
                </div>

                <div class="col-span-3">
                    <span class="text-[10px] font-bold text-text-muted tracking-widest uppercase mb-1 block">Kendaraan Member</span>
                    <span class="font-mono font-bold text-sm bg-surface w-fit px-2 py-0.5 rounded border border-slate-200 block text-text-muted">A 8899 UI</span>
                    <p class="text-[10px] font-bold text-text-muted mt-1 uppercase">Honda HRV</p>
                </div>

                <div class="col-span-3 lg:text-right flex lg:justify-end items-center gap-3">
                    <div class="text-left hidden lg:block mr-2">
                        <p class="text-[10px] font-bold text-text-muted uppercase tracking-widest mb-1">Status</p>
                        <p class="text-xs font-bold text-primary bg-primary/10 px-2 py-1 rounded">Dalam Area</p>
                    </div>
                    <button class="px-5 py-2.5 bg-surface text-text-main rounded-xl hover:bg-slate-200 font-bold text-xs transition-colors">Detail Info</button>
                </div>
            </div>
        </div>

        <!-- Reservasi 3: Regular Belum Datang -->
        <div class="bg-white rounded-[1.5rem] border border-border-subtle shadow-sm hover:shadow-soft hover:-translate-y-1 transition-all p-6 group">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
                
                <div class="col-span-3 flex items-center gap-4">
                    <div class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center text-slate-400 shrink-0">
                        <span class="material-symbols-outlined">schedule</span>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold text-text-muted tracking-widest uppercase mb-0.5 block">Estimasi Tiba</span>
                        <p class="text-lg font-extrabold text-text-muted">15:00 <span class="text-sm font-medium text-slate-400">s/d 18:00</span></p>
                    </div>
                </div>

                <div class="col-span-3">
                    <span class="text-[10px] font-bold text-text-muted tracking-widest uppercase mb-1 block">Pemesan</span>
                    <p class="text-sm font-bold text-text-main block">Online Ticket #O-221</p>
                    <p class="text-xs text-text-muted font-medium mt-0.5">Lewat Aplikasi ParkirPro</p>
                </div>

                <div class="col-span-3">
                    <span class="text-[10px] font-bold text-text-muted tracking-widest uppercase mb-1 block">Kendaraan Terdaftar</span>
                    <span class="font-mono font-bold text-sm bg-surface w-fit px-2 py-0.5 rounded border border-slate-200 block text-text-main">D 501 LU</span>
                    <p class="text-[10px] font-bold text-text-muted mt-1 uppercase">Hatchback Biru</p>
                </div>

                <div class="col-span-3 lg:text-right flex lg:justify-end items-center gap-3">
                    <div class="text-left hidden lg:block mr-2">
                        <p class="text-[10px] font-bold text-text-muted uppercase tracking-widest mb-1">Status</p>
                        <p class="text-xs font-bold text-slate-500 bg-slate-100 border border-slate-200 px-2 py-1 rounded">Menunggu</p>
                    </div>
                    <button class="w-10 h-10 bg-surface rounded-xl hover:bg-text-main hover:text-white transition-colors flex items-center justify-center text-slate-400">
                        <span class="material-symbols-outlined text-[20px]">more_vert</span>
                    </button>
                    <button class="px-5 py-2.5 bg-surface text-text-main rounded-xl hover:bg-slate-200 font-bold text-xs transition-colors">Scan Masuk</button>
                </div>
            </div>
        </div>

    </div>
    
    <!-- Empty State helper if no data -->
    <div class="hidden flex-col items-center justify-center p-16 bg-surface-card rounded-[2rem] border border-dashed border-slate-300 mt-4 text-center">
        <div class="w-20 h-20 bg-surface rounded-full flex items-center justify-center text-slate-300 mb-6">
            <span class="material-symbols-outlined text-4xl">event_busy</span>
        </div>
        <h4 class="font-bold text-lg text-text-main mb-2">Tidak ada reservasi aktif</h4>
        <p class="text-sm text-text-muted">Reservasi untuk tanggal terpilih belum tersedia. Anda bisa menambahkannya secara manual.</p>
        <button class="mt-6 px-6 py-3 bg-white border border-border-subtle shadow-sm font-bold text-xs rounded-xl hover:bg-slate-50">Refresh Data</button>
    </div>

</div>

<!-- Modal Tambah Reservasi -->
<div id="modal-tambah" class="fixed inset-0 z-[100] hidden items-center justify-center bg-slate-900/40 backdrop-blur-sm transition-opacity">
    <div class="bg-surface-card w-full max-w-2xl max-h-[90vh] overflow-y-auto rounded-[2.5rem] shadow-float relative animate-[fadeIn_0.3s_ease-out] flex flex-col">
        <!-- Modal Header -->
        <div class="p-8 pb-6 border-b border-border-subtle flex justify-between items-center sticky top-0 bg-surface-card z-10">
            <div>
                <h3 class="text-2xl font-extrabold font-headline text-text-main">Buat Reservasi Baru</h3>
                <p class="text-xs text-text-muted mt-1 font-medium">Isi formulir untuk pemesanan slot parkir terjadwal.</p>
            </div>
            <button onclick="toggleModalTambah()" class="w-10 h-10 bg-surface rounded-full flex items-center justify-center text-text-muted hover:text-text-main hover:bg-slate-200 transition-colors">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        
        <!-- Modal Body Fields -->
        <div class="p-8 space-y-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Nama Pemesan</label>
                    <input type="text" placeholder="Contoh: PT. Dirgantara" class="w-full px-4 py-3 bg-surface border border-slate-200 rounded-xl focus:ring-4 focus:ring-primary/10 focus:border-primary text-sm font-bold text-text-main outline-none transition-all">
                </div>
                <div>
                    <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Kontak (No. HP/Detail)</label>
                    <input type="text" placeholder="Bpk. Yanto - 0812XXX" class="w-full px-4 py-3 bg-surface border border-slate-200 rounded-xl focus:ring-4 focus:ring-primary/10 focus:border-primary text-sm font-bold text-text-main outline-none transition-all">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Plat Nomor Kendaraan</label>
                    <input type="text" placeholder="B 1234 ABC" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl focus:ring-4 focus:ring-primary/10 focus:border-primary text-lg font-mono font-bold text-text-main uppercase outline-none transition-all shadow-inner">
                </div>
                <div>
                    <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Tipe Kendaraan</label>
                    <select class="w-full px-4 py-3 bg-surface border border-slate-200 rounded-xl focus:ring-4 focus:ring-primary/10 focus:border-primary text-sm font-bold text-text-main outline-none transition-all cursor-pointer">
                        <option>Mobil Standar / MPV</option>
                        <option>Mobil VIP / Eksekutif</option>
                        <option>Minibus / Travel</option>
                        <option>Sepeda Motor Besar</option>
                    </select>
                </div>
            </div>

            <div class="bg-blue-50/50 p-6 rounded-2xl border border-primary/20 space-y-4">
                <h4 class="text-xs font-bold text-primary uppercase tracking-widest flex items-center gap-2"><span class="material-symbols-outlined text-[16px]">schedule</span> Rencana Kedatangan</h4>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="sm:col-span-1">
                        <label class="block text-[10px] font-bold text-text-muted uppercase tracking-widest mb-2">Tanggal</label>
                        <input type="date" class="w-full px-3 py-2 bg-white border border-primary/20 rounded-lg text-sm font-bold text-text-main outline-none">
                    </div>
                    <div class="sm:col-span-1">
                        <label class="block text-[10px] font-bold text-text-muted uppercase tracking-widest mb-2">Jam Kedatangan</label>
                        <input type="time" class="w-full px-3 py-2 bg-white border border-primary/20 rounded-lg text-sm font-bold text-text-main outline-none">
                    </div>
                    <div class="sm:col-span-1">
                        <label class="block text-[10px] font-bold text-text-muted uppercase tracking-widest mb-2">Estimasi Keluar (Opsional)</label>
                        <input type="time" class="w-full px-3 py-2 bg-white border border-primary/20 rounded-lg text-sm font-bold text-text-main outline-none">
                    </div>
                </div>
            </div>
            
            <div>
                <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-2">Pilih Zona Parkir Prioritas</label>
                <div class="grid grid-cols-3 gap-4">
                    <label class="cursor-pointer relative group">
                        <input type="radio" name="zona" class="peer sr-only">
                        <div class="p-3 bg-surface border border-slate-200 rounded-xl flex flex-col items-center justify-center peer-checked:border-primary peer-checked:bg-primary-light transition-all text-center">
                            <span class="text-sm font-bold text-text-main">Zona A</span>
                            <span class="text-[10px] font-medium text-text-muted">VIP / Khusus</span>
                        </div>
                    </label>
                    <label class="cursor-pointer relative group">
                        <input type="radio" name="zona" class="peer sr-only" checked>
                        <div class="p-3 bg-surface border border-slate-200 rounded-xl flex flex-col items-center justify-center peer-checked:border-primary peer-checked:bg-primary-light transition-all text-center">
                            <span class="text-sm font-bold text-text-main">Zona B</span>
                            <span class="text-[10px] font-medium text-text-muted">Reguler</span>
                        </div>
                    </label>
                    <label class="cursor-pointer relative group">
                        <input type="radio" name="zona" class="peer sr-only">
                        <div class="p-3 bg-surface border border-slate-200 rounded-xl flex flex-col items-center justify-center peer-checked:border-primary peer-checked:bg-primary-light transition-all text-center opacity-50">
                            <span class="text-sm font-bold text-text-main">Zona C</span>
                            <span class="text-[10px] font-medium text-text-muted">Penuh</span>
                        </div>
                    </label>
                </div>
            </div>
        </div>

        <!-- Modal Footer -->
        <div class="p-8 pt-6 border-t border-border-subtle bg-surface/50 mt-auto flex justify-end gap-3 sticky bottom-0 z-10 w-full rounded-b-[2.5rem]">
            <button onclick="toggleModalTambah()" class="px-6 py-3 bg-white border border-border-subtle rounded-xl text-xs font-bold text-text-main hover:bg-slate-50 transition-colors shadow-sm">Batal</button>
            <button onclick="toggleModalTambah()" class="px-6 py-3 bg-primary text-white rounded-xl text-xs font-bold shadow-float hover:-translate-y-0.5 hover:bg-primary-hover transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-[16px]">save</span> Simpan Reservasi
            </button>
        </div>
    </div>
</div>

<script>
    function toggleModalTambah() {
        const modal = document.getElementById('modal-tambah');
        modal.classList.toggle('hidden');
        modal.classList.toggle('flex');
    }
</script>

<?= $this->endSection() ?>
