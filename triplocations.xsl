<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="/">
<html>
<head>
<style>

      *{
			margin: 0;
			padding: 0;
			font-family: Calibri;
			font-color:white;
		}
		body
		{
				background-color :#f0f0f0;
				width:100%; 
				height: 100vh;
				background-size: cover;
				background-position: center;
		}
		h1{
			font-size:2.5rem;
			margin-top:100px;
			color:#b0914f;
			font-weight:800;
		}
		table
		{
			position: absolute;
			top:20%;
			left:20%;
			border-collapse:collapse;
			padding:10px;
			width:60%;
			color:black;
			border:5px solid #7e6a40;
			font-family:calibri;
			background-color:white;

		}
		th
		{
			border: 2px solid black; 
			text-align:center;
			height:65px;
			font-size:25px;
			font-weight:bold;
			text-decoration:none;
			color:#b0914f;
			width:20%;
		}

		table td
		{
			border: 2px solid black; 
			text-align:center;
			height:62px;
			font-size:22px; 
			width:30px;
		}
</style>
</head>
<body>
	<h1 align="center">Trip Information</h1>
	<table >
		<tr>
		<th>Trip Name</th>
		<th>Country</th>
		<th>Cost per night</th>
		<th>Max nights available</th>
		<th>Tickets available</th>
		</tr>
		<xsl:for-each select="TripLocation/trip">
			<tr>
				<td><xsl:value-of select="name"/></td>
				<td><xsl:value-of select="country"/></td>
				<td><xsl:value-of select="cost"/></td>
				<td><xsl:value-of select="days"/></td>
				<td><xsl:value-of select="tickets_available"/></td>
			</tr>
		</xsl:for-each>
	</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
