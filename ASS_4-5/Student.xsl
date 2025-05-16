<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Student Information</title>
                <style>
                    /* Removed @import, directly using font-family */
                    * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                        font-family: Arial, sans-serif; /* Replaced Poppins */
                    }
                    
                    body {
                        background: linear-gradient(to right, #141e30, #243b55);
                        text-align: center;
                        padding: 20px;
                    }

                    h2 {
                        color: #fff;
                        margin-bottom: 20px;
                        font-size: 28px;
                        text-transform: uppercase;
                        letter-spacing: 2px;
                    }

                    .container {
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: center;
                        gap: 20px;
                    }

                    .card {
                        background: #2c3e50;
                        color: white;
                        padding: 20px;
                        width: 300px;
                        border-radius: 15px;
                        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5), 
                                    -5px -5px 10px rgba(255, 255, 255, 0.1);
                        transition: transform 0.3s ease;
                    }

                    .card:hover {
                        transform: scale(1.05);
                    }

                    .card h3 {
                        color: #4caf50;
                        margin-bottom: 10px;
                        font-size: 20px;
                    }

                    .card p {
                        margin: 5px 0;
                        font-size: 16px;
                        color: #ddd;
                    }
                </style>
            </head>
            <body>
                <h2>Student Information</h2>
                <div class="container">
                    <xsl:for-each select="students/student">
                        <div class="card">
                            <h3>Roll No: <xsl:value-of select="rollno"/></h3>
                            <p><strong>Name:</strong> <xsl:value-of select="name/firstname"/> 
                                <xsl:value-of select="name/middlename"/> 
                                <xsl:value-of select="name/lastname"/>
                            </p>
                            <p><strong>Phone:</strong> <xsl:value-of select="phone"/></p>
                        </div>
                    </xsl:for-each>
                </div>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
