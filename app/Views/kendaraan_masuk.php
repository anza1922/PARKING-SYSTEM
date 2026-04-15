<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="max-w-5xl mx-auto">
    <!-- Header Minimalist -->
    <div class="mb-10 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-50 text-primary rounded-2xl mb-4 shadow-sm">
            <span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1;">login</span>
        </div>
        <h1 class="text-4xl font-extrabold font-headline text-text-main tracking-tight block">Rekam Kendaraan Masuk</h1>
        <p class="text-text-muted mt-3 text-sm max-w-lg mx-auto leading-relaxed">Catat plat nomor kendaraan yang masuk tanpa tiket fisik. Sistem akan mengalkulasi durasi dan biaya dengan akurat.</p>
    </div>

    <!-- Main Entry Context -->
    <div class="bg-surface-card p-10 md:p-12 rounded-[2.5rem] shadow-float border border-border-subtle">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Left Side: Manual Input -->
            <div class="space-y-6">
                <div>
                    <label class="block text-[11px] font-bold text-text-muted uppercase tracking-widest mb-3">Nomor Polisi Kendaraan</label>
                    <input type="text" class="w-full px-6 py-5 bg-surface border border-slate-200 rounded-2xl text-3xl font-mono font-black text-text-main uppercase focus:ring-4 focus:ring-primary/10 focus:border-primary outline-none transition-all placeholder:text-slate-300 shadow-inner" placeholder="B 1234 ABC">
                    <p class="text-xs text-text-muted mt-3 font-medium flex items-center gap-1.5"><span class="material-symbols-outlined text-[14px]">info</span> Penulisan plat nomor otomatis diformat standar.</p>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="relative cursor-pointer group">
                        <input type="radio" name="jenis" id="mobil" class="peer sr-only" checked>
                        <div class="p-4 border-2 border-border-subtle rounded-2xl hover:border-primary/50 peer-checked:border-primary peer-checked:bg-primary-light transition-all text-center">
                            <span class="material-symbols-outlined text-3xl text-text-muted peer-checked:text-primary mb-2 transition-colors">directions_car</span>
                            <p class="font-bold text-sm text-text-main">Mobil</p>
                        </div>
                    </div>
                    <div class="relative cursor-pointer group">
                        <input type="radio" name="jenis" id="motor" class="peer sr-only">
                        <div class="p-4 border-2 border-border-subtle rounded-2xl hover:border-primary/50 peer-checked:border-primary peer-checked:bg-primary-light transition-all text-center">
                            <span class="material-symbols-outlined text-3xl text-text-muted peer-checked:text-primary mb-2 transition-colors">two_wheeler</span>
                            <p class="font-bold text-sm text-text-main">Motor</p>
                        </div>
                    </div>
                </div>

                <div class="pt-4">
                    <button class="w-full py-5 bg-text-main text-white rounded-2xl font-bold text-sm hover:bg-primary hover:shadow-float transform hover:-translate-y-1 active:translate-y-0 transition-all duration-300 flex items-center justify-center gap-2 group">
                        Cetak E-Tiket & Buka Gate
                        <span class="material-symbols-outlined text-[18px] group-hover:block transition-transform ml-2">receipt_long</span>
                    </button>
                </div>
            </div>

            <!-- Right Side: Camera Context (or empty state) -->
            <div class="relative rounded-3xl overflow-hidden bg-surface border-2 border-dashed border-border-subtle flex flex-col items-center justify-center min-h-[300px]">
                <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent pointer-events-none z-10"></div>
                
                <!-- Mockup camera view -->
                <div class="text-center z-20 p-8">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-soft mx-auto mb-4 animate-pulse">
                        <span class="material-symbols-outlined text-text-muted text-2xl">document_scanner</span>
                    </div>
                    <h3 class="font-bold text-text-main mb-1">Kamera Gate Dinonaktifkan</h3>
                    <p class="text-xs text-text-muted max-w-[200px] mx-auto leading-relaxed">Sistem ANPR (Automatic Number Plate Recognition) saat ini dialihkan ke mode input manual.</p>
                    
                    <button class="mt-6 px-4 py-2 bg-white border border-border-subtle rounded-xl text-xs font-bold text-text-main shadow-sm hover:text-primary transition-colors">
                        Aktifkan Kamera
                    </button>
                </div>
            </div>
        </div>
        
    </div>
</div>
<?= $this->endSection() ?>
