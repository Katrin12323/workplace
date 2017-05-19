<html>
<head>

</head>
<body>


                <?php
                foreach ($matches as $results) {
                echo
                "<table>
                    <tr>
                        <td> " .
                        $results['Opponent'] . ",  Date: " .
                        $results['Date'] . ",  Location: " .
                        $results['Location'] . ",  Results: " .
                        $results['Results'] . "<br/> <br/>
                        </td>
                     </tr>  
                </table>";
                }
                ?>

</body>
</html>