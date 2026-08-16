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

export function registerFileUploader(Alpine) {
    Alpine.data("filePondUploader", (options = {}) => ({
        pond: null,

        init() {
            this.$nextTick(() => {
                if (!this.$refs.input) {
                    return;
                }

                this.pond = FilePond.create(this.$refs.input, options);
            });
        },

        destroy() {
            this.pond?.destroy();
            this.pond = null;
        },
    }));
}
