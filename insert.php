<html>
<body>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<form action="insertresult.php" method="post">

If you don't have the values about some attributes, leave it empty, but the title is requried, it is meaningless to insert without title. <br /> <br />
title            : <input type="text" name="title"/><br/>
rating            : <input type="text" name="score"/><br/>
classification   : <input type="text" name="classification"/><br />
category         : <input type="text" name="category"/>  <br />
publishtime        : <input type="text" name="publishtime"/><br/>
length           : <input type="text" name="length"/><br/>
director           : <input type="text" name="directorname"/><br/>
directorborndate        : <input type="text" name="directorborndate"/><br/>
directorbornplace          : <input type="text" name="directorbornplace"/><br/>
star1          : <input type="text" name="star1name"/><br/>
star1borndate        : <input type="text" name="star1borndate"/><br/>
star1bornplace          : <input type="text" name="star1bornplace"/><br/>
star2          : <input type="text" name="star2name"/><br/>
star2borndate        : <input type="text" name="star2borndate"/><br/>
star2bornplace          : <input type="text" name="star2bornplace"/><br/>
writer           : <input type="text" name="writername"/><br/>
writerborndate        : <input type="text" name="writerborndate"/><br/>
writerbornplace          : <input type="text" name="writerbornplace"/><br/>
<input type="submit" value="submit"/><br/>
<input type="button" value="back to the home page" onclick="window.location.href='welcome.php'"/>
</form>

</body>
</html>