<!DOCTYPE html>
<html>

<head>
    <title>Five Thousand Characters</title>
    <meta charset="UTF-08">
    <link rel="stylesheet" type="text/css" href="src/styles/custom.css"
</head>

<body>

    <h1 id="landinghead">Five Thousand Characters</h1>

    <a href="writing_view.php">Write Something!</a>

        <!--Form-->
        <form method="post" action="/landing/read_story">
            <fieldset>
                <legend>What people are saying:</legend>
                <input type="text" name="phrase" value="phrase_value" placeholder="Phrase Filter" />

                <select>
                    <option value="all">All Genre</option>
                    <option value="funny">Funny</option>
                    <option value="cool">Cool</option>
                </select>

                <input type="submit" value="Go" />
            </fieldset>
        </form>

            <ol>
                <li>
                    <h3>Highest Rated</h3></li>
                <li>
                    <h3>Most Viewed</h3></li>
                <li>
                    <h3>Newest</h3></li>
            </ol>



</body>

</html>