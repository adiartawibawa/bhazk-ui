import {
    Livewire,
    Alpine,
} from "../../vendor/livewire/livewire/dist/livewire.esm";

import { registerFileUploader } from "../../packages/adiartawibawa/bhazk-ui/resources/js/file-uploader";

registerFileUploader(Alpine);

Livewire.start();
