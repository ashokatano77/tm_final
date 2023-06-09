<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  

  <xsl:template match="/">
    <html>
      <head>
        <link rel="stylesheet" type="text/css" href="fotos.css" />
      </head>

	  <xsl:for-each select="ciudad/logo">
			<div class="corner-image">
			<a href="/FINAL/portada/portada.html">
				<img src="{img/@src}" alt="{img/@alt}" />
			</a>
	  		</div>
	  </xsl:for-each>

	 	<br></br>
	 	<br></br>
	


      <body>
      <xsl:for-each select="ciudad">
        <xsl:if test="cabecera='no'">
            <div class="cabecera">
                <h1> <xsl:value-of select="$categoria" /></h1>
            </div>
        </xsl:if>
      </xsl:for-each>


        <div class="feed">
          <xsl:for-each select="ciudad/post">
          <xsl:if test="image/categoria=$categoria">
            <div class="post">
              <br></br>
              <img src="{image/img/@src}" alt="{image/img/@alt}" />
              <br></br>
			  <br></br>
              <xsl:value-of select="image/titulo" />
            </div>
          </xsl:if>
          </xsl:for-each>
        </div>
       
        


      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
