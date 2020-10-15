<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
 xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
	<html>
	<body>
	
	<h1>Library System</h1>
	
	<table border="1">
	<tr>
	<th>Book Name</th>
	<th>Author</th>
	<th>Price</th>
	<th>Date Of Borrow</th>
	<th>Date Of Return</th>
	</tr>
	
	<xsl:for-each select="globalLibrary/Library">
	<tr>
	<td><xsl:value-of select="bookName"></xsl:value-of></td>
	<td><xsl:value-of select="author"></xsl:value-of></td>
	<td><xsl:value-of select="price"></xsl:value-of></td>
	<td><xsl:value-of select="dateOfBorrow"></xsl:value-of></td>
	<td><xsl:value-of select="dateOfReturn"></xsl:value-of></td>
	</tr>
	
	</xsl:for-each>
	
	</table>
	
	
	</body>
	</html>
	
	
		<!-- TODO: Auto-generated template -->
	</xsl:template>
</xsl:stylesheet>