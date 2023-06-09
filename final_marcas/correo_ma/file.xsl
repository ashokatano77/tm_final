<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:param name="param" select="'Default Title'" />
    <xsl:template match="/">
        <html>
            <head>
                <title>Representación de tabla de XML</title>
            </head>
            <body>
                <h1>
                    <xsl:value-of select="$param" />
                </h1>
                <table border="1px">
                    <tr>
                        <th rowspan="2">Descripción de cada hecho</th>
                        <th colspan="3">Fecha</th>
                    </tr>
                    <tr>
                        <th>Día</th>
                        <th>Mes</th>
                        <th>Año</th>
                    </tr>
                    <xsl:for-each select="contenido/hecho">
                        <tr>
                            <td>
                                <xsl:value-of select="@descripción" />
                            </td>
                            <xsl:for-each select="fecha">
                                <td>
                                    <xsl:value-of select="dia" />
                                </td>
                            <td>
                                    <xsl:value-of select="mes" />
                                </td>
                            <td>
                                    <xsl:value-of select="año" />
                                </td>
                            </xsl:for-each>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>