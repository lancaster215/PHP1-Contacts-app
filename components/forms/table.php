<div class="w3-responsive" style="width: 60%;">
    <?php
        $open = fopen("../contacts.txt", "r+") or exit ("Cannot open file!");
        while(!feof($open)){
            $list = fgets($open);
            $item = explode(" ", $list);
            if($item[0] == null){
                // echo "Empty Table :(";
            }else{
                echo" <table class='w3-table w3-bordered'>
                    <tr>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Contacts</th>
                        <th>Action</th>
                    </tr>
                    <tr>";
                foreach($item as $i => $x){
                    echo "<td>$item[$i]</td>";
                }
                echo "    <td><a href='../actions/delete.php?items=".$item[0]." ",$item[1]." ",$item[2]." ",$item[3]." ",$item[4]."' class='submit-btn'>Delete</a></td>
                    </tr>
                </table>";
            }
        }
        fclose($open);
    ?>
</div>