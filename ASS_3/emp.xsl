<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes"/>

    <xsl:template match="/">
        <html>
            <head>
                <title>Employee Details</title>
                <style>
                    body {
                        font-family: 'Arial', sans-serif;
                        margin: 20px;
                        text-align: center;
                        background-color: #f4f4f4;
                    }

                    h2 {
                        font-size: 24px;
                        font-weight: bold;
                        color: black;
                        padding: 10px;
                        width: 50%;
                        margin: 20px auto;
                        background-color: lightgray;
                        border-radius: 5px;
                    }

                    table {
                        width: 90%;
                        margin: 20px auto;
                        border-collapse: collapse;
                        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
                        border-radius: 10px;
                        overflow: hidden;
                        background: white;
                    }

                    thead {
                        background-color: #007bff;
                        color: white;
                        text-transform: uppercase;
                    }

                    thead th {
                        padding: 14px;
                        font-size: 18px;
                        background-color: #0056b3;
                        border: 1px solid #ddd;
                    }

                    tbody td {
                        padding: 12px;
                        text-align: center;
                        font-size: 16px;
                        border: 1px solid #ddd;
                    }

                    tbody tr:nth-child(even) {
                        background-color: #f8f9fa;
                    }

                    /* Hover Effect */
                    tbody tr:hover {
                        background-color: #f1f1f1;
                        transform: scale(1.01);
                    }

                    /* Responsive Table */
                    @media (max-width: 768px) {
                        table {
                            width: 100%;
                        }
                        thead th, tbody td {
                            padding: 10px;
                            font-size: 14px;
                        }
                    }
                </style>
            </head>
            <body>
                <h2><xsl:value-of select="employees/data"/></h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Department</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <xsl:for-each select="employees/employee">
                            <tr>
                                <td><xsl:value-of select="id"/></td>
                                <td><xsl:value-of select="name"/></td>
                                <td><xsl:value-of select="role"/></td>
                                <td><xsl:value-of select="dept"/></td>
                                <td><xsl:value-of select="salary"/></td>
                            </tr>
                        </xsl:for-each>
                    </tbody>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
