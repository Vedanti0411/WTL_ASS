<xsl:stylesheet version="1.0" 
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:output method="xml" indent="yes"/>

    <xsl:template match="/">
        <library_catalog>
            <xsl:apply-templates select="library/category"/>
        </library_catalog>
    </xsl:template>

    <xsl:template match="category">
        <books category="{@name}">
            <xsl:apply-templates select="book"/>
        </books>
    </xsl:template>

    <xsl:template match="book">
        <book_entry>
            <book_title>
                <xsl:value-of select="title"/>
            </book_title>
            <author_name>
                <xsl:value-of select="author"/>
            </author_name>
            <publication_year>
                <xsl:value-of select="year"/>
            </publication_year>
        </book_entry>
    </xsl:template>

</xsl:stylesheet>
