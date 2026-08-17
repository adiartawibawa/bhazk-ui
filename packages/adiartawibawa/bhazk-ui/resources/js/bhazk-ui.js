import * as FilePond from "filepond";
import FilePondPluginImagePreview from "filepond-plugin-image-preview";
import FilePondPluginFileValidateSize from "filepond-plugin-file-validate-size";
import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type";
import "filepond/dist/filepond.min.css";
import "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css";

FilePond.registerPlugin(
    FilePondPluginImagePreview,
    FilePondPluginFileValidateSize,
    FilePondPluginFileValidateType,
);

/**
 * 'alpine:init' adalah event global yang di-dispatch Alpine SEBELUM
 * Alpine.start() dipanggil — dijamin selalu tersedia terlepas dari apakah
 * host app pakai alpinejs murni atau Alpine bawaan Livewire (window.Alpine
 * sudah otomatis diset oleh keduanya). Ini yang memungkinkan komponen kita
 * "menyuntik" Alpine.data tanpa perlu host app menulis kode registrasi apa pun.
 */
document.addEventListener("alpine:init", () => {
    window.Alpine.data("filePondUploader", (options = {}) => ({
        pond: null,
        init() {
            this.pond = FilePond.create(this.$refs.input, options);
        },
    }));
});

/**
 * Dua jalur registrasi supaya TIDAK bergantung sepenuhnya pada urutan
 * script tag:
 * 1. Jika window.Alpine sudah ada TAPI belum di-start() (event alpine:init
 *    belum lewat) — daftar langsung, aman karena Alpine.data() boleh
 *    dipanggil kapan pun sebelum start().
 * 2. Jika window.Alpine BELUM ada sama sekali — tunggu event alpine:init
 *    seperti biasa (fallback untuk kasus load order terbalik).
 */
if (window.Alpine) {
    registerFilePondUploader();
} else {
    document.addEventListener("alpine:init", registerFilePondUploader);
}
