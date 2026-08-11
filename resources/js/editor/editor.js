import { Editor } from "@tiptap/core";
import StarterKit from "@tiptap/starter-kit";
import Underline from "@tiptap/extension-underline";
import Link from "@tiptap/extension-link";
import Image from "@tiptap/extension-image";
import Placeholder from "@tiptap/extension-placeholder";
import TextAlign from "@tiptap/extension-text-align";
import Highlight from "@tiptap/extension-highlight";
import HorizontalRule from "@tiptap/extension-horizontal-rule";

window.initEditor = function (element, callback = null) {
    const editor = new Editor({
        element,

        extensions: [
            StarterKit,
            Underline,
            Link,
            Image,
            Highlight,
            HorizontalRule,
            Placeholder.configure({
                placeholder: "Tulis deskripsi produk...",
            }),
            TextAlign.configure({
                types: ["heading", "paragraph"],
            }),
        ],

        content: "",

        onUpdate() {
            if (callback) callback(editor);
        },

        onSelectionUpdate() {
            if (callback) callback(editor);
        },
    });

    return editor;
};
