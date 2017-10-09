<html>
<body>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<form action="select1result.php" method="post">

If you don't have the requests about some attributes, leave it empty. <br /> <br />
title            : <input type="text" name="title"/><br/>
rating score from: <input type="text" name="score" /> (score varies form 7.5 to 9.3) <br/>
rating score to  : <input type="text" name="score2"/><br/>
classification   : <input type="text" name="classification"/>(classification includes R,unrated,banned,approved,G,GP,NC-17,passed,PG,PG-13,TV-MA,TV-PG)    <br/>
category         : <input type="text" name="category"/>  (include action,adventure,animation,biography,comedy,crime,drama,family,fantasy,film-noir,history,horror,mystery,sci-fi,thriller,western)<br/>
publishtime from : <input type="text" name="publishtime"/> (publishtime  from  1921-02-06 to 2017-09-15)  <br> 
publishtime to   : <input type="text" name="publishtime2"/><br/>
length from      : <input type="text" name="length"/> (lengthtime varies form 1h 03min to 5h 20min)  <br>
length to        : <input type="text" name="length2"/><br/>
<input type="submit" value="submit"/><br/>
<input type="button" value="back to the home page" onclick="window.location.href='welcome.php'"/>
</form>

</body>
</html>