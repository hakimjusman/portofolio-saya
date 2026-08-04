<section id="contact" class="py-24">
    <div class="max-w-7xl mx-auto px-6">
        
        <!-- Header -->
        <div class="text-center max-w-xl mx-auto mb-12">
            <h2 class="text-sm font-mono font-bold tracking-wider text-brand-blue uppercase mb-2">
                Kirim Pesan
            </h2>
            <p class="text-xs sm:text-sm text-gray-500 font-sans">
                Siap menjalin kerja sama? Hubungi kami untuk kolaborasi atau pertanyaan.
            </p>
        </div>

        <!-- Form Card -->
        <div class="max-w-2xl mx-auto bg-white p-8 sm:p-10 border border-gray-200/80 rounded-sm shadow-sm">
            <div id="contact-alert" class="hidden mb-6 p-4 rounded-sm text-xs font-mono"></div>

            <form id="contact-form" action="process-contact.php" method="POST" class="space-y-6">
                <!-- Name Field -->
                <div>
                    <label for="name" class="block font-mono text-xs text-gray-700 font-semibold mb-2">
                        Nama / Alias
                    </label>
                    <input type="text" id="name" name="name" required placeholder="Masukkan nama Anda" 
                           class="w-full bg-slate-100 border-none rounded-sm px-4 py-3 text-xs text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-blue font-sans">
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block font-mono text-xs text-gray-700 font-semibold mb-2">
                        Saluran Komunikasi (Email)
                    </label>
                    <input type="email" id="email" name="email" required placeholder="Masukkan email Anda" 
                           class="w-full bg-slate-100 border-none rounded-sm px-4 py-3 text-xs text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-blue font-sans">
                </div>

                <!-- Message Field -->
                <div>
                    <label for="message" class="block font-mono text-xs text-gray-700 font-semibold mb-2">
                        Pesan Anda
                    </label>
                    <textarea id="message" name="message" rows="4" required placeholder="Apa misi Anda?" 
                              class="w-full bg-slate-100 border-none rounded-sm px-4 py-3 text-xs text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-blue font-sans resize-none"></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" id="submit-btn" 
                        class="w-full bg-brand-blue hover:bg-blue-900 text-white font-mono text-xs font-bold tracking-wider py-4 rounded-sm uppercase transition-all flex items-center justify-center gap-2 shadow-sm">
                    <span>KIRIM PESAN</span>
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                    </svg>
                </button>
            </form>
        </div>

    </div>
</section>