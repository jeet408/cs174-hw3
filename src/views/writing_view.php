<!DOCTYPE html>
<html>
    <head>
        <title>Five Thousand Characters - Write Something</title>
        <meta charset="UTF-08"/>
        <link rel="stylesheet" type="text/css" href="index.css">
        
    </head>

<h1><a href="src/landing_view.php">Five Thousand Characters</a> - Write Something</h1>
        
        
        <form method="post" action="">
            <fieldset>

            <input type="text" name="title" placeholder="Title"/>
            <input type="text" name="author" placeholder="Author"/>
            <input type="text" name="identifier" placeholder="Identifier"/>
                
            <select multiple>
                <option value="all">All Genre</option>
                <option value="funny">Funny</option>
                <option value="cool">Cool</option>
            </select>
              
              <textarea rows="4" cols="50">
Write your story here...
</textarea>
            
			<button type="button" onclick="alert('Hello world!')">Reset</button>
              <button type="button" onclick="alert('Hello world!')">Save</button>
              
            </fieldset>
        </form>
</html>