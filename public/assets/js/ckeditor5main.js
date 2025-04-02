/**
 * This configuration was generated using the CKEditor 5 Builder. You can modify it anytime using this link:
 * https://ckeditor.com/ckeditor-5/builder/?redirect=portal#installation/NoNgNARATAdAzPCkQgCxpATgKwgBzoDsehUhI2B+q2ADHtmVAIyql5IQCmAdkrWGDMwAgcLEBdSJQAmDAGZQIEoA
 */

const {
	ClassicEditor,
	Alignment,
	Autosave,
	Bold,
	Code,
	Essentials,
	FontBackgroundColor,
	FontColor,
	FontFamily,
	FontSize,
	Highlight,
	Indent,
	IndentBlock,
	Italic,
	Paragraph,
	RemoveFormat,
	Strikethrough,
	Subscript,
	Superscript,
	Underline
} = window.CKEDITOR;

const LICENSE_KEY =
	'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NDQ1ODg3OTksImp0aSI6IjRjNmM4NzNmLTM0NWMtNDgyMC1iODM2LTJlMDRiNzViZTlhZSIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiLCJzaCJdLCJ3aGl0ZUxhYmVsIjp0cnVlLCJsaWNlbnNlVHlwZSI6InRyaWFsIiwiZmVhdHVyZXMiOlsiKiJdLCJ2YyI6IjUxZGRlYjE0In0.-f6NQenuArHZkmsLY9vPTcIzdc2ZxKRthR933dzp2LAKB_GbWfVV9YC92q7P4Eul_1-mhBR2ZWsMhVo58-BeuA';

const editorConfig = {
	toolbar: {
		items: [
			'fontSize',
			'fontFamily',
			'fontColor',
			'fontBackgroundColor',
			'|',
			'bold',
			'italic',
			'underline',
			'strikethrough',
			'subscript',
			'superscript',
			'code',
			'removeFormat',
			'|',
			'highlight',
			'|',
			'alignment',
			'|',
			'outdent',
			'indent'
		],
		shouldNotGroupWhenFull: false
	},
	plugins: [
		Alignment,
		Autosave,
		Bold,
		Code,
		Essentials,
		FontBackgroundColor,
		FontColor,
		FontFamily,
		FontSize,
		Highlight,
		Indent,
		IndentBlock,
		Italic,
		Paragraph,
		RemoveFormat,
		Strikethrough,
		Subscript,
		Superscript,
		Underline
	],

	licenseKey: LICENSE_KEY,
};

ClassicEditor.create(document.querySelector('#editor'), editorConfig);
