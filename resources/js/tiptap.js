import { Editor } from "@tiptap/core";
import StarterKit from "@tiptap/starter-kit";
import Underline from "@tiptap/extension-underline";

window.initEditor = function (element) {
    return new Editor({
        element: element,

        extensions: [StarterKit, Underline],

        content: `
            <h2>Editor Produk</h2>
            <p>Tulis deskripsi produk disini</p>
        `,
    });
};
