<x-filament-panels::page>
<div
    x-data="{
        editor: null
    }"
    x-init="editor = window.initEditor($refs.editor)">
    <div class="flex flex-wrap gap-2 mb-4">

        {{-- Bold --}}
        <button
            type="button"
            @click="editor.chain().focus().toggleBold().run()"
            :class="editor?.isActive('bold') ? 'bg-amber-500 text-white' : 'bg-gray-200 text-black'"
            class="px-3 py-2 rounded border"
        >
            <strong>B</strong>
        </button>

        {{-- Italic --}}
        <button
            type="button"
            @click="editor.chain().focus().toggleItalic().run()"
            :class="editor?.isActive('italic') ? 'bg-amber-500 text-white' : 'bg-gray-200 text-black'"
            class="px-3 py-2 rounded border"
        >
            <em>I</em>
        </button>

        {{-- Underline --}}
        <button
            type="button"
            @click="editor.chain().focus().toggleUnderline().run()"
            :class="editor?.isActive('underline') ? 'bg-amber-500 text-white' : 'bg-gray-200 text-black'"
            class="px-3 py-2 rounded border"
        >
            <u>U</u>
        </button>

        {{-- Strike --}}
        <button
            type="button"
            @click="editor.chain().focus().toggleStrike().run()"
            :class="editor?.isActive('strike') ? 'bg-amber-500 text-white' : 'bg-gray-200 text-black'"
            class="px-3 py-2 rounded border"
        >
            <s>S</s>
        </button>

        {{-- Heading 1 --}}
        <button
            type="button"
            @click="editor.chain().focus().toggleHeading({ level: 1 }).run()"
            :class="editor?.isActive('heading',{level:1}) ? 'bg-amber-500 text-white' : 'bg-gray-200 text-black'"
            class="px-3 py-2 rounded border"
        >
            H1
        </button>

        {{-- Heading 2 --}}
        <button
            type="button"
            @click="editor.chain().focus().toggleHeading({ level: 2 }).run()"
            :class="editor?.isActive('heading',{level:2}) ? 'bg-amber-500 text-white' : 'bg-gray-200 text-black'"
            class="px-3 py-2 rounded border"
        >
            H2
        </button>

        {{-- Heading 3 --}}
        <button
            type="button"
            @click="editor.chain().focus().toggleHeading({ level: 3 }).run()"
            :class="editor?.isActive('heading',{level:3}) ? 'bg-amber-500 text-white' : 'bg-gray-200 text-black'"
            class="px-3 py-2 rounded border"
        >
            H3
        </button>

        {{-- Bullet --}}
        <button
            type="button"
            @click="editor.chain().focus().toggleBulletList().run()"
            :class="editor?.isActive('bulletList') ? 'bg-amber-500 text-white' : 'bg-gray-200 text-black'"
            class="px-3 py-2 rounded border"
        >
            • List
        </button>

        {{-- Number --}}
        <button
            type="button"
            @click="editor.chain().focus().toggleOrderedList().run()"
            :class="editor?.isActive('orderedList') ? 'bg-amber-500 text-white' : 'bg-gray-200 text-black'"
            class="px-3 py-2 rounded border"
        >
            1. List
        </button>

        {{-- Quote --}}
        <button
            type="button"
            @click="editor.chain().focus().toggleBlockquote().run()"
            :class="editor?.isActive('blockquote') ? 'bg-amber-500 text-white' : 'bg-gray-200 text-black'"
            class="px-3 py-2 rounded border"
        >
            "
        </button>

        {{-- Horizontal Rule --}}
        <button
            type="button"
            @click="editor.chain().focus().setHorizontalRule().run()"
            class="px-3 py-2 rounded border bg-gray-200 text-black"
        >
            ─
        </button>

        {{-- Align Left --}}
        <button
            type="button"
            @click="editor.chain().focus().setTextAlign('left').run()"
            :class="editor?.isActive({ textAlign: 'left' }) ? 'bg-amber-500 text-white' : 'bg-gray-200 text-black'"
            class="px-3 py-2 rounded border"
        >
            ⬅
        </button>

        {{-- Align Center --}}
        <button
            type="button"
            @click="editor.chain().focus().setTextAlign('center').run()"
            :class="editor?.isActive({ textAlign: 'center' }) ? 'bg-amber-500 text-white' : 'bg-gray-200 text-black'"
            class="px-3 py-2 rounded border"
        >
            ☰
        </button>

        {{-- Align Right --}}
        <button
            type="button"
            @click="editor.chain().focus().setTextAlign('right').run()"
            :class="editor?.isActive({ textAlign: 'right' }) ? 'bg-amber-500 text-white' : 'bg-gray-200 text-black'"
            class="px-3 py-2 rounded border"
        >
            ➡
        </button>

        {{-- Justify --}}
        <button
            type="button"
            @click="editor.chain().focus().setTextAlign('justify').run()"
            :class="editor?.isActive({ textAlign: 'justify' }) ? 'bg-amber-500 text-white' : 'bg-gray-200 text-black'"
            class="px-3 py-2 rounded border"
        >
            ☷
        </button>

        {{-- Undo --}}
        <button
            type="button"
            @click="editor.chain().focus().undo().run()"
            class="px-3 py-2 rounded border bg-gray-200 text-black"
        >
            Undo
        </button>

        {{-- Redo --}}
        <button
            type="button"
            @click="editor.chain().focus().redo().run()"
            class="px-3 py-2 rounded border bg-gray-200 text-black"
        >
            Redo
        </button>

    </div>

    <div
    x-ref="editor"
    contenteditable="true"
    style="
        min-height:300px;
        border:1px solid #ccc;
        padding:20px;
        background:#ffffff;
        color:#000000;
        caret-color:#000000;
    ">
    </div>
</div>
</x-filament-panels::page>