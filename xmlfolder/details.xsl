<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
 xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
	<html>
	<body>
	
	<center><h1>Library System</h1>
	<hr></hr>
	
	<table border="1" cellpadding="7" cellspacing="4">
	<tr bgcolor="gray">
	<th>Sr No</th>
	<th>Manager Name</th>
	<th>Age</th>
	<th>Phone</th>
	<th>Date Of Birth</th>
	</tr>
	
	<xsl:for-each select="globalManagers/Managers">
	<tr bgcolor="#FFF5DC">
	<td><xsl:value-of select="srno"></xsl:value-of></td>
	<td><xsl:value-of select="managerName"></xsl:value-of></td>
	<td><xsl:value-of select="age"></xsl:value-of></td>
	<td><xsl:value-of select="phone"></xsl:value-of></td>
	<td><xsl:value-of select="dateOfBirth"></xsl:value-of></td>
	</tr>
	
	</xsl:for-each>
	
	</table>
	<a href="index.html"> back to home</a>
	<hr></hr>
	</center>
	
	
	</body>
	</html>
	
	
		<!-- TODO: Auto-generated template -->
	</xsl:template>
</xsl:stylesheet>