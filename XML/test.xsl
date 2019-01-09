<!--  Edited with XML Spy v4.2  -->
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
<xsl:template match="/">
<html>
<body>
<h2>Events Listing As Tabulate Format using XSLT</h2>
<table border="1">
<tr bgcolor="yellow">
<th align="left">Event Name</th>
<th align="left">Description</th>
<th align="left">Date</th>
</tr>
<xsl:for-each select="event/event">
<tr>
<td>
<xsl:value-of select="EventName"/>
</td>
<td>
<xsl:value-of select="Description"/>
</td>
<td>
<xsl:value-of select="Date"/>
</td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>