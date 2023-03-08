<!DOCTYPE html>
<html> 
<head>
    <title>Start Page</title>
    <meta charset="UTF-8">
</head>
<body>
<form action="table.php" method="post">
    <div style = "position:relative; left:550px; top:250px; font-size:22px;">
        Start language
    </div>
    <div style = "position:relative; left:565px; top:258px;">
        <select name = "startlist">
            <option value="None">None</option>}  
            <option value="ar">Arabic</option>  
            <option value="zh">Chinese</option>  
            <option value="en">English</option>  
            <option value="fr">French</option>  
            <option value="ru">Russian</option>
            <option value="vn">Vietnamese</option>
        </select>  
    </div>
    <div style = "position:relative; left:800px; top:207px; font-size:22px;">
        Target language
    </div>
    <div style = "position:relative; left:820px; top:214px;">
        <select name = "targetlist">
            <option value="None">None</option>}  
            <option value="ar">Arabic</option>  
            <option value="zh">Chinese</option>  
            <option value="en">English</option>  
            <option value="fr">French</option>  
            <option value="ru">Russian</option>
            <option value="vn">Vietnamese</option>
        </select>  
    </div>
    <div style = "position:relative; left:727px; top:250px; font-size:20px;">
        <button>
            Go
        </button>
    </div>
</form>
</body>
</html>