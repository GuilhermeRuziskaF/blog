<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste de API</title>


    <script src="{{ asset('blog/assets/js/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink autoresize lists link image imageupload imagetools imagemanager image_list charmap print preview anchor',
            toolbar: 'undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | font | Blocks | Fontsize | outdent indent | link image ',
            relative_urls: false,
            document_base_url: '{{ asset('blog/assets/img/') }}',
            menubar: 'edit insert format',
            height: 500,
        });
    </script>

</head>

<body>

    <textarea>
        Welcome to TinyMCE!
    </textarea>

</body>

</html>
