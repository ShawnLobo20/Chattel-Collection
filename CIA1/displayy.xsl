<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
	
	<html>
	
	
	
	<body>
	
	
	<script>
	
	function check()
	{
		let age= document.getElementById("ag");
		let promotion= document.getElementById("promo");
		
		if(age.value.length>=50)
		{ 
			true;
		 	
		}		
		else
		{
			alert("The age is less than 50");
			return false;
			
		}
		
	}
	
	</script>
	
	
	
	<h1>Employee Management System</h1>
	
	
	<form action="emp2.xml">
	
	<table border="1">
	
	<tr>
	<th>ID</th>
	<th>NAME</th>
	<th>AGE</th>
	<th>SALARY</th>
	<th>EMAIL</th>
	<th>MobNum</th>
	<th>Designation</th>
	<th>Promotion</th>
	</tr>
	
	<xsl:for-each select="globalEmployee/Employee">
	<tr>
	<td><xsl:value-of select="Emp-id"></xsl:value-of></td>
	<td><xsl:value-of select="Emp-name"></xsl:value-of></td>
	<td id="ag"><xsl:value-of select="Emp-age"></xsl:value-of></td>
	<td><xsl:value-of select="Emp-salary"></xsl:value-of></td>
	<td><xsl:value-of select="Emp-emailid"></xsl:value-of></td>
	<td><xsl:value-of select="Emp-Phonenum"></xsl:value-of></td>
	<td><xsl:value-of select="Emp-designation"></xsl:value-of></td>
	<td id="promo"><xsl:value-of select="Emp-promotion"></xsl:value-of></td>
	</tr>
	
	</xsl:for-each>
	
	
	</table>
	
	</form>
	
	</body>
	
	</html>
	
	
	
	
		<!-- TODO: Auto-generated template -->
	</xsl:template>
</xsl:stylesheet>