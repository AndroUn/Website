<html>
<head>
</head>
<body>
<script>
function factorial(x) 
{ 

  if (x === 0)
 {
    return 1;
 }
  return x * factorial(x-1);
         
}
alert("5!"+"="+factorial(5));
</script>
</body>
</html>