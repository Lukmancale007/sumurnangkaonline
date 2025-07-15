import './bootstrap';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

// Inisialisasi CKEditor
ClassicEditor.create(document.querySelector('#editor'))
    .catch(error => {
        console.error('Error initializing CKEditor:', error);
    });
