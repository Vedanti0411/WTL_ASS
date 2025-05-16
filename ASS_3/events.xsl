<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Event List</title>
                <style>
                    table {border-collapse: collapse; width: 50%;}
                    th, td {border: 1px solid black; padding: 10px;}
                </style>
            </head>
            <body>
                <h2>Event Decoration Booking</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Location</th>
                    </tr>
                    <xsl:for-each select="events/event">
                        <tr>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="date"/></td>
                            <td><xsl:value-of select="location"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
