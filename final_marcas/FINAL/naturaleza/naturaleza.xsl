<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <html>
      <head>
        <link rel="stylesheet" type="text/css" href="naturaleza.css" />
      </head>

	  <xsl:for-each select="naturaleza/logo">
			<div class="corner-image">
			<a href="/FINAL/portada/portada.html">
				<img src="{img/@src}" alt="{img/@alt}" />
			</a>
	  		</div>
	  </xsl:for-each>

	 	<br></br>
	 	<br></br>
	


      <body>
        <div class="header">
          <h1>N A T U R A L E Z A</h1>
        </div>

        <div class="feed">
          <xsl:for-each select="naturaleza/post/image">
            <div class="post">
              <br></br>
              <img src="{img/@src}" alt="{img/@alt}" />
              <br></br>
			  <br></br>
              <xsl:value-of select="titulo" />
            </div>
          </xsl:for-each>
        </div>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
