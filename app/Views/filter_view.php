<!DOCTYPE html>
<html>
<head>
	<title>{page_title|lower}</title>
</head>
<body>
	<h1>{page_heading|upper|limit_chars(5)}</h1>
	<p>DOB: {date|date(l dS F Y)}</p>
	<p>DOB: {date|date_modify(+5days)|date(l dS F Y)}</p>
	<p>Price: {price|local_currency(EUR)|highlight_code}</p>
	<p>Price: {price1|round(ceil)}</p>
</body>
</html>