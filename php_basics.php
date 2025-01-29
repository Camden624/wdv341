<!DOCTYPE html>
<html lang="en">

    <head>

        <head>
            <title>Camden's Website</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta name="author" content="Camden Kirkpatrick" />
            <meta charset="utf-8" />
        </head>
    </head>

    <body>

        <?php
        $yourName = "Camden";
        $number1 = 56;
        $number2 = 32;
        $total = $number1 + $number2;

        print "<h1>PHP Basics</h1>";
        ?>

        <h2>
            <?php print $yourName ?>
        </h2>

        <?php
        print '<p>' . $number1 . ' + ' . $number2 . ' = ' . $total . '</p>';
        ?>

        <ul id="languageList"></ul>

        <?php
        $languages = ['PHP', 'HTML', 'JavaScript'];

        print "<script>\n";
        print "let jsArray = [];\n";
        foreach ($languages as $language)
        {
            print "jsArray.push('$language');\n";
        }
        print "</script>\n";
        ?>

        <script>
            let listElement = document.getElementById("languageList");

            jsArray.forEach(language =>
            {
                let li = document.createElement("li");
                li.textContent = language;
                listElement.appendChild(li);
            });
        </script>


    </body>

</html>